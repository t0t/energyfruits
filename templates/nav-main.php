
<nav class="nav-main" role="navigation">

	<input type="checkbox" id="trigger"/>
	<label for="trigger"></label>
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


<nav class="nav-barra">

	<?php

	$defaults = array(
		'theme_location'  => 'header_menu',
		'container'       => '',
		'container_class' => '',
		'menu_class'      => 'nav-header'
	);

	wp_nav_menu( $defaults );

	?>

</nav>
