<?php
/**
 * @package Deyan
 * @author Angel Gabriel
 * @web http://angelgabriel.tk
 * @mail angel.wrt@gmail.com
 *
 * @view panel/modules/friends/content
 * This file shows the link to the friends page
 * 
 **/ 
$user = elgg_get_logged_in_user_entity();
echo deyan_view_panel_link("friends/$user->username", deyan_view_icon('friends', 32));
?> 
