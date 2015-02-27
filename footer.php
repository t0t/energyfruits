    <footer class="main-footer">



        <?php //$defaults=array('theme_location'=>'footer_menu','menu_class'=>'nav-footer'); wp_nav_menu($defaults);?> 

        <div class="main-footer__searchform">
            
            <?php get_search_form(); ?>
        
        </div>


        <div class="main-footer__brand">

            <img src="<?php echo get_bloginfo('template_directory');?>/assets/img/bg_logo_footer.svg" alt="logo">
            
            <address>Carrer Major, 4 43550 Ulldecona Tarragona, España <br>(+ 34) 97 757 31 84</address>

            <a class="scroll-top" href="#page-top"><i class="icon-arrow-up2"></i></a>

            <!-- <h4 class="main-footer__brand__name">
            <?php //bloginfo('name'); ?>
            </h4> -->


        </div>


        <div class="main-footer__adicional">

            <a href="https://www.facebook.com/energyfruits.es" target="_blank"><i class="icon-facebook"></i> Facebook</a>

            <a href="/area-privada"><i class="icon-key"></i> Area privada</a>

        </div>
    
    </footer>

    
    <div class="main-footer__credits">

        <aside>

            <span>

                <?php bloginfo('name'); ?> <?php echo date('Y'); ?> &sdot;
                <a href="/aviso-legal/">Aviso Legal</a> &sdot;
                <?php edit_post_link('Editame ') ?>
                <?php wp_loginout(); ?> &sdot;

            </span>

                    <span rel="author">

                        <a href="http://sergiofores.net" target="_blank">Design: <i class="icon-logo_sf2"></i></a> 

                    </span>

                </aside>

    </div>
    

    <?php wp_footer(); ?>

</body>
</html>