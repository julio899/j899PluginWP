<div id="wpbody-content">
	<div class="wrap">
		<h1 class="wp-heading-inline">Configuracion de Liciencia Plugin J899</h1>
		<a href="<?php echo esc_url( admin_url( 'admin.php?page=j899-woocommerce' ) ); ?>" class="page-title-action">Ir a Woocomerce</a>
	</div>
	<div id="message" class="updated woocommerce-message wc-connect">
		<p><strong>Bienvenido a J899 Plugin</strong> – Ya estas casi listo para completar :)</p>
		<input type="text" value="<?php echo J899_LIC;?>" class="location-input" size="40">
		<p class="submit"><a href="http://localhost/wpTest/wp-admin/admin.php?page=wc-setup" class="button-primary" id="btn-validar-lic">Validar Licencia</a> <a class="button-secondary skip" href="<?php echo esc_url( admin_url( 'admin.php?page=wc-addons' ) ); ?>">Obtener Nueva</a></p>
	</div>
	
	<div id="ajax-response"></div>
	<br class="clear">
</div>

<div id="j899-loader" class="j899_loader no_display">
	<div class="loader-internal"></div>
</div>
<script src="<?php echo esc_url( plugins_url( '../js/start.js', __FILE__ ) ); ?>"></script>

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
/*
	.loader-internal{
		position: fixed;
	    left: 0px;
	    top: 0px;
	    width: 100%;
	    height: 100%;
	    z-index: 9999;
	    background: url('<?php echo esc_url( plugins_url( '../img/loader.gif', __FILE__ ) ); ?>') 50% 50% no-repeat rgba(249, 249, 249, 0);
	}
*/

.loader-internal{
  border: 7px solid #d4d4d4;
  border-top: 7px solid #3498db;
  border-bottom: 7px solid #3498db;
  border-radius: 50%;
  width: 70px;
  height: 70px;
  animation: spin 1.5s linear infinite;
  position: absolute; /* cambiamos de fixed a absolute */
  /* Ponemos el valor de left, bottom, right y top en 0 */
  left: 0;
  bottom: 0; 
  right: 0; 
  top: 0; 
  margin: auto; /* Centramos vertical y horizontalmente */
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}


.no_display{
	display: none;

}
</style>