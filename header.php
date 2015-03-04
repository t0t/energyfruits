<!doctype html>

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"><!--<![endif]-->

<html lang="es">

<head>



	<meta charset="utf-8">
	<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />

	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="header">

	<!-- Secondary menu 1 -->
	<nav class="nav-secondary nav-secondary--uno" role="navigation">

		<?php
		$defaults = array(
			'theme_location'  => 'secondary_menu1',
			'container'       => '',
			'container_class' => '',
			'menu_class'      => ''
		);

		wp_nav_menu( $defaults );
		?>

	</nav>

	<div class="brand">

		<a class="brand__logo" href="/" alt="<?php bloginfo('name'); ?>"></a>

		<h1 class="h4 brand__name">

			<?php bloginfo('name'); ?>

			<span class="brand__description">

				<?php bloginfo('description'); ?>

			</span>

		</h1>

	</div>

	<!-- Secondary menu 2 -->
	<nav class="nav-secondary nav-secondary--dos" role="navigation">

		<?php
		$defaults = array(
			'theme_location'  => 'secondary_menu2',
			'container'       => '',
			'container_class' => '',
			'menu_class'      => ''
			);
		wp_nav_menu( $defaults );
		?>

	</nav>



</header>

<?php echo do_shortcode('[gtranslate]'); ?>

	<!-- menu out of canvas -->
	<nav class="nav-main" role="navigation">

	<input type="checkbox" id="toggle-btn"/>
	<label for="toggle-btn"></label>
	<?php
		$defaults = array(
			'theme_location'  => 'fixed_menu',
			'container'       => '',
			'container_class' => '',
			'menu_class'      => 'nav-main__overlay'
		);

		wp_nav_menu( $defaults );
	?>

	</nav>
