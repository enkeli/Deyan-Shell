<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @page register
 * Assembles and outputs the registration page.
 *
 * Since elgg 1.8, registration can be disabled via administration.  If this is
 * the case, calls to this page will forward to the network front page.
 *
 * If the user is logged in, this page will forward to the network
 * front page.
 */

// check new registration allowed
if (elgg_get_config('allow_registration') == false) {
	register_error(elgg_echo('registerdisabled'));
	forward();
}

$friend_guid = (int) get_input('friend_guid', 0);
$invitecode = get_input('invitecode');

// only logged out people need to register
if (elgg_is_logged_in()) {
	forward();
}

$title = elgg_echo("register");


// create the registration url - including switching to https if configured
$register_url = elgg_get_site_url() . 'action/register';
if (elgg_get_config('https_login')) {
	$register_url = str_replace("http:", "https:", $register_url);
}
$form_params = array('action' => $register_url);

$body_params = array(
	'friend_guid' => $friend_guid,
	'invitecode' => $invitecode
);
$content = elgg_view_form('register', $form_params, $body_params);

$sidebar = elgg_view_module('aside', $title, elgg_view('deyan/helpers/register_welcome'));

$body = elgg_view_layout("one_sidebar", array(
					      'content' => $content,
					      'title'	=> $title,
					      'sidebar' => $sidebar,
					      ));

echo elgg_view_page($title, $body);
