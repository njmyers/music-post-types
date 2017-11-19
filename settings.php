<?php

add_action( 'admin_init', 'music_post_types_settings' );

function music_post_types_settings() {
	register_setting( 'post-type-toggle', 'show_manager' );
	register_setting( 'post-type-toggle', 'track_manager' );
	register_setting( 'post-type-toggle', 'video_manager' );
	register_setting( 'post-type-toggle', 'band_manager' );
	register_setting( 'post-type-toggle', 'venue_manager' );
};

add_action('admin_menu', 'music_posts_menu');

function music_posts_menu() {
	add_menu_page('Music Post Types', 'Music Post Types', 'administrator', 'music-post-types', 'music_posts_settings_page', 'dashicons-admin-generic');
}

function music_posts_settings_page() {
?>
	<h2>Settings</h2>

	<form method="post" action="options.php">
		<?php settings_fields( 'post-type-toggle'); ?>
		<?php do_settings_sections( 'post-type-toggle' ); ?>
		<p>Activate Shows</p>
		<input type="checkbox" name="show_manager" value="1" <?php checked( '1', get_option( 'show_manager') ); ?> />
		<p>Activate Tracks</p>
		<input type="checkbox" name="track_manager" value="1" <?php checked( '1', get_option( 'track_manager') ); ?> />
		<p>Activate Videos</p>
		<input type="checkbox" name="video_manager" value="1" <?php checked( '1', get_option( 'video_manager') ); ?> />
		<p>Activate Bands</p>
		<input type="checkbox" name="band_manager" value="1" <?php checked( '1', get_option( 'band_manager') ); ?> />		
		<p>Activate Venues</p>
		<input type="checkbox" name="venue_manager" value="1" <?php checked( '1', get_option( 'venue_manager') ); ?> />		

		<?php submit_button(); ?>

<p><?php echo get_option('track_manager'); ?></p>
<p><?php echo 'text' ?></p>


	</form>

<?php
};

?>