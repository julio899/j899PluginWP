<div id="wpbody-content">
	<div class="wrap <?php if($licencia->confirm!="1"){ echo 'no_display';} ?>  bordeTurquesa bgE">
		<h1 class="wp-heading-inline">Bienvenido a j899-woocommerce Plugin</h1>
		
		<p>
			<strong>Excelente</strong>
			-
			Tu plugin j899 se ha sincronizado correctamente <br>
		</p>
		<p class="submit">
			<a href="admin.php?page=custom-admin-page" class="page-title-action">Ir a Configuracion en j899</a>
		</p>

	</div>

	<div class="wrap <?php if($licencia->confirm=="1"){ echo 'no_display'; } ?> updated woocommerce-message wc-connect">
		<p>
			<strong>Lo sentimos pero debe activar el plugin</strong>
			-
			Su componente no ha sido sincronizado... <br>
			Porfavor valide la licencia de j899 plugin <br>
		</p>
		<p class="submit">
			<a href="admin.php?page=custom-admin-page" class="page-title-action">
			Ir a Configuracion en j899</a>
		</p>
	</div>

</div>

<!-- Estilos principales del plugin -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( plugins_url( '../css/main.css', __FILE__ ) ); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( plugins_url( '../../../woocommerce/assets/css/activation.css', __FILE__ ) ); ?>">