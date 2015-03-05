
<div class="widget widget--posts">

    <?php
    $this_post = $post->ID;
    $categories = get_the_category();

    $cat = "";

    if(isset($categories[0]->term_id)){

        $cat = $categories[0]->term_id;

    }

    $recentPosts = new WP_Query(
        array( 
            'cat' => $cat,
            'orderby' => 'date', 
            'showposts' => '5',
            'post__not_in' => array($this_post) 
            // 'post_type' => '', 
            // 'category_name' => $cat,
            // 'posts_per_page' => '5', 
            // 'order'   => 'DESC'
        ) 

    );


    ?>
    

    <?php
        //sacame el nombre del array
        echo $categories[0]->name;
        // print_r($categories);
    ?>
        
    <ul class="list--sidebar">
    
    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

	    <li class="list--sidebar__item">

	    	<a href="<?php the_permalink() ?>" rel="bookmark">
	    	<small class="post--sidebar__meta-date"><?php the_date('j F Y'); ?></small> <?php the_title(); ?></a>

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