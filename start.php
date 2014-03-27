<?php
/**
 * plugin start file, included when the plugin gets loaded
 */

elgg_register_event_handler("plugins_boot", "system", "od_rivierenland_modifications_boot", 99999999);

function od_rivierenland_modifications_boot() {
	// load custom translations for this plugin
	include_once(dirname(__FILE__) . "/vendors/od_rivierenland_modifications/languages/nl.php");
}
