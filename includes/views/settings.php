<div id="wpbody-content">
	<div class="wrap">
		<h1 class="wp-heading-inline">Configuracion de Liciencia Plugin J899</h1>
		<a href="<?php echo esc_url( admin_url( 'admin.php?page=j899-woocommerce' ) ); ?>" class="page-title-action">Ir a Woocomerce</a>
	</div>

	<div id="message" class="updated woocommerce-message wc-connect <?php if($licencia->confirm=="1"){ echo 'no_display';} ?>">
		<p><strong>Bienvenido a J899 Plugin</strong> – Ya estas casi listo para completar :)</p>
		<input id="lic-code" type="text" value="<?php echo J899_LIC;?>" class="location-input" size="40">
		<p class="submit"><a href="http://localhost/wpTest/wp-admin/admin.php?page=wc-setup" class="button-primary" id="btn-validar-lic">Validar Licencia</a> <a class="button-secondary skip" href="#<?php #echo esc_url( admin_url( 'admin.php?page=wc-addons' ) ); ?>">Obtener Nueva</a></p>
	</div>

	<div id="message-confirm" class="updatedConfirm woocommerce-message wc-connect <?php if($licencia->confirm!="1"){ echo 'no_display';} ?>">
		<p>
			<strong>Excelente Plugin Validado y Confirmado</strong> – Ya estas sincronizado
			<br>
			<strong>Licencia: </strong> <label id="lic-confirmation"><?php echo $licencia->code; ?></label>
		</p>	
	</div>
	
	<div id="ajax-response"></div>
	<br class="clear">
</div>

<div id="j899-loader" class="j899_loader no_display">
	<div class="loader-internal"></div>
</div>
<script src="<?php echo esc_url( plugins_url( '../js/start.js', __FILE__ ) ); ?>"></script>

<!-- Estilos principales del plugin -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( plugins_url( '../css/main.css', __FILE__ ) ); ?>">