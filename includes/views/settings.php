<div id="wpbody-content">
	<div class="wrap">
		<h1 class="wp-heading-inline">Configuracion de Liciencia Plugin J899</h1>
		<a href="<?php echo esc_url( admin_url( 'admin.php?page=j899-woocommerce' ) ); ?>" class="page-title-action">Ir a Woocomerce</a>
	</div>
	<div id="message" class="updated woocommerce-message wc-connect">
		<p><strong>Bienvenido a J899 Plugin</strong> – Ya estas casi listo para completar :)</p>
		<input type="text" value="<?php echo J899_LIC;?>" class="location-input" size="40">
		<p class="submit"><a href="http://localhost/wpTest/wp-admin/admin.php?page=wc-setup" class="button-primary">Validar Licencia</a> <a class="button-secondary skip" href="<?php echo esc_url( admin_url( 'admin.php?page=wc-addons' ) ); ?>">Obtener Nueva</a></p>
	</div>
	<?php echo J899_DIR; ?>
	<?php echo esc_url( plugins_url( '../img/loader.gif', __FILE__ ) ); ?>
	<div id="ajax-response"></div>
	<br class="clear">
</div>

<div class="j899_loader">
	<div class="loader-internal"></div>
</div>

<style>
	.j899_loader{
		width: 100vw;
	    height: 100%;
	    position: absolute;
	    display: flex;
	    background-color: rgba(0,0,0,0.5);
	    right: 0;
	    z-index: 10000;
	}
	.loader-internal{
		position: fixed;
	    left: 0px;
	    top: 0px;
	    width: 100%;
	    height: 100%;
	    z-index: 9999;
	    background: url('<?php echo esc_url( plugins_url( '../img/loader.gif', __FILE__ ) ); ?>') 50% 50% no-repeat rgba(249, 249, 249, 0);
	}
</style>