'use strict';

/**
 * @ngdoc function
 * @name BSApp.controller:WallCtrl
 * @description
 * # WallCtrl
 * Controller of the appApp
 */
BSApp.controller('WallCtrl', function ($scope, $http) {

	$http({method: 'GET', url: '/api/typologies'}).
    	success(function(data, status, headers, config) {
    		console.log( data );
    }).
    	error(function(data, status, headers, config) {
    });

});