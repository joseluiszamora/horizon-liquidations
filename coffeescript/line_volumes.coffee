$ ->
  new ChargePU()

class ChargePU
  constructor: ->
    @cacheElements()
    @bindingElements()


  cacheElements: ->
    @$container = $('#products-list')
    @$product_tpl = $('#product-tpl')

  bindingElements: ->
    html = Hogan.compile(@$product_tpl.html())
    @$container.find('tbody').html html.render(@data())

  data: ->
    {
      products: [
        {
          id: 1,
          linea: "MIX",
          vol: "3L",
          producto: "CAIPIRINHA",
          precio: 23.5,
          da_p: 5,
          da_u: 0
        }, {
          id: 2,
          linea: "MIX",
          vol: "3L",
          producto: "BLUEBERRY",
          precio: 23.5,
          da_p: 5,
          da_u: 0
        }, {
          id: 3,
          linea: "MIX",
          vol: "3L",
          producto: "BERRY",
          precio: 23.5,
          da_p: 5,
          da_u: 0
        }, {
          id: 4,
          linea: "MIX",
          vol: "3L",
          producto: "PIÑA COLADA",
          precio: 23.5,
          da_p: 5,
          da_u: 0
        }
      ]
    }
