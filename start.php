<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 **/  

function deyan_init() {

    //Register & Load our libraries
	$lib_path = elgg_get_plugins_path() . 'deyan/lib/';
	elgg_register_library('deyan', $lib_path . 'deyan.php');
	elgg_register_library('iconslib', $lib_path . 'icons.php');
	elgg_register_library('panel', $lib_path . 'panel.php');
	elgg_register_library('themes', $lib_path . 'themes.php');
	
	elgg_load_library('deyan'); 
	elgg_load_library('iconslib'); 
	elgg_load_library('panel'); 
	elgg_load_library('themes'); 
	
    //Register our hook for the index
	elgg_register_plugin_hook_handler('index', 'system', 'deyan_index_handler');

    //Register actions
	$action_path = elgg_get_plugins_path() . 'deyan/actions/deyan';
	elgg_register_action("deyan/xor_selector", "$action_path/xor_selector.php");
	elgg_register_action("deyan/background", "$action_path/background.php");
	elgg_register_action("deyan/panel", "$action_path/panel.php");
	elgg_register_action("deyan/iconadmin", "$action_path/iconadmin.php");
	
        
    //page handlers
	elgg_register_page_handler('dashboard', 'deyan_dashboard_handler'); 
	elgg_register_page_handler('personalize', 'deyan_personalize_handler');
	elgg_register_page_handler('register', 'deyan_register_handler');
	elgg_register_page_handler('login', 'deyan_login_handler');
	elgg_register_page_handler('forgotpassword', 'deyan_forgotpassword_handler');
	
    //render admin section
	deyan_admin_init();

	
    //we don't want search box in the header
	elgg_unextend_view('page/elements/header', 'search/search_box');
    //also the search css is included on theme's panel css
	elgg_unextend_view('css/elgg', 'search/css');
    
    //Page menus
    $user = elgg_get_logged_in_user_entity();
    
		// Personalize > appearance
		elgg_register_menu_item('page', array(
			'name' => 'personalize_appearance',
			'text' => elgg_echo('deyan:appearance'),
			'href' => "personalize/appearance/{$user->username}",
			'context' => 'personalize',
		));
		
		// Personalize > theme
		if(elgg_get_plugin_setting('theme_selector', 'deyan') == 'yes') {
		elgg_register_menu_item('page', array(
			'name' => 'personalize_theme',
			'text' => elgg_echo('deyan:theme'),
			'href' => "personalize/theme/{$user->username}",
			'context' => 'personalize',
		));
		}
		// Personalize > icons
		if(elgg_get_plugin_setting('icon_selector', 'deyan') == 'yes') {
		elgg_register_menu_item('page', array(
			'name' => 'personalize_icons',
			'text' => elgg_echo('deyan:icons'),
			'href' => "personalize/icons/{$user->username}",
			'context' => 'personalize',
		));
		}
		// personalize > panel
		elgg_register_menu_item('page', array(
			'name' => 'personalize_panel',
			'text' => elgg_echo('deyan:panel'),
			'href' => "personalize/panel/{$user->username}",
			'context' => 'personalize',
		));


    // Register our panel modules. Also we register the user & start menus to be showed on the modules 
    // user_menu & start_menu.
    
    if (elgg_is_active_plugin('search')) {
			deyan_register_panel_mod('search', 'right', 1000);
		}
		
    if(elgg_is_logged_in()){
		
		
		
		// Mods for the left side of the panel
		
		deyan_register_panel_mod('dashboard', 'left', 600);
		deyan_register_panel_mod('start_menu');
			//Register the start menu
			elgg_register_menu_item('start', array(	
				'name' => 'activity',
				'href' => "activity",
				'text' => deyan_view_icon('world') . elgg_echo('activity'),
				'priority' => 10,
			));
			if (elgg_is_active_plugin('blog')) {
			elgg_register_menu_item('start', array(	
				'name' => 'blog',
				'href' => "/blog/owner/$user->username",
				'text' => deyan_view_icon('notepad') . elgg_echo('blog'),
				'priority' => 70,
			));
			}
			
			if (elgg_is_active_plugin('pages')) {
				elgg_register_menu_item('start', array(	
					'name' => 'pages',
					'href' => "/pages/owner/$user->username",
					'text' => deyan_view_icon('file') . elgg_echo('pages'),
					'priority' => 20,
				));
			}
			
			if (elgg_is_active_plugin('groups')) {
				elgg_register_menu_item('start', array(	
					'name' => 'groups',
					'href' => "/groups/member/$user->username",
					'text' => deyan_view_icon('friends') . elgg_echo('groups'),
					'priority' => 30,
				));
			}
			
			if (elgg_is_active_plugin('bookmarks')) {
				elgg_register_menu_item('start', array(	
					'name' => 'bookmarks',
					'href' => "/bookmarks/owner/$user->username",
					'text' => deyan_view_icon('bookmarks') . elgg_echo('bookmarks'),
					'priority' => 40,
				));
			}
			
			if (elgg_is_active_plugin('file')) {
				elgg_register_menu_item('start', array(	
					'name' => 'file',
					'href' => "/file/owner/$user->username",
					'text' => deyan_view_icon('hard-drive') . elgg_echo('files'),
					'priority' => 50,
				));
			}
			
			if (elgg_is_active_plugin('thewire')) {
				elgg_register_menu_item('start', array(	
					'name' => 'thewire',
					'href' => "/thewire/friends/$user->username",
					'text' => deyan_view_icon('wireless') . elgg_echo('thewire'),
					'priority' => 60,
				));
			}
				
		
		
		// Mods for the right side of the panel
		
		deyan_register_panel_mod('friends', 'right', 800);
		
		if (elgg_is_active_plugin('messages')) {
			deyan_register_panel_mod('messages', 'right', 600);
		}

		deyan_register_panel_mod('user_menu', 'right', 400);			
			//Register the user menu
			elgg_register_menu_item('user', array(
				'name' => 'usersettings',
				'href' => "settings/user/" . $user->username,
				'text' => deyan_view_icon('settings', 16) . elgg_echo('settings'),
				'priority' => 800,
			));

			elgg_register_menu_item('user', array(
				'name' => 'logout',
				'href' => "action/logout",
				'text' => deyan_view_icon('logout', 16) . elgg_echo('logout'),
				'is_action' => TRUE,
				'priority' => 1000,
			));
			
			elgg_register_menu_item('user', array(
				'name' => 'profile',
				'href' =>  $user->getURL(),
				'text' => deyan_view_icon('user', 16) . elgg_echo('profile'),
				'priority' => 200,
			));
			
			elgg_register_menu_item('user', array(
				'name' => 'personalize',
				'href' =>  "personalize/appearance/$user->username",
				'text' => deyan_view_icon('paint', 16) . elgg_echo('deyan:personalize'),
				'priority' => 400,
			));
			
			if (elgg_is_admin_logged_in()) {
			elgg_register_menu_item('user', array(
				'name' => 'administration',
				'href' => 'admin',
				'text' => deyan_view_icon('gear', 16) . elgg_echo('admin'),
				'priority' => 600,
			));
			}
		
	}
	else{
	// Mods for non-logged in people
		deyan_register_panel_mod('login_menu', 'right');
		deyan_register_panel_mod('register', 'right');
	}
	
	
    // Register default theme <glass>
	deyan_register_theme('glass');
	
    // Register the default icon library
	deyan_register_iconlib('gray');
	
    
}
 
 
 
 
 
function deyan_index_handler() {
	if (elgg_is_logged_in()) {
		forward('/dashboard');
	}
	else {
	deyan_load_page('index');
	}
	return true;
}





function deyan_dashboard_handler() {
	deyan_load_page('dashboard');
	return true;
}




function deyan_register_handler() {
	deyan_load_page('register');
	return true;
}




function deyan_login_handler() {
	deyan_load_page('login');
	return true;
}



function deyan_forgotpassword_handler() {
	deyan_load_page('forgotten_password');
	return true;
}




function deyan_personalize_handler($page) {

	if ($page[1]) {
		$user = get_user_by_username($page[1]);
		elgg_set_page_owner_guid($user->guid);
	} else {
		$user = elgg_get_logged_in_user_guid();
		$user = get_user($user);
		elgg_set_page_owner_guid($user->guid);
		if (!isset($page[0])) {
		forward("personalize/appearance/$user->username");
		}
		forward("personalize/$page[0]/$user->username");
	}

	elgg_push_breadcrumb(elgg_echo('deyan:personalize'), "personalize/appearance/$user->username");
	
	
	
	switch ($page[0]) {
		case 'theme':
			if(elgg_get_plugin_setting('theme_selector', 'deyan') != 'yes') {
				register_error(elgg_echo('deyan:theme:error'));
				forward('personalize');
			}
			elgg_push_breadcrumb(elgg_echo('deyan:theme'));
			break;
		case 'icons':
			if(elgg_get_plugin_setting('icon_selector', 'deyan') != 'yes') {
				register_error(elgg_echo('deyan:icons:library:error'));
				forward('personalize');
			}
			elgg_push_breadcrumb(elgg_echo('deyan:icons'));
			break;
		case 'panel':
			elgg_push_breadcrumb(elgg_echo('deyan:panel'));
			break;
		case 'appearance':
		default:
			break;
	}
	deyan_load_page('personalize', array('page' => $page[0], 'user' => $user));
	return true;
}

elgg_register_event_handler('init', 'system', 'deyan_init');

?>