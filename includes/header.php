<?
$require = array('includes/settings.php', 'classes/db.php');
foreach ($require as $file):
	require_once($file);
	// echo 'Loaded ' . $file . '<br>';
endforeach;
$db = new db();

//var_dump($db->query('show databases;'));


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<style type="text/css">
		html {
			height: 100%;
		}
		body {
			margin: 0;
			height: 100%;
		}
		#container {
			height: calc(100% - 100px);
		}
	</style>
</head>
<body>
	<div style="height: 100px;"><button>LOL SUP</button></div>
	<div id="container">