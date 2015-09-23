
<div class="widget widget--posts">

  <?php
    $this_post = $post->ID;
    $categories = get_the_category();

    $cat = "";

    if(isset($categories[0]->term_id)){
      $cat = $categories[0]->term_id;
    }

    $args = array(
    'cat' => $cat,
    'orderby' => 'date',
    'showposts' => '5',
    'post__not_in' => array($this_post)
    );

    // Estoy instanciando un objeto de la clase WP_Query
    $recentPosts = new WP_Query( $args );
    // print_r($recentPosts);
  ?>


  <?php
  //traeme el nombre del array
  $current = $categories[0]->name;
  echo $current;
  // print_r($categories);
  ?>

  <ul class="list--sidebar">

  <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

    <li class="list--sidebar__item">

      <a href="<?php the_permalink() ?>" rel="bookmark">

      <?php if ($current=='Recetas') { ?>
      <!-- No me muestres la fecha si es Recetas -->
      <?php } else { ?>
        <small class="post--sidebar__meta-date"><?php the_date('j F Y'); ?></small>
      <?php } ?>
      <?php the_title(); ?>
      </a>

    </li>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); // reset the query ?>

  </ul>

</div>


<ul>
  <?php wp_list_categories('sort_column=name&optioncount=1&exclude=5, 6'); ?>
</ul>


<!-- Navegacion entre posts-->
<nav class="nav--posts">

  <ul>

    <li>
      <?php
        $prevPost = get_previous_post();

        if($prevPost)
        {
        $prevthumbnail = get_the_post_thumbnail($prevPost->ID, 'mini', array('class' => 'img--rounded') );
        previous_post_link('%link', "$prevthumbnail &larr; %title");
        }
      ?>
    </li>

    <li>
      <?php
        $nextPost = get_next_post();

        if($nextPost)
        {
        $nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'mini', array('class' => 'img--circle'));
        next_post_link('%link', "%title &rarr; $nextthumbnail");
        }
      ?>
    </li>

  </ul>

</nav>
