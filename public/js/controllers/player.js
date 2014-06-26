'use strict';

/**
 * @ngdoc function
 * @name BSApp.controller:PlayerCtrl
 * @description
 * # PlayerCtrl
 * Controller of the BSApp
 */
BSApp.controller('PlayerCtrl', function ($rootScope, $scope, $sce, $activityIndicator, VG_EVENTS) {

  $activityIndicator.startAnimating();
  $rootScope.isSidebarActive = true;
  $scope.videoSrc = 'videos/' + window.videoSrc + '.mp4';
  console.log($scope.videoSrc);

  $scope.currentTime = 0;
  $scope.totalTime = 0;
  $scope.state = null;
  $scope.volume = 1;
  $scope.isCompleted = false;
  $scope.API = null;

  $scope.onPlayerReady = function(API) {
    $scope.API = API;
    $scope.API.setSize(window.innerWidth - 64, window.innerHeight);

    $rootScope.$on(VG_EVENTS.ON_PLAY, function() {
      $rootScope.isSidebarActive = false;
    });

    $rootScope.$on(VG_EVENTS.ON_PAUSE, function() {
      $('vg-overlay-play').addClass('onPause');
    });

    $rootScope.$on(VG_EVENTS.ON_COMPLETE, function() {
      console.log('plpolpo');
      $rootScope.isSidebarActive = true;
    });

    $activityIndicator.stopAnimating();
  };

  $scope.onCompleteVideo = function() {
    $scope.isCompleted = true;
  };

  $scope.onUpdateState = function(state) {
    $scope.state = state;
  };

  $scope.onUpdateTime = function(currentTime, totalTime) {
    $scope.currentTime = currentTime;
    $scope.totalTime = totalTime;
  };

  $scope.onUpdateVolume = function(newVol) {
    $scope.volume = newVol;
  };

  $scope.onUpdateSize = function(width, height) {
    $scope.config.width = width;
    $scope.config.height = height;
  };

  $scope.stretchModes = [
    {value: "none"},
    {value: "fit"},
    {value: "fill"}
  ];

  $scope.config = {
    autoHide: false,
    autoPlay: false,
    stretch: $scope.stretchModes[1],
    responsive: false,
    theme: {
      url: 'css/videogular.min.css'
    },
    plugins: {
      poster: {
        url: "videos/poster.jpg"
      },
      quiz: {
        data: [{
          "time": "1.5",
          "background": "color",
          "background_src": "rgba(0,0,0,0.5)",
          "post_answer_url": "https:\/\/bien-sures.dev\/api\/replies\/offensive_id="
        }]
      }
    }
  };

  $scope.onQuizSubmit = function(result) {
    var adjs = angular.fromJson(window.adjectifs);
    var reply = result.reply;
    for (var i = 0; i < adjs.length; i++) {
      var synonymes = adjs[i].synonymes.split(", ");
      if(reply === adjs[i].adjectif || synonymes.inArray(reply)) {
        switch(window.videoSrc) {
          case 'film1':
            break;
          case 'film2':
            break;
          case 'film3':
            break;
        }
        // on renvoie à la fin qui correspond à l'adjs[0].adjectif
        switch(adjs[i].adjectif) {
          case 'agressive':
            break;
          case 'agressive':
            break;
          case 'agressive':
            break;
        }
        $scope.API.seekTime(10);
      } else {
        $scope.API.seekTime(20);
      }
      $scope.API.play();
      break;
    };
  };

  $scope.onQuizSkip = function() {
    // make it adj random
    $scope.API.seekTime(20);
  };

});
