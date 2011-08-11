<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @page login
 * Assembles and outputs the login page.
 */


// only logged out people need to login ¬¬
if (elgg_is_logged_in()) {
	forward();
}

$title = elgg_echo("login");


// create the login url - including switching to https if configured
$login_url = elgg_get_site_url() . 'action/login';
if (elgg_get_config('https_login')) {
	$register_url = str_replace("http:", "https:", $login_url);
}
$form_params = array('action' => $login_url);

$body_params = array();
$content = elgg_view_form('login', $form_params, $body_params);


$body = elgg_view_layout("one_sidebar", array(
					      'content' => $content,
					      'title'	=> $title,
					      ));

echo elgg_view_page($title, $body);
