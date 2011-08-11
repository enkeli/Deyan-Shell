<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view deyan/appearance/theme
 * The usersettings page for themes
 * 
 **/  

// Get the themes list from the plugin's directory and set each as an option.
$themes = deyan_get_theme_list();
 foreach($themes as $theme) {
	    $preview = deyan_get_theme_preview($theme);
	    $options[$theme . '<br>' . $preview] = $theme;
	}

// Display the form to choose a theme from theme list.
$form_vars = array('id' => 'deyan-theme-settings-form');
$body_vars = array(
	'value'		=> elgg_get_plugin_user_setting('theme', $vars['user']->guid, 'deyan'),
	'name'		=> 'theme_user',
	'options' 	=> $options,
	'class'		=> 'deyan-xor-selector',
	);
$form = elgg_view_form('deyan/xor_selector', $form_vars, $body_vars);

echo elgg_view_module('info', elgg_echo('deyan:theme:choose'), $form);
