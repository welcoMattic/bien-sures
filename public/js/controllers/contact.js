'use strict';

/**
 * @ngdoc function
 * @name BSApp.controller:ContactCtrl
 * @description
 * # ContactCtrl
 * Controller of the BSApp
 */
BSApp.controller('ContactCtrl', function ($rootScope, $scope, Mail) {
  ga('send', 'pageview', {title: 'Bien Sûres - Contact'});
  $rootScope.isSidebarActive = true;
  $('#wrapper').css({'background-color':'#272727'});
  $scope.$from = $('#formContact');

  $scope.submit = function() {
    var $elements = $scope.$from.find('input, textarea'),
        validToSent = true;

    $('#mail-submit span').addClass('hidden');
    $('#mail-submit').addClass('disabled').attr('disabled', 'disabled');
    $('#loadingProgressG').removeClass('hidden');

    angular.forEach($elements, function(element, key) {
      if( !$(element).val() ||
        $(element).val() == false ||
        $(element).val() == "" ||
        $(element).val() == "undefined" )
      {
        validToSent = false;
        return false;
      }
    });

    if( validToSent == true ) {
      var data = {
          first_name : $($elements[0]).val(),
          last_name  : $($elements[1]).val(),
          mail_from  : $($elements[2]).val(),
          subject    : $($elements[3]).val(),
          message    : $($elements[4]).val(),
        };

      Mail.get(data ,function( response ) {
        $('#loadingProgressG').addClass('hidden');
        if( response.status == "success" ) {
          $($elements[0]).val('');
          $($elements[1]).val('');
          $($elements[2]).val('');
          $($elements[3]).val('');
          $($elements[4]).val('');
          $('#mail-submit').html('Message envoyé !');
          ga('send', 'event', 'contact', 'send', 'success');
        } else {
          $('#mail-submit').html('Erreur, verifie les champs');
          ga('send', 'event', 'contact', 'send', 'fail');
        }
      });
    }
  }

});