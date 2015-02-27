<?php
/*
Template Name: Catalogo
*/
?>
<?php get_header(); ?>


<main class="main__content" role="main">


	<!-- Content page -->
	<?php //get_template_part('templates/content', 'page'); ?>
	
	<!-- Loop for posts -->
	<?php get_template_part('templates/content', 'page-catalogo'); ?>


</main>


<!-- Sidebars -->
<?php get_sidebar(); ?>


<?php get_footer(); ?>