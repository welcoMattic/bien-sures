'use strict';

/**
 * @ngdoc function
 * @name BSApp.controller:WallCtrl
 * @description
 * # WallCtrl
 * Controller of the BSApp
 */
BSApp.controller('WallCtrl', function ($rootScope, $scope, $http) {
  $rootScope.isSidebarActive = true;
	$http({method: 'GET', url: '/api/typologies'}).
    	success(function(data, status, headers, config) {
    		console.log( data );
    }).
    	error(function(data, status, headers, config) {
    });

});