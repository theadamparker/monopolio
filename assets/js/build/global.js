// global scripts

// Age overlay scripts

$(document).ready(function () {
  if($('.ageOverlay')) {
    $('body').addClass('locked')
  }
})

$('#over21').click(function() {
  $('body').removeClass('locked');
  $('.ageOverlay').fadeOut();
})

$('#under21').click(function() {
  window.location.href = 'http://tacombi.com/';
})

// end age overlay scripts

$('.logo').click(function() {
  // e.preventDefault;
  $('html, body').stop().animate({
      'scrollTop': '0'
  }, 500, 'swing')
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
    var ourBeers = $('#cerveza-de-verdad');
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

    if(scrollPos > ourBeers.position().top) {
      $('.header').removeClass('transparent')
    } else {
      $('.header').addClass('transparent')
    }

}

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 40.7239902, lng: -73.9966187},
    zoom: 13,
    styles: [
      {
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#ebe3cd"
          }
        ]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#a67647"
          }
        ]
      },
      {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
          {
            "color": "#c9b2a6"
          }
        ]
      },
      {
        "featureType": "administrative.land_parcel",
        "elementType": "geometry.stroke",
        "stylers": [
          {
            "color": "#dcd2be"
          }
        ]
      },
      {
        "featureType": "administrative.land_parcel",
        "elementType": "labels",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "administrative.land_parcel",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#ae9e90"
          }
        ]
      },
      {
        "featureType": "landscape.natural",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#dfd2ae"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#dfd2ae"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#93817c"
          }
        ]
      },
      {
        "featureType": "poi.business",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry.fill",
        "stylers": [
          {
            "color": "#efe1be"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#447530"
          }
        ]
      },
      {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#f5f1e6"
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#fdfcf8"
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "elementType": "labels",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#f8c967"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
          {
            "color": "#ffffff"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "labels",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "road.highway.controlled_access",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#e98d58"
          }
        ]
      },
      {
        "featureType": "road.highway.controlled_access",
        "elementType": "geometry.stroke",
        "stylers": [
          {
            "color": "#e6d3ac"
          }
        ]
      },
      {
        "featureType": "road.local",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "road.local",
        "elementType": "labels",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#806b63"
          }
        ]
      },
      {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#dfd2ae"
          }
        ]
      },
      {
        "featureType": "transit.line",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#8f7d77"
          }
        ]
      },
      {
        "featureType": "transit.line",
        "elementType": "labels.text.stroke",
        "stylers": [
          {
            "color": "#ebe3cd"
          }
        ]
      },
      {
        "featureType": "transit.station",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#dfd2ae"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
          {
            "color": "#d9bf93"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#92998d"
          }
        ]
      }
    ]
  });

  var store = {lat: 40.7239902, lng: -73.9966187};
  var marker = new google.maps.Marker({position: store, map: map});

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
