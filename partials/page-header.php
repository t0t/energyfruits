<?php if ( is_archive() ) : ?>
  <header class="efecto--intro">
    <h1><?php the_category(''); ?></h1>
  </header>

<!-- Header Home Blog -->
<?php elseif ( is_page_template('template-home-blog.php') ) : ?>

  <header>
    <h1 class="h3"><?php the_title(); ?></h1>
  </header>

<?php elseif ( is_page() && !is_page('home') ) : ?>

  <header class="efecto--intro">
    <h1 class="h3"><?php the_title(); ?></h1>
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
