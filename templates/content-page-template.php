
<!-- Page Header -->
<?php get_template_part('templates/page', 'header'); ?>

<!-- Loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php
  /* Cargame los Custom fields, ACF */
  get_template_part('templates/custom-fields'); ?>


  <?php endwhile; ?>
  <?php else: ?>
<?php endif; ?>
