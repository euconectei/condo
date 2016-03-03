(function () {
  'use strict';
  angular.module('condoViewApp').
  	config(function(envServiceProvider) {
  		// set the domains and variables for each environment
  		envServiceProvider.config({
  			domains: {
  				development: ['localhost', 'dev.local'],
  				production: ['condo.euconectei.com.br']
  				// anotherStage: ['domain1', 'domain2'],
  				// anotherStage: ['domain1', 'domain2']
  			},
  			vars: {
  				development: {
  					reportsIndex: '//localhost:8000/reports',
  					reportsCreate: '//localhost:8000/reports/create',
  					usersIndex: '//localhost:8000/reports',
  					usersCreate: '//localhost:8000/reports/create'
  				},
  				production: {
  					apiUrl: '//api.acme.com/v2',
  					staticUrl: '//static.acme.com'
  				}
  			}
  		});

  		// run the environment check, so the comprobation is made
  		// before controllers and services are built
  		envServiceProvider.check();
  	});
})();
