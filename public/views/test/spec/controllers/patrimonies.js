'use strict';

describe('Controller: PatrimoniesCtrl', function () {

  // load the controller's module
  beforeEach(module('condoViewApp'));

  var PatrimoniesCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    PatrimoniesCtrl = $controller('PatrimoniesCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(PatrimoniesCtrl.awesomeThings.length).toBe(3);
  });
});
