const locationData = [{
  "123": {
    "name": "Tacombi",
    "location": {
        "geo": {
          "lat": "40.7239902",
          "lng": "-73.9966187"
        },
        "address": {
          "number": "123",
          "street": "Elizabeth Street",
          "city": "New York"
        }
    },
    "type": "restaurant",
    "products": {
        "cans": "true",
        "bottles": "true",
        "beerTypes": {
          "lagerClara": "True",
          "lagerNegra": "False",
          "unaSanLuis": "True"
        }
    }
  }
}];


$('.beerFinder__tab').click(function() {
  $('.beerFinder__tab').removeClass('active');
  $(this).addClass('active');

  if(this.innerHTML == 'List') {
    $('.mapPanel').fadeOut();
    $('.listPanel').fadeIn();
  }
  if(this.innerHTML == 'Map') {
    $('.listPanel').fadeOut();
    $('.mapPanel').fadeIn();
  }
})

$('.searchPanel__button').click(function() {
  $(this).toggleClass('active')
})

// $(document).ready(function() {
//   for (var i = 0; locationData.length; i++) {
//     $("hello").appendTo('.listPanel');
//   }
// })
