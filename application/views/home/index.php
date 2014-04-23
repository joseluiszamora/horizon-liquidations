<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">CARGA DE PRODUCTOS</h3>
    </div>
</div>


<script type="text/x-handlebars" data-template-name="index">
    <h2>Welcome to Ember.js</h2>
</script>


<!-- handlebars post list view -->
<script type="text/x-handlebars" data-template-name="products">
    <h1> Watery products </h1>
    <ul>
        <!-- #each method allows us to iterate over the array -->
        {{#each}}
            <li>{{#link-to 'post.show' id}} {{title}} at {{created_at}} {{/link-to}}</li>
        {{/each}}
    </ul>
</script>

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

<!--
<script type="text/x-handlebars" data-template-name="index">
    <h1> index page </h1>
</script>

<script type="text/x-handlebars" data-template-name="products">
    <h1> products page </h1>
</script>

<script type="text/x-handlebars" data-template-name="contact">
    <h1> contacto page </h1>
</script>

<script type="text/x-handlebars" data-template-name="nosotros/equipo">
    <h2> Unete al equipo! </h2>
</script>
-->

<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading"> INPUT </div>
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
                            <tr>
                                <td rowspan="8">MIX</td>
                                <td>3L</td>
                                <td>BLUEBERRY</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>3L</td>
                                <td>BERRY</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>3L</td>
                                <td>PINA COLADA</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>3L</td>
                                <td>CHUFLAY</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>3L</td>
                                <td>CAIPRINHA</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>3L</td>
                                <td>MANGO MANGOMARACUYA</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>3L</td>
                                <td>FERNET</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>

                            <tr>
                                <td rowspan="5">LIZTO</td>
                                <td>2.5L</td>
                                <td>BLUEBERRY</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>2.5L</td>
                                <td>BERRY</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>2.5L</td>
                                <td>PINA COLADA</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>2.5L</td>
                                <td>GUARANA</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>

                            <tr>
                                <td rowspan="10">RUJERO</td>
                                <td>750 ml</td>
                                <td>C. PRIVADA</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>750 ml</td>
                                <td>ESP. DE ORO</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>750 ml</td>
                                <td>MI SOCIO</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>

                            <tr>
                                <td>1L</td>
                                <td>ESP. DE ORO</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>1L</td>
                                <td>MI SOCIO</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

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
</div>