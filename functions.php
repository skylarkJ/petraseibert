<?php

add_theme_support( 'post-thumbnails' );
add_theme_support('html5', array('search-form'));

/** search field **/
function SearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}
add_filter('pre_get_posts','SearchFilter');



/** 
@param string $form Form HTML.
@return string Modified form HTML.
    function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
    </div>
    </form>';
 
    return $form;
    }
add_filter( 'get_search_form', 'wpdocs_my_search_form' ); **/
?>