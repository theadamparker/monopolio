// global scripts

$('#over21').click(function() {
  $('.ageOverlay').fadeOut();
})

$(document).ready(function () {
    $(document).on("scroll", onScroll);

    //smoothscroll
    $('.mainNav a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        $(document).off("scroll");

        $('.mainNav a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');

        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('.mainNav a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('.mainNav a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 40.7239902, lng: -73.9966187},
    zoom: 13
  });

  var store = {lat: 40.7239902, lng: -73.9966187};
  // var marker = new google.maps.Marker({position: store, map: map});

  // Create a <script> tag and set the URL as the source.
  var script = document.createElement('script');
  script.src = 'https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js';
  document.getElementsByTagName('head')[0].appendChild(script);

  // Loop through the results array and place a marker for each set of coordinates.
  window.eqfeed_callback = function(results) {
    for (var i = 0; i < results.features.length; i++) {
      var coords = results.features[i].geometry.coordinates;
      var latLng = new google.maps.LatLng(coords[1],coords[0]);
      var marker = new google.maps.Marker({
        position: latLng,
        map: map
      });
    }
  }
}

// https://maps.googleapis.com/maps/api/geocode/json?address=10012&key=AIzaSyDoIvLsfzYmLQKGrNs0XxF_MCRBj61kG7I

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
