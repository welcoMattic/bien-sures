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
  "com.2fdevs.videogular",
  "com.2fdevs.videogular.plugins.controls",
  "com.2fdevs.videogular.plugins.overlayplay",
  "com.2fdevs.videogular.plugins.buffering",
  "com.2fdevs.videogular.plugins.poster",
  "info.vietnamcode.nampnq.videogular.plugins.quiz"
]);

BSApp.config(function ($routeProvider) {
  $routeProvider
    .when('/', {
      templateUrl: 'js/BSApp/app/views/player.html',
      controller: 'PlayerCtrl'
    })
    .when('/player', {
      templateUrl: 'js/BSApp/app/views/player.html',
      controller: 'PlayerCtrl'
    })
    .when('/wall', {
      templateUrl: 'js/BSApp/app/views/wall.html',
      controller: 'WallCtrl'
    })
    .otherwise({
      redirectTo: '/'
    });
});
