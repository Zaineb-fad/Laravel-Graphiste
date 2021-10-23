<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>      

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .t2{
        background-color:black;
        color:white;
        font-size:15px;
        }
        .t1{
    background-color:black;
    color:red;
    font-size:15px;
}
         .t12{
padding-left:1190px;

      }
      .kl1{
        height:400px;
        background-color:white;
      }
      .fh1{
        background-color:white;
        border:1px inset blue;
        width:700px;

      }
    </style>
</head>
<body>
    <div class="t12">
      <ul class="nav nav-tabs">
  
     <li  role="presentation"><a href="/register"type="button">register </a></li>
  <li  role="presentation"><a href="/login"type="button">Login </a></li>

          
      </ul></div>
      <div class="kl1">
    
      <div class="fh1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
        <main class="py-4">
            @yield('content')
        </main></div></div></div></div>
    </div></div>
     <footer>
    <div class="t2">
        <div class="container"> 
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Toutes les ressources dont vous avez besoin pour en apprendre plus sur le graphisme.</strong>
                    </p>
                    <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
                </div>
                <div class="col-md-4">
                    <p> No sautre site</p><br><a href=" ">codeur.com</a><br> 
                         <a href=" ">redacteur.com</a><br>
                       <a href=" ">tracdus.com</a><br>
                       <a href=" ">facture.net</a><br>
                       <a href=" ">cahier de charge .com</a><br>
                    
                </div>
            </div>
    </div>
      <div class="t1">
          <p> © 2021. Graphiste.com - Trouver un graphiste freelance sur graphiste.com. Mentions légales</p> 
      </div>
  </footer>
    
</body>
</html>
