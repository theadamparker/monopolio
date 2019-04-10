// global scripts

// Google maps API Key
// AIzaSyDoIvLsfzYmLQKGrNs0XxF_MCRBj61kG7I

// Tutorial: https://simplestepscode.com/store-locator-api-tutorial/

function initMap() {

	// pick center coordinates for your map
	var myMapCenter = {lat: 40.785091, lng: -73.968285};

	// create map and say which HTML element it should appear in
	var map = new google.maps.Map(document.getElementById('map'), {
		center: myMapCenter,
		zoom: 14
	});

  console.log('storeFinder.js loaded')
}
