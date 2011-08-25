 
<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @form deyan/iconadmin
 *
 * Checkboxes to load specific sizes
 * 
 **/ 
	foreach ($vars['options'] as $option) {
	// load wich icons?
	echo '<div class="elgg-col elgg-col-1of6">';
		echo elgg_view("input/checkboxes", array(
			'options' => array($option => $option),
			'name' => "iconadmin_$option",
			'value' => (elgg_get_plugin_setting("iconadmin_$option", 'deyan') ? $option : ""),
		));

	echo '</div>';
	}

echo "<div class=\"clearfloat\">";
echo elgg_view('input/submit', array('value' => elgg_echo('save')));
echo '</div>';

