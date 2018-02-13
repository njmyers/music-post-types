<?php

function init_videos() {

	function cptui_register_my_cpts_videos() {

		/**
		 * Post Type: Videos.
		 */

		$labels = array(
			"name" => __( "Videos", "" ),
			"singular_name" => __( "Video", "" ),
		);

		$args = array(
			"label" => __( "Videos", "" ),
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
			"rewrite" => array( "slug" => "videos", "with_front" => true ),
			"query_var" => true,
			"menu_icon" => "dashicons-video-alt2",
			"supports" => array( "title" ),
			"taxonomies" => array( "category" ),
		);

		register_post_type( "videos", $args );
	}

	add_action( 'init', 'cptui_register_my_cpts_videos' );

	if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5a0617e559a80',
		'title' => 'Videos',
		'fields' => array(
			array(
				'key' => 'field_5a0617f92a707',
				'label' => 'Track Name',
				'name' => 'track_name',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'Peg + Cat Theme Song',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5a0618122a708',
				'label' => 'Show Name',
				'name' => 'show_name',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'Peg + Cat',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5a0618202a709',
				'label' => 'TV Network',
				'name' => 'tv_network',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'PBS',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5a06182f2a70a',
				'label' => 'Production Company',
				'name' => 'production_company',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '9 Ate 7 Productions',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5a061b40a0125', ),
				'label' => 'Video Screenshot',
				'name' => 'video_screenshot',
				'type' => 'image',
				'instructions' => 'upload .jpg or .png',
				'required' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'mime_types' => 'jpg,png',
				'return_format' => 'array',
			),				
			array(
				'key' => 'field_5a061b1390125',
				'label' => 'Video Format',
				'name' => 'video_format',
				'type' => 'checkbox',
				'instructions' => 'Select Available Formats (More Is Better)',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'mp4' => 'mp4',
					'ogv' => 'ogv',
					'webm' => 'webm',
				),
				'allow_custom' => 0,
				'save_custom' => 0,
				'default_value' => array(
				),
				'layout' => 'horizontal',
				'toggle' => 0,
				'return_format' => 'value',
			),
			array(
				'key' => 'field_5a061a8e90124',
				'label' => 'MP4',
				'name' => 'mp4',
				'type' => 'file',
				'instructions' => 'MP4 with H.264 video encoding and MP3 or AAC audio',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_5a061b1390125',
							'operator' => '==',
							'value' => 'mp4',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'library' => 'all',
				'min_size' => '',
				'max_size' => '',
				'mime_types' => 'mp4',
			),
			array(
				'key' => 'field_5a061c2e90126',
				'label' => 'Ogv',
				'name' => 'ogv',
				'type' => 'file',
				'instructions' => 'Ogv video with FLAC or Opus encoded audio',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_5a061b1390125',
							'operator' => '==',
							'value' => 'ogv',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'library' => 'all',
				'min_size' => '',
				'max_size' => '',
				'mime_types' => 'ogv',
			),
			array(
				'key' => 'field_5a061c4c90127',
				'label' => 'WebM',
				'name' => 'webm',
				'type' => 'file',
				'instructions' => 'WebM video format',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_5a061b1390125',
							'operator' => '==',
							'value' => 'webm',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'library' => 'all',
				'min_size' => '',
				'max_size' => '',
				'mime_types' => 'webm',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'videos',
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