<?php
	/*
	Template Name: Catalogo
	*/
?>

<?php get_header(); ?>

<main class="main__content" role="main">

	<?php
	/* Loop for posts */
	get_template_part('partials/content', 'page-catalogo'); ?>

</main>

<?php
/* Sidebars */
get_sidebar(); ?>

<?php get_footer(); ?>
