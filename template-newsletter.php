<?php
/*
Template Name: Newsletter
*/
?>
<?php get_header(); ?>

<main class="main__content">



	<!-- Content page template -->
	<?php get_template_part('templates/content', 'page-template'); ?>    

	<!-- Sidebars -->
    <?php //get_sidebar(); ?>

	<!-- Newsletter form -->
    <div class="widget widget--newsletter">

			<form action="//nanosigegants.us10.list-manage.com/subscribe/post?u=f12298f0773d67aadf06c2fc4&amp;id=a1594d1567" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

				<h3>newsletter</h3>

				<label for="mce-EMAIL"></label>
				<input type="email" value="" name="EMAIL" placeholder="Tu email aquí" id="mce-EMAIL">
				
				<div id="mce-responses" style="display:none"><div id="mce-error-response" style="display:none"></div><div id="mce-success-response" style="display:none"></div></div>

			    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">

			</form>

    </div>


    
</main>

<?php get_footer(); ?>