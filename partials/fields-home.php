<!-- main post content -->
<div class="main-post__content">

</div>


<?php if (get_field('flexible_content')): ?>
  <?php while (has_sub_field("flexible_content")): ?>

    <?php
    /* Wellcome panel */
    if (get_row_layout() == "well-img"): ?>

      <div style="background-image: url('<?php the_sub_field("bg_image");?>'), radial-gradient(ellipse at center, #23904D 0%, #317549 99%);
      background-attachment: fixed;" class="img--bg-big well well--img">
        <h1 class="efecto--intro"><?php the_sub_field("title");?></h1>
        <h3><?php the_sub_field("subtitle");?></h3>
        <p><?php the_sub_field("description");?></p>
        <a class="btn btn--image" href="<?php the_sub_field("call_to_action");?>">Lo último del blog</a>
      </div>

    <?php
    /* Carusel Superfoods */
    elseif (get_row_layout() == "carusel1"): ?>
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
      <div class="slider__slides slider">
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
      <div class="slider__slides slider">
        <?php while ($loop->have_posts()): $loop->the_post();?>
        <a href="<?php the_permalink();?>">
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
