<?php
/**
 *
 *
 * @package  WordPress
 * @subpackage  Timber
 */

//Timber::render( array( 'partials/sidebar.twig' ), $data );


$context = array();
$context['dynamic_sidebar'] = Timber::get_widgets('main_sidebar');
Timber::render('partials/sidebar.twig', $context);