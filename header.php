<!doctype html>

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"><!--<![endif]-->

<html lang="es">

<?php
/* Site Head */
get_template_part( 'partials/head' );
?>

<body <?php body_class(); ?>>
	<?php
	/* Nav Off Canvas */
	get_template_part( 'partials/nav', 'offcanvas' );
	?>
	<header class="header">
		<?php
		/* Nav 1 (Izquierda) */
		get_template_part( 'partials/nav', '1' );
		?>
		<?php
		/* Brand (Logo)*/
		get_template_part( 'partials/brand' );
		?>
		<?php
		/* Nav 2 (Derecha)*/
		get_template_part( 'partials/nav', '2' );
		?>
	</header>
