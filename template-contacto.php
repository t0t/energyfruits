<?php
/*
Template Name: Contacto
*/
?>
<?php get_header(); ?>

	<main class="main__content" role="main">

		<!-- Cargame los Custom fields, ACF -->
    	<?php get_template_part('templates/custom-fields'); ?>

	</main>

	<!-- Sidebars -->
    <?php get_sidebar(); ?>

<?php get_footer(); ?>