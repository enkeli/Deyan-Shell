<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view panel/modules/login_menu/content
 * This file holds the login form of the panel
 * 
 **/  

$login_url = elgg_get_site_url();
if (elgg_get_config('https_login')) {
	$login_url = str_replace("http", "https", elgg_get_site_url());
}

$body = elgg_view_form('login', array('action' => "{$login_url}action/login"), array('returntoreferer' => TRUE));

echo deyan_view_panel_module('login-menu', $body, 'small', deyan_view_icon('user-alt', 32));
?>