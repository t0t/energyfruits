<?php if ( is_archive() ) : ?>
  <header class="efecto--intro">
    <h1><?php the_category(''); ?></h1>
  </header>

<!-- Header Home Blog -->
<?php elseif ( is_page_template('template-home-blog.php') ) : ?>

  <header>
    <h1 class="h3"><?php the_title(); ?></h1>
  </header>

<?php elseif ( is_page() ) : ?>
  
  <header class="efecto--intro page-header">
    <?php
      /* Language Selector */
      echo do_shortcode( '[gtranslate]' );
    ?>
    <?php
      /* Component Catalog */
      get_template_part( 'partials/catalog' );
    ?>
    <h1 class="h3"><?php the_title(); ?></h1>
    <!-- main post content -->
    <?php if (get_field('flexible_content')): ?>
      <?php while (has_sub_field("flexible_content")): ?>
        <?php
        /* Wellcome panel */
        if (get_row_layout() == "well-img"): ?>
          <div style="background-image: url('<?php the_sub_field("bg_image");?>'), radial-gradient(ellipse at center, #23904D 0%, #317549 99%);
          background-attachment: fixed;" class="img--bg-big well well--img">
            <h1 class="efecto--intro"><?php the_sub_field("title");?></h1>
            <h3><?php the_sub_field("subtitle");?></h3>
            <a class="btn btn--image" href="<?php the_sub_field("call_to_action");?>">
              <?php the_sub_field("description");?>
            </a>
          </div>
        <?php endif;?>
      <?php endwhile;?>
    <?php endif;?>
  </header>

<?php elseif ( is_single() ) : ?>

  <header class="efecto--intro">
    <h3>
      <?php
        $cats=get_the_category();
        echo $cats[0]->cat_name;
      ?>
    </h3>
    <h1><?php the_title(); ?></h1>
  </header>

<?php elseif ( is_search() ) : ?>

  <header class="efecto--intro">
    <h1>"<?php the_search_query() ?>"</h1>
  </header>

<?php elseif ( is_404() ) : ?>

    <h1>Pagina no encontrada!</h1>

<?php else : ?>
<?php endif; ?>
