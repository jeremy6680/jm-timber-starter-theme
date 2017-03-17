<?php 
// Register Sidebars

$class_sidebar = array(
	'id'            => 'main_sidebar',
	'class'         => 'sidebar--main',
	'name'          => __( 'Main Sidebar', 'tnj' ),
	'description'   => __( 'Widgets to show up on the sidebar of most pages.', 'tnj' ),
	'before_title'  => '<h3 class="widget__title">',
	'after_title'   => '</h3>',
	'before_widget' => '<li class="">',
);
register_sidebar( $class_sidebar );