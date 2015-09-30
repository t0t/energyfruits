<?php
  /*
  Template Name: Portada
  */
?>

<?php get_header(); ?>

<main class="main__content" role="main">
  <?php
  /* Cargame los Custom fields, ACF */
  get_template_part( 'partials/fields','home' ); ?>
</main>

<?php
/* Sidebars */
get_sidebar(); ?>

<?php get_footer(); ?>
