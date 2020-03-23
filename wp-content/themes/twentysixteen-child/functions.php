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

/**
 * Homepage widget area
 */
function register_my_widgets(){
	register_sidebar( array(
		'name' => 'Homepage top',
		'id' => 'homepage-top-widget',
		'description' => 'Виджеты выводятся в хедере',
		'before_widget' => '<div class="widget homepage-top-widget-block">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'register_my_widgets' );