<?php

function init_shows() {

	function cptui_register_my_cpts_shows() {

		/**
		 * Post Type: Shows.
		 */

		$labels = array(
			"name" => __( "Shows", "twentyseventeen" ),
			"singular_name" => __( "Show", "twentyseventeen" ),
		);

		$args = array(
			"label" => __( "Shows", "twentyseventeen" ),
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
			"rewrite" => array( "slug" => "shows", "with_front" => true ),
			"query_var" => true,
			"menu_icon" => "dashicons-calendar",
			"supports" => array( "title" ),
		);

		register_post_type( "shows", $args );
	}

	add_action( 'init', 'cptui_register_my_cpts_shows' );

	if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_5a0c9409667af',
		'title' => 'Shows',
		'fields' => array (
			array (
				'key' => 'field_5a0c971d4f6e2',
				'label' => 'Band',
				'name' => 'band',
				'type' => 'post_object',
				'value' => NULL,
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array (
					0 => 'bands',
				),
				'taxonomy' => array (
				),
				'allow_null' => 0,
				'multiple' => 0,
				'return_format' => 'id',
				'ui' => 1,
			),
			array (
				'key' => 'field_5a0c9367ecdc4',
				'label' => 'Venue',
				'name' => 'venue',
				'type' => 'post_object',
				'value' => NULL,
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array (
					0 => 'venues',
				),
				'taxonomy' => array (
				),
				'allow_null' => 0,
				'multiple' => 0,
				'return_format' => 'id',
				'ui' => 1,
			),
			array (
				'key' => 'field_5a0c938cecdc5',
				'label' => 'Date',
				'name' => 'date',
				'type' => 'date_picker',
				'value' => NULL,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'm/d/Y',
				'return_format' => 'm/d/Y',
				'first_day' => 1,
			),
			array (
				'key' => 'field_5a0c93abecdc6',
				'label' => 'Start Time',
				'name' => 'start_time',
				'type' => 'time_picker',
				'value' => NULL,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'g:i a',
				'return_format' => 'g:i a',
			),
			array (
				'key' => 'field_5a0c974723ef4',
				'label' => 'End Time',
				'name' => 'end_time',
				'type' => 'time_picker',
				'value' => NULL,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'g:i a',
				'return_format' => 'g:i a',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'shows',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	endif;

};

?>