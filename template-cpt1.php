<?php
/*
Template Name: CPT
*/
?>
<?php get_header(); ?>

<main>

	<!-- Content page template -->
	<?php get_template_part('templates/content', 'page-template'); ?>
    <?php get_template_part('templates/content', 'cpt'); ?>


</main>

<?php get_footer(); ?>