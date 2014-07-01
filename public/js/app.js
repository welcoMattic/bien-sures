'use strict';

/**
 * @ngdoc overview
 * @name BSApp
 * @description
 * # BSApp
 *
 * Main module of the application.
 */
var BSApp = angular.module('BSApp', [
  "ngAnimate",
  "ngResource",
  "ngRoute",
  "ngSanitize",
  "ui.bootstrap",
  "ga",
  "ngActivityIndicator",
  "com.2fdevs.videogular",
  "com.2fdevs.videogular.plugins.controls",
  "com.2fdevs.videogular.plugins.overlayplay",
  "com.2fdevs.videogular.plugins.buffering",
  "com.2fdevs.videogular.plugins.poster",
  "info.vietnamcode.nampnq.videogular.plugins.quiz",
  "iso"
]);

BSApp.config(function ($routeProvider) {
  $routeProvider
    .when('/', {
      templateUrl: 'js/views/player.html',
      controller: 'PlayerCtrl'
    })
    .when('/player', {
      templateUrl: 'js/views/player.html',
      controller: 'PlayerCtrl'
    })
    .when('/mur-de-paroles', {
      templateUrl: 'js/views/wall.html',
      controller: 'WallCtrl'
    })
    .when('/besoin-d-aide', {
      templateUrl: 'js/views/help.html',
      controller: 'HelpCtrl'
    })
    .when('/a-propos', {
      templateUrl: 'js/views/about.html',
      controller: 'AboutCtrl'
    })
    .when('/nous-contacter', {
      templateUrl: 'js/views/contact.html',
      controller: 'ContactCtrl'
    })
    .when('/mentions', {
      templateUrl: 'js/views/mentions.html',
      controller: 'MentionsCtrl'
    })
    .otherwise({
      redirectTo: '/'
    });
});


BSApp.factory('Typologies', ['$resource',function($resource) {
  return $resource('api/typologies/');
}]);

BSApp.factory('Reply', ['$resource',function($resource) {
  return $resource('api/replies/');
}]);

BSApp.factory('Mail', ['$resource',function($resource) {
  return $resource('api/sendmail/');
}]);

BSApp.controller('NavCtrl', function($rootScope, $scope, $location) {
  $rootScope.isSidebarActive = true;
  $scope.$location = $location;
});

document.addEventListener("DOMContentLoaded", getWindowSize(), false);

window.onresize = function( event ) {
  getWindowSize();
};

function getWindowSize() {
  $( 'html' ).attr('window-width', window.innerWidth );
  $( 'html' ).attr('window-height', window.innerHeight );
}
