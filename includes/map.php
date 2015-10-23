<div id="header">
	<h1 id="headline">Fuck Borders</h1>
</div>
<div id="map"></div>
<script src="includes/resources/leaflet/leaflet.js"></script>
<script>
	var map = L.map('map').setView([46.40, 30.00], 5);
	L.tileLayer('http://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
		attribution: false,
		maxZoom: 17
	}).addTo(map);
	var marker = L.marker([46.5, 30.5]).addTo(map);
	marker.bindPopup("Permanantly Border, NATO-burbwire on the ground.");
	
</script>
<?php
$mysql = new mysql;
$mysql->database_connect();
$points = new mysql;
$points->database_read_Points();

?>