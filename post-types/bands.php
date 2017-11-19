<?php

function init_bands() {

	function cptui_register_my_cpts_bands() {

		/**
		 * Post Type: Bands.
		 */

		$labels = array(
			"name" => __( "Bands", "twentyseventeen" ),
			"singular_name" => __( "Band", "twentyseventeen" ),
		);

		$args = array(
			"label" => __( "Bands", "twentyseventeen" ),
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
			"rewrite" => array( "slug" => "bands", "with_front" => true ),
			"query_var" => true,
			"menu_icon" => "dashicons-groups",
			"supports" => array( "title" ),
		);

		register_post_type( "bands", $args );
	}

	add_action( 'init', 'cptui_register_my_cpts_bands' );

	if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_5a0c99f403050',
		'title' => 'Bands',
		'fields' => array (
			array (
				'key' => 'field_5a0c993555b31',
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
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a0c993e55b32',
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
				'placeholder' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'bands',
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

?>
