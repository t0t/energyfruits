<?php
/* Carrusel links externos */
if (have_rows( 'carrusel_links_externos' )):
?>
  <section class="slider__wrap">
    <h3 class="slider__title"><span class="icon-attachment" aria-labelledby="icono"></span> Tiendas Virtuales</h3>
    <div class="slider__slides slider">
      <?php while (have_rows('carrusel_links_externos')): the_row();?>
        <?php
          $titulo = get_sub_field('titulo');
          $link = get_sub_field('link');
        ?>
        <figure>
          <?php if (get_sub_field("img")): ?>
            <a class="" href="<?php echo $link;?>" target="_blank">
            <?php $image = get_sub_field('img');
            echo '<img src="' . $image['sizes']['large'] . '" />';?>
            </a>
          <?php endif?>
          <figcaption>
            <?php if ($titulo): ?>
            <h3><?php echo $titulo;?></h3>
            <?php endif;?>
            <?php if ($link): ?>
            <?php endif;?>
          </figcaption>
        </figure>
      <?php endwhile;?>
    </div>
  </section>
<?php endif; ?>
<?php
  /* Carrusel webs interesantes */
  if (have_rows( 'carrusel_webs_interesantes' )):
?>
<section class="slider__wrap">
  <h3 class="slider__title"><span class="icon-attachment" aria-labelledby="icono"></span> Webs interesantes</h3>
  <div class="slider__slides slider">
  <?php while (have_rows('carrusel_webs_interesantes')): the_row();?>
    <a class="" href="<?php the_sub_field('link')?>" target="_blank" aria-labelledby="link externo">
      <figure>
      <?php if (get_sub_field("img")): ?>
        <?php $image = get_sub_field('img');
        echo '<img src="' . $image['sizes']['large'] . '" />'; ?>
      <?php endif?>
        <figcaption class="slider__title">
        <?php the_sub_field('titulo'); ?>
        </figcaption>
      </figure>
    </a>
    <?php endwhile;?>
  </div>
</section>
<?php endif; ?>
