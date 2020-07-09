/*
---------------------------------------
    : Custom - Form Datepicker js :
---------------------------------------
*/
"use strict";
$(document).ready(function() {
    /* --- Form - Datepicker -- */
    $('#default-date').datepicker({
	    language: 'en',
	    dateFormat: 'dd/mm/yyyy',
	});
    $('#autoclose-date').datepicker({
	    language: 'en',
	    autoClose: true,
	    dateFormat: 'dd/mm/yyyy',
	});
    $('#month-view-date').datepicker({
	    language: 'en',
	    minView: 'months',
	    view: 'months',
	    dateFormat: 'MM yyyy'
	});
    $('#time-format').datepicker({
    	language: 'en',
	    timeFormat: 'hh:ii aa',
	    autoClose: true,
	    timepicker: true,
	    dateTimeSeparator: ' - '
	});
    $('#multi-date').datepicker({
	    language: 'en',
	    dateFormat: 'dd/mm/yyyy',
	    multipleDates: 3,
	});
    $('#range-date').datepicker({
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
    $('#min-max-date').datepicker({
	    language: 'en',
	    dateFormat: 'dd/mm/yyyy',
	    minDate: new Date(),
	    position: 'top left',
	});
    var disabledDays = [0, 6];
	$('#disable-day-date').datepicker({
	    language: 'en',
	    dateFormat: 'dd/mm/yyyy',
	    position: 'top left',
	    onRenderCell: function (date, cellType) {
	        if (cellType == 'day') {
	            var day = date.getDay(),
	                isDisabled = disabledDays.indexOf(day) != -1;

	            return {
	                disabled: isDisabled
	            }
	        }
	    }
	});
  $('#xeditable-truck').editable({
      prepend: 'not selected',
      type: 'select',
      pk: 1,
      value: '',
      title: 'Select Truck',
      source: [
          {value: 1, text: 'Savana 1'},
          {value: 2, text: 'Savana 2'},
          {value: 3, text: '5 TON'},
          {value: 4, text: 'External Truck 1'}
      ],
      inputclass: 'form-control-select-truck form-control-sm',
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
  $('#move-time').inputmask("hh:mm");
  $('#move-estimated-time').inputmask("hh:mm");
  $('#client-phone').inputmask("(99) 999-999-9999");
  $('#new-contact-phone').inputmask("(99) 999-999-9999");
  $('#email').inputmask("email");
});
