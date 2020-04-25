<?php 
function university_post_types(){
        register_post_type('event',array(
            'capability_type' => 'event',
            'map_meta_cap' => true,
            'supports' => array('title', 'editor','excerpt','custom-fields'),
            'rewrite'=> array('slug' => 'events' ),
            'has_archive' => true,
            'public' => true, 
            'labels' => array(
                'name' => "Events",
                'add_new_item' => 'Add New Event',
                'edit_item' => 'Edit Event',
                'all_items' => 'All Events',
                'singular_name' => "Event"
            ),
            'menu_icon' => 'dashicons-calendar'
        ));
	register_post_type('testimonial',array(
		'supports' => array('title', 'editor','excerpt','comments'),
		'rewrite'=> array('slug' => 'testimonials' ),
		'has_archive' => true,
		'public' => true, 
		'labels' => array(
			'name' => "Testimonials",
			'add_new_item' => 'Add New Testimonial',
			'edit_item' => 'Edit Testimonial',
			'all_items' => 'All Testimonials',
			'singular_name' => "Testimonial"
		),
		'menu_icon' => 'dashicons-format-quote'
	));
       
}
 add_action('init', 'university_post_types');
?>