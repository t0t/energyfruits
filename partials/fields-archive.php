<?php
/* Page header */
get_template_part( 'partials/page', 'header' );
?>
<?php
/* Bloques */
if (have_rows('layout_content')):
?>
	<?php
  while (have_rows('layout_content')): the_row();
  ?>
    <?php
    /* Contenido principal */
    if (get_row_layout() == '1_block'): ?>
      <?php
      if (have_rows('block')): ?>
      <?php
      while (have_rows('block')): the_row(); ?>
      
      <a href="<?php the_permalink(); ?>">
        <h4><?php the_title(); ?></h4>
      </a>

      <?php endwhile; ?>
      <?php endif ?>
    <?php endif; ?>

  <?php endwhile; ?>
<?php endif; ?>
