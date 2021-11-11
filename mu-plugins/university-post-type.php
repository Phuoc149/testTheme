<?php 
function university_post_types(){
	register_post_type( 'event', array (
		// 'supports' => array ('title' , 'editor', 'excerpt'  )
		'public' => true,
		'labels' => array(
			'rewrite' => array('slug' =>'events'),
			'has_archive' => true,
			'name' => 'Events',
			'add_new_item'=> 'Add New Event',
			'edit_item' => 'Edit Event',
			'all_items' => 'All Event',
			'singular_name' => 'Event'
		),
		'menu_icon' => 'dashicons-calendar'
	) );
}
add_action( 'init', 'university_post_types' );