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
  'ngAnimate',
  'ngResource',
  'ngRoute',
  'ngSanitize',
  'ngTouch'
]);

BSApp.config(function ($routeProvider) {
  $routeProvider
    .when('/', {
      templateUrl: 'js/BSApp/app/views/main.html',
      controller: 'MainCtrl'
    })
    .otherwise({
      redirectTo: '/'
    });
});
