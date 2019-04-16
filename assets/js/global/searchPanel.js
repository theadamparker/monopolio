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

$('.zipSearchButton').click(function() {
  getSearch();
  updateMap();
});

var searchParameters = {
  "zip": "10012",
  "zipLat": "",
  "zipLng": "",
  "restaurant": "true",
  "store": "true",
  "lagarClara": "true",
  "lagarNegra": "true",
  "unaSanLuis": "true",
  "bottles": "true",
  "cans": true
};

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

  zipGeocode(zip);
}

function zipGeocode(zip) {
  $.getJSON( 'https://maps.googleapis.com/maps/api/geocode/json?address=' + zip + '&key=AIzaSyDoIvLsfzYmLQKGrNs0XxF_MCRBj61kG7I', function( data ) {
      searchParameters["zipLat"] = data.results[0].geometry.location.lat;
      searchParameters["zipLng"] = data.results[0].geometry.location.lng;
  });
}

function moveToLocation(){
  var center = new google.maps.LatLng(searchParameters.zipLat, searchParameters.zipLng);
  map.panTo(center);
}

// update everything in the map
// make sure the search panel parameters are reflected in the map
function updateMap() {
  moveToLocation()
}
