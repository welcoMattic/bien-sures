'use strict';

/**
 * @ngdoc function
 * @name BSApp.controller:ContactCtrl
 * @description
 * # ContactCtrl
 * Controller of the BSApp
 */
BSApp.controller('ContactCtrl', function ($scope, Mail) {

	$scope.$from = $( '#formContact' );

	$scope.submit = function() {
		var $elements = $scope.$from.find( 'input, textarea' ),
			validToSent = true;

		angular.forEach($elements, function(element, key) { 
			if( !$(element).val() ||
				$(element).val() == false ||
				$(element).val() == "" ||
				$(element).val() == "undefined" ) 
			{
				validToSent = false;
				return false;
			}
		});

		if( validToSent == true ) 
		{
			var data = {
					first_name: $( $elements[0] ).val(),
					last_name: $( $elements[0] ).val(),
					mail_from: $( $elements[0] ).val(),
					message: $( $elements[0] ).val(),
				};

			Mail.get(data ,function( response ){
				if( response.status == "success" ) 
				{
					// TODO: action after mail
					console.log( response );
				}
			});
		}
	}

});