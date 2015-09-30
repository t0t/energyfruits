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
      		<!-- main post content -->
      		<div class="main-post__content">
            <?php
              /* Si es Tiendas carga contenidos de tiendas */
              if ( is_page_template( 'template-tiendas.php' ) ) {
            ?>
              <?php
              /* Load Part Tienda */
              get_template_part( 'partials/tiendas' );
              ?>
            <?php
              /* Si es Contacto carga contenidos de contacto */
              } elseif (is_page_template( 'template-contacto.php' )) {
            ?>
              <?php
              /* Load Part Contacto */
              get_template_part( 'partials/contacto' );
              ?>
            <?php
              /* Si es Pagina */
              } elseif (is_page()) {
            ?>
          		<?php if (get_sub_field("content")): ?>
            		<article class="main-post__content__entry" role="article">
              		<?php
                    /* Header image */
                    if (get_sub_field("header_image")) {
                  ?>
              		  <figure><img src="<?php the_sub_field("header_image");?>" alt=""></figure>
              		<?php } else { ?>
              		<?php } ?>
                  <?php
                  /* The post content */
                  the_sub_field("content");
                  ?>
            		</article>
          		<?php endif ?>
            <? } /* / Si es Pagina */ ?>
          </div>
		    <?php endwhile; ?>
		  <?php endif ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>
