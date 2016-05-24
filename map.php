<!DOCTYPE html >
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Google Maps JavaScript API Example: Map Simple</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUs7Tb0lYozvn-wGwsPKnzZ2RfLUH2-h4"
	type="text/javascript"></script>
 </head>
 
 
 
 

<body>
	<div id="map_canvas" style="width: 450px; height: 250px;"></div>
</body>

<script type='text/javascript'
function initialize() {
  var latlng = new google.maps.LatLng(37.775196, -122.419204);
  var myOptions = {
    zoom: 11,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
       
var map = new google.maps.Map(document.getElementById("map_canvas"), 
              myOptions);
}
</script>
</html>