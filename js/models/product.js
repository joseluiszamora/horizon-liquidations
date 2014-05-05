/*global App, DS */
(function () {
   'use strict';

   // Define a Model using EmberData.js
   // DS is the global Datastore provided by EmberData
   App.Product = DS.Model.extend({
      name: DS.attr('string'),
      cargap: DS.attr('number'),
      cargau: DS.attr('number'),
      line_volumes: DS.hasMany('line_volume', { async: true }),
      volumes: DS.hasMany('volume', { async: true })
   });

   // Seed data to be displayed
   App.Product.FIXTURES = [
     { id: 1, name: 'C. PRIVADA', cargap: 12.5, cargau: 13 },
     { id: 2, name: 'ESP. DE ORO', cargap: 2.5, cargau: 3 },
     { id: 3, name: 'MI SOCIO', cargap: 21.5, cargau: 23 },
     { id: 4, name: 'BLUEBERRY', cargap: 21.5, cargau: 23 },
     { id: 5, name: 'BERRY', cargap: 21.5, cargau: 23 }
   ]
})();
