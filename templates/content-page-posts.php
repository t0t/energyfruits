<!-- Page Header -->
<hgroup class="main-post__header">
<!-- Page Header -->
<?php get_template_part('templates/page', 'header');?>
<?php if (get_sub_field("header")): ?>
<h3 class="main-post__subheader"><?php the_sub_field("header");?></h3>
<?php endif?>
</hgroup>
<!-- Slider noticias -->
<section class="slider__wrap">
    <h3 class="slider__title">Noticias</h3>
    <?php //the_sub_field("description"); ?>
    <?php
$this_post = $post->ID;
$loop = new WP_Query(array(
	'post_type' => 'post',
	'order' => 'DESC', // el ultimo primero
	'orderby' => 'date',
	'posts_per_page' => '',
	'post__not_in' => array($this_post),
	'category_name' => 'noticias'));
?>
    <div class="slider__slides slider">

        <!-- Custom Loop -->
        <?php while ($loop->have_posts()): $loop->the_post();?>
		        <div class="post">
		            <?if (has_post_thumbnail()) {?>
		            <a href="<?php the_permalink();?>" title="<?php the_title();?>">
		                <figure class="slider__figure">
		                    <?php the_post_thumbnail('thumbnail', array('class' => 'img--circle'));?>
		                    <figcaption class="slider__caption-post">
		                    <small class="slider__meta-date">
		                    <?php the_date('j F Y');?></small>
		                    <?php the_title();?> &rarr;
		                    </figcaption>
		                </figure>
		            </a>
		            <?} else {?>
		            <figure><a href="<?php the_permalink();?>" title="<?php the_title();?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" alt="" class=""><figcaption><?php the_title();?></figcaption></a></figure>
		            <?}
	?>
		        </div>
		        <?php endwhile;?>
        <?php wp_reset_postdata(); // reset the query ?>
    </div>
</section>
<!-- / -->
<!-- Slider recetas -->
<section class="slider__wrap">
    <h3 class="slider__title">Recetas</h3>
    <?php
$this_post = $post->ID;
$loop = new WP_Query(array(
	'post_type' => 'post',
	'posts_per_page' => '',
	'post__not_in' => array($this_post),
	'category_name' => 'recetas'));
?>
    <!-- Custom Loop -->
    <div class="slider__slides slider">
        <!-- Custom Loop -->
        <?php while ($loop->have_posts()): $loop->the_post();?>
		        <div class="post">
		            <?if (has_post_thumbnail()) {?>
		            <a href="<?php the_permalink();?>" title="<?php the_title();?>">
		                <figure class="slider__figure">
		                    <?php the_post_thumbnail('thumbnail', array('class' => 'img--circle'));?>
		                    <figcaption class="slider__caption-post"><small class="slider__meta-date"><?php the_date('j F Y');?></small><?php the_title();?> &rarr;</figcaption>
		                </figure>
		            </a>
		            <?} else {?>
		            <figure>
		                <a href="<?php the_permalink();?>" title="<?php the_title();?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg"><figcaption><?php the_title();?></figcaption></a>
		            </figure>
		            <?}
	?>
		        </div>
		        <?php endwhile;?>
        <?php wp_reset_postdata(); // reset the query ?>
    </div>
</section>
<!-- / -->
<!-- Archive -->
<section class="section-archivo">
    <div class="grid">
        <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
            <option value="">
                <?php echo esc_attr(__('Archivo'));?>
            </option>
            <?php wp_get_archives(array('type' => 'monthly', 'format' => 'option', 'show_post_count' => 1));?>
        </select>
    </div>
</section>
