// The first step to creating an Ember.js application is 
// to make an instance of Ember.Application and assign it to a global variable.
// It's useful to have as a global variable since it will be used frequently
window.App = Ember.Application.create();

// For simplicity lets use a Fixture adapter for the DataStore
App.ApplicationAdapter = DS.FixtureAdapter.extend();


/*
var Producto = Ember.Object.extend({ 
    line: "line default",
    volume: "volume default",
    name: "name default"

    ,convertir_en_link: function() {
	    return "<a href='" + this.get("line") + "'>"
	    + this.get("name")
	    + "</a>";
    }

    ,link: function() {
	  return this.convertir_en_link();
	}.property("name", "line")
	
	,detalle: function() {
  		return 'Link: ' + this.get('line') + '; Nombre: ' + this.get('name') + '; Url: ' + this.get('volume');
	}.property('line', 'name', 'volume')

	,modificarCuenta: function() {
	   cuentaGlobal += 1;
	   console.log("El valor global de cuentaGlobal es " + cuentaGlobal);
	}

	,modificarCuenta: function() {
	   cuentaGlobal += 1;
	   console.log("El valor global de cuentaGlobal es " + cuentaGlobal);
	}.observes("name")

});
*/