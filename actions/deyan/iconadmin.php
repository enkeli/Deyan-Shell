<?php
/**
  Save Custom Background
*/
   
   
$iconlib = deyan_get_iconlib();
$iconcss = deyan_get_iconlib_css($iconlib);

foreach ($iconcss as $css) {
$option = get_input("iconadmin_$css");
	if ($option) {
		elgg_set_plugin_setting("iconadmin_$css", 1, 'deyan');
	} else {
		elgg_unset_plugin_setting("iconadmin_$css", 'deyan');
	}
	
}
	

	
/******************************
 UPGRADE SIMPLECACHE
******************************/
    elgg_regenerate_simplecache();