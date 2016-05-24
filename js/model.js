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