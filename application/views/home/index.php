<script type="text/x-handlebars" data-template-name="todos">
  {{partial "title"}}
  
  <div class="row">

    <div class="col-lg-8">
      <div class="panel panel-default">
        <div class="panel-heading"> INPUT </div>

        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover">

              {{input id="new-todo" type="text" value=newTitle action="createTodo" placeholder="new"}}

              <thead>
                <tr>
                  <th>LINEA</th>
                  <th>VOL</th>
                  <th>PRODUCTO</th>
                  <th>CARGA P</th>
                  <th>CARGA U</th>
                </tr>
              </thead>
              
                {{#if length}}
                  <tbody>
                    {{#each filteredTodos itemController="todo"}}
                      <tr>  
                        <td>a</td>
                        <td>a</td>
                        <td>
                          {{input type="checkbox" class="toggle" checked=isCompleted}}
                        </td>
                        <td {{bind-attr class="isCompleted:completed isEditing:editing"}}>
                          {{#if isEditing}}
                            {{edit-todo class="edit" value=bufferedTitle focus-out="doneEditing" insert-newline="doneEditing" escape-press="cancelEditing"}}
                          {{else}}
                            <label {{action "editTodo" on="doubleClick"}}>{{title}}</label>
                          {{/if}}
                          </td>
                        <td>a</td>
                        <td><button {{action "removeTodo"}} class="destroy"></button></td>
                      </tr>
                    {{/each}}
                  </tbody>


                  <footer id="footer">
                    <span id="todo-count"><strong>{{remaining.length}}</strong> {{pluralize 'item' remaining.length}} left</span>
                    <ul id="filters">
                      <li>
                        {{#link-to "todos.index" activeClass="selected"}}All{{/link-to}}
                      </li>
                      <li>
                        {{#link-to "todos.active" activeClass="selected"}}Active{{/link-to}}
                      </li>
                      <li>
                        {{#link-to "todos.completed" activeClass="selected"}}Completed{{/link-to}}
                      </li>
                    </ul>
                    {{#if completed.length}}
                      <button id="clear-completed" {{action "clearCompleted"}}>
                        Clear completed ({{completed.length}})
                      </button>
                    {{/if}}
                  </footer>
                {{/if}}

              
            </table>

          </div>
        </div>
      </div>
    </div>


    {{partial "right_side"}}  
  </div>
</script>

<script type="text/x-handlebars" data-template-name='_title'>
  <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header">CARGA DE PRODUCTOS</h3>
    </div>
  </div>
</script>

<script type="text/x-handlebars" data-template-name='_right_side'>
  <div class="col-lg-4">
    <div class="panel panel-default">
      <div class="panel-heading"> TOTALES</div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>VENTA</th>
                <th>COBRO</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>444.00</td>
                <td>999.00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</script>