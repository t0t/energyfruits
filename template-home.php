<?php
/*
Template Name: Portada
*/
?>
<?php get_header(); ?>

	<?php if(is_page('home')){ ?>

		<div class="alert alert--info">

			<i class="icon-megaphone"></i>
			<p>Este sitio web utiliza cookies propias para ofrecer un mejor servicio. Si continúa navegando consideramos que acepta su uso. Encontrará más información en nuestra <a href="/aviso-legal/">Política de Cookies.</a></p>
			<a href="#" id="close" class="btn btn--alert"><i class="icon-cross"></i> Cerrar</a>

		</div>

	<? } ?>

<!-- Slider -->
<?php //putRevSlider("kenburns_fullwidth","portada") ?>

<main class="main__content">


	<!-- Loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
    <!-- Cargame los Custom fields, ACF -->
    <?php get_template_part('templates/custom-fields'); ?>

    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?> 


</main>



<!-- Newsletter form -->
    <div class="widget widget--newsletter">

			<form action="//energyfruits.us5.list-manage.com/subscribe/post?u=c5802993bc&amp;id=857eaffa92" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

				<h3>Te informamos. Newsletter</h3>

				<label for="mce-EMAIL"></label>
				<input type="email" value="" name="EMAIL" placeholder="Tu email aquí" id="mce-EMAIL">
				
				<div id="mce-responses" style="display:none"><div id="mce-error-response" style="display:none"></div><div id="mce-success-response" style="display:none"></div></div>

			    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">

			</form>

    </div>

<!-- Sidebars -->
<?php //get_sidebar(); ?>


<?php get_footer(); ?>

