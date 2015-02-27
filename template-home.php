<?php
/*
Template Name: Portada
*/
?>
<?php get_header(); ?>

		<div class="alert alert--info">

			<i class="icon-megaphone"></i>
			<p>Este sitio web utiliza cookies propias para ofrecer un mejor servicio. Si continúa navegando consideramos que acepta su uso. Encontrará más información en nuestra <a href="/aviso-legal/">Política de Cookies.</a></p>
			<a href="#" id="close" class="btn btn--alert"><i class="icon-cross"></i> Cerrar</a>

		</div>


<main class="main__content">


	<!-- Loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
    <!-- Cargame los Custom fields, ACF -->
    <?php get_template_part('templates/custom-fields'); ?>

    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?> 


</main>

<!-- Sidebars -->
<?php get_sidebar('page'); ?>






<?php get_footer(); ?>

