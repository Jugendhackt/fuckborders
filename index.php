<?php
define("SECURITY", "TRUE");
include('includer.php');
//http://preview.49o9pdiox0f6rsl0n4ahk4adwvcxr6nz4fqw8chpmygb9.box.codeanywhere.com/
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Fuck Borders</title>
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="lib/leaflet.css" />
		<link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div id="header"><h1 id="headline">Fuck Borders</h1></div>
		<div id="map"></div>
		<script src="lib/leaflet.js"></script>
		<script>
		var map = L.map('map').setView([51.40, 1.00], 3);
		L.tileLayer('http://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
		attribution: false,
		maxZoom: 17
		}).addTo(map);
		</script>
	</body>
</html>