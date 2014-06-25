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
    .when('/mur-de-paroles', {
      templateUrl: 'js/BSApp/app/views/wall.html',
      controller: 'WallCtrl'
    })
    .when('/besoin-d-aide', {
      templateUrl: 'js/BSApp/app/views/help.html',
      controller: 'HelpCtrl'
    })
    .when('/a-propos', {
      templateUrl: 'js/BSApp/app/views/about.html',
      controller: 'AboutCtrl'
    })
    .when('/nous-contacter', {
      templateUrl: 'js/BSApp/app/views/contact.html',
      controller: 'ContactCtrl'
    })
    .otherwise({
      redirectTo: '/'
    });
});


BSApp.factory('Typologies', ['$resource',function($resource) {
  return $resource('/api/typologies/');
}]);

BSApp.factory('Replies', ['$resource',function($resource) {
  return $resource('/api/replies/');
}]);

BSApp.factory('Mail', ['$resource',function($resource) {
  return $resource('/api/sendmail/');
}]);

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
