




    <?php  if ( get_post_type() == 'post' ) { //Inluyeme los single que no sean custom post types ?>
        
    <aside class="sidebar" role="complementary">

        <?php get_sidebar('single'); ?>

    </aside>

    <?php } ?>

  
        
    <?php if ( is_page('home') || is_page('contacto') ) : ?>
        
    <aside class="sidebar--inferior" role="complementary">

        <?php get_sidebar('page'); ?>

    </aside>

    <?php elseif ( is_search() | is_404() ) : ?>
        
        <?php //get_sidebar('single'); ?>

    <?php elseif ( is_page_template() ) : ?>
        
        <?php //get_sidebar('page-template.php'); ?>

    <?php else : ?>
    <?php endif; ?>

