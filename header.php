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

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-76x76.png">

	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-180x180.png">

	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_stylesheet_directory_uri(); ?>/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="manifest" href="/manifest.json">

	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

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
