<?php
	/*
	Template Name: Tiendas
	*/
?>

<?php get_header(); ?>

<main class="main__content">

	<?php
	/* Content page */
	get_template_part('templates/content', 'page'); ?>

	<!-- Mapa -->
	<?php echo do_shortcode('[mappress mapid="3" width="100%"]'); ?>

</main>

<?php get_footer(); ?>
