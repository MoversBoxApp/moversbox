/*
----------------------------------
    : Custom - Map Google js :
----------------------------------
*/
"use strict";
  $(document).ready(function() {
      /* -- Google Map - Search Locations Map -- */
      var mapGeo = new GMaps({
          div: '#mapGeo-pickup',
          lat: 49.2886581,
          lng: -123.1386105,
      });
      $('#pu-geocoding_form').submit(function(e) {
          e.preventDefault();
          GMaps.geocode({
              address: $('#pickup-address').val().trim(),
              callback: function(results, status) {
                  if (status == 'OK') {
                      var latlng = results[0].geometry.location;
                      mapGeo.setCenter(latlng.lat(), latlng.lng());
                      mapGeo.addMarker({
                          lat: latlng.lat(),
                          lng: latlng.lng()
                      });
                  }
              }
          });
      });
});
function initialize() {
          var input = document.getElementById('pickup-address');
          var autocomplete = new google.maps.places.Autocomplete(input);
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var place = autocomplete.getPlace();
                document.getElementById('city2').value = place.name;
                document.getElementById('cityLat').value = place.geometry.location.lat();
                document.getElementById('cityLng').value = place.geometry.location.lng();
            });
        };
        google.maps.event.addDomListener(window, 'load', initialize);
