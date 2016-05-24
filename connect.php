<?php 

// STEP 1: Connect to the database 
// Don't forget to fill in your own:
//	username, password and database name)

$db = new mysqli("localhost", "maadmin", "local", "mafinder_db");
 
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

// STEP 2: Query the table with the marker information

$res = $db->query("select * from marker_info");
	
// STEP 3: Store the marker info in arrays for each row found
// save the count of markers for later

$mrk_cnt = 0;
while ($obj = $res->fetch_object())  // get all rows (markers)
{
    $lat[$mrk_cnt] = $obj->mrk_lat;  // save the latitude
    $lng[$mrk_cnt] = $obj->mrk_lng;  // save the longitude
    $inf[$mrk_cnt] = $obj->mrk_inf;  // save the info-window
    $mrk_cnt++;                      // increment the marker counter
}
$res->close();
	
// Now we have the latitude, longitude and info-window text for each marker 
// stored in php arrays. Now we need to write the marker's JavaScript 
// dynamically with this information
	
?>

<script type='text/javascript'>
function load() {
   addTo = 0;
   var latlng = new google.maps.LatLng(37.775196, -122.419204);
   var myOptions = {
      zoom: 11,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
   };
   // NOTE: all values: latitude, longitude, zoom,, etc.
   //       should also come from the database for flexibility
       
   var map = new google.maps.Map(document.getElementById("map_canvas"), 
              myOptions);
				
// This next block of JavaScript needs to be generated by PHP 
// to 'add-in' the information from the arrays

<?php

for ($lcnt = 0; $lcnt < $mrk_cnt; $lcnt++)
{
		
    echo "point$lcnt = new google.maps.LatLng($lat[$lcnt], 
          $lng[$lcnt]);\n";
    echo "mrktx$lcnt = \"$inf[$lcnt]\";\n";
    echo "var infowindow$lcnt = new google.maps.InfoWindow({
   			content: mrktx$lcnt
			});";
    echo "var marker$lcnt = new google.maps.Marker({position: point$lcnt, 
              map: map});\n";
              
    echo "google.maps.event.addListener(marker$lcnt, 
         'mouseover', function() {
   		     infowindow$lcnt.open(map,marker$lcnt);
    });";
}
				
?>
}
</script>