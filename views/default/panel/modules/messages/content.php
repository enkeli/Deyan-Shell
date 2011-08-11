<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view panel/modules/messages/content
 * This file echo the link to messages and count unread messages.
 * 
 **/ 
 $icon = deyan_view_icon('mail', 32); 
$num_messages = (int)messages_count_unread();
		if ($num_messages != 0) {
			$icon .= "<span class=\"messages-new\">$num_messages</span>";
			$messages = deyan_get_unread_messages();
			$body_vars = array(
				'folder' => 'inbox',
				'list' => $messages,
			);
			$content = elgg_view_form('messages/process', array(), $body_vars);
			echo deyan_view_panel_module('messages', $content, 'small', $icon);
		}
		else {
		echo deyan_view_panel_link('messages/inbox/' . elgg_get_logged_in_user_entity()->username, $icon);
		}

?> 
