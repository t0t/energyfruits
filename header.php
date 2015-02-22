<!doctype html>

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"><!--<![endif]-->

<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>
		<?php 
			wp_title( '|', true, 'right' );
			// Add the blog name.
		 	bloginfo( 'name' ); 
	 	?>
 	</title>

	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php wp_head(); ?>
</head>

<!-- Aquí acaba el head de mi web -->
<body <?php body_class(["unaclase", "otraclase"]); ?>>



<header class="header">
	
	<!-- Secondary menu 1 -->
	<nav class="nav-secondary nav-secondary--uno">

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

		<a href="/" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('description'); ?>">

			<img src="<?php echo get_bloginfo('template_directory');?>/assets/img/logo.svg" alt="logo" class="brand__logo">

		</a>

		<h1 class="h4 brand__name">

			<?php bloginfo('name'); ?>

			<span class="brand__description">

				<?php bloginfo('description'); ?>

			</span>

		</h1>

	</div>

	<!-- Secondary menu 2 -->
	<nav class="nav-secondary nav-secondary--dos">

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

	
	
	<!-- Hamburguer menu -->
	<nav class="nav-main" role="navigation">

	<input type="checkbox" id="trigger"/>
	<label for="trigger"></label>
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

<?php //get_template_part('templates/nav', 'secondary' ); ?>
<?php //get_template_part('templates/nav', 'main' ); ?>