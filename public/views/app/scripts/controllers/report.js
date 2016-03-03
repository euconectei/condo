(function() {
    'use strict';

    /* @ngInject */
    function ReportCtrl($scope, ReportService) {

      var RS = ReportService;

      function index() {
        var
          success = function (res) {
            console.log(res);
            $scope.reports = res;
          },
          error = function (res) {
            console.log(res);
          };

        RS.getAll().then(
          success,
          error
        );
      }

      index();

    }

    angular
        .module('condoViewApp')
        .controller('ReportCtrl', ReportCtrl);

    ReportCtrl.$inject = ['$scope', 'ReportService'];
})();
