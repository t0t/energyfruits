<!-- Secondary menu 2 -->
<nav class="nav-secondary nav-secondary--dos" role="navigation">

  <?php
  $defaults = array(
    'theme_location'  => 'secondary_menu2',
    'container'       => '',
    'container_class' => '',
    'menu_class'      => ''
    );
  wp_nav_menu( $defaults );
  ?>

</nav>
