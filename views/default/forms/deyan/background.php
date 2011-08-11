 
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
	
	// Use a custom background?
	echo '<div class="elgg-col elgg-col-3of5">';
		echo elgg_view("input/checkboxes", array(
			'options' => array(elgg_echo('deyan:background:custom')),
			'name' => 'background_custom',
			'value' => (elgg_get_plugin_user_setting('background_custom', $vars['user']->guid, 'deyan') ? elgg_echo('deyan:background:custom') : ""),
		));

	// the URL of the background image
		echo elgg_echo('deyan:background:url');
		echo elgg_view("input/url", array(
			'name' => 'background_url',
			'value' => elgg_get_plugin_user_setting('background_url', $vars['user']->guid, 'deyan'),
		));
	echo '</div>';
	
	// other properties (fixed, repeat, etc)
	echo '<div class="elgg-col elgg-col-1of5">';
	
		echo elgg_view("input/checkboxes", array(
			'options' => array(elgg_echo('deyan:background:fixed')),
			'name' => 'background_fixed',
			'value' => (elgg_get_plugin_user_setting('background_fixed', $vars['user']->guid, 'deyan') ? elgg_echo('deyan:background:fixed') : ""),
		));
	echo '</div>';
	echo '<div class="elgg-col elgg-col-1of5">';
	
		echo elgg_view("input/radio", array(
			'options' => array(
				elgg_echo('deyan:background:repeat') => 'repeat',
				elgg_echo('deyan:background:repeat:none') => 'no-repeat',
				elgg_echo('deyan:background:repeat:x') => 'repeat-x',
				elgg_echo('deyan:background:repeat:y') => 'repeat-y',				
				),
			'name' => 'background_repeat',
			'value' => elgg_get_plugin_user_setting('background_repeat', $vars['user']->guid, 'deyan'),
		));
	echo '</div>';

echo "<div class=\"clearfloat\">";
echo elgg_view('input/submit', array('value' => elgg_echo('save')));
echo '</div>';

