<?php
/*
Template Name: Portada
*/
?>
<?php get_header(); ?>


<main class="main__content" role="main">


	<!-- Loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
    <!-- Cargame los Custom fields, ACF -->
    <?php get_template_part('templates/custom-fields'); ?>

    <?php 

    	$myvar = "pedro";
    	echo "hola " . $myvar;

     ?>

    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?> 


</main>

<!-- Sidebars -->
<?php get_sidebar(); ?>






<?php get_footer(); ?>

