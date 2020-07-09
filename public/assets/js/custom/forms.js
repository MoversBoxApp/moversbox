/*
---------------------------------------
    : Custom - Form X-editable js :
---------------------------------------
*/
"use strict";
$(document).ready(function() {
    /* -- Form - X-editable -- */
    $.fn.editable.defaults.mode = 'inline';
    $.fn.editableform.buttons='<button type="submit" class="btn btn-success editable-submit btn-sm"><i class="mdi mdi-check"></i></button><button type="button" class="btn btn-danger editable-cancel btn-sm"><i class="mdi mdi-close"></i></button>';
    $('#xeditable-token').editable({
        type: 'text',
        pk: 1,
        title: 'Enter token',
        inputclass: 'form-control-token form-control-sm'
    });
    $('#xeditable-company').editable({
        type: 'text',
        pk: 1,
        title: 'Enter Company Name',
        inputclass: ' form-control-sm'
    });
    $('#xeditable-rate').editable({
        type: 'text',
        pk: 1,
        title: 'Enter Company Name',
        inputclass: 'form-control-company form-control-sm'
    });
    $('#xeditable-token-provider').editable({
        prepend: 'not selected',
        type: 'select',
        pk: 1,
        value: '',
        title: 'Select Provider',
        source: [
            {value: 1, text: 'Square Up'},
            {value: 2, text: 'QuickBooks'},
            {value: 3, text: 'Twillio'}
        ],
        inputclass: 'form-control-select-token form-control-sm',
        display: function(value, sourceData) {
             var colors = {"": "#777777", 1: "#2bcd72", 2: "#4c7cf3"},
                 elem = $.grep(sourceData, function(o){return o.value == value;});

             if(elem.length) {
                 $(this).text(elem[0].text).css("color", colors[value]);
             } else {
                 $(this).empty();
             }
        }
    });
});
