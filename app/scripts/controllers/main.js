'use strict';

/**
 * @ngdoc function
 * @name timemailApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the timemailApp
 */
angular.module('timemailApp')
  .controller('MainCtrl', function ($scope, $state) {

    $scope.isTabActive = function (path) {
      var res = $state.current.name === path ? 'active' : '';
      return res;
    };

    $scope.getCopyrightYear = function () {
      return new Date().getFullYear();
    };

  });
