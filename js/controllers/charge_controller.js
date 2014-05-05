/*global App, Ember */
(function () {
  'use strict';
  App.ChargeController = Ember.ObjectController.extend({
    actions: {
      saveValue: function() {
        console.log("---", this.get('id'), this.get('p'), this.get('u'));
      }
    }
  });
})();
