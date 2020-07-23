<!DOCTYPE html>
<html>
  <head>
    <title>Make Autocomplete search using jQuery UI in Laravel</title>

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- jquery UI css -->
    <link href="{{ asset('assets/js/jqueryui/jquery-ui.css') }}" rel="stylesheet" type="text/css" />

    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jqueryui/jquery-ui.min.js') }}"></script>

  </head>
  <body>

    <!-- For defining autocomplete -->
    <input type="text" id='user_search'>

    <!-- For displaying selected option value from autocomplete suggestion -->
    <input type="text" id='userid' readonly>
    <input type="text" id='useremail' readonly>

    <!-- Script -->
    <script type="text/javascript">

    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

      $( "#user_search" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('users.getUsersByPhone')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#user_search').val(ui.item.label); // display the selected text
           // $('#userid').val(ui.item.value); // save selected id to input
           $('#userid').val(ui.item.name + ' ' + ui.item.lastname); // save selected id to input
           $('#useremail').val(ui.item.email); // save selected id to input
           return false;
        }
      });

    });
    </script>
  </body>
</html>
