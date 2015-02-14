<?php
/*
Template Name: Tiendas
*/
?>
<?php get_header(); ?>

<main class="main__content">

	<!-- Content page -->
	<?php get_template_part('templates/content', 'page'); ?>

	<!-- Mapa -->
	<?php echo do_shortcode('[mappress mapid="3" width="100%"]'); ?>
	

</main>

<!-- Sidebars -->
<?php //get_sidebar(); ?>

<?php get_footer(); ?>