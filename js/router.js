(function () {
  'use strict';

  App.Router.map(function () {
    this.resource('todos', { path: '/' }, function () {
      this.route('active');
      this.route('completed');
    });

    this.resource('lines');
    this.resource('volumes');
  });

  App.TodosRoute = Ember.Route.extend({
    model: function () {
      return this.store.find('todo');
    }
  });

  App.TodosIndexRoute = Ember.Route.extend({
    setupController: function () {
      this.controllerFor('todos').set('filteredTodos', this.modelFor('todos'));
    }
  });

  App.TodosActiveRoute = Ember.Route.extend({
    setupController: function () {
      var todos = this.store.filter('todo', function (todo) {
        return !todo.get('isCompleted');
      });

      this.controllerFor('todos').set('filteredTodos', todos);
    }
  });

  App.TodosCompletedRoute = Ember.Route.extend({
    setupController: function () {
      var todos = this.store.filter('todo', function (todo) {
        return todo.get('isCompleted');
      });

      this.controllerFor('todos').set('filteredTodos', todos);
    }
  });

  App.LinesRoute = Ember.Route.extend({
    model: function() {
      return this.store.find('line');
    }
  });
  App.VolumesRoute = Ember.Route.extend({
    model: function() {
      return this.store.find('volume');
    }
  });
  App.LineVolumesRoute = Ember.Route.extend({
    model: function() {
      return this.store.find('line_volume');
    }
  });
})();
