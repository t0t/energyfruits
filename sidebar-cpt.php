<!-- Sliders footer -->
<?php if (in_category('supershakes')): ?>
	<?php
		$loop = new WP_Query( array(
			'post_type' => 'cpt',
			'category_name' => 'supershakes',
			'posts_per_page' => '',
			'orderby' => 'date',
			'order' => 'DESC',
		));
	?>
<?php endif?>

<?php if (in_category('energyfruits')): ?>
	<?php
		$loop = new WP_Query( array(
			'post_type' => 'cpt',
			'category_name' => 'energyfruits',
			'posts_per_page' => '',
			'orderby' => 'date',
			'order' => 'DESC',
		));
	?>
<?php endif?>


<section class="slider__wrap">

  <h3 class="slider__title"><?php the_sub_field("title"); ?></h3>
  <?php the_sub_field("description"); ?>

  <div class="slider__slides sldr slider">

    <?php while ($loop->have_posts()): $loop->the_post(); ?>

      <a href="<?php the_permalink(); ?>" class="slider__item">
        <figure>
          <figcaption class="slider__caption"><?php the_title(); ?></figcaption>
        </figure>
      </a>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

  </div>

</section>
