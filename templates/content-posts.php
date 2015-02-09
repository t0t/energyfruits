<div class="main__content">
    
    <section class="main__content__section">

    <?php 
    $this_post = $post->ID;
    $loop = new WP_Query( array( 
    'post_type' => 'post',
    'posts_per_page' => '',
    'post__not_in' => array($this_post),
    'category_name' => '') ); 
    ?>

        <!-- post -->
        <article class="grid">

        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        
            <div class="grid__item">

            <? if ( has_post_thumbnail() ) { ?>
            <figure>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('thumbnail'); ?>
                <figcaption><?php the_title(); ?></figcaption></a>
            </figure>
            <?}else {?>   
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="" class="">
                <figcaption><?php the_title(); ?></figcaption>
            </figure>
            <?}?>

            </div>
            
        <?php endwhile; ?>

        </article>

    </section>

</div>