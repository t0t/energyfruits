<!-- Loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<!-- Cargame los Custom fields, ACF -->
	<?php get_template_part('partials/custom-fields'); ?>

<?php endwhile; ?>

<?php else: ?>
<?php endif; ?>
