'use strict';

App.Line = DS.Model.extend({
  description: DS.attr('string'),
  line_volumes: DS.hasMany('line_volume', { async: true })
});

App.Line.FIXTURES = [
  { id: 1, description: 'MIX', line_volumes: [1, 2] },
  { id: 2, description: 'LIZTO', line_volumes: [] },
  { id: 3, description: 'RUJERO', line_volumes: [3,4,5,6,7,8,9] },
  { id: 4, description: 'V.L.C.', line_volumes: [] },
  { id: 5, description: 'NITRO', line_volumes: [] },
  { id: 6, description: 'ENERG.', line_volumes: [] },
  { id: 7, description: 'VDK69', line_volumes: [] },
  { id: 8, description: 'SIDRA', line_volumes: [] },
  { id: 9, description: 'OTROS', line_volumes: [] }
];
