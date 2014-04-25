<script type="text/x-handlebars" data-template-name="products">
  {{partial "title"}}
  
  <div class="row">
    <div class="col-lg-8">
      <div class="panel panel-default">
        <div class="panel-heading"> INPUT </div>

        {{input type="text" id="new-todo" placeholder="New...." value=newTitle action="createTodo"}}

        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>LINEA</th>
                  <th>VOL</th>
                  <th>PRODUCTO</th>
                  <th>CARGA P</th>
                  <th>CARGA U</th>
                </tr>
              </thead>
              <tbody>

                {{#each}}
                  
                  <tr>
                    <td> {{ line }} </td>
                    <td> {{ volume }} </td>
                    <td> {{ name }} </td>
                    <td>
                      {{edit-todo class="edit" value=bufferedTitle focus-out="doneEditing" insert-newline="doneEditing" escape-press="cancelEditing"}}
                    </td>
                    <td> {{input type="text" value=cargau disabled=entryNotAllowed size="10"}} </td>
                  </tr>

                {{/each}}

              </tbody>
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

<!--

<script type="text/x-handlebars" data-template-name="products">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>LINEA</th>
        <th>VOL</th>
        <th>PRODUCTO</th>
        <th>CARGA P</th>
        <th>CARGA U</th>
      </tr>
    </thead>
    <tbody>
      {{#each}}
        <tr>
          <td> {{ line }} </td>
          <td> {{ volume }} </td>
          <td> {{ name }} </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      {{/each}}
    </tbody>
  </table>  
</script>

-->


<!-- handlebars post list view 
<script type="text/x-handlebars" data-template-name="posts">
    <h1> Watery Blog </h1>
    <ul>
        {{#each}}
            <li>{{#link-to 'post.show' id}} {{title}} at {{created_at}} {{/link-to}}</li>
        {{/each}}
    </ul>
</script>-->

<!-- handlebars template that will be used for the post view 
<script type="text/x-handlebars" data-template-name="post/show">
    <h2> {{title}} </h2>
    <h4> {{created_at}} </h4>
    <p>
        {{body}}
    </p>
    {{#link-to 'posts'}}Back to post list{{/link-to}}
</script>
-->