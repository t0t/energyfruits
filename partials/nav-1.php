<!-- Secondary menu 1 -->
<nav class="nav-secondary nav-secondary--uno" role="navigation">

  <?php
  $defaults = array(
    'theme_location'  => 'secondary_menu1',
    'container'       => '',
    'container_class' => '',
    'menu_class'      => ''
  );

  wp_nav_menu( $defaults );
  ?>

</nav>
