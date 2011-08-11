<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @page personalize
 * The settings page to let users personalize their environment
 * 
*/
// Make sure only valid users can see this
gatekeeper();

// Make sure we don't open a security hole ...
if ((!elgg_get_page_owner_entity()) || (!elgg_get_page_owner_entity()->canEdit())) {
	elgg_set_page_owner_guid(elgg_get_logged_in_user_guid());
}
$title = elgg_echo("deyan:personalize") . " - " . elgg_echo("deyan:{$vars['page']}");;

$content = elgg_view("deyan/personalize/{$vars['page']}", array('user' => $vars['user']));

$params = array(
	'content' => $content,
	'title' => $title,
);
$body = elgg_view_layout('one_sidebar', $params);

echo elgg_view_page($title, $body);
