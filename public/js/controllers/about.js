'use strict';

/**
 * @ngdoc function
 * @name BSApp.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the BSApp
 */
BSApp.controller('AboutCtrl', function ($rootScope, $scope) {
  ga('send', 'pageview', {title: 'Bien Sûres - À propos'});
  $('#wrapper').css({'background-color':'#272727'});
  $rootScope.isSidebarActive = true;
});