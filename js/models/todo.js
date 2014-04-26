/*global App, DS */
(function () {
	'use strict';

	App.Todo = DS.Model.extend({
		title: DS.attr('string'),
		isCompleted: DS.attr('boolean'),

		line: DS.attr('string'),
		volume: DS.attr('string'),
		name: DS.attr('string'),
		price: DS.attr('number'),
		cargap: DS.attr('number'),
		cargau: DS.attr('number')
	});
})();