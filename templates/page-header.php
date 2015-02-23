<?php //if(!is_front_page()) { ?>

<? //} ?>


<?php if ( is_archive() ) : ?>

    <header>
        
        <?php //the_category(''); ?>
        <?php echo get_the_category(); ?>
        
        <h1> 

            <small class="altheader">
                <?php the_time('F Y'); ?> 
                    
            </small>

        </h1>

         <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">

                    <option value="">
                        <?php echo esc_attr( __( 'Archivo' ) ); ?>
                    </option>

                    <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
                    </select>

    </header>

<?php elseif ( is_page_template('template-home-blog.php') ) : ?>

    <header>

        <h1>
            <?php the_title(); ?>
        </h1>

    </header>

<?php elseif ( is_page() ) : ?>

    <header>

        <h1><?php the_title(); ?></h1>

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

    <p>ups, no titulo!</p>  

<?php endif; ?>