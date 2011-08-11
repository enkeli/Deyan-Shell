<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @form deyan/xor_selector
 *
 * The XOR selector shows a radio menu containing the options and only one can be selected at a time.
 * 
 **/ 



	echo '<div>';
	
		echo elgg_view("input/radio", array(
			'name' => $vars['name'],
			'value' => $vars['value'],
			'options' => $vars['options'],
			'class' => $vars['class'],
		));
	echo '</div>';

echo "<div class=\"clearfloat\">";
echo elgg_view('input/submit', array('value' => elgg_echo('save')));
echo '</div>';
