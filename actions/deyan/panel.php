<?php
/**
  Save Custom Background
*/

$user = elgg_get_logged_in_user_entity();
    
$avatar = get_input('avatar_panel');
	if ($avatar) {
		elgg_set_plugin_user_setting('avatar_panel', 1, $user->guid, 'deyan');
	} else {
		elgg_unset_plugin_user_setting('avatar_panel', $user->guid, 'deyan');
	}
	