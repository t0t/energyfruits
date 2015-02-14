    <footer class="main-footer grid">

        <?php //$defaults=array('theme_location'=>'footer_menu','menu_class'=>'nav-footer'); wp_nav_menu($defaults);?> 

        <div class="main-footer__brand">

            <img src="<?php echo get_bloginfo('template_directory');?>/assets/img/logo.svg" alt="logo">
            
            <address>Carrer Major, 4 43550 Ulldecona Tarragona, España (+ 34) 97 757 31 84</address>

            <!-- <h4 class="main-footer__brand__name">
            <?php //bloginfo('name'); ?>
            </h4> -->
            
        </div>
        
        <div>

            <a class="btn btn--footer btn--large" href="/area-privada">Area privada</a>

            <div class="main-footer__searchform">
                <?php get_search_form(); ?>
            </div>
            
        </div>

    </footer>

    <div class="main-footer__credits">

        <a class="scroll-top" href="#page-top"><i class="icon-arrow-up2"></i>top</a>
        
        <aside>

        <small>
            <address><?php bloginfo('name'); ?> <?php echo date('Y'); ?></address> 
            Texto legal, privacidad...
            <?php edit_post_link('&oplus; Editar ') ?> &sdot;
            <?php wp_loginout(); ?> &sdot;
        </small>

            
            <small rel="author">

                <a href="http://sergiofores.net" target="_blank"> <i class="icon-logo_sf2"></i></a> 

            </small>

        </aside>

    </div>
    
    <?php wp_footer(); ?>

</body>
</html>