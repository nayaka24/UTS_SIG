<!DOCTYPE html>
<html>
<head>
	<title>
		UTS Sistem Informasi Geografis
	</title>
	<h1><center>UTS-Sistem Informasi Geografis</center></h1>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
	   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
	   crossorigin=""></script>

   <style type="text/css">
   	#map { height: 500px;
			width: 600px;
	}
   </style>
</head>

<body>
	 <div id="map"></div>

</body>
   <script type="text/javascript">
   		var mymap = L.map('map').setView([-5.1284223,105.2046377], 16);

   		L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
	    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	    maxZoom: 20,
	    id: 'mapbox/streets-v11',
	    tileSize: 512,
	    zoomOffset: -1,
	    accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
		}).addTo(mymap);

		var iconToko = L.marker({
			iconUrl: 'asset/toko.png',
			iconSize:     [38, 95],
			shadowSize:   [50, 64],
			iconAnchor:   [22, 94],
			shadowAnchor: [4, 62],
			popupAnchor:  [-3, -76]
			});

		//lokasi toko
		var distributornasasukajawa = L.marker(
			[-5.1292186, 105.2032873], 
			{icon: iconToko})
			.addTo(mymap).bindTooltip("toko Distributor Nasa Sukajawa");
		var CuciSteamBray = L.marker(
			[-5.1303429, 105.2028865],
			{icon: iconToko})
			.addTo(mymap).bindPopup("toko Cuci Steam Bray");
		var ShepiaIsabella = L.marker(
			[-5.1301959, 105.2025062],
			{icon: iconToko})
			.addTo(mymap).bindPopup("toko Shepia Isabella");
		var WarungAriPadang = L.marker(
			[-5.1300149, 105.1993596],
			{icon: iconToko})
			.addTo(mymap).bindPopup("Warung Ari Padang");
		var WaroengHjHamid = L.marker([-5.129048, 105.1976237], {icon: iconToko}).addTo(mymap).bindPopup("Waroeng Hj.Hamid");
		var efriDrwSkincarelamteng = L.marker([-5.1278874, 105.1966751], {icon: iconToko}).addTo(mymap).bindPopup("toko Efri Drw Skincare lam-teng");
		var warungSitiisnaini = L.marker([-5.1289167, 105.2066517], {icon: iconToko}).addTo(mymap).bindPopup("toko Warung Siti isnaini");
		var attarshop = L.marker([-5.1291717, 105.2056156], {icon: iconToko}).addTo(mymap).bindPopup("toko Attar shop 03");
		var mebelyatun = L.marker([-5.1324816, 105.2055153], {icon: iconToko}).addTo(mymap).bindPopup("toko Mebel yatun");

		var marker = L.marker([-5.128425, 105.205732],).addTo(mymap);
		 
   </script>
</html>