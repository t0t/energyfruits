<?php
/* Page header */
get_template_part( 'partials/page', 'header' );
?>
<?php
/*****************/
/* Bloques */
/*****************/
if (have_rows('layout_content')): ?>

  <?php while (have_rows('layout_content')): the_row();?>

    <?php
    /*********************/
    /* Contenido principal */
    /*********************/
    if (get_row_layout() == '1_block'): ?>

      <!-- repeater -->
      <?php if (have_rows('block')): ?>
      <?php while (have_rows('block')): the_row();?>

      <!-- main post content -->
      <div class="main-post__content">

        <?php
        /***********/
        /* Content */
        /***********/
        if (get_sub_field( "content" )): ?>

          <article class="main-post__content__entry" role="article">

            <?php
            /* Header image */
            if (get_sub_field( "header_image" )) { ?>
            <figure><img src="<?php the_sub_field( "header_image" );?>" alt=""></figure>
            <?php } else { ?>
            <?php } ?>

            <?php
            /* Contenido */
            the_sub_field( "content" ); ?>

            <?php
            /* Upload files */
            if (have_rows( 'upload_files' )): ?>
              <ul>
                <?php while (have_rows( 'upload_files' )): the_row();?>
                  <?php
                    $title = get_sub_field( 'title' );
                    $file = get_sub_field( 'file' );
                  ?>
                <li>
                  <?php if ( $file ): ?>
                  <a href="<?php echo $file['url'];?>" alt="<?php echo $file['url'];?>" target="_blank">
                  <?php endif;?>

                    <?php if ( $title ): ?>
                      <span class="icon-file-pdf" aria-labelledby="icono"></span>
                      <?php echo $title; ?>
                    <?php endif;?>

                  <?php if ( $file ): ?>
                  </a>
                  <?php endif;?>
                </li>
                <?php endwhile;?>
              </ul>
            <?php
            /* Upload files */
            endif; ?>

          </article>

        <?php
        /* Content */ endif ?>


        <?php
        /*********************/
        /* Thumbnail Gallery */
        /*********************/
        if (get_sub_field( "gallery" )): ?>

          <div class="galeria">
            <?php if (get_sub_field("description")): ?>
            <h3 class="galeria-fotos__description">
            <?php the_sub_field("description");?>
            </h3>
            <?php endif?>

            <div class="galeria-fotos">
            <?php
            $images = get_sub_field('gallery');
            if ($images): ?>
            <?php foreach ($images as $image): ?>
              <figure class="galeria-fotos__figure">
                <a href="<?php echo $image['url'];?>" data-lightbox="serie" data-title="<?php echo $image['description'];?>">
                  <img src="<?php echo $image['sizes']['mini'];?>" alt="<?php echo $image['alt'];?>" class="img--circle" />
                    <figcaption class="galeria-fotos__caption">
                  <?php echo $image['caption'];?></figcaption>
                </a>
              </figure>
            <?php endforeach;?>
            <?php endif;?>
            </div>

            <?php if (get_sub_field("enlace_externo")): ?>
            <small><a href="<?php the_sub_field('enlace_externo');?>" target="_blank">Enlace externo</a></small>
            <?php endif ?>
          </div>

        <?php
        /* Thumbnail Gallery */
        endif ?>


        <?php if ( !is_page() ): ?>
          <?php
          /* Sidebar */
          get_sidebar(); ?>
        <?php endif?>

      </div>
      <!-- /main post content -->


      <?php endwhile;?>
      <?php endif?>
      <?php endif; ?>


      <?php endwhile; ?>

    <!-- /Contenido principal -->
    <?php else: ?>
    <?php endif; ?>
    <!-- /bloques -->



  <?php if (get_field('flexible_content')): ?>
    <?php while (has_sub_field("flexible_content")): ?>

      <?php
      /*****************/
      /* Layout Gallery */
      /*****************/
      if (get_row_layout() == "gallery"):  ?>

      <h2 class="galeria-fotos__title">Galeria de fotos</h2>
      <?php if (get_sub_field("description")): ?>
      <h3 class="galeria-fotos__description">
      <?php the_sub_field("description");?>
      </h3>
      <?php endif?>
      <div class="galeria-fotos">
        <?php
        $images = get_sub_field('gallery');
        if ($images): ?>
        <?php foreach ($images as $image): ?>
        <figure class="galeria-fotos__figure">
          <a href="<?php echo $image['url'];?>" data-lightbox="serie" data-title="<?php echo $image['description'];?>">
          <img src="<?php echo $image['sizes']['mini'];?>" alt="<?php echo $image['alt'];?>" class="img--circle" />
            <figcaption class="galeria-fotos__caption">
            <?php echo $image['caption'];?></figcaption>
          </a>
        </figure>
        <?php endforeach;?>
      <?php endif;?>
      </div>

      <?php
      /*****************/
      /* Layout Videos */
      /*****************/
      elseif (get_row_layout() == "video"): ?>

      <section class="video-main">
        <h2 class="video-main__header"></h2>
        <?php if (get_sub_field('video_repeater')): ?>
          <?php while (has_sub_field('video_repeater')): ?>
            <?php if (get_sub_field("video")): ?>
            <div class="video-main__iframe"><?php the_sub_field("video");?></div>
            <?php endif?>
            <?php if (get_sub_field("descripcion")): ?>
            <p class="video-main__description"><?php the_sub_field("descripcion");?></p>
            <?php endif?>
            <?php if (get_sub_field("btn")): ?>
            <a class="btn btn--invert" href="<?php the_sub_field('btn');?>"><?php the_sub_field('btn-title');?> &rarr;</a>
            <?php endif?>
          <?php endwhile;?>
        <?php endif;?>
      </section>

    <?php /* Contenido principal */ endif; ?>

  <?php endwhile;?>

<?php /* Bloques */ endif; ?>
