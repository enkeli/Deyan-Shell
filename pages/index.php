<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @page index
 * The front page of the site (only logged out persons can see this, logged in users will be redirected to dashboard)
 * 
*/

$title = elgg_echo('');
$content = elgg_view('deyan/helpers/index');
$body = elgg_view_layout('one_column', array('content' => $content));

echo elgg_view_page($title, $body);


