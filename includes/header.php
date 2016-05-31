<?
$require = array('includes/settings.php', 'classes/db.php');
foreach ($require as $file):
	require_once($file);
	echo 'Loaded ' . $file . '<br>';
endforeach;
$db = new db();

var_dump($db->query('show databases;'));


?>