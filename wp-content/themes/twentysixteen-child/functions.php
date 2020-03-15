<?php

/**
 * Remove <br> and <p> tags for posts
 */
remove_filter( 'the_content', 'wpautop' );