	angular.module('reportApp', [], function ($interpolateProvider) {
		$interpolateProvider.startSymbol('<%');
		$interpolateProvider.endSymbol('%>');
	});
