 
<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @form deyan/background
 *
 * Shows an input field to save the URL for the background image
 * 
 **/ 


/*
 Custom Background
*/

	// Use a custom background?
	$background .= '<div class="elgg-col elgg-col-3of5">';
		$background .= elgg_view("input/checkboxes", array(
			'options' => array(elgg_echo('deyan:background:custom') => elgg_echo('deyan:background:custom')),
			'name' => 'background_custom',
			'value' => (elgg_get_plugin_user_setting('background_custom', $vars['user']->guid, 'deyan') ? elgg_echo('deyan:background:custom') : ""),
		));

	// the URL of the background image
		$background .= elgg_echo('deyan:background:url');
		$background .= elgg_view("input/url", array(
			'name' => 'background_url',
			'value' => elgg_get_plugin_user_setting('background_url', $vars['user']->guid, 'deyan'),
		));
	$background .= '</div>';
	
	// other properties (fixed, repeat, etc)
	$background .= '<div class="elgg-col elgg-col-1of5">';
	
		$background .= elgg_view("input/checkboxes", array(
			'options' => array(elgg_echo('deyan:background:fixed') => elgg_echo('deyan:background:fixed')),
			'name' => 'background_fixed',
			'value' => (elgg_get_plugin_user_setting('background_fixed', $vars['user']->guid, 'deyan') ? elgg_echo('deyan:background:fixed') : ""),
		));
	$background .= '</div>';
	$background .= '<div class="elgg-col elgg-col-1of5">';
	
		$background .= elgg_view("input/radio", array(
			'options' => array(
				elgg_echo('deyan:background:repeat') => 'repeat',
				elgg_echo('deyan:background:repeat:none') => 'no-repeat',
				elgg_echo('deyan:background:repeat:x') => 'repeat-x',
				elgg_echo('deyan:background:repeat:y') => 'repeat-y',				
				),
			'name' => 'background_repeat',
			'value' => elgg_get_plugin_user_setting('background_repeat', $vars['user']->guid, 'deyan'),
		));
	$background .= '</div>';
	
echo elgg_view_module('info', elgg_echo('deyan:background'), $background);

/*
 Windows Scroll
*/
	// Use scroll on windows?
	$scroll .= '<div class="elgg-col elgg-col-3of5">';
		$scroll .= elgg_view("input/checkboxes", array(
			'options' => array(elgg_echo('deyan:scroll:use') => elgg_echo('deyan:scroll:use')),
			'name' => 'window_scroll',
			'value' => (elgg_get_plugin_user_setting('window_scroll', $vars['user']->guid, 'deyan') ? elgg_echo('deyan:scroll:use') : ""),
		));
	$scroll .= '</div>';
	
	if(elgg_get_plugin_setting('user_scroll','deyan') == 'yes') {	
echo elgg_view_module('info', elgg_echo('deyan:scroll'), $scroll);
		}

echo "<div class=\"clearfloat\">";
echo elgg_view('input/submit', array('value' => elgg_echo('save')));
echo '</div>';

