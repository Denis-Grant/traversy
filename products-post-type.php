<?php
// CUSTOM POST TYPES
function acentus_post_type () {
	register_post_type('product', array(
		'supports' => array ('excerpt', 'thumbnail', 'title'),
		'public' => true,
		'labels' => array(
			'name' => 'Products',
			'add_new_item' => 'New Product',
			'edit_item' => 'Edit Product',
        'all_items' => 'All Products'
		),
		'menu_icon' => 'dashicons-products',
        

    ));
} 
add_action ('init','acentus_post_type' );
