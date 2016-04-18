
<?php if (get_field( 'flexible_content' )): ?>
	<?php while (has_sub_field( "flexible_content" )): ?>

		<?php
		/* Component Enlace Catalogo */

		if (get_row_layout() == "enlace_catalogo"): ?>

			<?php
			$descripcion = get_sub_field('description');
			$url = get_sub_field('url');
			$img = get_sub_field('img');
			?>

			<?php if ( $url == true ) { ?>

			<div class="catalog">
				<a href="<?php echo $url ?>" target="_blank">
					<figure class="catalog-figure">
						<img src="<?php echo $img; ?>" alt="<?php the_sub_field( 'title' ); ?>">
						<figcaption><?php echo $descripcion; ?></figcaption>
					</figure>
				</a>
			</div>
			<?php } ?>

		<?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>
