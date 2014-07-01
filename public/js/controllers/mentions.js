'use strict';

/**
 * @ngdoc function
 * @name BSApp.controller:MentionsCtrl
 * @description
 * # MentionsCtrl
 * Controller of the BSApp
 */
BSApp.controller('MentionsCtrl', function ($rootScope, $scope) {
  ga('send', 'pageview', {title: 'Bien Sûres - Mention Légales'});
  $('#wrapper').css({'background-color':'#f6f6f6'});
  $rootScope.isSidebarActive = true;
});