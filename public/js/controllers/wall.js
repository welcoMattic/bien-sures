'use strict';

/**
 * @ngdoc function
 * @name BSApp.controller:WallCtrl
 * @description
 * # WallCtrl
 * Controller of the BSApp
 */

// BSApp.filter('types', function() {
//    return function( items, types) {
//     var filtered = [];

//     angular.forEach(items, function(item) {
//        if(types.1 == false && types.2 == false) {
//           filtered.push(item);
//         }
//         else if(types.1 == true && types.2 == false && item.type == '1'){
//           filtered.push(item);
//         }
//         else if(types.2 == true && types.1 == false && item.type == '2'){
//           filtered.push(item);
//         }
//     });

//     return filtered;
//   };
// });

BSApp.controller('WallCtrl', function ($rootScope, $scope, Typologies, Replies) {

	$scope.Types = [];
	$scope.Datas = [];

	Typologies.query(function( response ) {
		$scope.Types = response;
  	});

  	Replies.query(function( response ) {
		$scope.Datas = response;
  	});

  	$scope.initWall = function() {

  	}

});