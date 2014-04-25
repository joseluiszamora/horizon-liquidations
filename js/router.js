// Defined routes
// Route Name   Route             Controller            Template  URL
// application  ApplicationRoute  ApplicationController application 
// posts        PostsRoute        PostsController       posts       //
// products     ProductsRoute     ProductsController    products    //
// post         PostRoute         PostController        post
// post.show    PostShowRoute     PostShowController    post/show   /post/:post_id
// post.index   PostIndexRoute    PostIndexController   post/index  /post

/*global Ember, Todos */
(function () {
  'use strict';
  // Define the routes our application will support
  App.Router.map(function () {
    // this will make / render the home view 
    this.resource('products', {path: "/" });
    this.resource('posts', {path: "/post" });
    this.resource('post', function(){
      // create a child view, by default it will be named "resource.route" in this case "post.show"
      this.route("show", { path: '/:post_id'});
    });
  });

  /*App.Router.map(function () {
    this.resource('products', { path: '/' }, function () {
      this.route('active');
      this.route('completed');
    });
    this.resource('posts', {path: "/post" });
    this.resource('post', function(){
      // create a child view, by default it will be named "resource.route" in this case "post.show"
      this.route("show", { path: '/:post_id'});
    });
  });*/

  // On our route we need to set the model which will be used by the controller
  App.PostsRoute = Ember.Route.extend({
    setupController: function(controller) {
      controller.set('model', this.get('store').find('post'));
    }
  });

  App.ProductsRoute = Ember.Route.extend({
    setupController: function(controller) {
      controller.set('model', this.get('store').find('product'));
    }
  });

})();


/*
  App.ProductsRoute = Ember.Route.extend({
    model: function () {
      return this.store.find('product');
    }
  });

  App.ProductsIndexRoute = Ember.Route.extend({
    setupController: function () {
      this.controllerFor('todos').set('filteredTodos', this.modelFor('todos'));
    }
  });

  App.ProductsActiveRoute = Ember.Route.extend({
    setupController: function () {
      var todos = this.store.filter('todo', function (todo) {
        return !todo.get('isCompleted');
      });

      this.controllerFor('todos').set('filteredTodos', todos);
    }
  });

  App.ProductsCompletedRoute = Ember.Route.extend({
    setupController: function () {
      var todos = this.store.filter('todo', function (todo) {
        return todo.get('isCompleted');
      });

      this.controllerFor('todos').set('filteredTodos', todos);
    }
  });
*/