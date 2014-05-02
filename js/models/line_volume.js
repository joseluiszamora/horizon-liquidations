'use strict';

App.LineVolume = DS.Model.extend({
  line: DS.belongsTo('line'),
  volume: DS.belongsTo('volume'),
  product: DS.belongsTo('product')
});

App.LineVolume.FIXTURES = [
  { id: 1, line: 1, volume: 1, product: 4 },
  { id: 2, line: 1, volume: 1, product: 5 },
  { id: 3, line: 3, volume: 3, product: 1 },
  { id: 4, line: 3, volume: 3, product: 2 },
  { id: 5, line: 3, volume: 3, product: 3 },
  { id: 6, line: 3, volume: 4, product: 2 },
  { id: 7, line: 3, volume: 4, product: 3 },
  { id: 8, line: 3, volume: 5, product: 1 },
  { id: 9, line: 3, volume: 5, product: 2 }
];
