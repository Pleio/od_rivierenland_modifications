<?php

// exit();

// Get engine
require_once(dirname(dirname(dirname(dirname(dirname(__FILE__))))) . "/engine/start.php");

global $CONFIG;

$lang = $CONFIG->translations["nl"];
$found_lang = array();

foreach ($lang as $key => $val) {
	if (stristr($val, "blog") || stristr($val, "gebruiker")) {
		$found_lang[$key] = $val;
	}
}

echo var_export($found_lang, true);