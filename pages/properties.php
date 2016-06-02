<style type="text/css">
	#map {
		height: 100%;
		width: 100%;
	}

	#slideout {
		background: #fff;
		box-shadow: 0 0 5px rgba(0,0,0,.3);
		color: #333;
		position: fixed;
		top: /*100px*/50%;
		left: -520px;
		width: 500px;
		-webkit-transition-duration: 0.3s;
		-moz-transition-duration: 0.3s;
		-o-transition-duration: 0.3s;
		transition-duration: 0.3s;
	}
	#slideout form {
		display: block;
		padding: 20px;
	}
	#slideout textarea {
		display:block;
		height: 100px;
		margin-bottom: 6px;
		width: 250px;
	}
	#slideout.on {
		left: 0;
	}

</style>

<div id="map"></div>

<div id="slideout">
    <form>
      <textarea class="form-control"></textarea>
      <input class="btn btn-primary" type="submit" value="Post feedback"></input>
    </form>
  </div>


<script>
	var map;
	function initMap() {
		map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: -34.397, lng: 150.644},
			zoom: 8
		});
	}

$('button').click(function(){
	$('#slideout').toggleClass('on');
});
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?=$_SETTINGS['google_maps_api'];?>&callback=initMap" async defer></script>