/*
---------------------------------------
    : Custom - Form Datepicker js :
---------------------------------------
*/
"use strict";
$(document).ready(function() {
  $('#move-time').inputmask("hh:mm");
  $('#move-estimated-time').inputmask("hh:mm");
  $('#client-phone').inputmask("(99) 999-999-9999");
  $('#phone').inputmask("(99) 999-999-9999");
  $('#new-contact-phone').inputmask("(99) 999-999-9999");
  $('#email').inputmask("email");
});
