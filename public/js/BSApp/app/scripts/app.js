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
  "ngActivityIndicator",
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


// Polyfill inArray : true if needle exists in haystack, else false
Array.prototype.inArray = function(needle, strict) {
  strict = strict || false;
  for(var key in this) {
    if(strict) {
      if(this[key] === needle)
        return true;
    } else if(this[key] == needle) {
      return true;
    }
  }
  return false;
};