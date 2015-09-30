<!-- Nav out of canvas -->
<nav class="nav-main" role="navigation">

  <input type="checkbox" id="toggle-btn"/>
  <label for="toggle-btn"></label>

  <?php
    $defaults = array(
      'theme_location'  => 'fixed_menu',
      'container'       => '',
      'container_class' => '',
      'menu_class'      => 'nav-main__overlay'
    );

    wp_nav_menu( $defaults );
  ?>

</nav>
