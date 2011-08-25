 
<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @form deyan/panel
 *
 * Shows an checkbox option to show an avatar in user menu on panel
 * 
 **/ 
	
	// Use avatar on user menu?
	echo '<div>';
	
		echo elgg_view("input/checkboxes", array(
			'options' => array(elgg_echo('deyan:panel:avatar') => elgg_echo('deyan:panel:avatar')),
			'name' => 'avatar_panel',
			'value' => (elgg_get_plugin_user_setting('avatar_panel', $vars['user']->guid, 'deyan') ? elgg_echo('deyan:panel:avatar') : ""),
		));
	echo '</div>';


echo "<div class=\"clearfloat\">";
echo elgg_view('input/submit', array('value' => elgg_echo('save')));
echo '</div>';
