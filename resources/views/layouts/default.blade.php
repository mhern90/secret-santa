<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Secret Santa App</title>

        <!-- Latest compiled and minified Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body> 
        @section('logo')
            <div class="logo-wrap">
                <img src="images/santa-main.png" alt="" class="home-img" width="600px">
            </div>
        @show
        <div class="content">
            <div class="container">
                @yield('content')
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>
