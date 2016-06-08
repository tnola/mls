<?php
/* loader page: here we handle all the loading of settings and classes into the application */
$require = array('includes/settings.php', 'classes/db.php');
foreach ($require as $file):
	require_once($file);
	// echo 'Loaded ' . $file . '<br>';
endforeach;
$db = new db();



$_SETTINGS['properties']['display']['layout'] = 'column'; /* this will either be row or column */
$_SETTINGS['properties']['display']['order'] = array(1=>'map', 2=>'property_pane'); /* this will either be 1 or 2 as a key index and the value will be the meta key */ 

//var_dump($db->query('show databases;'));


?>