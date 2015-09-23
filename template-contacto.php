<?php
	/*
	Template Name: Contacto
	*/
?>
<?php get_header(); ?>

	<main class="main__content" role="main">

		<?php
		/* Cargame los Custom fields, ACF */
		get_template_part('templates/custom-fields');
		?>

	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
