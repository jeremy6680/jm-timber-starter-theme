<?php

/* Create an options page */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

/* Use options info site wide — cf http://timber.github.io/timber/#acf-cookbook */
add_filter( 'timber_context', 'mytheme_timber_context'  );

function mytheme_timber_context( $context ) {
    $context['options'] = get_fields('option');
    return $context;
}