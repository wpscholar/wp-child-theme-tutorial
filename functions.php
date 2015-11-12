<?php

add_action( 'wp_enqueue_scripts', 'tfc_wp_enqueue_scripts' );

function tfc_wp_enqueue_scripts() {
	wp_enqueue_style( 'twentyfifteen-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'twentyfifteen-child-style', get_stylesheet_directory_uri() . '/style.css' );
}