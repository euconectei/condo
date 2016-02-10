(function () {
    'use strict';

    function ReportController($scope, $http, UserConfig) {

        $scope.reports = [];
        $scope.loading = false;
        $scope.chartObject = [];

        var urlBase = '/condo/public';

        $scope.init = function () {
            $scope.loading = true;
            $http.get(urlBase + '/api/reports')
                .success(function (data) {
                    $scope.reports = data;
                    $scope.loading = false;

                });
        };

        $scope.addReport = function () {
            $scope.loading = true;
            $scope.report.reporter = UserConfig.usrId;

            console.log($scope.report);

            $http.post(urlBase + '/api/reports', $scope.report).success(function (data) {
                $scope.reports.push(data);
                $scope.report = '';
                $scope.loading = false;

            }).error(function (err) {
                console.log(err);
            });
        };

        $scope.updateReport = function (report) {
            $scope.loading = true;

            $http.put(urlBase + '/api/reports/' + report.id, {
                title    : $scope.report.title,
                block    : $scope.report.block,
                apartment: $scope.report.apartment,
                done     : $scope.report.done
            }).success(function (data) {
                report = data;
                $scope.loading = false;

            });
        };

        $scope.deleteReport = function (index) {
            $scope.loading = true;

            var report = $scope.reports[index];

            $http.delete(urlBase + '/api/reports/' + report.id)
                .success(function () {
                    $scope.reports.splice(index, 1);
                    $scope.loading = false;

                });
        };


        $scope.init();

    }

    angular
        .module('reportApp')
        .controller('ReportController', ReportController);

    ReportController.$inject = ['$scope', '$http', 'UserConfig'];
})();
