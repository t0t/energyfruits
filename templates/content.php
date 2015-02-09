
<div class="main__content">

    <!-- Page Header -->
    <?php get_template_part('templates/page', 'header'); ?>


    <!-- Loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	    <!-- Cargame los Custom fields, ACF -->
	    <?php get_template_part('templates/custom-fields'); ?>

    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>    


</div>