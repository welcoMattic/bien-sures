'use strict';

/**
 * @ngdoc function
 * @name BSApp.controller:PlayerCtrl
 * @description
 * # PlayerCtrl
 * Controller of the appApp
 */
BSApp.controller('PlayerCtrl', function ($rootScope, $scope, $sce, $activityIndicator, VG_EVENTS) {

  $activityIndicator.startAnimating();
  $rootScope.isSidebarActive = true;

  $scope.currentTime = 0;
  $scope.totalTime = 0;
  $scope.state = null;
  $scope.volume = 1;
  $scope.isCompleted = false;
  $scope.API = null;

  $scope.onPlayerReady = function(API) {
    $scope.API = API;
    //document.getElementsByClassName('player')[0].clientWidth
    $scope.API.setSize(window.innerWidth - 64, window.innerHeight);

    $rootScope.$on(VG_EVENTS.ON_PLAY, function() {
      $rootScope.isSidebarActive = false;
    });

    $rootScope.$on(VG_EVENTS.ON_COMPLETE, function() {
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
    autoHide: true,
    autoHideTime: 5000,
    autoPlay: false,
    stretch: $scope.stretchModes[1],
    responsive: false,
    theme: {
      url: 'js/BSApp/bower_components/videogular-themes-default/videogular.css'
    },
    plugins: {
      poster: {
        url: "videos/poster.jpg"
      },
      quiz: {
        data: [{
          "time": "2",
          "html": "<input type='text' />",
          "background": "color",
          "background_src": "black",
          "post_answer_url": "https:\/\/bien-sures.dev\/api\/replies\/offensive_id="
        }]
      }
    }
  };

  $scope.onQuizSubmit = function(result) {
    var adjs = angular.fromJson(window.adjectifs);
    var reply = result.reply;
    angular.forEach(adjs, function(adj, key) {
      var synonymes = adj.synonymes.split(", ");
      if(reply === adj.adjectif || synonymes.inArray(reply)) {
        $scope.API.seekTime(10);
      } else {
        $scope.API.seekTime(26);
      }
      $scope.API.play();
    });
  };

  $scope.onQuizSkip = function() {
    console.log('skiped');
  };

});
