'use strict';

/**
 * @ngdoc function
 * @name BSApp.controller:WallCtrl
 * @description
 * # WallCtrl
 * Controller of the BSApp
 */
BSApp.controller('WallCtrl', function($rootScope, $scope, Typologies, Reply) {

  $rootScope.isSidebarActive = true;
  $rootScope.burgerActive = false;
  $('#wrapper').css({'background-color':'#00e0df'});

  setTimeout(function() {
    $scope.$emit('iso-method', {name:null, params:null});
  }, 400);

  $rootScope.reloadWall = function() {
    setTimeout(function() {
      $scope.$emit('iso-method', {name:null, params:null});
    }, 400);
  }

  $rootScope.$sideBar = $('#sidebar-wrapper');

  $scope.Types = [];
  $scope.Datas = [];
  $scope.filtredDatas = [];

  $scope.$wall = $('#wall');

  $('#wrapper').css({'background-color':'#00e0df'});

  $scope.$addReply = $('#addReply');
  $scope.$addReplySelect = $('#addReply ul');
  $scope.$reply = $('#replyHover');
  $scope.$filters = $('#filters');

  $scope.replyLength = 140;

  Typologies.query(function(response) {
    $scope.Types = response;
  });

  Reply.query(function(response) {
    $scope.Datas = response;
    $scope.filtredDatas = response;
  });

  $scope.filtersContexts = function( $event ) {
    var $element = $($event.target),
        elementIsActive = $($event.target).attr( 'isActive' );

        if( elementIsActive == 'true')
        {
          $($event.target).addClass( 'filter_off' );
          $($event.target).attr( 'isActive', 'false' );
        }
        else
        {
          $($event.target).removeClass( 'filter_off' );
          $($event.target).attr( 'isActive', 'true' );
        }

    var $elements = $scope.$filters.find('li[isActive=true]'),
      showTypes = [];

    for (var i = 0; i < $elements.length; i++) {
      showTypes.push($($elements[i]).attr('data-id'));
    }

    var copyData =  angular.copy($scope.Datas),
        newArray = [];

    for (var i = 0; i < copyData.length; i++) {
      if( $.inArray(copyData[i].typology_id.toString(), showTypes) != -1)
      {
        newArray.push( copyData[i] );
      }
    }

    $scope.filtredDatas = newArray;
  }

  $scope.showFilters = function() {
    $scope.$filters.fadeIn();
  }

  $scope.hideFilters = function() {
    $scope.$filters.fadeOut();
  }

  $scope.showAddReply = function() {
    $scope.$addReply.fadeIn();
  }

  $scope.hideAddReply = function() {
    $scope.$addReply.fadeOut();
  }

  $scope.clearAddReply = function() {
    $scope.$addReply.find( '.select .typeTxt' ).html( "Type d'agression" );
    $scope.$addReply.find( '.select' ).attr( 'data-value', 'null' );
    $scope.$addReply.find('textarea').val('');
    $scope.replyLength = 140;
  }

  $scope.share = function( to ) {
    var agressionType = $scope.$reply.find('h3').html();

    if (to == "facebook") {
      if (agressionType == "Frotteurisme") {
        agressionType = "frotteurs";
      }

      FB.ui({
          method: 'feed',
          name: 'Bien Sûres ! Contre le harcèlement de rue',
          caption: 'DÉNONCER RÉAGIR AIDER',
          description: (
            'En réponse aux ' + agressionType.toLowerCase() + ':<b>' +
            '"' + $scope.$reply.find('.blocContent p').html() + '"</b>'
          ),
          link: __URL,
          picture: __URL + 'images/share.jpg'
        },
        function(response) {
          if (response && response.post_id) {} else {}
        });

      return false;
    }

    FB.ui({
      method: 'feed',
      name: 'Bien Sûres ! Contre le harcèlement de rue',
      caption: 'DÉNONCER RÉAGIR AIDER',
      description: (
        'En réponse aux ' + agressionType.toLowerCase() + ':<center><b>' +
        '"' + $scope.$reply.find('.blocContent p').html() + '"</b></center>'
      ),
      link: __URL,
      picture: __URL + 'images/share.jpg'
    },
    function(response) {
      if (response && response.post_id) {} else {}
    });
  }

  $scope.positionReply = function($element) {
    var elementPosition = $element.position(),
      windowWidth = $('html').attr('window-width'),
      windowHeight = $('html').attr('window-height');

    elementPosition.left = elementPosition.left + $rootScope.$sideBar.width() - 10;

    if (windowWidth < (elementPosition.left + 401)) {
      elementPosition.left = elementPosition.left - 201;
    }

    if (windowHeight < (elementPosition.top + 401)) {
      elementPosition.top = elementPosition.top - 201;
    }

    if($rootScope.isSidebarActive == false) {
      elementPosition.left = elementPosition.left - 29;
    }

    $scope.$reply.css({
      'top': elementPosition.top,
      'left': elementPosition.left
    });
  }

  $scope.showReply = function($event, data) {
    var typology = $.grep($scope.Types, function(e) {
      return e.id == data.typology_id;
    });

    var $element = $($event.target),
      elementPosition = {};

    if ($element.context.localName == "p") {
      $element = $element.parent();
    }

    $scope.positionReply($element);

    $scope.$reply.find('h3').html(typology[0].name);
    $scope.$reply.find('.blocContent p').html(data.quote);

    $scope.$reply.removeClass();
    $scope.$reply.addClass('replyHover_' + data.typology_id);

    $scope.$reply.fadeIn();
  }

  $scope.hideReply = function() {
    $scope.$reply.hide();
  }

  $scope.addReplySelect = function() {

  }

  $scope.liveLength = function() {
    $scope.replyLength = 140 - ($scope.$addReply.find('textarea').val().length);
  }

  $scope.addReply = function() {
    var typeId = $scope.$addReply.find( '.select' ).attr( 'data-value' ),
      reply = $scope.$addReply.find('textarea').val(),
      validToInsert = true;

    if (!typeId || typeId == "null") {
      $scope.$addReply.find( '.select' ).css('background-color','#ee4649');
      setTimeout(function(){  
        $scope.$addReply.find( '.select' ).css('background-color','#00e0df');
      },2000);
      validToInsert = false;
    }
    console.log(reply);
    if (!reply || reply == "null") {
      $scope.$addReply.find( 'textarea' ).css('background-color','#ee4649');
      setTimeout(function(){  
        $scope.$addReply.find( 'textarea' ).css('background-color','#FFF');
      },2000);
      validToInsert = false;
    }

    if (reply.length > 140) {
      validToInsert = false;
    }

    if (validToInsert == false) 
    {
      return false;
    }

    var newReply = new Reply();
    newReply.quote = reply;
    newReply.typology_id = typeId;
    newReply.$save(function(response) {
      if (response.status == "success") {
        $scope.clearAddReply();
      }
      $scope.hideAddReply();
    });

    return false;
  }

  $scope.showSelect = function() {
    $( '.btnList' ).addClass( 'open' );
    $scope.$addReplySelect.show();
  }

  $scope.hideSelect = function() {
    $( '.btnList' ).removeClass( 'open' );
    $scope.$addReplySelect.hide();
  }

  $scope.selectRemplace = function( $event ) {
    var $target = $($event.target);
    $scope.$addReply.find( '.select .typeTxt' ).html( $target.html() );
    $scope.$addReply.find( '.select' ).attr( 'data-value', $target.attr('data-value') );
    $scope.hideSelect();
  }

  twttr.ready(function(twttr) {
      twttr.events.bind('tweet', function (event) {
          $scope.share( 'twitter' );
      });
  });

  // $scope.$watch(, function(){

  // });

});
