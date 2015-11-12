<?php

add_action( 'after_setup_theme', 'tfc_after_setup_theme', 11 );

function tfc_after_setup_theme() {
	register_nav_menu( 'footer_menu', __( 'Footer Menu', 'twentyfifteen-child' ) );
}

add_action( 'widgets_init', 'tfc_widgets_init' );

function tfc_widgets_init() {
	register_sidebar( array(
		'id'            => 'footer-widget-area',
		'name'          => __( 'Footer Widget Area', 'twentyfifteen-child' ),
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyfifteen-child' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
	) );
}

add_action( 'wp_enqueue_scripts', 'tfc_wp_enqueue_scripts' );

function tfc_wp_enqueue_scripts() {
	wp_enqueue_style( 'twentyfifteen-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'twentyfifteen-child-style', get_stylesheet_directory_uri() . '/style.css' );
}