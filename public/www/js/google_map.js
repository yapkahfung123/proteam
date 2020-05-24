function init_map(){
	var myOptions = {zoom:15, //Zoom rate
	center:new google.maps.LatLng(3.085462, 101.692951), // Location Coordinates
	mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
	marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(3.085462, 101.692951)}); // Location Coordinates
	infowindow = new google.maps.InfoWindow({content:'<strong>Infra Design Sdn. Bhd.</strong><br>A-3-5, Kuchai Exchange,<br> No 43, Jalan Kuchai Maju 13,<br> 58200 Kuala Lumpur.<br>'}); // Location Address
	google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);