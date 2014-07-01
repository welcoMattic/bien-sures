'use strict';

/**
 * @ngdoc function
 * @name BSApp.controller:PlayerCtrl
 * @description
 * This controller contains all code for the interactive video player.
 * # PlayerCtrl
 * Controller of the BSApp
 */
BSApp.controller('PlayerCtrl', function ($rootScope, $scope, $sce, $http, VG_EVENTS, ga) {
  ga('send', 'pageview', {title: 'Bien Sûres - Player'});
  $rootScope.isSidebarActive = true;
  $rootScope.alreadyPlayed = $rootScope.alreadyPlayed != true ? false : true;

  $scope.videos = angular.fromJson(__VIDEOS);

  $scope.videoRandId = Math.floor(Math.random() * 3);
  $scope.video = $scope.videos[$scope.videoRandId];

  $scope.videoInit = function(video) {

    $scope.videoSrcMP4 = 'videos/' + video.file + '.mp4';
    $scope.videoSrcWEBM = 'videos/' + video.file + '.webm';
    $scope.videoSrcOGV = 'videos/' + video.file + '.ogv';
    $scope.videoEnds = [
      video.end1,
      video.end2,
      video.end3,
      video.end4
    ];

    if(video.file == 'BienSures_scenario1_1280x720') {
      $scope.prevVideo = {id:3,img:'images/thumbnail3.jpg'};
      $scope.nextVideo = {id:2,img:'images/thumbnail2.jpg'};;
      $scope.quizTimecode = 13;
    } else if(video.file == 'BienSures_scenario2_1280x720') {
      $scope.prevVideo = {id:1,img:'images/thumbnail1.jpg'};;
      $scope.nextVideo = {id:3,img:'images/thumbnail3.jpg'};;
      $scope.quizTimecode = 36;
    } else if(video.file == 'BienSures_scenario3_1280x720') {
      $scope.prevVideo = {id:2,img:'images/thumbnail2.jpg'};;
      $scope.nextVideo = {id:1,img:'images/thumbnail1.jpg'};;
      $scope.quizTimecode = 77;
    }
  };

  $scope.videoInit($scope.video);

  var adjs = $scope.video.end1.adjectifs + ', '
             + $scope.video.end2.adjectifs + ', '
             + $scope.video.end3.adjectifs + ', '
             + $scope.video.end4.adjectifs;
  $scope.adjs = adjs.split(',');

  var output = [],
      keys = [];
  angular.forEach($scope.adjs, function(item) {
    var key = item;
    if(keys.indexOf(key) === -1) {
      keys.push(key);
      output.push(item);
    }
  });
  $scope.adjs = output;

  $scope.selectedAdj = '';

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
      ga('send', 'event', 'player', 'play', $scope.videoRandId + 1);
      $rootScope.alreadyPlayed = false;
      $rootScope.isSidebarActive = false;
      $('.onCompleted').addClass('hidden');
    });
  };

  $scope.onCompleteVideo = function() {
    $scope.$apply(function() {
      $rootScope.isSidebarActive = true;
    });
    $rootScope.alreadyPlayed = true;
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
    else if($scope.video.file == 'BienSures_scenario3_1280x720' && ['104','118','135','149'].indexOf(curr) > -1) seekTime = 168;
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
    autoHide: true,
    autoHideTime: 2000,
    autoPlay: false,
    stretch: {value: "fit"},
    responsive: true,
    width: '100%',
    height: '100%',
    theme: {
      url: 'css/videogular.min.css'
    },
    sources: [
      {src: $sce.trustAsResourceUrl($scope.videoSrcMP4), type: "video/mp4"},
      {src: $sce.trustAsResourceUrl($scope.videoSrcWEBM), type: "video/webm"},
      {src: $sce.trustAsResourceUrl($scope.videoSrcOGV), type: "video/ogv"}
    ],
    plugins: {
      poster: {
        url: "images/" + $scope.video.file + ".jpg"
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
    ga('send', 'event', 'player', 'replay', videoId);
    $scope.video = $scope.videos[videoId - 1];
    $scope.videoInit($scope.video);
    $scope.config.sources = [
      {src: $sce.trustAsResourceUrl($scope.videoSrcMP4), type: "video/mp4"},
      {src: $sce.trustAsResourceUrl($scope.videoSrcWEBM), type: "video/webm"},
      {src: $sce.trustAsResourceUrl($scope.videoSrcOGV), type: "video/ogv"}
    ];
    $scope.config.plugins.quiz = {
      data: [{
        "time": $scope.quizTimecode,
        "background": "color",
        "background_src": "rgba(0,0,0,0.5)"
      }]
    }
    $scope.config.plugins.poster.url = "images/" + $scope.video.file + ".jpg"
    $scope.API.playPause();
  };

  $scope.onQuizSubmit = function(result) {
    var reply = result.reply;
    var error = false;
    for (var i = 0; i < $scope.videoEnds.length; i++) {
      var adjsArray = $scope.videoEnds[i].adjectifs.split(',');
      var seekTime = 0;
      if($.inArray(reply, adjsArray) > -1) {
          seekTime = $scope.videoEnds[i].timecode;
          error = false;
          break;
      } else {
        error = true;
      }
    }
    if(error) {
      ga('send', 'event', 'player', 'submitAdjectifError', reply);
      seekTime = $scope.quizTimecode - 1;
      $('#errorModal').modal('show');
    } else {
      ga('send', 'event', 'player', 'submitAdjectifSuccess', reply);
      $('#reply').val('');
    }
    $scope.API.seekTime(seekTime);
    $scope.API.play();
  };

  $scope.onQuizSkip = function() {
    var rand = Math.floor(Math.random() * (3 - 0 + 1));
    $scope.API.seekTime($scope.videoEnds[rand].timecode);
  };

  $scope.share = function( to ) {

    if (to == "facebook") {
      ga('send', 'event', 'player', 'share', 'facebook');
      FB.ui({
        method: 'feed',
        name: 'Bien Sûres ! Contre le harcèlement de rue',
        caption: 'DÉNONCER RÉAGIR AIDER',
        description: ('Vidéo interactive'),
        link: __URL,
        picture: __URL + 'images/share.jpg'
      },
      function(response) {
        if (response && response.post_id) {} else {}
      });

      return false;
    }
  };
});
