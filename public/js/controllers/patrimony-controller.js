(function () {
    'use strict';

    function PatrimonyController($scope, PatrimonyService) {

        function init() {
            PatrimonyService.getAll().then(function (data) {
                $scope.patrimonies = data.data;
                console.log($scope.patrimonies);
            });
            // PatrimonyService.getBlocks().then(function (data) {
            //     $scope.patrimonies = data;
            // });

        }

        function loadPatrimoniesNumber() {
            $scope.patrimoniesNumber = $scope.patrimonies[$scope.selectedBlock];
            console.log($scope.patrimoniesNumber);
        }

        init();

    }

    angular
        .module('reportApp')
        .controller('PatrimonyController', PatrimonyController);

    PatrimonyController.$inject = ['$scope', 'PatrimonyService'];

}());
