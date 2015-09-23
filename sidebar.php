
<?php  if ( get_post_type() == 'post' ) { // Incluye los single que no sean custom post types ?>

  <aside class="sidebar" role="complementary">
    <?php get_sidebar('single'); ?>
  </aside>

<?php } ?>


<?php if ( is_page('home') || is_page('contacto') ) : ?>

  <aside class="sidebar--inferior" role="complementary">
    <?php get_sidebar('page'); ?>
  </aside>

<?php else : ?>
<?php endif; ?>
