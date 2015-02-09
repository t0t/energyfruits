<?php //if(!is_front_page()) { ?>

<? //} ?>


<?php if ( is_archive() ) : ?>

    <header>

        <h1>Arxiu
        <?php $archive_year  = get_the_time('Y'); ?>
        <?php $archive_month = get_the_time('m'); ?>

        <?php echo get_month_link( $archive_year, $archive_month ); ?>
        <?php the_time('F Y'); ?>

            <small class="altheader">
                
                    <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">

                    <option value="">
                        <?php echo esc_attr( __( 'Seleciona Mes' ) ); ?>
                    </option>

                    <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
                    </select>
                    
            </small>

        </h1>

    </header>

<?php elseif ( is_page('noticias') ) : ?>

    <header>

        <h1><?php the_title(); ?>

            <small class="altheader">
                
                    <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">

                    <option value="">
                        <?php echo esc_attr( __( 'Seleciona Mes' ) ); ?>
                    </option>

                    <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
                    </select>
                    
            </small>

        </h1>

    </header>

<?php elseif ( is_page() ) : ?>

    <header>

    <h1><?php the_title(); ?><small class="altheader">.</small></h1>

    </header>
        
<?php elseif ( is_single() ) : ?>
        
    <header>

        <h1>
            <?php the_title(); ?><small class="altheader"><?php echo get_the_time('j F Y'); ?></small>
        </h1>

    </header>

<?php elseif ( is_search() ) : ?>
        
    <header>

        <h1>"<?php the_search_query() ?>"</h1>

    </header>
    <?php //echo esc_html( get_search_query( false ) ); ?>

<?php elseif ( is_404() ) : ?>
        
    <h1>Pagina no encontrada!</h1>

<?php else : ?>

    <p>ups, no titulo!</p>  

<?php endif; ?>