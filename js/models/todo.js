App.Todo = DS.Model.extend({
  title: DS.attr('string'),
  isCompleted: DS.attr('boolean')
});


App.Todo.FIXTURES = [
 {
   id: 1,
   title: 'one',
   isCompleted: true
 },
 {
   id: 2,
   title: 'two',
   isCompleted: true
 },
 {
   id: 3,
   title: 'three',
   isCompleted: false
 },
 {
   id: 4,
   title: 'four',
   isCompleted: false
 }
];