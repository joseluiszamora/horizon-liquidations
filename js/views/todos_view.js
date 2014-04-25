/*global App, Ember */
(function () {
	'use strict';

	App.TodosView = Ember.View.extend({
		focusInput: function () {
			this.$('#new-todo').focus();
		}.on('didInsertElement')
	});
})();
