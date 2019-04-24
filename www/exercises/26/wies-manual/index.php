<?php
/**
 * The main template file
 *
 * @package WordPress
 */

get_header();

// As long as we have posts to show.
while ( have_posts() ) :
	// Get the current post.
	the_post();

	// Print the title.
	echo '<h1>';
	the_title();
	echo '</h1>';

	// Print the content.
	the_content();
endwhile;

get_footer();
