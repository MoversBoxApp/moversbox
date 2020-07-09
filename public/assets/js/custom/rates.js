/*
---------------------------------------
    : Custom - Form X-editable js :
---------------------------------------
*/
"use strict";
$(document).ready(function() {
    /* -- X-editable -- */
    $.fn.editable.defaults.mode = 'inline';
    $.fn.editableform.buttons='<button type="submit" class="btn btn-success editable-submit btn-sm"><i class="mdi mdi-check"></i></button><button type="button" class="btn btn-danger editable-cancel btn-sm"><i class="mdi mdi-close"></i></button>';
    $('#movers-share-rate').editable({
        type: 'text',
        pk: 1,
        title: 'Enter Rate',
        placeholder:'0.00',
        inputclass: 'form-control-rate'
    });
    $('#movers-tax-rate').editable({
        type: 'text',
        pk: 1,
        title: 'Enter Rate',
        placeholder:'0.00',
        inputclass: 'form-control-rate'
    });
    $('#alliance-share-rate').editable({
        type: 'text',
        pk: 1,
        title: 'Enter Rate',
        placeholder:'0.00',
        inputclass: 'form-control-rate'
    });
    $('#alliance-tax-rate').editable({
        type: 'text',
        pk: 1,
        title: 'Enter Rate',
        placeholder:'0.00',
        inputclass: 'form-control-rate'
    });
    $('#smallmoves-share-rate').editable({
        type: 'text',
        pk: 1,
        title: 'Enter Rate',
        placeholder:'0.00',
        inputclass: 'form-control-rate'
    });
    $('#smallmoves-tax-rate').editable({
      type: 'text',
      pk: 1,
      title: 'Enter Rate',
      placeholder:'0.00',
      inputclass: 'form-control-rate'
    });
    $('#gst-rate').editable({
        type: 'text',
        pk: 1,
        title: 'Enter Rate',
        placeholder:'0.00',
        inputclass: 'form-control-rate'
    });
    $('#move-rate').editable({
        type: 'text',
        pk: 1,
        title: 'Enter Rate',
        placeholder:'0.00',
        inputclass: 'form-control-rate'
    });
    $('#one-man-rate').editable({
        type: 'text',
        pk: 1,
        title: 'Enter Rate',
        placeholder:'0.00',
        inputclass: 'form-control-rate'
    });
    $('#extra-man-rate').editable({
        type: 'text',
        pk: 1,
        title: 'Enter Rate',
        placeholder:'0.00',
        inputclass: 'form-control-rate'
    });
      /*Input Date Picker*/
        $('#movers-share-range-date').datepicker({
    	    language: 'en',
    	    dateFormat: 'dd/mm/yyyy',
    	    range: true,
    	    multipleDatesSeparator: ' - ',
    	});
        $('#movers-tax-range-date').datepicker({
    	    language: 'en',
    	    dateFormat: 'dd/mm/yyyy',
    	    range: true,
    	    multipleDatesSeparator: ' - ',
    	});
        $('#alliance-share-range-date').datepicker({
    	    language: 'en',
    	    dateFormat: 'dd/mm/yyyy',
    	    range: true,
    	    multipleDatesSeparator: ' - ',
    	});
        $('#alliance-tax-range-date').datepicker({
    	    language: 'en',
    	    dateFormat: 'dd/mm/yyyy',
    	    range: true,
    	    multipleDatesSeparator: ' - ',
    	});
        $('#smallmoves-share-range-date').datepicker({
    	    language: 'en',
    	    dateFormat: 'dd/mm/yyyy',
    	    range: true,
    	    multipleDatesSeparator: ' - ',
    	});
        $('#smallmoves-tax-range-date').datepicker({
    	    language: 'en',
    	    dateFormat: 'dd/mm/yyyy',
    	    range: true,
    	    multipleDatesSeparator: ' - ',
    	});
        $('#gst-range-date').datepicker({
    	    language: 'en',
    	    dateFormat: 'dd/mm/yyyy',
    	    range: true,
    	    multipleDatesSeparator: ' - ',
    	});
        $('#move-rate-range-date').datepicker({
    	    language: 'en',
    	    dateFormat: 'dd/mm/yyyy',
    	    range: true,
    	    multipleDatesSeparator: ' - ',
    	});
        $('#one-man-rate-range-date').datepicker({
    	    language: 'en',
    	    dateFormat: 'dd/mm/yyyy',
    	    range: true,
    	    multipleDatesSeparator: ' - ',
    	});
        $('#extra-man-rate-range-date').datepicker({
    	    language: 'en',
    	    dateFormat: 'dd/mm/yyyy',
    	    range: true,
    	    multipleDatesSeparator: ' - ',
    	});
});
/*Input Masks*/
$('#movers-share-rate').on('shown', function() {
        $(this).data('editable').input.$input.inputmask('decimal');
    });
$('#movers-tax-rate').on('shown', function() {
        $(this).data('editable').input.$input.inputmask('decimal');
    });
$('#alliance-share-rate').on('shown', function() {
        $(this).data('editable').input.$input.inputmask('decimal');
    });
$('#alliance-tax-rate').on('shown', function() {
        $(this).data('editable').input.$input.inputmask('decimal');
    });
$('#smallmoves-share-rate').on('shown', function() {
        $(this).data('editable').input.$input.inputmask('decimal');
    });
$('#smallmoves-tax-rate').on('shown', function() {
        $(this).data('editable').input.$input.inputmask('decimal');
    });
$('#gst-rate').on('shown', function() {
        $(this).data('editable').input.$input.inputmask('decimal');
    });
$('#move-rate').on('shown', function() {
        $(this).data('editable').input.$input.inputmask('decimal');
    });
$('#one-man-rate').on('shown', function() {
        $(this).data('editable').input.$input.inputmask('decimal');
    });
$('#extra-man-rate').on('shown', function() {
        $(this).data('editable').input.$input.inputmask('decimal');
    });
