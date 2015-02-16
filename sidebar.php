




    <?php  if ( get_post_type() == 'post' ) { ?>
    
<aside class="sidebar">
    <?php get_sidebar('single'); ?>
</aside>

    <?php } ?>

  
        
    <?php if ( is_page() ) : ?>
        
        <?php //get_sidebar('page'); ?>

    <?php elseif ( is_search() | is_404() ) : ?>
        
        <?php get_sidebar('single'); ?>

    <?php elseif ( is_page_template() ) : ?>
        
        <?php get_sidebar('page-template.php'); ?>

    <?php else : ?>
    <?php endif; ?>

