// Define a Model using EmberData.js
// DS is the global Datastore provided by EmberData
App.Post = DS.Model.extend({
  title: DS.attr('string'),
  body: DS.attr('string'),
  created_at: DS.attr('date')
});


// Seed data to be displayed
App.Post.FIXTURES = [
  {         "id": 1,
         "title": "First Post",  
          "body": "Life is change, change is stability.",
    "created_at": "2013-10-20 19:16:38"
  },
  {      "title": "2th Post",    
            "id": 2,
          "body": "Only the hand that erases can write the true thing.",
    "created_at": "2013-10-21 19:16:38"
  },
  {      "title": "3rd Post",    
            "id": 3,
          "body": "It is easy to believe we are each waves and forget we are also the ocean.",
    "created_at": "2013-10-23 19:16:38"
  },
  {      "title": "4th Post",    
            "id": 4,
          "body": "Remember that sometimes not getting what you want is a wonderful stroke of luck.",
    "created_at": "2013-10-24 09:16:38"
  }
]