/*global App, Ember */
(function () {
	'use strict';

  var onlyNumber = function(input) {
    return input.toString().replace(/[^\d]/g, "");
  }

  App.NumberFieldView = Ember.TextField.extend({
    _cleanValue: function() {
      return this.set('value', onlyNumber(this.get('value')));
    }.observes('value')
  });
})();
