(function () {
  'use strict';

  /* @ngInject */
  function ReportService($http, envService) {

    this.getAll = function () {

      var url = envService.read('reportsIndex'),
        successCallback = function (response) {
          // console.log(response.data);
          return response.data;
        },
        errorCallback = function (response) {
          console.log(response);
          return response;
        };

      // console.log(url);

      return $http.get(url).then(
        successCallback,
        errorCallback
      );
    };

    this.create = function () {
      var url = envService.read('reportsCreate'),
        successCallback  = function () {
          return 'funcionou';
        },
        errorCallback = function (response) {
          console.log(response);
          return 'não funcionou';
        };

      return $http.post(url).then(
        successCallback(),
        errorCallback()
      );
    };

  }

  angular
    .module('condoViewApp')
    .service('ReportService', ReportService);

  ReportService.$inject = ['$http', 'envService'];
}());
