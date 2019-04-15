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
  $(this).toggleClass('active');
  getSearch();
});

// begin vue app

// var app = new Vue({
//   el: '#app',
//   data: {
//     message: 'Hello Vue!'
//   }
//
// });

var searchParameters = {
  "zip": "10012",
  "restaurant": "true",
  "store": "true",
  "lagarClara": "true",
  "lagarNegra": "true",
  "unaSanLuis": "true",
  "bottles": "true",
  "cans": true
};

// update everything in the map
// make sure the search panel parameters are reflected in the map
function updateMap() {

}

// get the status of a button
function buttonValue(el) {
  var el = document.querySelector(el);
  if(el.classList.contains("active")) {
    return "true"
  }
  else return "false"
}

// get the parameters of the search panel
function getSearch() {
  var zip = document.getElementById("zip").value;
  var restaurant = buttonValue('#restaurant');
  var store = buttonValue('#store');
  var bottles = buttonValue('#bottles');
  var cans = buttonValue('#cans');

  searchParameters["zip"] = zip;
  searchParameters["restaurant"] = restaurant;
  searchParameters["store"] = store;
  searchParameters["bottles"] = bottles;
  searchParameters["cans"] = cans;

  console.log("Restaurant: " + searchParameters["restaurant"]);
  console.log("Store: " + searchParameters["store"]);
  console.log("Bottles: " + searchParameters["bottles"]);
  console.log("Cans: " + searchParameters["cans"]);
}
