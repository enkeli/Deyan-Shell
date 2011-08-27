<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @language EN
 * This file contains the english language for the plugin
 * 
 **/ 


$english = array(
	      // // // // // // // // 
	      // 	ADMIN  
	      // // // // // // // // 
		      'admin:plugins:category:shell' => 'Shell',
		      'admin:appearance:icons' => 'Icons library',
		      'admin:appearance:theme' => 'Theme',
		      
		      //Icons library
		      'deyan:icons:library:how' => 'How to use the icons library?',
		      'deyan:icons:library:use' => 'Just use the function: deyan_view_icon($icon, $size, $float); <br>
						    Where: <br>
						    $icon  string The name of the icon to show (here you can find all the names).<br>
						    $size  int    The size of the icon to display. Options: 16, 32, 64. Default: 64.<br>
						    $float bool   If you want to float the icon. Default: false.',
		      
		      'deyan:icons:library:load' => 'Wich icons library do you want to load?',
		      'deyan:icons:library:sizes' => 'Wich sizes of this library do you want to load?',
		      'deyan:icons:library:preview' => 'Preview of ',
		      'deyan:icons:library:changed:default' => ' is now the default library.',
		      
		      //Theme
		      'deyan:theme:choose:default' => 'Choose the default theme:',
		      'deyan:theme:changed:default' => ' is now the default theme.',
		      
		      
	      // // // // // // // // 
	      // 	Appearance 
	      // // // // // // // // 
		      'deyan:appearance' => 'Appearance',
		      'deyan:personalize' => 'Personalize',
		      
		      // Icon library
		      'deyan:icons' => 'Icon Library',
		      'deyan:iconlib:choose' => 'Choose your icon library',
		      'deyan:iconlib:changed' => ' is now your icon library',
		      
		      // Themes
		      'deyan:theme' => 'Theme',
		      'deyan:theme:choose' => 'Choose your theme:',
		      'deyan:theme:changed' => ' is now your theme.',
		      
		      // Panel
		      'deyan:panel' => 'Panel',
		      'deyan:panel:general' => 'General settings for Panel',
		      'deyan:panel:avatar' => 'Show your avatar on user menu.',
		      
		      // Custom Background
		      'deyan:background' => 'Custom Background',
		      'deyan:background:custom' => 'Use a custom background',
		      'deyan:background:url' => 'URL of the custom background image:',
		      'deyan:background:fixed' => 'fixed',
		      'deyan:background:repeat' => 'repeat',
		      'deyan:background:repeat:none' => 'no repeat',
		      'deyan:background:repeat:x' => 'repeat x',
		      'deyan:background:repeat:y' => 'repeat y',
		      
		      // Scroll on windows
		      'deyan:scroll' => 'Scroll bars',
		      'deyan:scroll:use' => 'Use scroll bar on windows',
		      
		      
		      
		      
		      
	      // // // // // // // // 
	      // 	MISC 
	      // // // // // // // // 	
		      'deyan:register:welcome' => 'Welcome! In this page you can register to our network. When you were created your account,
						    you must validate it first before you can login. We will send a validation e-mail when you were finished registration.',
		  
);

add_translation('en', $english);
