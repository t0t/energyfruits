<?php //if(!is_front_page()) { ?>

<? //} ?>


<?php if ( is_archive() ) : ?>

    <header>
        
        <?php //echo get_the_category(); ?>
        
        <h1> 
            
            <?php the_category(''); ?>

            <small class="altheader">

                <?php the_time('F Y'); ?> 
                    
            </small>

        </h1>

    </header>

<?php elseif ( is_page_template('template-home-blog.php') ) : ?>

    <header>

        <h1>
            <?php the_title(); ?>
        </h1>

    </header>

<?php elseif ( is_page() && !is_page('home') ) : ?>

    <header>

        <h1 class="h3"><?php the_title(); ?></h1>

    </header>
        
<?php elseif ( is_single() ) : ?>
        
    <header>
        
        <h3>

            <?php
            $cats=get_the_category();
            echo $cats[0]->cat_name;
            ?>

        </h3>

        <h1>

            <?php the_title(); ?>

            <?php  if ( get_post_type() == 'post' ) { ?>
    
            <small class="altheader"><?php echo get_the_time('j F Y'); ?></small>

            <?php } ?>

        </h1>

    </header>

<?php elseif ( is_single() && is_post_type('cpt') ) : ?>
        
    <header>

        <h1>
            <?php the_title(); ?>vvv
        </h1>

    </header>

<?php elseif ( is_search() ) : ?>
        
    <header>

        <h1>"<?php the_search_query() ?>"</h1>

    </header>

<?php elseif ( is_404() ) : ?>
        
    <h1>Pagina no encontrada!</h1>

<?php else : ?>
    <header></header>
<?php endif; ?>