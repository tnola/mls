<style type="text/css">
	#map {
		height: 100%;
		width: 100%;
	}

<?
	$contentArray['column'] = '.twoContent { width: 50%; height: 100%; }';
	$contentArray['row'] = '.twoContent { width: 100%; height 50%; }';

	echo $contentArray[$_SETTINGS['properties']['display']['layout']];
?>

</style>

<?
/* this is where we begin setting content into variables so we can determine placement easily */

/* here is where we  start the map */
unset($html);
$html = '<div class="twoContent">';
$html .= '	<div id="map"></div>';
$html .= '</div>';
$contentArray['map'] = $html;

/* here is where we start the properties pane */
unset($html);
$html = '<div class="twoContent">';
$html .= '	<p>Here is where we\'ll list some preoprties</p>';
$html .= '</div>';
$contentArray['property_pane'] = $html;


/* here is where we determine what goes where */
$order = $_SETTINGS['properties']['display']['order'];
for($i=1; $i<=count($order); $i++):
	echo $contentArray[$order[$i]];
endfor;

?>


<script>
	var map;
	function initMap() {
		map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: -34.397, lng: 150.644},
			zoom: 8
		});
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?=$_SETTINGS['google_maps_api'];?>&callback=initMap" async defer></script>