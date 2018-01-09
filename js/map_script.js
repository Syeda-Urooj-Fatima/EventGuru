function initMap() {

  geocoder = new google.maps.Geocoder();

  var myMap = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 33.6600, lng: 73.2294},
    zoom: 11
  });

  var myMarker = new google.maps.Marker({
    position: {lat: 33.6600, lng: 73.2294}, 
    map: myMap,
    draggable: true
  });
 
  myMarker.addListener('drag',function(){
    geocodePosition(myMarker.getPosition());
  });

  // Create the search box and link it to the UI element.
  var input = document.getElementById('pac-input');
  var searchBox = new google.maps.places.SearchBox(input);
  myMap.controls[google.maps.ControlPosition.TOP_CENTER].push(input);

  // Bias the SearchBox results towards current map's viewport.
  myMap.addListener('bounds_changed', function() {
    searchBox.setBounds(myMap.getBounds());
  });
  
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }
    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      if (!place.geometry) {
        console.log("Returned place contains no geometry");
        return;
      }
      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    myMap.fitBounds(bounds);
  });

  myMap.addListener('click', function(event) {
    placeMarker(event.latLng);
    geocodePosition(myMarker.getPosition());
  });

  function placeMarker(location) {
    myMarker.setMap(null);
    myMarker = new google.maps.Marker({
      position: location, 
      map: myMap,
      draggable: true
    });
    myMarker.addListener('drag',function(){
      geocodePosition(myMarker.getPosition());
    });
  }
}

function geocodePosition(pos) {
  geocoder.geocode({latLng: pos}, function(responses) {
    if (responses && responses.length > 0) {
      var address = responses[0].formatted_address;
      var lat = responses[0].geometry.location.lat;
      var lng = responses[0].geometry.location.lng;
      $("#address").attr('disabled','true');
      $("#address").val(address);
      $("#form-lat").val(lat);
      $("#form-lng").val(lng);
    }
  });

}