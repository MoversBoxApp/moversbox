
@extends('layouts.main')
<div class="input_fields_wrap">
  <div class="form-group">
      <label class="col-lg-3 col-form-label" for="client-phone">Phone<span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="client-phone" name="client-phone" placeholder="(__)-___-____">
      <label class="col-lg-3 col-form-label" for="email">Email <span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="email" name="client-email" placeholder="_@_._">
  </div>
      <div class="form-row">
          <div class="form-group col-md-6">
              <label for="firstname">First Name<span class="text-danger">*</span></label>
              <input type="text" name="firstname" class="form-control" id="firstname">
          </div>
          <div class="form-group col-md-6">
              <label for="lastname">Last Name<span class="text-danger">*</span></label>
              <input type="text" name="lastname" class="form-control" id="lastname">
          </div>
      </div>
  <div class="p-t-50">
    <a id="add_contact" class="add_field_button btn-contact-2 btn btn-primary">Add Another Contact</a>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  var max_fields      = 10; //maximum input boxes allowed
  var wrapper         = $(".input_fields_wrap"); //Fields wrapper
  var add_button      = $(".add_field_button"); //Add button ID

  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
      e.preventDefault();
      if(x < max_fields){ //max input box allowed
          x++; //text box increment
          $("#rm").remove();

          $(wrapper).append('<div class="p-t-30 contact-2">'); //add input box
          $(wrapper).append('<div class="form-group">'); //add input box
          $(wrapper).append('<label class="col-lg-3 col-form-label" for="contact-phone">Phone<span class="text-danger">*</span></label>'); //add input box
          $(wrapper).append('<input type="text" class="form-control" name="contact-phone" placeholder="(__)-___-____"></div>'); //add input box
          $(wrapper).append('<div class="form-row">'); //add input box
          $(wrapper).append('<div class="form-group col-md-6">'); //add input box
          $(wrapper).append('<label for="firstname-2">First Name<span class="text-danger">*</span></label>'); //add input box
          $(wrapper).append('<input type="text" name="firstname-2" class="form-control"></div>'); //add input box
          $(wrapper).append('<div class="form-group col-md-6">'); //add input box
          $(wrapper).append('<label for="lastname-2">Last Name<span class="text-danger">*</span></label>'); //add input box
          $(wrapper).append('<input type="text" name="lastname-2" class="form-control" id="lastname-2">'); //add input box
          $(wrapper).append('</div></div></div>'); //add input box
          // $(wrapper).append('<a href="#" id="rm" class="remove_field">Remove</a>'); //add input box
          $(wrapper).append('<br>')
      }
  });

  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
      e.preventDefault();
      $("#contact-2").remove(); x--;

  })
});
</script>
