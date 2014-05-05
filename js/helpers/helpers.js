/*global Ember */
(function () {
	'use strict';

  Ember.Handlebars.helper('input-number', App.NumberFieldView);

	Ember.Handlebars.helper('getLineDescription', function (v_id, p_id) {
    this.store('line');
    //var hola = App.LinesRoute.model;
    //var line_volumes = App.LineVolume.store.find('line_volume');
    //line_volumes = App.LineVolume.store.all('line_volume');
    //var filters = line_volumes.filter(function(item, index, self) {
    //  console.log(item.get('volume'), item.get('product'));
    //  if(item.get('volume').get('id') == v_id && item.get('product').get('id') == p_id) {
    //    return true;
    //  }
    //});
    //return filters.get('firstObject').get('description');
    return 'MIX';
	});
})();
