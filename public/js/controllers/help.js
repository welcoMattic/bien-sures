'use strict';

/**
 * @ngdoc function
 * @name BSApp.controller:HelpCtrl
 * @description
 * # HelpCtrl
 * Set rootScope variables and background color for help.html view
 * Controller of the BSApp
 */
BSApp.controller('HelpCtrl', function ($rootScope, $scope) {
  ga('send', 'pageview', {title: 'Bien Sûres - Besoin d-aide'});
  $('#wrapper').css({'background-color':'#272727'});
  $rootScope.alreadyPlayed = true;
  $rootScope.isSidebarActive = true;
});