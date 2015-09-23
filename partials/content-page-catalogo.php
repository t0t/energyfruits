
<?php
/* Page Header */
get_template_part( 'partials/page', 'header'); ?>

<!-- Loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php
  /* Cargame los Custom fields, ACF */
  get_template_part('templates/custom-fields'); ?>


  <?php endwhile; ?>
  <?php else: ?>
<?php endif; ?>
