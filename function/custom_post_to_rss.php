<?php

//add events to main rss feed
/*
function myfeed_request($qv) {
	if (isset($qv['feed']) && !isset($qv['post_type']))
		$qv['post_type'] = array('sp_events');
	return $qv;
}
add_filter('request', 'myfeed_request');
*/


// Add custom post types - cpt1 and cpt2 to main RSS feed.
function mycustomfeed_cpt_feed( $query ) {
        if ( $query->is_feed() )
            $query->set( 'post_type', array( 'post', 'sp_events' ) );
        return $query;
}
add_filter( 'pre_get_posts', 'mycustomfeed_cpt_feed' );