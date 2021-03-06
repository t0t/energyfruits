<?php
/* Page header */
get_template_part( 'partials/page', 'header' );
?>

  <!-- main post content -->
  <?php if (get_field('flexible_content')): ?>
    <?php while (has_sub_field("flexible_content")): ?>
      <?php
      /* Carusel Superfoods */
      if (get_row_layout() == "carusel1"): ?>
        <?php
          $loop = new WP_Query(array(
          'post_type' => 'cpt',
          'category_name' => 'energyfruits',
          'orderby' => 'title',
          'order' => 'ASC',
          ));
        ?>
      <section class="slider__wrap">
        <h3 class="slider__title"><?php the_sub_field("title");?></h3>
        <?php the_sub_field("description");?>
        <div class="slider__slides sldr slider">
          <?php while ($loop->have_posts()): $loop->the_post();?>
          <a href="<?php the_permalink();?>" class="slider__item">
            <figure>
              <figcaption class="slider__caption"><?php the_title();?></figcaption>
            </figure>
          </a>
          <?php endwhile;?>
          <?php wp_reset_postdata();?>
        </div>
      </section>

      <?php
      /* Carusel Supershakes */
      elseif (get_row_layout() == "carusel2"): ?>
        <?php
          $loop = new WP_Query(array(
          'post_type' => 'cpt',
          'category_name' => 'supershakes',
          // 'posts_per_page' => '',
          'orderby' => 'title',
          'order' => 'ASC',
          ));
        ?>
      <section class="slider__wrap">
        <h3 class="slider__title"><?php the_sub_field("title");?></h3>
        <?php the_sub_field("description");?>
        <div class="slider__slides sldr slider">
          <?php while ($loop->have_posts()): $loop->the_post();?>
          <a href="<?php the_permalink();?>" class="slider__item">
            <figure>
              <figcaption class="slider__caption"><?php the_title();?></figcaption>
            </figure>
          </a>
          <?php endwhile;?>
          <?php wp_reset_postdata();?>
        </div>
      </section>
      <?php endif;?>
    <?php endwhile;?>
  <?php endif;?>
