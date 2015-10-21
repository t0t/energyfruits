<?php

	add_theme_support('html5', array('search-form'));
	add_theme_support('post-thumbnails');
	add_image_size('mini', 75, 75, true);

	// register_sidebars( 2, array( 'name' => 'Zona %d' ) ); //sidebar-1, sidebar-2
	register_nav_menus( array(
		'main_menu' => 'Main menu',
		'secondary_menu1' => 'Secondary menu 1',
		'secondary_menu2' => 'Secondary menu 2',
		'fixed_menu' => 'Menu Estatico',
	));
	register_sidebar( array(
		'name' => 'Barra lateral derecha',
		'id' => 'sidebar-custom',
		'description' => 'Barra lateral para que pongas lo que te de la gana',
		'class' => 'clase-1',
		'before_widget' => '<div class="widget widget--wp">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

	//Page Slug Body Class
	function add_slug_body_class($classes) {
		global $post;
		if (isset($post)) {
			$classes[] = $post->post_type . '-' . $post->post_name;
		}
		return $classes;
	}
	add_filter('body_class', 'add_slug_body_class');

	// Allows svg load into media uploader
	//css-tricks.com/snippets/wordpress/allow-svg-through-wordpress-media-uploader
	function cc_mime_types($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');

	/**
	 * Custom functions
	 */
	// max excerpt
	function new_excerpt_length($length) {
		return 10;
	}
	add_filter('excerpt_length', 'new_excerpt_length');

	/* No me carges los scripts de cf7, los cargare luego solo para contacto */
	add_filter('wpcf7_load_js', '__return_false');
	add_filter('wpcf7_load_css', '__return_false');

	// Ponme el lightbox2.js en el footer y sólo en los single
	function lightbox_js() {
		if (is_single()) {
			wp_enqueue_script('lightbox2', get_template_directory_uri() . '/assets/bower_components/lightbox2/js/lightbox.min.js', true);
		}
	}
	add_action('wp_footer', 'lightbox_js');

	// quita admin bar
	add_filter('show_admin_bar', '__return_false');

	// wpautop
	remove_filter('the_content', 'wpautop');
	remove_filter('the_excerpt', 'wpautop');

	// CPT's
	add_action('init', 'create_post_type');
	function create_post_type() {
		register_post_type('cpt', array(
			'labels' => array('name' => __('Productos'), 'singular_name' => __('Producto')),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'producto'),
			'taxonomies' => array('category'),
			'supports' => array('title', 'editor', 'thumbnail'),
		)
		);
	}

	// http://wordpress.stackexchange.com/questions/6731/if-is-custom-post-type
	function is_post_type($type) {
		global $wp_query;
		if ($type == get_post_type($wp_query->post->ID)) {
			return true;
		}

		return false;
	}

	// Quitame los metaboxes que me sobran
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'feed_links');
	remove_action('wp_head', 'feed_links_extra', 3);

	function quita_metaboxes_admin() {
		remove_meta_box('postexcerpt', 'page', 'normal');
		remove_meta_box('authordiv', 'page', 'normal');
		remove_meta_box('commentsdiv', 'page', 'normal');
		remove_meta_box('commentstatusdiv', 'page', 'normal');
		remove_meta_box('trackbacksdiv', 'page', 'normal');
		remove_meta_box('postexcerpt', 'page', 'normal');
		remove_meta_box('revisionsdiv', 'page', 'normal');
		remove_meta_box('postcustom', 'page', 'normal');
	}
	add_action('admin_menu', 'quita_metaboxes_admin');



/*
 * Enqueue Scripts and Styles
 */
	function t0theme_scripts() {
		// wp_deregister_script( 'jquery' ); //Ya lo incluyo en main.min.js
		// wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/bower_components/slick-carousel/slick/slick.css');
		wp_enqueue_style('t0theme', get_stylesheet_uri());

		wp_register_script( 'slick-carousel',
		get_template_directory_uri() . '/assets/bower_components/slick-carousel/slick/slick.js' );

		wp_enqueue_script( 't0theme_scripts',
		get_template_directory_uri() . '/assets/js/main.min.js',
		array('slick-carousel'), '', true );
	}
	add_action('wp_enqueue_scripts', 't0theme_scripts', 100);
