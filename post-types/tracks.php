<?php

function init_tracks() {

	function cptui_register_my_cpts_tracks() {

		/**
		 * Post Type: Tracks.
		 */

		$labels = array(
			"name" => __( "Tracks", "" ),
			"singular_name" => __( "Track", "" ),
		);

		$args = array(
			"label" => __( "Tracks", "" ),
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
			"rewrite" => array( "slug" => "tracks", "with_front" => true ),
			"query_var" => true,
			"menu_icon" => "dashicons-format-audio",
			"supports" => array( "title" ),
			"taxonomies" => array( "category" ),
		);

		register_post_type( "tracks", $args );
	}

	add_action( 'init', 'cptui_register_my_cpts_tracks' );

	if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5a046f556a112',
		'title' => 'Tracks',
		'fields' => array(
			array(
				'key' => 'field_5a047326209ee',
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
				'placeholder' => 'Lily 110-140',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5a047311209ed',
				'label' => 'Artist Name',
				'name' => 'artist_name',
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
				'placeholder' => 'Dave\'s True Story',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5a04733c209ef',
				'label' => 'Composer Name',
				'name' => 'composer_name',
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
				'placeholder' => 'David Cantor',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5a047349209f0',
				'label' => 'Label Name',
				'name' => 'label_name',
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
				'placeholder' => 'Chesky Records',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5a047397209f1',
				'label' => 'Album Name',
				'name' => 'album_name',
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
				'placeholder' => 'Unauthorized',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5a0473b4209f2',
				'label' => 'Instrumentation',
				'name' => 'instrumentation',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'row',
				'button_label' => 'Add Instrument',
				'sub_fields' => array(
					array(
						'key' => 'field_5a0473d1209f3',
						'label' => 'Instrument',
						'name' => 'instrument',
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
						'placeholder' => 'Trombone',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
			array(
				'key' => 'field_5a0624364ef9c',
				'label' => 'Audio Format',
				'name' => 'audio_format',
				'type' => 'checkbox',
				'instructions' => 'More is better... especially ogg.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'mp3' => 'mp3',
					'ogg' => 'ogg',
					'wav' => 'wav',
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
				'key' => 'field_5a047401209f4',
				'label' => 'MP3',
				'name' => 'mp3',
				'type' => 'file',
				'instructions' => 'MP3 audio format',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_5a0624364ef9c',
							'operator' => '==',
							'value' => 'mp3',
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
				'mime_types' => 'mp3',
			),
			array(
				'key' => 'field_5a0624974ef9d',
				'label' => 'Ogg',
				'name' => 'ogg',
				'type' => 'file',
				'instructions' => 'Ogg FLAC audio format',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_5a0624364ef9c',
							'operator' => '==',
							'value' => 'ogg',
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
				'mime_types' => 'ogg',
			),
			array(
				'key' => 'field_5a06251693125',
				'label' => 'WAV',
				'name' => 'wav',
				'type' => 'file',
				'instructions' => 'WAV PCM audio format',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_5a0624364ef9c',
							'operator' => '==',
							'value' => 'wav',
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
				'max_size' => 28,
				'mime_types' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'tracks',
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