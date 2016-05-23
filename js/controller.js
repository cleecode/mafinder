var masearchApp = angular.module('masearchApp', []);

masearchApp.controller('TitleCtrl', function ($scope) {
	$scope.title = 
	{'name': 'Martial Arts School Finder',
	 'summary': 'Find a martial arts school near you'};

});


angular.module("MapCtrl", ['uiGmapgoogle-maps'])
        .controller("Example", function($scope, $interval) {
                $scope.map = {
                        center: {
                                latitude: 56.162939,
                                longitude: 10.203921
                        },
                        zoom: 8
                };
        });