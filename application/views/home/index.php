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
                  <th>&nbsp;</th>
                  <th>LINEA</th>
                  <th>VOL</th>
                  <th>PRODUCTO</th>
                  <th>PRECIO (Bs.)</th>
                  <th>CARGA P</th>
                  <th>CARGA U</th>
                  <th>TOTAL</th>
                </tr>
              </thead>

              {{#if length}}
                <tbody>
                  {{#each filteredTodos itemController="todo"}}
                    <tr>
                      <td>
                        {{input type="checkbox" class="toggle" checked=isCompleted}}
                      </td>
                      <td> {{ line }} </td>
                      <td> {{ volume }} </td>
                      <td> {{ name }} </td>
                      <td> {{ price }} </td>

                      <td {{bind-attr class="isCompleted:completed isEditing:editing"}}>
                        {{#if isEditing}}
                          {{edit-todo class="edit" value=bufferedTitle focus-out="doneEditing" insert-newline="doneEditing" escape-press="cancelEditing"}}
                        {{else}}
                          <label {{action "editTodo" on="doubleClick"}}>{{ cargap }}</label>
                        {{/if}}
                        </td>
                      <td> {{ cargau }} </td>
                      <td> {{ totalvalue }} </td>
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

              <tfooter>
                <tr>
                  <th colspan=5>&nbsp;</th>
                  <th>100</th>
                  <th>200</th>
                  <th>300</th>
                </tr>
              </tfooter>
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

<script type="text/x-handlebars" data-template-name="lines">
<table class="table table-condensed">
  <thead>
    <tr>
      <th>LINEA</th>
      <th>VOL</th>
      <th>PRODUCTO</th>
    </tr>
  </thead>
  <tbody>
    {{#each line in model}}
      {{#each line_volume in line.line_volumes}}
      <tr>
        <td>{{line.description}}</td>
        <td>{{line_volume.volume.description}}</td>
        <td>{{line_volume.product.name}}</td>
      </tr>
      {{/each}}
    {{/each}}
  </tbody>
</table>
</script>

<script type="text/x-handlebars" data-template-name="volumes">
<table class="table table-condensed">
  <thead>
    <tr>
      <th>LINEA</th>
      <th>VOL</th>
      <th>PRODUCTO</th>
    </tr>
  </thead>
  <tbody>
    {{#each volume in model}}
      {{#if volume.products}}
      {{#each product in volume.products}}
      <tr>
        <td>{{getLineDescription volume.id product.id}}</td>
        <td>{{volume.description}}</td>
        <td>{{product.name}}</td>
      </tr>
      {{/each}}
      <tr>
        <th></th>
        <th>0</th>
        <th>0</th>
      </tr>
      {{/if}}
    {{/each}}
  </tbody>
</table>
</script>
<script type="text/x-handlebars" data-template-name="charges">
<table class="table table-condensed">
  <thead>
    <tr>
      <th rowspan="2">LINEA</th>
      <th rowspan="2">VOL</th>
      <th rowspan="2">PRODUCTO</th>
      <th colspan="2">DIA ANT.</th>
      <th colspan="2">CARGA</th>
    </tr>
    <tr>
      <th>P</th>
      <th>U</th>
      <th>P</th>
      <th>U</th>
    </tr>
  </thead>
  <tbody>
    {{#each charge in model itemController="charge"}}
      <tr>
        <td>{{charge.linea}}</td>
        <td>{{charge.vol}}</td>
        <td>{{charge.producto}}</td>
        <th>{{charge.cargap}}</th>
        <th>{{charge.cargau}}</th>
        <th>{{input-number type="text" value=p focus-out="saveValue"}}</th>
        <th>{{input-number type="text" value=u focus-out="saveValue"}}</th>
      </tr>
    {{/each}}
  </tbody>
</table>
</script>
