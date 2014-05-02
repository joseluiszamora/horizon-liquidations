'use strict';

App.Volume = DS.Model.extend({
  description: DS.attr('string'),
  line_volumes: DS.hasMany('line_volume', { async: true })
});

App.Volume.FIXTURES = [
  { id: 1, description: '3 L', line_volumes: [1, 3] },
  { id: 2, description: '2.5 L', line_volumes: [2] },
  { id: 3, description: '750 ml', line_volumes: [] },
  { id: 4, description: '1 L', line_volumes: [] },
  { id: 5, description: '375 ml', line_volumes: [] }
];
