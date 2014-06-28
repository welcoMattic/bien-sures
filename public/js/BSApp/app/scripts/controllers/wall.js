'use strict';

/**
 * @ngdoc function
 * @name BSApp.controller:WallCtrl
 * @description
 * # WallCtrl
 * Controller of the BSApp
 */
BSApp.controller('WallCtrl', function ($rootScope, $scope, Typologies, Reply) {

	$rootScope.isSidebarActive = true;
	$rootScope.$sideBar = $( '#sidebar-wrapper' );

	$scope.Types = [];
	$scope.Datas = [];
	$scope.filtredDatas = [];

	$scope.$wall = $( '#wall' );

	$scope.$addReply = $( '#addReply' );
	$scope.$reply = $( '#reply' );

	$scope.replyLength = 140;

	Typologies.query(function( response ) {
		$scope.Types = response;
  	});	

  	Reply.query(function( response ) {
		$scope.Datas = response;
		$scope.filtredDatas = response;
  	});

  	$scope.filtersContexts = function() {
		var $elements = $( '#filters' ).find('input[type=checkbox]:checked'),
			showTypes = [];

		for (var i = 0; i < $elements.length; i++) {
			showTypes.push( $($elements[i]).val() );
		}

		console.log( showTypes );

		$scope.filtredDatas = $scope.Datas;

		for (var i = 0; i < $scope.filtredDatas.length; i++) {
			if(!$.inArray($scope.filtredDatas[i].typologie_id, showTypes)) 
			{
				console.log( 'unset=' );
				console.log( $scope.filtredDatas[i] ); 
				$scope.filtredDatas.splice( $scope.filtredDatas[i] );
			}
		}
  	}

  	$scope.showAddReply = function() {
  		$scope.$addReply.fadeIn();
  	}

	$scope.hideAddReply = function() {
  		$scope.$addReply.fadeOut();
  	}

  	$scope.clearAddReply = function() {
		// TODO
  	}

  	$scope.shareFB = function() {
  		var agressionType = $scope.$reply.find( 'h3' ).html();

  		if( agressionType == "Frotteurisme" ) 
  		{
  			agressionType = "frotteurs";
  		}

		FB.ui(
		{
			method: 'feed',
			name: 'Bien Sûres ! Contre le harcèlement de rue',
			caption: 'DÉNONCER RÉAGIR AIDER',
			description: (
				'En réponse aux ' + agressionType.toLowerCase() + ':<b>' +
				'"'+ $scope.$reply.find( '.blocContent p' ).html() +'"</b>'
			),
			link: __URL,
			picture: __URL + 'images/share.jpg'
		},
		function(response) {
			if (response && response.post_id) {
			} else {
			}
		});
  	}

  	$scope.positionReply = function( $element ) {
  		var elementPosition = $element.position(),
  			windowWidth = $( 'html' ).attr( 'window-width' ),
  			windowHeight = $( 'html' ).attr( 'window-height' );

		elementPosition.left = elementPosition.left + $rootScope.$sideBar.width();

		if( windowWidth < (elementPosition.left+401) ) 
		{
			elementPosition.left = elementPosition.left - 201;
		}

		if( windowHeight < (elementPosition.top+401) ) 
		{
			elementPosition.top = elementPosition.top - 201;
		}

  		$scope.$reply.css({
  			'top': elementPosition.top,
  			'left': elementPosition.left
  		});
  	}

  	$scope.showReply = function( $event, data ) {
		var typologie = $.grep($scope.Types, function(e){ 
			return e.id == data.typologie_id;
		 });

		var $element = $( $event.target ),
			elementPosition = {};

		if( $element.context.localName == "p" ) 
		{
			$element = $element.parent();
		}

		$scope.positionReply( $element );

  		$scope.$reply.find( 'h3' ).html( typologie[0].name );
  		$scope.$reply.find( '.blocContent p' ).html( data.quote );

  		$scope.$reply.removeClass();
  		$scope.$reply.addClass( 'replyHover_' + data.typologie_id );

  		// $element.animate(
  		// 	{height: "401px", width: "401px" }
  		// ,500, function() {
  		// 	$scope.$emit('iso-method', {name:null, params:null})
  		// });

  		$scope.$reply.fadeIn();
  	}

	$scope.hideReply = function() {
  		$scope.$reply.hide();
  	}

  	$scope.liveLength = function() {
  		$scope.replyLength = 140 - ($scope.$addReply.find( 'textarea' ).val().length);
  		// if( $scope.replieLength == 0 ) 
  		// {
  		// 	$scope.replieLength = "ERROR";
  		// }
  	}

  	$scope.addReply = function() {
  		var typeId = $scope.$addReply.find( '#type' ).val(),
  			reply = $scope.$addReply.find( 'textarea' ).val(),
			validToInsert = true;

  			if( !type || !reply) 
  			{	
  				validToInsert = false;
  				return false;
  			}

  			if( reply.length > 140) 
  			{
  				return false;
  			}

  			// return false;

  			var newReply = new Reply();
     		newReply.quote = reply;
     		newReply.typologie_id = typeId;
		    newReply.$save(function( response ){
		    	if( response.status == "success" ) 
		    	{
		    		// TODO: action after call
		    		$scope.hideAddReply();
		    	}
		    });

		return false;
  	}

});