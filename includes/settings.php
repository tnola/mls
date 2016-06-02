<?
$settings = array(
	'dbHost'=>'localhost',
	'dbName'=>'mls',
	'dbUser'=> 'trevor',
	'dbPass'=>'test',
	'google_maps_api'=>'AIzaSyAo7gR0zy_Xgj7R1YlEgSvYhFOIhsPZdbQ'
);
foreach($settings as $setting => $value):
	$_SETTINGS[$setting] = $value;
	// echo 'Set ' . $setting . '<br>';
endforeach;

?>