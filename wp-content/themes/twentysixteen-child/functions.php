<?php

/**
 * Remove <br> and <p> tags for posts
 */
remove_filter( 'the_content', 'wpautop' );

/**
 * Remove 'Category' word from title
 */
add_filter( 'get_the_archive_title', 'artabr_remove_name_cat' );
function artabr_remove_name_cat( $title ){
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	}
	return $title;
}