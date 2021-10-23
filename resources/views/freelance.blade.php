<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        

        <title>Laravel</title>
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
        <style>
          
          .d1{
    padding-left:100px;
         }
         .f1{
          display:inline;
         }
         .f2{
          display:inline;
         }
         .f3{
          display:inline;
         }
         #conteneur{
          display:flex;
          flex-wrap:wrap;
          padding-left:400px;
         }
         .o1{
         background-color:#eee;
         border:1px solid black;
         width:200px;
         height:200px;

         }
         .o2{
         background-color:#eee;
         border:1px solid black;
         width:200px;
         height:200px;
         }
         .o3{
         background-color:#eee;
         border:1px solid black;
         width:200px;
         height:200px;
         }
         .o4{
         background-color:#eee;
         border:1px solid black;
         width:200px;
         height:200px;
         }
         .o5{
         background-color:#eee;
         border:1px solid black;
         width:200px;
         height:200px;
         }
         .o6{
         background-color:#eee;
         border:1px solid black;
         width:200px;
         height:200px;
         }
         .o7{
         background-color:#eee;
         border:1px solid black;
         width:200px;
         height:200px;
         }
         .o8{
         background-color:#eee;
         border:1px solid black;
         width:200px;
         height:200px;
         }
         .o9{
         background-color:#eee;
         border:1px solid black;
         width:200px;
         height:200px;
         }
         .o10{
         background-color:#eee;
         border:1px solid black;
         width:200px;
         height:200px;
         }
         .o11{
         background-color:#eee;
         border:1px solid black;
         width:200px;
         height:200px;
         }
        .t12{
padding-left:1145px;

      }
      .g1 ul li a {
        background-color:#eee;
        color:black;
        font-size:15px;
        
      }
      .g1 {
        width:320px;
      }
      .t2{
        background-color:black;
        color:white;
        font-size:15px;
        }
        .t12 ul li a {
        background-color:#eee;
        color:black;
        font-size:15px;

      }
      
       </style>
    </head>
    <body class="antialiased">
      <div class="t12">
      <ul class="nav nav-tabs">
  
     <li  role="presentation"><a href="/register"type="button">register </a></li>
  <li  role="presentation"><a href="/login"type="button">Login </a></li>

          
      </ul></div>
      <div class="container">
          <div class="row">
            <div class="g1">
<ul class="nav nav-tabs">
    
    
    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Annonce<span class="caret"></span><ul class="dropdown-menu"><li><a href="/annonces">Les  annonces</a></li></ul></a></li>
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Realisation<span class="caret"></span><ul class="dropdown-menu"><li><a href="/client">Les Realisation</a></li></ul></a></li>
    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">portfolio<span class="caret"></span></a></li>

</ul></div></div></div>
        <div  align="center">
          <h1> Trouvez un graphiste dans votre ville</h1>
          <p> Découvrez l'ensemble de nos graphistes freelances dans les plus grandes villes de france.</p>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-4">

        <div class="d1">
    <form method="get" action="{{ route('annonces.create') }}">
 <button type="submit" class="btn  btn-lg btn-block btn-danger">Publier une annonce</button></form></div>
</div></div></div>
<div id="conteneur">
<div class="f1">
  <div class="o1">
        <form method="get" action="{{ route('paris.create') }}">
          
          
          <button type="submit" class="o1">Paris</button>
      </form></div>
      <form method="get" action="{{ route('lyon.create') }}">
          
          <button type="submit" class="o2">Lyon</button>
      </form>
      <form method="get" action="{{ route('toulouse.create') }}">
          
          
          <button type="submit" class="o3">Toulouse</button>
      </form>
      <form method="post" action="{{ route('bourdeau.create') }}">
          
          
          <button type="submit" class="o4">Bourdeau</button>
      </form>
    </div>
    <div class="f2">
      <form method="get" action="{{ route('marseille.create') }}">
          
          
          <button type="submit" class="o5">marseille</button>
      </form>
      <form method="get" action="{{ route('nantes.create') }}">
          
          
          <button type="submit" class="o6">Nantes</button>
      </form>
      <form method="get" action="{{ route('montpllier.create') }}">
          
          
          <button type="submit" class="o7">Montpllier</button>
      </form>
      <form method="get" action="{{ route('lille.create') }}">
          
          
          <button type="submit" class="o8">lille</button>
      </form>
    </div>
    <div class="f3">
      <form method="get" action="{{ route('rennes.create') }}">
          
          
          <button type="submit" class="o9">Rennes</button>
      </form>
      <form method="get" action="{{ route('nice.create') }}">
          
          
          <button type="submit" class="o10">Nice</button>
      </form>
      <form method="get" action="{{ route('stragbourg.create') }}">
          
          
          <button type="submit" class="o11">Stragbourg</button>
      </form>

</div>
</div>
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