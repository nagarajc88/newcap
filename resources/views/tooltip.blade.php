<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <style>
  label {
    display: inline-block;
    width: 5em;
  }
  </style>
</head>
<body>

<div class="container">
  <h3>Bootstrap Tooltip Example</h3>
  <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me</a><br><br>
  
  
  <h3>Jquery UI Tooltip Example</h3>
  <label for="age">Your age:</label>
  <a href="#" id="age" title="We ask for your age only for statistical purposes.">Hover over me</a>
  <p>Hover the field to see the tooltip.</p>
</div>


  
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
 </script>
 
   <script>
   $('*').tooltip({
       track: true
   });
//       $( function() {
//            $( document ).tooltip();
//       } );
  </script>
  
</body>
</html>