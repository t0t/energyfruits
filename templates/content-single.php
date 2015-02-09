
<div class="main__content">

    <!-- Page Header -->
    <?php get_template_part('templates/page', 'header'); ?>


    <!-- Loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <!-- Cargame los Custom fields, ACF -->
    <?php get_template_part('templates/custom-fields'); ?>

    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>    


    <!-- Navegacion -->
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

</div>
<!-- /main content -->
