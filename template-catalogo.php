<?php
	/*
	Template Name: Catalogo
	*/
?>

<?php get_header(); ?>

<main class="main__content" role="main">

	<?php
	/* Loop for posts */
	get_template_part('templates/content', 'page-catalogo'); ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
