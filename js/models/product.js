/*global App, DS */
(function () {
   'use strict';

   // Define a Model using EmberData.js
   // DS is the global Datastore provided by EmberData
   App.Product = DS.Model.extend({
      line: DS.attr('string'),
      volume: DS.attr('string'),
      name: DS.attr('date'),
      cargap: DS.attr('integer'),
      cargau: DS.attr('integer')
   });

   // Seed data to be displayed
   App.Product.FIXTURES = [
      /*{   
         "id": 1,
         "line": "MIX",
         "volume": "3L",
         "name": "BLUEBERRY"
      },{   
         "id": 2,
         "line": "MIX",
         "volume": "3L",
         "name": "BERRY"
      },{   
         "id": 3,
         "line": "MIX",
         "volume": "3L",
         "name": "PINA COLADA"
      },{   
         "id": 4,
         "line": "MIX",
         "volume": "3L",
         "name": "CHUFLAY"
      },{   
         "id": 5,
         "line": "MIX",
         "volume": "3L",
         "name": "CAIPIRINHA"
      },{   
         "id": 6,
         "line": "MIX",
         "volume": "3L",
         "name": "MANGOMARACUYA"
      },{   
         "id": 7,
         "line": "MIX",
         "volume": "3L",
         "name": "FERNET"
      },*/{   
         "id": 8,
         "line": "LIZTO",
         "volume": "2.5L",
         "name": "BLUEBERRY",
         isEditing: false,
         cargap: 0,
         cargau: 0
      },{   
         "id": 9,
         "line": "LIZTO",
         "volume": "2.5L",
         "name": "BERRY",
         isEditing: true,
         cargap: 1,
         cargau: 1
      },{   
         "id": 10,
         "line": "LIZTO",
         "volume": "2.5L",
         "name": "PINA COLADA",
         isEditing: false,
         cargap: 0,
         cargau: 0
      }
   ]

})();