<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view admin/appearance/theme
 * The admin page for themes
 * 
 **/  

// Get the themes list from the plugin's directory and set each as an option.
$themes = deyan_get_theme_list();
 foreach($themes as $theme) {
	    
	    $preview = deyan_get_theme_preview($theme);
	    $options[$theme . '<br>' . $preview] = $theme;
	}


$form_vars = array('id' => 'deyan-theme-settings-form');
$body_vars = array(
	'value'		=> elgg_get_plugin_setting('theme', 'deyan'),
	'name'		=> 'theme',
	'options' 	=> $options,
	'class'		=> 'deyan-xor-selector',
	);
$form = elgg_view_form('deyan/xor_selector', $form_vars, $body_vars);

echo elgg_view_module('inline', elgg_echo('deyan:theme:choose:default'), $form);