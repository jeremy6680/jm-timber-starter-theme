<?php
/**
 *
 *
 * @package  WordPress
 * @subpackage  Timber
 */

//Timber::render( array( 'partials/sidebar.twig' ), $data );


$context = array();
$context['sidebar_main'] = Timber::get_widgets('sidebar--main');
Timber::render('partials/sidebar.twig', $context);