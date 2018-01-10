<?php

function init_venues() {

	function cptui_register_my_cpts_venues() {

		/**
		 * Post Type: Venues.
		 */

		$labels = array(
			"name" => __( "Venues", "twentyseventeen" ),
			"singular_name" => __( "Venue", "twentyseventeen" ),
		);

		$args = array(
			"label" => __( "Venues", "twentyseventeen" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => true,
			"rest_base" => "",
			"has_archive" => false,
			"show_in_menu" => true,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => array( "slug" => "venues", "with_front" => true ),
			"query_var" => true,
			"menu_icon" => "dashicons-admin-site",
			"supports" => array( "title" ),
		);

		register_post_type( "venues", $args );
	}

	add_action( 'init', 'cptui_register_my_cpts_venues' );

	if( function_exists('acf_add_local_field_group') ):
		
	acf_add_local_field_group(array (
		'key' => 'group_5a0c93b41a252',
		'title' => 'Venues',
		'fields' => array (
			array (
				'key' => 'field_5a0c931527494',
				'label' => 'Name',
				'name' => 'name',
				'type' => 'text',
				'value' => NULL,
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'Radegast',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a0c932027495',
				'label' => 'Address',
				'name' => 'address',
				'type' => 'text',
				'value' => NULL,
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '1400 1st Ave. New York, NY 10159',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a0c984214273',
				'label' => 'Website',
				'name' => 'website',
				'type' => 'url',
				'value' => NULL,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'http://radegast.com',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'venues',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	endif;
};

/*
	Custom filtering for shows by before_date
 */

add_filter( 'rest_query_vars', function ( $valid_vars ) {
    return array_merge( $valid_vars, array( 'before_date', 'meta_query' ) );
} );

add_filter( 'rest_shows_query', function( $args, $request ) {
    $before_date   = $request->get_param( 'before_date' );

    if ( ! empty( $before_date ) ) {
        $args['meta_query'] = array(
            array(
                'key'     => 'date',
                'value'   => $before_date,
                'type'    => 'DATE',
                'compare' => '<',
            )
        );      
    }

    return $args;
}, 10, 2 );

/*
	Custom filtering for shows by after_date
 */

add_filter( 'rest_query_vars', function ( $valid_vars ) {
    return array_merge( $valid_vars, array( 'after_date', 'meta_query' ) );
} );

add_filter( 'rest_shows_query', function( $args, $request ) {
    $after_date   = $request->get_param( 'after_date' );

    if ( ! empty( $after_date ) ) {
        $args['meta_query'] = array(
            array(
                'key'     => 'date',
                'value'   => $after_date,
                'type'    => 'DATE',
                'compare' => '>',
            )
        );      
    }

    return $args;
}, 10, 2 );

/*
	Custom filtering for shows by venue
 */

add_filter( 'rest_query_vars', function ( $valid_vars ) {
    return array_merge( $valid_vars, array( 'venue', 'meta_query' ) );
} );

add_filter( 'rest_shows_query', function( $args, $request ) {
    $venue   = $request->get_param( 'venue' );

    if ( ! empty( $venue ) ) {
        $args['meta_query'] = array(
            array(
                'key'     => 'venue',
                'value'   => $venue,
                'compare' => '=',
            )
        );      
    }

    return $args;
}, 10, 2 );


?>