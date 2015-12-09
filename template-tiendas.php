<?php
	/*
	Template Name: Tiendas
	*/
?>
<?php get_header(); ?>
<main class="main__content">
	<?php
	/* Content page */
	get_template_part('partials/fields', 'page');
  ?>
	<h3 class="slider__title slider__title--invert">Tiendas Físicas</h3>
	<?php
  /* Mapa */
  echo do_shortcode('[mappress mapid="3" width="100%"]');
  ?>
</main>
<?php get_footer(); ?>
