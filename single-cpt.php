<?php get_header(); ?>

<main class="main__content" role="main">

	<!-- Content single -->
	<?php get_template_part('templates/content', 'single-cpt'); ?>

</main>

<!-- Sidebars -->
<?php get_sidebar('cpt'); ?>

<?php get_footer(); ?>