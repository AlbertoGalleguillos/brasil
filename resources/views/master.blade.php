<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>️️❤️ ️Fer & Alberto ❤️</title>
    <link rel="stylesheet" href="/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    
    <div class="parallax-container">
        <div class="center white-text">
            <br><br><br><br><br>
            <h1>Nuestro Viaje por Brasil</h1>
        </div>
        <div class="parallax">    
            <img src="/img/IMG_20180119_150839.jpg">
        </div>
    </div>
    <br>
    <div class="container">
        @yield('content')
    </div>
        
<script src="/js/materialize.min.js"></script>
<script>
  var elem = document.querySelector('.parallax');
  var instance = M.Parallax.init(elem);
  var elem = document.querySelector('.tooltipped');
  var instance = M.Tooltip.init(elem);
  var elem = document.querySelectorAll('.materialboxed');
  var instance = M.Materialbox.init(elem);
</script>
</body>
</html>