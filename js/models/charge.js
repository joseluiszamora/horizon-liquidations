/*global App, DS */
(function () {
  'use strict';

  // Define a Model using EmberData.js
  // DS is the global Datastore provided by EmberData
  App.Charge = DS.Model.extend({
    linea: DS.attr('string'),
    vol: DS.attr('string'),
    producto: DS.attr('string'),
    cargap: DS.attr('number'),
    cargau: DS.attr('number'),
    precio: DS.attr('number')
  });

  // Seed data to be displayed
  App.Charge.FIXTURES = [
    { id: 1, linea: 'RUJERO', vol: '750ml', producto: 'C. PRIVADA', cargap: 5, cargau: 0, precio: 12.5 },
    { id: 2, linea: 'RUJERO', vol: '750ml', producto: 'ESP. DE ORO', cargap: 1, cargau: 1, precio: 12.5 },
    { id: 3, linea: 'RUJERO', vol: '750ml', producto: 'MI SOCIO', cargap: 2, cargau: 0, precio: 12.5 },
    { id: 4, linea: 'RUJERO', vol: '1L', producto: 'ESP. DE ORO', cargap: 3, cargau: 0, precio: 12.5 },
    { id: 5, linea: 'RUJERO', vol: '1L', producto: 'MI SOCIO', cargap: 4, cargau: 2, precio: 12.5 }
  ]
})();
