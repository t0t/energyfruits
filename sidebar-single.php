
<div class="widget widget--posts">

	<h3>noticies recents</h3>

	<ul>

	<?php
	    $recentPosts = new WP_Query();
	    $recentPosts->query('showposts=5');
	?>
	<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

	    <li>

	    	<a href="<?php the_permalink() ?>" rel="bookmark">
	    	<small class="post--sidebar__meta-date"><?php the_date('j F Y'); ?></small> <?php the_title(); ?> &rarr;</a>

	    </li>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); // reset the query ?>

	</ul>

</div>





<?php if ( is_active_sidebar( 'sidebar-custom' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-custom' ); ?>
<?php endif; ?>