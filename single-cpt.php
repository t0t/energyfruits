
<?php get_header(); ?>

<main class="main__content" role="main">

	<?php
	/* Content single */
	get_template_part('partials/fields', 'cpt');	?>

</main>

<?php
/* Sidebar CPT */
get_sidebar('cpt'); ?>

<?php get_footer(); ?>
