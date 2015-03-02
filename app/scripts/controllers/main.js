'use strict';

/**
 * @ngdoc function
 * @name timemailApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the timemailApp
 */
angular.module('timemailApp')
  .controller('MainCtrl', function ($scope) {
    console.log('ctrl ok');
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });
