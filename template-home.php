<?php
/*
Template Name: Portada
*/
?>
<?php get_header(); ?>


<main class="main__content">


	<!-- Loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
<!-- Slider -->
<?php putRevSlider("kenburns_fullwidth","portada") ?>
	<?php //layerslider(2) ?>

    <!-- Cargame los Custom fields, ACF -->
    <?php get_template_part('templates/custom-fields'); ?>

    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?> 


</main>


<!-- Sidebars -->
<?php get_sidebar(); ?>


<?php get_footer(); ?>

