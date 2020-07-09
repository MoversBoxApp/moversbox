/*
------------------------------------
    : Custom - Sweet Alerts js :
------------------------------------
*/
(function ($) {
    'use strict';
        /* -- Sweet Alert - Custom Cargo Form -- */
        $("body").on("click", "#custom-cargo", function() {
            swal({
              title:"How many?",
              html:"<center><input style='width:50%;padding-left:5px;' type='number' min='1' class='form-control'></center>",
              width:200
            })
        });

})(jQuery)
$(document).ready(function() {
    /* -- Form Select - Select2 -- */
    $('.select2-multi-select').select2({
        placeholder: 'Choose',
    });

});
