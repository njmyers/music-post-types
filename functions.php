<?php

/*

Plugin Name: Musician Post Types
Plugin URI: http://github.com:njmyers/musician-post-types
Description: Post Types for cataloging music posts
Version: 1.1.5
Author: Nick Myers

 */

include('post-types/bands.php');
include('post-types/venues.php');
include('post-types/shows.php');
include('post-types/videos.php');
include('post-types/tracks.php');

init_bands();
init_shows();
init_venues();
init_tracks();
init_videos();

?>