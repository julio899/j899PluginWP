<?php
/**
 * Class Instalacion creacion de tablas
 */
class Instalacion
{
	public static $LIC='';

    public function __construct()
    {
    	self::create_tables();
    	self::$LIC=Instalacion::lic();
    }

 	public static function lic()
    {
        global $wpdb;

        $result = $wpdb->get_results('SELECT code FROM `' . $wpdb->dbname . '`.`' . $wpdb->prefix . 'j899_licences` LIMIT 1');

        if( count($result)==0 )
        {
	        self::create_tables();
	        return self::$LIC;
        }else{
	        return $result[0]->code;
        }
    }

    private static function create_tables()
    {
        global $wpdb;
        // se verifica la existencia de la tabla para $wpdb->prefix.j899_licences
        // si no existe se crea y se agrega una lcencia de prueba por defecto
        $existTable = $wpdb->query('show tables like "' . $wpdb->prefix . 'j899_licences"');

        if (!$existTable) {
            $wpdb->query('CREATE TABLE `' . $wpdb->dbname . '`.`' . $wpdb->prefix . 'j899_licences` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `code` VARCHAR(50) NOT NULL , `confirm` INT(10) NOT NULL , `expire` DATE NOT NULL , PRIMARY KEY (`id`), UNIQUE (`code`)) ENGINE = InnoDB;');

            // add 10 days to date expire
            $ExpireDate = Date('Y-m-d', strtotime("+10 days"));

            $wpdb->query("INSERT INTO `" . $wpdb->dbname . "`.`" . $wpdb->prefix . "j899_licences` (`id`, `code`, `confirm`, `expire`) VALUES (NULL, 'c95212f10ee3c332ad7db40ad542e6691c6ff7b6', '0', '" . $ExpireDate . "');");

        }

    }

}
