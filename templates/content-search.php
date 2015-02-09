
<div class="main__content">

    <!-- Page Header -->
    <?php get_template_part('templates/page', 'header'); ?>


    <section class="grid">

    <!-- Loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <div class="post">
        
        <?php the_date('j F Y'); ?>
        <?php the_tags(); ?>

            <? if ( has_post_thumbnail() ) { ?>

            <figure class="post__figure">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail('thumbnail', array( 'class' => 'img--circle' )); ?>
                </a>
            </figure>

            <div class="post__content">

                <small class="post__meta-date"><?php the_date('j F Y'); ?></small>
                <h2><?php the_title(); ?></h2>
                <a class="btn" href="<?php the_permalink(); ?>">&rarr;</a>

            </div>

            <?}else {?>  

            <figure><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="" class=""><figcaption><?php the_title(); ?></figcaption></a></figure>

            <?}?>

            </div>

    <?php endwhile; ?>
    <?php else: ?>

			Ups!, en este sitio web no se utiliza la palabra "<?php echo esc_html( get_search_query( false ) ); ?>" en ninguna ocasión.

    <?php endif; ?>    
	
	</section>


</div>
