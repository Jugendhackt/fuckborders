<div id="header">
	<h1 id="headline">Fuck Borders</h1>
</div>
<div id="map"></div>
<script src="includes/resources/leaflet/leaflet.js"></script>
<script>
	var map = L.map('map').setView([51.40, 1.00], 3);
	L.tileLayer('http://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
		attribution: false,
		maxZoom: 17
	}).addTo(map);
</script>
