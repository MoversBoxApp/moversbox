/*
------------------------------------
    : Custom - Form Wizards js :
------------------------------------
*/
'use strict';
$(document).ready(function() {
  var form = $("#basic-form-wizard");
  form.children("div").steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "slideLeft",
      onFinishing: function (event, currentIndex)
      {
          return form;
      },
      onFinished: function (event, currentIndex)
      {
          $("#basic-form-wizard").submit();
      }
  });
  var verticalform = $("#vertical-form-wizard");
  verticalform.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    stepsOrientation: "vertical",
    onFinishing: function (event, currentIndex)
      {
          return verticalform;
      },
      onFinished: function (event, currentIndex)
      {
          $("#vertical-form-wizard").submit();
      }
  });
  $('#basic-form-wizard .steps').prepend( "<div class='form-wizard-line'></div>" );

  var inputs = document.getElementsByClassName('address');
  var outputs = document.getElementsByClassName('faddress');
  var options = {
  types: ['address'],
  componentRestrictions: {country: 'ca'}
  };

  var autocompletes = [];

  for (var i = 0; i < inputs.length; i++) {
  var autocomplete = new google.maps.places.Autocomplete(inputs[i], options);
  autocomplete.inputId = inputs[i].id;
  autocomplete.addListener('place_changed', fillIn);
  autocompletes.push(autocomplete);
};
});


function fillIn() {
console.log(this.inputId);
var input = 'faddress-' + this.inputId.split('-')[1];
console.log(input);

var place = this.getPlace();

// console.log(place.formatted_address);
document.getElementById(input).value = place.formatted_address;
};
