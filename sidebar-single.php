
<div class="widget widget--posts">

<h3>Últimos posts</h3>

    <ul>
    <?php
        $categories = get_the_category();
        //$categories = explode(',', $categories);
        $recentPosts = new WP_Query();
        $recentPosts->query('showposts=5&cat='.$categories);
    ?>

	<?php get_the_category(); ?>
	<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

	    <li>

	    	<a href="<?php the_permalink() ?>" rel="bookmark">
	    	<small class="post--sidebar__meta-date"><?php the_date('j F Y'); ?></small> <?php the_title(); ?> &rarr;</a>

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


                         <!-- <li>

                            <a href="/blog/">
                            <i class="icon-house"></i> -->
                            <?php //$post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label; ?>
                            <!-- </a>

                        </li> -->


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

                

<?php if ( is_active_sidebar( 'sidebar-custom' ) ) : ?>
	<?php //dynamic_sidebar( 'sidebar-custom' ); ?>
<?php endif; ?>