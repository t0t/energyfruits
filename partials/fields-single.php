<?php
/* Page header */
get_template_part( 'partials/page', 'header' );
?>
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
              /* Recetas (lista) */
              if (have_rows( 'lista_simple' )): ?>
              <?php while (have_rows( 'lista_simple' )): the_row();?>
                <ul class="list list--unordered">
                <?php if (get_sub_field( "title" )): ?>
                  <li><?php the_sub_field( 'title' ); ?></li>
                <?php endif?>
                <?php while (has_sub_field( 'lista_simple_elemento' )): ?>
                <?php
                  $txt = get_sub_field('txt');
                  $link = get_sub_field('link');
                ?>
                  <li class="list__item">
                    <?php if ( $link ): ?>
                      <a href="<?php the_sub_field( 'link' ); ?>">
                      <?php endif; ?>
                      <?php if ( $txt ): ?>
                      <?php the_sub_field( 'txt' );?>
                      <?php if (get_sub_field( "external_url" )): ?>
                      <?php the_sub_field( 'external_url' ); ?>
                      <?php endif ?>
                      <?php endif; ?>
                      <?php if ( $link ): ?>
                      </a>
                    <?php endif; ?>
                  </li>
                <?php endwhile; ?>
                </ul>
              <?php endwhile; ?>
              <?php endif; /* / Recetas (lista) */ ?>

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
