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
    	<script>var j899__lic_code = '<?php echo $licencia->code;?>' ;</script>
        <div code="_script_" id="appVue">
        </div>

	<div class="wrap <?php if($licencia->confirm=="1"){ echo 'no_display'; } ?> bordeRed">
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

<!-- Dependencias del Componente -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( plugins_url( '../component/css/app.026467ef.css', __FILE__ ) ); ?>">
<script src="<?php echo esc_url( plugins_url( '../component/js/chunk-vendors.f8076226.js', __FILE__ ) ); ?>"></script>
<script src="<?php echo esc_url( plugins_url( '../component/js/app.6416761b.js', __FILE__ ) ); ?>"></script>