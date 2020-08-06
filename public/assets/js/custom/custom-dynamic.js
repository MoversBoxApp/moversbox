// Add fields dynamically
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

          $(wrapper).append('<div class="p-t-30 contact-2">');
          $(wrapper).append('<div class="form-group">');
          $(wrapper).append('<label class="col-lg-3 col-form-label" for="client-phone">Phone<span class="text-danger">*</span></label>');
          $(wrapper).append('<input type="text" class="phone_number form-control" name="client-phone[]" placeholder="(__)-___-____"></div>');
          $(wrapper).append('<div class="form-row">');
          $(wrapper).append('<div class="form-group col-md-6">');
          $(wrapper).append('<label for="firstname">First Name<span class="text-danger">*</span></label>');
          $(wrapper).append('<input type="text" name="firstname[]" class="form-control"></div>');
          $(wrapper).append('<div class="form-group col-md-6">');
          $(wrapper).append('<label for="lastname">Last Name<span class="text-danger">*</span></label>');
          $(wrapper).append('<input type="text" name="lastname[]" class="form-control" id="lastname">');
          $(wrapper).append('</div></div></div>');
          $(wrapper).append('<br>')
      }
  });

  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
      e.preventDefault();
      $("#contact-2").remove(); x--;

  })
});
