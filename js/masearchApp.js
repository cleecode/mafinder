var masearchApp = angular.module('masearchApp', []);

masearchApp.controller('TitleCtrl', function ($scope) {
	$scope.title = 
	{'name': 'Martial Arts School Finder',
	 'summary': 'Find a martial arts school near you'};

});