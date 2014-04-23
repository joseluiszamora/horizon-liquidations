// Array Controllers allow for easy view display
App.ProductsController = Ember.ArrayController.extend({
  // To sort the Arrays we just need to define the sortProperties, multiple attributes can be specified
  sortProperties: ['created_at'],
  sortAscending: true // false for descending
});

