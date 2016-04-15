<?php
  /* Header de Paginas */
?>
<header class="page-header">
  <div class="page-header__left">
    <?php /* Language Selector */
      echo do_shortcode( '[gtranslate]' );
    ?>
    <?php /* Component Catalog */
      get_template_part( 'partials/catalog' );
    ?>
  </div>
  <div class="page-header__center efecto--intro">
    <?php if ( is_post_type( 'producto' )) {
    echo "<h1>string</h1>";
    } ?>
    <?php if ( is_single() ) { ?>
      <h3>
        <?php
          $cats = get_the_category();
          echo $cats[0]->cat_name;
        ?>
      </h3>
      <h1><?php the_title(); ?></h1>
    <?php } elseif ( is_page( 'home' ) ) { ?>
    <?php } elseif ( is_page() ) { ?>
      <h1><?php the_title(); ?></h1>
    <?php } elseif ( is_archive() ) { ?>
      <h1><?php the_category(''); ?></h1>
    <?php } elseif ( is_search() ) { ?>
      <h1 class="h5"><?php the_search_query() ?></h1>
    <?php } else { ?>
      <h1>Pagina no encontrada!</h1>
    <?php } ?>
    <!-- Encabezado home -->
    <?php if (get_field( 'flexible_content' )): ?>
      <?php while (has_sub_field( "flexible_content" )): ?>
        <?php
        /* Wellcome panel */

        if (get_row_layout() == "well-img"): ?>

          <h1 class="efecto--intro"><?php the_sub_field( "title" ); ?></h1>

          <h3><?php the_sub_field( "subtitle" );?></h3>

            <?php
              $descripcion = get_sub_field('description');
              $cta_externo = get_sub_field('call_to_action_externo');
            ?>

            <?php // Si CTA externo es verdadero pinta botón con enlace externo
            if ( $cta_externo == true ) { ?>
              <a class="btn" href="<?php echo $cta_externo ?>" target="_blank">
                <?php echo $descripcion; ?>
              </a>
            <?php } ?>

            <?php // Si call to action externo está vacío entonces pinta CTA interno
              if ( $descripcion == true && $cta_externo == false ) { ?>
              <a class="btn btn--cta" href="<?php the_sub_field( "call_to_action" ); ?>">
              <?php echo $descripcion; ?>
              </a>
            <?php } ?>

        <?php endif; ?>

      <?php endwhile; ?>
    <?php endif; ?>
    <!-- Encabezado Page -->
    <?php
    /* Bloques */
    if ( have_rows( 'layout_content' )):
    ?>
    	<?php
      while ( have_rows( 'layout_content' )): the_row();
      ?>
        <?php
        /* Contenido principal */
        if ( get_row_layout() == '1_block' ):
        ?>
          <?php
          if (have_rows( 'block' )):
          ?>
            <?php
            while (have_rows( 'block' )): the_row();
            ?>
              <?php
                if (get_sub_field( "header" )):
              ?>
              <h3 class="page-subheader">
                <?php the_sub_field( "header" ); ?>
              </h3>
              <?php endif ?>
    		    <?php endwhile; ?>
    		  <?php endif ?>
    		<?php endif; ?>
    	<?php endwhile; ?>
    <?php endif; ?>
  </div>
  <div class="page-header__right">
    <?php get_search_form(); ?>
    <?php if (in_category( '6' )): ?>
      <?php /* Component Link a pagina Super Shakes */ get_template_part( 'partials/link-supershakes' ); ?>
    <?php endif; ?>
  </div>
</header>
