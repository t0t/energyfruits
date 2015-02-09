

<div class="widget widget--pages">

	<h3>La Colla</h3>

	<!-- http://www.billerickson.net/code/wp_query-arguments/ -->
	<?php 
    $this_post = $post->ID;

    $loop = new WP_Query( array( 
    	'post_type' => 'page',
    	'posts_per_page' => '',
    	'posts_per_archive_page' => 10,
    	'post__in' => array( 14, 212, 18, 16, 286, 20, 1423 ),
    	'post__not_in' => array($this_post),
    	'orderby' => 'date',
    	'order' => 'DESC',
    	// 'year' => 2012,
    	'category_name' => '') ); 
    ?>

    <article class="post--sidebar">

    <!-- Custom Loop -->
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        

            <? if ( has_post_thumbnail() ) { ?>

                <figure class="post--sidebar__figure">

	               <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		                <?php the_post_thumbnail('thumbnail'); ?>

		                <figcaption class="post--sidebar__content">

		                	<?php the_title(); ?>

		                </figcaption>

	               </a>

                </figure>


            <?}else {?>
			<?}?>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset ?>

    </article>

</div>








	<?php if ( is_active_sidebar( 'sidebar-custom' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-custom' ); ?>
	<?php endif; ?>