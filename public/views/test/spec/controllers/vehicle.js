'use strict';

describe('Controller: VehicleCtrl', function () {

  // load the controller's module
  beforeEach(module('condoViewApp'));

  var VehicleCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    VehicleCtrl = $controller('VehicleCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(VehicleCtrl.awesomeThings.length).toBe(3);
  });
});
