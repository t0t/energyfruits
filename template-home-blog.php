<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<main class="main__content" role="main">

<!-- Loop for posts -->
<?php get_template_part('templates/content', 'page-posts'); ?>
</main>
<?php get_footer(); ?>