


<aside class="sidebar">

    <?php if ( is_single() ) : ?>

        <?php get_sidebar('single'); ?>
        
    <?php elseif ( is_page() ) : ?>
        
        <?php get_sidebar('page'); ?>

    <?php elseif ( is_search() | is_404() ) : ?>
        
        <?php get_sidebar('single'); ?>

    <?php elseif ( is_page_template() ) : ?>
        
        xxx
        <?php get_sidebar('page-template.php'); ?>

    <?php else : ?>
    <p>ups, no sidebar!</p>
    <?php endif; ?>


</aside>