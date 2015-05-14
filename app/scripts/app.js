'use strict';

/**
 * @ngdoc overview
 * @name timemailApp
 * @description
 * # timemailApp
 *
 * Main module of the application.
 */
angular
  .module('timemailApp', [
    'ngMessages', 'ui.router'
  ])
  .config(function ($stateProvider, $urlRouterProvider) {
	  // For any unmatched url, redirect to /state1
	  $urlRouterProvider.otherwise('/home');
	  //
	  // Now set up the states
	  $stateProvider
	    .state('home', {
	      url: '/home',
	      templateUrl: 'views/main.html'
	    })
	    .state('about', {
	      url: '/about',
	      templateUrl: 'views/about.html'
	    })
	    .state('contact', {
	      url: '/contact',
	      templateUrl: 'views/contact.html'
	    });
	    

  });
var app = angular.module('contactApp', []);