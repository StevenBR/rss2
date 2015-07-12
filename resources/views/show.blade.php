<!DOCTYPE html>
<?php
header('Access-Control-Allow-Origin: localhost:3000');
?>
<html>
    <head>
        <title>Laravel</title>

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    </head>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
     <!--<script type="text/javascript" src='http://code.jquery.com/jquery-1.10.2.min.js'></script>-->
      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
      <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
<script>


$(document).ready(function(){
    $.get("./welcome.blade.php", function(res) {
        console.log(res);
    }, "json");
    // for(i=1; i<10; i++){
        // $("title").append("src='localhost:3000'");
    // }
})
</script>
 <body>
        <div class="container">
        <div id="title"></div>
        </div>
    </body>
</html>
