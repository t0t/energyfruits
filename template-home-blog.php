<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>


<div class="main__content--split">

	<main>

	<!-- Content page -->
	<?php //get_template_part('templates/content', 'page'); ?>
	
	<!-- Loop for posts -->
	<?php get_template_part('templates/content', 'page-posts'); ?>


	</main>


	<!-- Sidebars -->
	<?php get_sidebar(); ?>

</div>


<?php get_footer(); ?>