<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyB6wk2trQWVwXIZ7egSo2IVsIxql5fSCJc&sensor=false"></script>
<script type="text/javascript">

function makeRequest(url, callback) { 
var request;
if (window.XMLHttpRequest) {
request = new XMLHttpRequest(); // IE7+, Firefox, Chrome, Opera, Safari
} else {
request = new ActiveXObject("Microsoft.XMLHTTP"); // IE6, IE5
}

request.onreadystatechange = function() {
if (request.readyState == 4 && request.status == 200) {
callback(request);
}
}
request.open("GET", url, true);
request.send();
}

var map;
var geocoder = new google.maps.Geocoder();
var infowindow = new google.maps.InfoWindow();

function init() { 
var mapOptions = {
zoom: 13,
center: new google.maps.LatLng(8.46, 99.86),
mapTypeId: google.maps.MapTypeId.HYBRID,
}

map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions); 

makeRequest('get_locations.php', function(data) { // 

var data = JSON.parse(data.responseText);

for (var i = 0; i < data.length; i++) {  
displayLocation(data[i]);
}
});
}

function displayLocation(location) {  

var content =   '<div class="infoWindow"><strong>'  + location.placename + '</strong>'  
+ '<br/> พิกัด Lat: ' + location.mlat 
+ '<br/> พิกัด Lon: ' + location.mlog 


if (parseInt(location.mlat) == 0) { //
geocoder.geocode( { 'Place': location.placename }, function(results, status) {   
if (status == google.maps.GeocoderStatus.OK) {

var marker = new google.maps.Marker({
map: map,
position: results[0].geometry.location,
title: location.placename
});

google.maps.event.addListener(marker, 'click', function() { // คลิกเพื่อแสดงข้อมูล
infowindow.setContent(content);
infowindow.open(map,marker);
});
}
});
} else {
var position = new google.maps.LatLng(parseFloat(location.mlat), parseFloat(location.mlog));
var marker = new google.maps.Marker({
map: map,
position: position,
icon:"marker.png",
title: location.placename
});

google.maps.event.addListener(marker, 'click', function() {
infowindow.setContent(content);
infowindow.open(map,marker);
});
}
}


</script>
</head>
<body onload="init();">
<div class="container-fluid" id="bg_f"><BR>
<div class="row">
    <div class="col-md-12" class="center">
            <div id="map_canvas" style="width: 100%; height: 500px;"></div>
    </div>
<div>
<br></div>
