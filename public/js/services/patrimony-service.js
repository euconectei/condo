(function () {
    'use strict';

    function PatrimonyService($http) {
        var self = this,
            urlBase = '/condo/public';

        function successGetting(data) {
            return data;
        }

        function errorGetting(err) {
            console.log('error getting general patrimony: ');
            console.log(err);
        }

        self.getAll = function () {
            return $http
                .get(urlBase + '/api/patrimonies')
                .then(successGetting, errorGetting);
        };

        self.getBlocks = function () {
            var obj = {};

            function orderBlocks(data) {
                data.data.forEach(function (item) {
                    var block = item.block,
                        number = item.number;

                    if (obj[block] !== undefined) {
                        if (obj[block].indexOf(number) < 0) {
                            obj[block].push(number);
                        }
                    } else {
                        obj[block] = [number];
                    }
                });
                return obj;
            }

            return self.getAll().then(orderBlocks, errorGetting);
        };

    }

    angular
        .module('reportApp')
        .service('PatrimonyService', PatrimonyService);

    PatrimonyService.$inject = ['$http'];

}());
