'use strict';

/**
 * @ngdoc function
 * @name BSApp.controller:PlayerCtrl
 * @description
 * This controller contains all code for the interactive video player.
 * Main functions are :
 *
 * # PlayerCtrl
 * Controller of the BSApp
 */
BSApp.controller('PlayerCtrl', function ($rootScope, $scope, $sce, $http, VG_EVENTS) {

  $rootScope.isSidebarActive = true;

  $scope.videos = angular.fromJson(window.videos);

  $scope.video = $scope.videos[Math.floor(Math.random() * (2 - 0 + 1))];
  $scope.videoSrcMP4 = 'videos/' + $scope.video.file + '.mp4';
  $scope.videoSrcWEBM = 'videos/' + $scope.video.file + '.webm';
  $scope.videoSrcOGV = 'videos/' + $scope.video.file + '.ogv';
  $scope.videoEnds = [
    $scope.video.end1,
    $scope.video.end2,
    $scope.video.end3,
    $scope.video.end4
  ];

  if($scope.video.file == 'BienSures_scenario1_1280x720') {
    $scope.prevVideo = 3;
    $scope.nextVideo = 2;
    $scope.quizTimecode = 13;
  } else if($scope.video.file == 'BienSures_scenario2_1280x720') {
    $scope.prevVideo = 1;
    $scope.nextVideo = 3;
    $scope.quizTimecode = 36;
  } else if($scope.video.file == 'BienSures_scenario3_1280x720') {
    $scope.prevVideo = 2;
    $scope.nextVideo = 1;
    $scope.quizTimecode = 77;
  }

  var adjs = $scope.video.end1.adjectifs;
  adjs.concat(
    $scope.video.end2.adjectifs,
    $scope.video.end3.adjectifs,
    $scope.video.end4.adjectifs
  );
  $scope.adjs = adjs.split(', ');

  $scope.selectedAdj = ''

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
      $('.onCompleted').addClass('hidden');
    });
  };

  $scope.onCompleteVideo = function() {
    $scope.$apply(function() {
      $rootScope.isSidebarActive = true;
    });
    $('.onCompleted').removeClass('hidden');
    $scope.isCompleted = true;
  };

  $scope.onUpdateState = function(state) {
    if(state == 'pause') {
      $('.overlayPlayContainer .iconButton').hide();
    }
    $scope.state = state;
  };

  $scope.onUpdateTime = function(currentTime, totalTime) {
    var curr = parseFloat(currentTime).toFixed(0);
    var seekTime = null;
    if($scope.video.file == 'BienSures_scenario1_1280x720' && ['44','68','96','118'].indexOf(curr) > -1) seekTime = 141;
    else if($scope.video.file == 'BienSures_scenario2_1280x720' && ['66','90','121','147'].indexOf(curr) > -1) seekTime = 177;
    else if($scope.video.file == 'BienSures_scenario3_1280x720' && ['78','104','118','135'].indexOf(curr) > -1) seekTime = 168;
    if(seekTime != null && seekTime != parseFloat(totalTime).toFixed(0)) $scope.API.seekTime(seekTime);
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

  $scope.config = {
    autoPlay: false,
    stretch: {value: "fit"},
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
          "time": $scope.quizTimecode,
          "background": "color",
          "background_src": "rgba(0,0,0,0.5)"
        }]
      }
    }
  };

  $scope.loadVideo = function(videoId) {
    $scope.video = $scope.videos[videoId - 1];
  };

  $scope.onQuizSubmit = function(result) {
    var reply = result.reply;
    for (var i = 0; i < $scope.videoEnds.length; i++) {
      var adjsArray = $scope.videoEnds[i].adjectifs.split(', ');
      var seekTime = 0;
      if($.inArray(reply, adjsArray) != -1) {
          seekTime = $scope.videoEnds[i].timecode;
          break;
      } else {
        $('.onError').removeClass('hidden');
      }
    }
    $scope.API.seekTime(seekTime);
    $scope.API.play();
  };

  $scope.onQuizSkip = function() {
    var rand = Math.floor(Math.random() * (3 - 0 + 1));
    $scope.API.seekTime($scope.videoEnds[rand].timecode);
  };

});
