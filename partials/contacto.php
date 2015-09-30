<!-- Lista con emails -->
<?php if (have_rows('equipo')): ?>
	<section class="grid">
		<?php while (have_rows('equipo')): the_row();?>
		<?php
		$nombre = get_sub_field('nombre');
		$cargo = get_sub_field('cargo');
		$email = get_sub_field('email');
		?>
		<?php
		// $personal = array(
		//         $nombre,
		//         $cargo,
		//         $email
		//     );
		// foreach ($personal as $persona) {
		//     $persona = $nombre." ".$cargo."<br>".'<span class="icon-envelope" aria-labelledby="icono"></span>'.$email;
		// }
		// echo $persona;
		?>
		<article role="article">
			<?php if ($nombre): ?>
				<div class="icon-profile-male" aria-labelledby="icono"></div>
				<h3><?php echo $nombre;?></h3>
				<h4><?php echo $cargo;?></h4>
			<?php endif;?>
			<?php if ($email): ?>
				<span class="icon-envelope" aria-labelledby="icono"></span> <?php echo $email;?>
			<?php endif;?>
		</article>
		<?php endwhile;?>
	</section>
<?php endif;?>
<!-- /equipo -->

<?php if (get_sub_field("address")): ?>
	<!-- mapa/form -->
	<section class="grid">
		<?php
		if (function_exists('wpcf7_enqueue_scripts')) {
		wpcf7_enqueue_scripts();
		}
		if (function_exists('wpcf7_enqueue_styles')) {
		wpcf7_enqueue_styles();
		}
		?>
		<div class="grid-content__item">
		<?php if (get_sub_field("image")) {?>
		<img src="<?php the_sub_field("image");?>" alt="">
		<?php } else {?>

		<!-- Mapa -->
		<?php echo do_shortcode('[mappress mapid="2" width="100%"]');?>
		<?php }
		?>
		<p><?php the_sub_field("address");?></p>
		</div>
		<div class="grid-content__item">
		<?php echo do_shortcode('[contact-form-7 id="56" title="Formulario de contacto"]');?>
		</div>
	</section>
	<!-- /mapa/form -->
<?php endif;?>
