<?php get_header(); ?>
<main class="main__content" role="main">
	<section>
      <?php
      /* Page Header */
      get_template_part('partials/page', 'header');
      ?>
		<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
		/* Get content */
		get_template_part( 'partials/fields', 'archive' ); ?>
    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
	</section>
</main>
<?php get_footer(); ?>
