'use strict';

/**
 * @ngdoc function
 * @name BSApp.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Set rootScope variables and background color for about.html view
 * Controller of the BSApp
 */
BSApp.controller('AboutCtrl', function ($rootScope, $scope) {
  ga('send', 'pageview', {title: 'Bien Sûres - À propos'});
  $('#wrapper').css({'background-color':'#272727'});
  $rootScope.alreadyPlayed = true;
  $rootScope.isSidebarActive = true;
});