<?php get_header(); ?>
<main class="main__content" role="main">
	<?php
	/* Content search */
	get_template_part('partials/content', 'search'); ?>
</main>
<?php
/* Sidebars */
get_sidebar(); ?>
<?php get_footer(); ?>
