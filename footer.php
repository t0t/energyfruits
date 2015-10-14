<footer class="main-footer">
  <div class="main-footer__adicional">
    <a href="https://www.facebook.com/energyfruits.es" target="_blank"><i class="icon-facebook"></i> Facebook</a>
  </div>
  <div class="main-footer__brand">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_logo_footer.svg" alt="logo">
    <address>Carrer Major, 4 43550 Ulldecona Tarragona, España <br>(+ 34) 97 757 31 84</address>
  </div>
  <div class="main-footer__adicional">
    <a href="/area-privada"><i class="icon-key"></i> Area privada</a>
  </div>
</footer>

<!-- Scroll to top button -->
<div class="scroll">
  <a class="scroll-top" href="#page-top"><i class="icon-arrow-up2">TOP</i></a>
</div>
    
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51443580-1', 'auto');
  ga('send', 'pageview');
</script>

<?php wp_footer(); ?>

</body>
</html>
