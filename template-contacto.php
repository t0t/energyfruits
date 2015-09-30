<?php
	/*
	Template Name: Contacto
	*/
?>
<?php get_header(); ?>
	<main class="main__content" role="main">
		<?php
		/* Cargame los Custom fields */
		get_template_part('partials/fields', 'page');
		?>
	</main>
	<?php
	/* Sidebars */
	get_sidebar(); ?>
<?php get_footer(); ?>
