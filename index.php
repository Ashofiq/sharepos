<?php

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

echo $ip = $_SERVER['HTTP_CLIENT_IP'];

} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

echo $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

} else {

echo $ip = $_SERVER['REMOTE_ADDR'];

}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">


    <title>Hello, world!</title>

    <script type="text/javascript">
      $(document).ready(function(){
        $('#sub').click(function(){
          var user_name = $('#name').val();
          $.post('test.php', function(data){
            $('#show').html(data);
          });
        });
      });
    </script>

  </head>
  <body>
    <h1>Hello, world!</h1>

    <div class="container">
      <div class="well">
        <form class="form-group">
          <input type="text" name="name" id="name" placeholder="enter name">
          <button type="button" name="submit" id="sub">submit</button>
        </form>

        <div id="show">
          
        </div>
      </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>