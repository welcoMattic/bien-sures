'use strict';

/**
 * @ngdoc function
 * @name BSApp.controller:PlayerCtrl
 * @description
 * # PlayerCtrl
 * Controller of the appApp
 */
BSApp.controller('PlayerCtrl', function ($scope, $sce, $compile) {

  $scope.stretchModes = [
    {label: "None", value: "none"},
    {label: "Fit", value: "fit"},
    {label: "Fill", value: "fill"}
  ];

  $scope.config = {
    autoHide: true,
    autoHideTime: 500,
    autoPlay: false,
    responsive: true,
    stretch: $scope.stretchModes[1],
    theme: {
      url: 'js/BSApp/bower_components/videogular-themes-default/videogular.css'
    },
    plugins: {
      poster: {
        url: "videos/poster.jpg"
      },
      quiz: {
        data: [{
          "time": "2",
          "html": "<input type='text' />",
          "background": "color",
          "background_src": "black",
          "post_answer_url": "https:\/\/bien-sures.dev\/api\/replies\/offensive_id="
        }]
      }
    }
  };

  $scope.onQuizSubmit = function() {

  };

  $scope.onQuizSkip = function() {

  };

});
