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

add_action( 'customize_register', 'tfc_customize_register' );

function tfc_customize_register( WP_Customize_Manager $wp_customize ) {
	$wp_customize->add_section( 'section_archives', array(
		'title' => __( 'Archives', 'twentyfifteen-child' ),
	) );
	$wp_customize->add_setting( 'show_excerpts_in_archives', array(
		'type'      => 'theme_mod',
		'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'show_excerpts_in_archives_control',
		array(
			'label'    => __( 'Only show excerpts on archive pages', 'twentyfifteen-child' ),
			'section'  => 'section_archives',
			'settings' => 'show_excerpts_in_archives',
			'type'     => 'checkbox',
		)
	) );
}