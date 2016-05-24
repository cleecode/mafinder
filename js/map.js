angular.module('myApplicationModule', ['uiGmapgoogle-maps']).config(function(uiGmapGoogleMapApiProvider) {
    uiGmapGoogleMapApiProvider.configure({
        //    key: 'AIzaSyDUs7Tb0lYozvn-wGwsPKnzZ2RfLUH2-h4',
        v: '3.20', //defaults to latest 3.X anyhow
        libraries: 'weather,geometry,visualization'
    });
})


angular.module('myApplicationModule', ['uiGmapgoogle-maps']).controller("someController", function($scope, uiGmapGoogleMapApi) {
    // Do stuff with your $scope.
    // Note: Some of the directives require at least something to be defined originally!
    // e.g. $scope.markers = []
	$scope.map = { center: { latitude: 45, longitude: -73 }, zoom: 8 };
    // uiGmapGoogleMapApi is a promise.
    // The "then" callback function provides the google.maps object.
    uiGmapGoogleMapApi.then(function(maps) {

    });
});




