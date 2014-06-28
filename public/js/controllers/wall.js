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
  $rootScope.$sideBar = $('#sidebar-wrapper');

  $scope.Types = [];
  $scope.Datas = [];
  $scope.filtredDatas = [];

  $scope.$wall = $('#wall');

  $scope.$addReply = $('#addReply');
  $scope.$reply = $('#reply');
  $scope.$filters = $('#filters');

  $scope.replyLength = 140;

  Typologies.query(function(response) {
    $scope.Types = response;
  });

  Reply.query(function(response) {
    $scope.Datas = response;
    $scope.filtredDatas = response;
  });


  // $( '#main-icon' ).hide();
  // $( '#main-icon' ).click(function(){
  //   $scope.$emit('iso-method', {name:null, params:null});
  //   console.log( 'ok' );
  // });

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
      if( $.inArray(copyData[i].typologie_id.toString(), showTypes) != -1) 
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
    $scope.$addReply.find('select option[value=0]').attr('selected','selected');
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

  }

  $scope.positionReply = function($element) {
    var elementPosition = $element.position(),
      windowWidth = $('html').attr('window-width'),
      windowHeight = $('html').attr('window-height');

    elementPosition.left = elementPosition.left + $rootScope.$sideBar.width() - 10;

    // if($rootScope.isSidebarActive == false) 
    // {
    //   elementPosition.left = elementPosition.left - 29;
    // }

    if (windowWidth < (elementPosition.left + 401)) {
      elementPosition.left = elementPosition.left - 201;
    }

    if (windowHeight < (elementPosition.top + 401)) {
      elementPosition.top = elementPosition.top - 201;
    }

    $scope.$reply.css({
      'top': elementPosition.top,
      'left': elementPosition.left
    });
  }

  $scope.showReply = function($event, data) {
    var typologie = $.grep($scope.Types, function(e) {
      return e.id == data.typologie_id;
    });

    var $element = $($event.target),
      elementPosition = {};

    if ($element.context.localName == "p") {
      $element = $element.parent();
    }

    $scope.positionReply($element);

    $scope.$reply.find('h3').html(typologie[0].name);
    $scope.$reply.find('.blocContent p').html(data.quote);

    $scope.$reply.removeClass();
    $scope.$reply.addClass('replyHover_' + data.typologie_id);

    // $element.animate(
    //  {height: "401px", width: "401px" }
    // ,500, function() {
    //  $scope.$emit('iso-method', {name:null, params:null})
    // });

    $scope.$reply.fadeIn();
  }

  $scope.hideReply = function() {
    $scope.$reply.hide();
  }

  $scope.liveLength = function() {
    $scope.replyLength = 140 - ($scope.$addReply.find('textarea').val().length);
    // if( $scope.replieLength == 0 )
    // {
    //  $scope.replieLength = "ERROR";
    // }
  }

  $scope.addReply = function() {
    var typeId = $scope.$addReply.find('#type').val(),
      reply = $scope.$addReply.find('textarea').val(),
      validToInsert = true;

    if (!typeId || !reply || typeId == "0") {
      validToInsert = false;
      return false;
    }

    if (reply.length > 140) {
      return false;
    }

    // return false;

    var newReply = new Reply();
    newReply.quote = reply;
    newReply.typologie_id = typeId;
    newReply.$save(function(response) {
      if (response.status == "success") {
        $scope.hideAddReply();
        $scope.clearAddReply();
      }
    });

    return false;
  }

  twttr.ready(function(twttr) {       
      twttr.events.bind('tweet', function (event) {
          $scope.share( 'twitter' );
      });
  });

});
