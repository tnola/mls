<?
require_once('includes/loader.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>


	<style type="text/css">
		html {
			height: 100%;
		}
		body {
			margin: 0;
			height: 100%;
			font-family: 'Open Sans', sans-serif;
		}
		#container {
			height: calc(100% - 70px);
			width: 100%;
			display: flex;
		}
		#header {
			height: 70px;
			background-color: rgba(183,160,119,0.75);
			box-shadow: 0px 1px 5px rgba(0,0,0,0.5);
			color: rgba(255,255,255,1);
		}
		#topBar {
			margin: 0;
			list-style: none;
		}
		#topBar li {
			float: left;
			width:50%;
			height: 100%;
			vertical-align: middle;
			font-family: 'Monoton', cursive;
		}
	</style>
</head>
<body>
	<div id="header">
		<ul id="topBar">
			<li>Some Item</li>
			<li>Another Item</li>
		</ul>
	</div>

	<div id="container">