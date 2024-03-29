<?php
/**
 * Class Main J899
 */
class Principal
{

    /**
     * J899 version.
     *
     * @var string
     */
    public $version             = '0.0.1';
    protected static $_instance = null;
    public function __construct()
    {
        /*
        $this->includes();
         */
        $this->define_constants();
        $this->init_hooks();
    }

    public function woocomerceExist()
    {
        $wcExist         = false;
        $plugins_actives = get_option('active_plugins');

        foreach ($plugins_actives as $key => $value) {
            if (explode($value, 'woocommerce')[0] == 'woocommerce') {
                $wcExist = true;
            }
        }
        return $wcExist;
    }

    public function includes()
    {
        if ($this->is_request('admin')) {
            // include_once WC_ABSPATH . 'includes/admin/class-wc-admin.php';
            // echo "Welcome to admin";
        }

        if ($this->is_request('frontend')) {
            // $this->frontend_includes();
            // echo "frontend j899";
        }
    }

    /**
     * Hook into actions and filters.
     *
     */
    private function init_hooks()
    {
        /*

        register_activation_hook( WC_PLUGIN_FILE, array( 'WC_Install', 'install' ) );
        register_shutdown_function( array( $this, 'log_errors' ) );

        add_action( 'plugins_loaded', array( $this, 'on_plugins_loaded' ), -1 );
        add_action( 'after_setup_theme', array( $this, 'setup_environment' ) );
        add_action( 'after_setup_theme', array( $this, 'include_template_functions' ), 11 );
        add_action( 'init', array( $this, 'init' ), 0 );
        add_action( 'init', array( 'WC_Shortcodes', 'init' ) );
        add_action( 'init', array( 'WC_Emails', 'init_transactional_emails' ) );
        add_action( 'init', array( $this, 'add_image_sizes' ) );
        add_action( 'switch_blog', array( $this, 'wpdb_table_fix' ), 0 );
         */

        if ($this->woocomerceExist()) {
            // # verifico si woocomerce esta instalado continuo con la instalacion
            add_action('init', array($this, 'instalar'));
            add_action('after_setup_theme', array($this, 'captura_acciones'));

        }

    }

    public function captura_acciones()
    {
    	// captura para procesar licencia
        if (isset($_REQUEST['proccess_lic']) && isset($_REQUEST['lic'])) {
            include_once 'class-procesos.php';

            header('Content-Type: application/json');
            header('Access-Control-Allow-Origin: *');
            echo json_encode(
                Procesos::confirmacion_lic($_REQUEST)
                , true);
            exit;
        }
    }

    public function instalar()
    {
        include_once 'class-instalacion.php';
        new Instalacion();
        define('J899_LIC', Instalacion::lic());
    }

    public function activated_plugin()
    {
        self::log('J899 Activo');
    }
    public function desactivated_plugin()
    {

    }

    public function page_init()
    {
        echo "<h1>J899!</h1>";
    }

    /**
     * Define WC Constants.
     */
    private function define_constants()
    {
        $upload_dir = wp_upload_dir(null, false);
        define('J899_DIR', dirname(__FILE__) . '/');
        define('J899_LOG_DIR', $upload_dir['basedir'] . '/wc-logs/');
        define('J899_VERSION', $this->version);
        define('J899_WC', $this->woocomerceExist());
    }

    public static function instance()
    {

        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Log a helper event.
     *
     * @param string $message Log message.
     * @param string $level Optional, defaults to info, valid levels:
     *     emergency|alert|critical|error|warning|notice|info|debug
     */
    public static function log($message, $level = 'info')
    {
        if (!defined('WP_DEBUG') || !WP_DEBUG) {
            return;
        }

        if (!isset(self::$log)) {
            self::$log = wc_get_logger();
        }

        self::$log->log($level, $message, array('source' => 'helper'));
    }
}
