'use strict';

/**
 * @ngdoc overview
 * @name condoViewApp
 * @description
 * # condoViewApp
 *
 * Main module of the application.
 */
angular
  .module('condoViewApp', [
    'ngAnimate',
    'ngCookies',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl',
        controllerAs: 'main'
      })
      .when('/about', {
        templateUrl: 'views/about.html',
        controller: 'AboutCtrl',
        controllerAs: 'about'
      })
      .when('/user', {
        templateUrl: 'views/user.html',
        controller: 'UserCtrl',
        controllerAs: 'user'
      })
      .when('/vehicle', {
        templateUrl: 'views/vehicle.html',
        controller: 'VehicleCtrl',
        controllerAs: 'vehicle'
      })
      .when('/patrimony', {
        templateUrl: 'views/patrimony.html',
        controller: 'PatrimonyCtrl',
        controllerAs: 'patrimony'
      })
      .when('/maintenance', {
        templateUrl: 'views/maintenance.html',
        controller: 'MaintenanceCtrl',
        controllerAs: 'maintenance'
      })
      .otherwise({
        redirectTo: '/'
      });
  });
