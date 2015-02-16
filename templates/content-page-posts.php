

    <!-- Page Header -->
    <?php get_template_part('templates/page', 'header'); ?>

    <!-- Slider noticias -->
    <h3>noticias</h3>

    <section class="slider">
    
    <?php 
    $this_post = $post->ID;
    $loop = new WP_Query( array( 
    'post_type' => 'post',
    'posts_per_page' => '',
    'post__not_in' => array($this_post),
    'category_name' => 'noticias') ); 
    ?>

    <!-- Custom Loop -->
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        
            <div class="post">

            <? if ( has_post_thumbnail() ) { ?>

            <figure class="post__figure ">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail('medium'); ?>
                </a>
            </figure>

            <div class="post__content">

                <small class="post__meta-date"><?php the_date('j F Y'); ?></small>
                <h2><?php the_title(); ?></h2>
                <a class="btn" href="<?php the_permalink(); ?>">&rarr;</a>

            </div>

            <?} else {?>  

            <figure><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="" class=""><figcaption><?php the_title(); ?></figcaption></a></figure>

            <?}?>

            </div>
            
        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>

    </section>
    <!-- / -->



    <!-- Slider novedades -->
    <h3>novedades</h3>

    <section class="slider">
    
    <?php 
    $this_post = $post->ID;
    $loop = new WP_Query( array( 
    'post_type' => 'post',
    'posts_per_page' => '',
    'post__not_in' => array($this_post),
    'category_name' => 'novedades') ); 
    ?>

    <!-- Custom Loop -->
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        
            <div class="post">

            <? if ( has_post_thumbnail() ) { ?>

            <figure class="post__figure ">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail('medium'); ?>
                </a>
            </figure>

            <div class="post__content">

                <small class="post__meta-date"><?php the_date('j F Y'); ?></small>
                <h2><?php the_title(); ?></h2>
                <a class="btn" href="<?php the_permalink(); ?>">&rarr;</a>

            </div>

            <?} else {?>  

            <figure><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="" class=""><figcaption><?php the_title(); ?></figcaption></a></figure>

            <?}?>

            </div>
            
        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>

    </section>
    <!-- / -->



    <!-- Slider recetas -->
    <h3>recetas</h3>

    <section class="slider">
    
    <?php 
    $this_post = $post->ID;
    $loop = new WP_Query( array( 
    'post_type' => 'post',
    'posts_per_page' => '',
    'post__not_in' => array($this_post),
    'category_name' => 'recetas') ); 
    ?>

    <!-- Custom Loop -->
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        
            <div class="post">

            <? if ( has_post_thumbnail() ) { ?>

            <figure class="post__figure ">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail('medium'); ?>
                </a>
            </figure>

            <div class="post__content">

                <small class="post__meta-date"><?php the_date('j F Y'); ?></small>
                <h2><?php the_title(); ?></h2>
                <a class="btn" href="<?php the_permalink(); ?>">&rarr;</a>

            </div>

            <?} else {?>  

            <figure><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="" class=""><figcaption><?php the_title(); ?></figcaption></a></figure>

            <?}?>

            </div>
            
        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>

    </section>
    <!-- / -->
    

    <!-- Archive -->
    <section class="archivo">
        
        <h4>Arxiu</h4>

        <div class="grid">
        
            <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">

            <option value="">
                <?php echo esc_attr( __( 'Seleciona Mes' ) ); ?>
            </option>

            <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
            </select>
            
        </div>

    </section>


    <!-- Navegacion -->
    <?php //previous_post_link(); ?>
    <?php //next_post_link(); ?>

