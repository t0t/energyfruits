<?php
/* Bloques */
if (have_rows('layout_content')):
?>
	<?php
  while (have_rows('layout_content')): the_row();
  ?>
		<?php
    /* Contenido principal */
    if (get_row_layout() == '1_block'):
    ?>
  		<?php
      if (have_rows('block')):
      ?>
    		<?php
        while (have_rows('block')): the_row();
        ?>
    		<hgroup class="main-post__header">
    			<?php
          /* Page Header */
          get_template_part('partials/page', 'header');
          ?>
    			<?php
          if (get_sub_field("header")):
          ?>
    			<h3 class="main-post__subheader">
            <?php
            the_sub_field("header");
            ?>
          </h3>
    			<?php endif ?>
    		</hgroup>
    		<div class="main-post__content">
      		<?php if
            /* Main post content */
            (get_sub_field("content")): ?>
        		<article class="main-post__content__entry" role="article">
          		<?php
                /* Header image */
                if (get_sub_field("header_image")) { ?>
          		  <figure><img src="<?php the_sub_field("header_image"); ?>" alt=""></figure>
          		  <?php } else { ?>
          		<?php } ?>
          		  <small><?php echo get_the_time('j F Y'); ?></small>
          		<?php
              /* The post content */
              the_sub_field("content");
              ?>
          		<?php
              /* Facebook Comments */
              $var = do_shortcode('[fbcomments]'); echo $var;
              ?>
          		<?php
              /* The Post Tags */
              the_tags('', ' • ', '<br />');
              ?>
        		</article>
      		<?php endif;
          /* End Main post content */
          ?>
    		<?php
        /* Sidebar */
        get_sidebar();
        ?>
    		</div>
    		<?php endwhile;?>
  		<?php endif?>
		<?php endif;?>
	<?php endwhile;?>
	<?php else: ?>
<?php
/* /bloques */
endif; ?>
