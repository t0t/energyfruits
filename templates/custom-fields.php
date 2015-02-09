

<!-- Bloques -->
<?php if( have_rows('layout_content') ): ?>
<?php while ( have_rows('layout_content') ) : the_row();?>
    






    <?php if( get_row_layout() == 'contact_form' ):?>

        <div class="grid">

        <?php
            if ( function_exists( 'wpcf7_enqueue_scripts' ) ) { wpcf7_enqueue_scripts(); }
            if ( function_exists( 'wpcf7_enqueue_styles' ) ) { wpcf7_enqueue_styles(); }
        ?>

            <div class="grid-content__item">
                <img src="<?php the_sub_field("image"); ?>" alt="">
                <p><?php the_sub_field("address"); ?></p>
            </div>
            <div class="grid-content__item">
                <?php echo do_shortcode('[contact-form-7 id="313" title="Formulari de contacte"]'); ?>
            </div>

        </div>




        <?php elseif( get_row_layout() == '2_blocks' ):?>

        <div class="grid">

            <!-- repeater -->
            <?php if( have_rows('block')): ?>
            <?php while (have_rows('block')) : the_row(); ?>

                <div class="grid__item">
                
                    <?php if (get_sub_field("header")): ?>
                    <?php the_sub_field("header"); ?>xx
                    <?php endif ?>
                    
                    <?php the_sub_field("content"); ?>

                    <img src="<?php the_sub_field('image'); ?>" alt="">
            
                </div>

            <?php endwhile;?>
            <?php endif ?>





        <!-- 1 bloque -->
        <?php elseif( get_row_layout() == '1_block' ):?>

            <!-- repeater -->
            <?php if( have_rows('block')): ?>
            <?php while (have_rows('block')) : the_row(); ?>

            
            <!-- <div class="main-post grid-content"> -->

            


                <figure>
                
                <?php if (get_sub_field("header")): ?>

                    <img src="<?php the_sub_field('image'); ?>" alt="">
            
                <?php endif ?>

                </figure>


                <?php if (get_sub_field("header")): ?>

                    <h3 class="main-post__subheader"><?php the_sub_field("header"); ?></h3>

                <?php endif ?>


                <!-- main post content -->
                <div class="main-post__content">


                   <?php if (get_sub_field("content")): ?>

                       <article class="main-post__content__entry">
                       
                            <?php the_sub_field("content"); ?>
                       
                        <?php the_tags( 'Contingut relacionat: ', ' • ', '<br />' ); ?>

                        </article>

                    <?php endif ?>


                    <?php if (get_sub_field("gallery")): ?>

                    <!-- galeria -->
                    <div class="galeria">

                        <h4 class="galeria__title">Galeria de fotos</h4>


                        <?php if (get_sub_field("description")): ?>

                            <h3 class="galeria-fotos__description">
                                <?php the_sub_field("description"); ?>
                            </h3>

                        <?php endif ?>


                        <div class="galeria-fotos">
                            
                            <?php
                            $images = get_sub_field('gallery');
                                 
                            if( $images ): ?>
                                
                                <?php foreach( $images as $image ): ?>

                                    <figure class="galeria-fotos__figure">

                                        <a href="<?php echo $image['url']; ?>" data-lightbox="serie" data-title="<?php echo $image['description']; ?>">

                                        <img src="<?php echo $image['sizes']['mini']; ?>" alt="<?php echo $image['alt']; ?>" class="img--circle" />

                                        <figcaption class="galeria-fotos__caption">
                                        <?php echo $image['caption']; ?></figcaption>

                                        </a>
                                    
                                    </figure>
                                
                                <?php endforeach; ?>
                                
                            <?php endif; ?>

                        </div>

                        <?php if (get_sub_field("flickr_gallery")): ?>

                            <small><a href="<?php the_sub_field('flickr_gallery'); ?>" target="_blank">Vols vore l'album complert a flickr?</a></small>

                        <?php endif ?>

                    </div>
                    <!-- /galeria -->

                    <?php endif ?>



                    <!-- grid -->
                    <?php if( have_rows('grid')): ?>
                    <?php while (have_rows('grid')) : the_row(); ?>


                            
                            <?php while(has_sub_field('grid_element')): ?>  
                            
                                <div class="grid__item">

                                    <?php if (get_sub_field("title")): ?>
                                        <h3><?php the_sub_field('title'); ?></h3>
                                    <?php endif ?>

                                    <?php if (get_sub_field("img")): ?>
                                        <?php $image = get_sub_field('img');
                                    echo '<img src="'.$image['sizes']['medium'].'" />'; ?>
                                    <?php endif ?>
                                    
                                    <?php if (get_sub_field("parrafo")): ?>
                                        <p><?php the_sub_field('parrafo'); ?></p>
                                    <?php endif ?>

                                    <?php if (get_sub_field("content")): ?>
                                        <?php the_sub_field('content'); ?>
                                    <?php endif ?>

                                    <?php if (get_sub_field("precio")): ?>
                                        <p><?php the_sub_field('precio'); ?>€</p>
                                        <small>+ 1&#8364; de gastos d&#8217;enviament</small>
                                    <?php endif ?>

                                    <?php if (get_sub_field("boto_paypal")): ?>
                                        <?php the_sub_field('boto_paypal'); ?>
                                    <?php endif ?>

                                    <?php if (get_sub_field("external_url")): ?>
                                        <?php the_sub_field('external_url'); ?>
                                    <?php endif ?>

                                    <?php if (get_sub_field("link")): ?>
                                        <?php the_sub_field('link'); ?>
                                    <?php endif ?>

                                </div>
                                                                
                            <?php endwhile; ?>
                            <!-- /grid item -->


                    <?php 
                    endwhile;
                    endif;
                    ?>
                    <!-- /grid -->


            
                </div>
                <!-- /main post content -->


            <?php endwhile;?>
            <?php endif ?>

            
        <!-- </div> -->



            
        <?php elseif(get_row_layout() == "gallery"): // Layout Gallery ?>

        <!-- galeria de fotos -->
        <div class="galeria-fotos">

             <h2 class="galeria-fotos__title">Galeria de fotos</h2>

            <?php if (get_sub_field("description")): ?>

                <h3 class="galeria-fotos__description">
                    <?php the_sub_field("description"); ?>
                </h3>

            <?php endif ?>

            <div class="galeria-fotos">
                
                <?php
                $images = get_sub_field('gallery');
                     
                if( $images ): ?>
                    
                    <?php foreach( $images as $image ): ?>

                        <figure class="galeria-fotos__figure">

                            <a href="<?php echo $image['url']; ?>" data-lightbox="serie" data-title="<?php echo $image['description']; ?>">

                            <img src="<?php echo $image['sizes']['mini']; ?>" alt="<?php echo $image['alt']; ?>" class="img--circle" />

                            <figcaption class="galeria-fotos__caption">
                            <?php echo $image['caption']; ?></figcaption>

                            </a>
                        
                        </figure>
                    
                    <?php endforeach; ?>
                    
                <?php endif; ?>

            </div>

        </div>






        <?php endif;?>
        <?php endwhile;?>
        <!-- /row layout -->




<?php else :?>
<?php endif;?>
<!-- /bloques -->
    








<!-- Componentes -->
<?php if( get_field('flexible_content') ): ?>

    <?php while( has_sub_field("flexible_content") ): ?>




    <?php if(get_row_layout() == "quote"): // Frases ?>

    <blockquote cite="<?php the_sub_field("autor"); ?>">
        <q>"<?php the_sub_field("quote"); ?>" </q><span><?php the_sub_field("autor"); ?></span>
    </blockquote>

    
    <?php elseif(get_row_layout() == "well-img"): //Wellcome panel ?>
    
    <div class="img--bg-big well well--img">
        
        <h1 class="altheader efecto--intro"><?php the_sub_field("title"); ?></h1>

        <p><?php the_sub_field("description"); ?></p>

        <button class="btn btn--image"><a href="<?php the_sub_field("call_to_action"); ?>">Work in progress</a></button>

    </div>   


    <?php elseif(get_row_layout() == "well-anim"): //Wellcome panel ?>
    
    <div class="well well--anim">


        <!-- <img src="<?php //echo get_bloginfo('template_directory');?>/assets/img/logo_anim.svg" alt="" class="anim-intro"> -->
        
        <svg class="anim-intro" viewBox="0 -14 151 151" preserveAspectRatio="xMidYMid meet">

            <title>Logo t0theme anim</title>
            <desc>Logotipo de tema Wordpress y Styleguide de Sergio Forés</desc>
    
            <path class="efecto--stroke-dashoffset" d="M33.8175546,9.19339982 C33.8175546,9.19339982 46.2905546,0.973399822 69.8175546,2.10739982 C93.3455546,3.24139982 133.880555,7.49339982 144.652555,31.5873998 C155.423555,55.6823998 142.152555,90.3353998 115.738555,107.2724 C89.3255546,124.2104 54.5105546,125.4144 31.2665546,117.4774 C8.02255465,109.5404 -2.46544535,85.8133998 3.77055465,62.1013998 C10.0065546,38.3903998 12.5575546,22.8003998 33.8175546,9.19339982 L33.8175546,9.19339982 Z M91.0105546,55.4653998 L104.750555,55.4653998 L104.750555,39.1743998 L91.0105546,39.1743998 L91.0105546,55.4653998 Z M68.9675546,84.0283998 C68.9675546,84.0283998 69.5345546,89.1313998 73.7865546,92.8163998 C78.0385546,96.5013998 75.3175546,102.7374 71.2915546,101.8864 C67.2665546,101.0364 65.5655546,97.8743998 66.4155546,93.2193998 C67.2665546,88.5643998 68.9675546,84.0283998 68.9675546,84.0283998 L68.9675546,84.0283998 Z M32.9675546,86.5793998 C32.9675546,86.5793998 29.2825546,72.4063998 37.7865546,65.8863998 C46.2905546,59.3673998 55.3605546,60.2173998 60.7465546,54.2643998 C66.1325546,48.3123998 68.6835546,39.5243998 68.6835546,39.5243998 M27.5155546,81.1273998 C27.5155546,81.1273998 23.8305546,66.9543998 32.3345546,60.4343998 C33.9377315,59.2054358 35.561024,58.2383654 37.1759571,57.4382363 C44.1273844,53.9941064 50.9239252,53.6431383 55.2945546,48.8123998 C60.6805546,42.8593998 63.2315546,34.0723998 63.2315546,34.0723998" />

        </svg>

        <h1 class="altheader efecto--intro"><?php the_sub_field("title"); ?></h1>

        <h2><?php the_sub_field("description"); ?></h2>

        <button href="<?php the_sub_field("call_to_action"); ?>" class="btn btn--well">Work in progress</button>

    </div> 


    <?php elseif(get_row_layout() == "gallery"): // Layout Gallery ?>

            <h2 class="galeria-fotos__title">Galeria de fotos</h2>

            <?php if (get_sub_field("description")): ?>

                <h3 class="galeria-fotos__description">
                    <?php the_sub_field("description"); ?>
                </h3>

            <?php endif ?>

        <div class="galeria-fotos">
            
            <?php
            $images = get_sub_field('gallery');
                 
            if( $images ): ?>
                
                <?php foreach( $images as $image ): ?>

                    <figure class="galeria-fotos__figure">

                        <a href="<?php echo $image['url']; ?>" data-lightbox="serie" data-title="<?php echo $image['description']; ?>">

                        <img src="<?php echo $image['sizes']['mini']; ?>" alt="<?php echo $image['alt']; ?>" class="img--circle" />

                        <figcaption class="galeria-fotos__caption">
                        <?php echo $image['caption']; ?></figcaption>

                        </a>
                    
                    </figure>
                
                <?php endforeach; ?>
                
            <?php endif; ?>

        </div>
        


    <?php elseif(get_row_layout() == "video"): // Layout Videos ?>

    <section class="video-main main__content">
        
        <h2 class="video-main__header"></h2>
        
    <?php if(get_sub_field('video_repeater')): ?>

    <?php while(has_sub_field('video_repeater')): ?>  

        <?php if (get_sub_field("btn")): ?>
            <a class="btn btn--invert" href="<?php the_sub_field('btn'); ?>"><?php the_sub_field('btn-title'); ?> &rarr;</a>
        <?php endif ?>
        
        <?php if (get_sub_field("video")): ?>
            <div class="video-main__iframe"><?php the_sub_field("video"); ?></div>
        <?php endif ?>

        <?php if (get_sub_field("descripcion")): ?>
            <p class="video-main__description"><?php the_sub_field("descripcion"); ?></p>
        <?php endif ?>
    
    <?php endwhile; ?>
    <?php endif; ?> 
    
    </section>



    <?php elseif(get_row_layout() == "post-carrousel"): // Posts Carousel ?>

    <?php 
        $loop = new WP_Query( array( 
            'post_type' => '',
            'category_name' => 'noticies',
            'posts_per_page' => '3',
            'orderby' => 'date',
            'order'   => 'DESC'
            )); 
    ?>

    <section class="slider">

    <?php the_sub_field("title"); ?>
    <?php the_sub_field("description"); ?>

    <div class="slider__slides">

    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
      
        <article class="slider__item">

        <? if ( has_post_thumbnail() ) { ?>

            <figure class="slider__figure">

                <?php the_post_thumbnail('thumbnail'); ?>
                <figcaption class="slider__caption">

                <small class="slider__meta-date"><?php the_date('j F Y'); ?></small>

                <span class="slider__title"><?php the_title(); ?></span>


                </figcaption>

            </figure>

                <a class="slider__btn slider__btn-call" href="<?php the_permalink(); ?>">Noticia completa &rarr;</a>

        <?}else {?>

            <a href="<?php the_permalink(); ?>">

                <figure class="slider__figure">

                    <img src="<?php echo get_bloginfo('template_directory');?>/assets/img/logo.svg" alt="logo">

                    <figcaption class="slider__caption"><?php the_title(); ?></figcaption>

                </figure>

            </a>
        
        <?}?>

        </article>
      
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
        
    </div>
    
        <!-- Prev/next controls -->
        <button class="slider__btn slider__btn-prev">&larr;</button>
        <button class="slider__btn slider__btn-next">&rarr;</button>
  
    </section>

    

    <?php elseif(get_row_layout() == "list-group-ul"): // Grupo Listas Desordenadas ?>
                
    <h2>Best Tools + Metodologies</h2>

    <section class="list-group">

    <?php
    // check if the repeater field has rows of data
    if( have_rows('lista') ):

        // loop through the rows of data
        while ( have_rows('lista') ) : the_row();
            ?>
            
                
            <ul class="list list--unordered">

            <li><?php the_sub_field('titulo'); ?></li>
            
            <?php while(has_sub_field('item_repeater')): ?>  
            <li class="list__item">
            <?php the_sub_field('item'); ?>
            </li>
                                        
            <?php endwhile; ?>
            </ul>

            <?
        endwhile;

    else :
    // no rows found
    endif;

    ?>
    </section>



    <?php elseif(get_row_layout() == "tienda"): // tienda ?>
    
    <section class="tienda main__content">

    <?php
    // check if the repeater field has rows of data
    if( have_rows('lista') ):

        // loop through the rows of data
        while ( have_rows('lista') ) : the_row();
            ?>
            
                
            <div class="grid">
            
            <?php while(has_sub_field('productos')): ?>  
            

                <div class="tienda__item">

                    <?php if (get_sub_field("nom")): ?>
                        <h3><?php the_sub_field('nom'); ?></h3>
                    <?php endif ?>

                    <?php if (get_sub_field("descripcio")): ?>
                        <?php $image = get_sub_field('imatge');
                    echo '<img src="'.$image['sizes']['medium'].'" />'; ?>
                    <?php endif ?>
                    
                    <?php if (get_sub_field("descripcio")): ?>
                        <p><?php the_sub_field('descripcio'); ?>€</p>
                    <?php endif ?>

                    <?php if (get_sub_field("preu")): ?>
                        <p><?php the_sub_field('preu'); ?>€</p>
                        <small>+ 1&#8364; de gastos d&#8217;enviament</small>
                    <?php endif ?>

                    <?php if (get_sub_field("boto_paypal")): ?>
                        <?php the_sub_field('boto_paypal'); ?>
                    <?php endif ?>

                </div>

                                        
            <?php endwhile; ?>

            </div>

            <?
        endwhile;

    else :
    // no rows found
    endif;

    ?>
    </section>


    <?php elseif(get_row_layout() == "links_gallery"): // Galeria de enlaces ?>

    <section class="galeria-links main__content">

        <div class="grid">

        <?php
        // check if the repeater field has rows of data
        if( have_rows('lista') ):

            // loop through the rows of data
            while ( have_rows('lista') ) : the_row();
                ?>
                
                <div class="galeria-links__item">

                    <?php the_sub_field('title'); ?>

                    <?php 
                    $image = get_sub_field('img');
                    $url = get_sub_field('url');
                    echo '<a href="'.$url.'" target="_new"><img src="'.$image['sizes']['thumbnail'].'" /></a>';
                    ?>

                    <p><?php the_sub_field('description'); ?></p>
              
                </div>

                <?
            endwhile;
            else :
            // no rows found
            endif;
            ?>
        </div>

    </section>



    <?php elseif(get_row_layout() == "content_summary"): // Sumario de contenido ?>
                
    <section class="content-summary main__content">
    
        <div class="grid">

        <?php
        // check if the repeater field has rows of data
        if( have_rows('lista') ):
        // loop through the rows of data
        while ( have_rows('lista') ) : the_row();
        ?>
                            
            <?php while(has_sub_field('apartado')): ?>  
                
            <div class="content-summary__item">

                <h3><?php the_sub_field('title'); ?></h3>

                <?php if (get_sub_field("asocia_imagen")) { ?>

                <div class="content-summary__img <?php the_sub_field('asocia_imagen'); ?>"></div>

                <?php } else { ?>


                <?php
                //$image = get_sub_field('img');
                //echo '<img src="'.$image['sizes']['medium'].'" />';
                ?>
                <!-- <img src="<?php //echo get_bloginfo('template_directory');?>/assets/img/logo.svg" alt="logo"> -->

     
                <?php } ?>




                <p><?php the_sub_field('text'); ?></p>

                <a class="btn" href="<?php the_sub_field('btn'); ?>"><?php the_sub_field('btn-title'); ?> &rarr;</a>
                
            </div>
                                            
            <?php endwhile; ?>

        <?
        endwhile;
        else :
        // no rows found
        endif;
        ?>

        </div>

    </section>




    <?php elseif(get_row_layout() == "sub_heading"): // Layout lista ?>
    
    <h3><?php the_sub_field('subheading'); ?> </h3>










        <?php endif; ?> 
 
    <?php endwhile; ?>

 <?php endif; ?>
