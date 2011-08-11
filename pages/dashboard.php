<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @page dashboard
 * The dashboard of the site
 * 
*/

// Ensure that only logged-in users can see this page
gatekeeper();

// Set context and title
elgg_set_context('dashboard');
elgg_set_page_owner_guid(elgg_get_logged_in_user_guid());
$title = elgg_echo('dashboard');

$params = array(
	'num_columns' => 3,
	'show_access' => false,
);
$widgets = elgg_view_layout('widgets', $params);

$body = elgg_view_layout('one_column', array('content' => $widgets));

echo elgg_view_page($title, $body);