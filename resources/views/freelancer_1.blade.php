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
        <script> 
$(document).ready(function(){
  $("#e1").click(function(){
    $("#conteneur").slideToggle("slow");
  });
});
</script>
<style>
  
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
        <div id="e1">
        <form method="get" action="{{ route('freelancerselonlescapacite.create') }}">
 <button type="submit" class="btn  btn-lg ">Filtrer par competence</button></form></div>
 <div id="conteneur">
<div class="f1">
  <div class="o1">
        <form method="get" action="{{ route('animateur3D.create') }}">
          
          
          <button type="submit" class="o1">animateur3D</button>
      </form></div>
      <form method="get" action="{{ route('lyon.create') }}">
          
          <button type="submit" class="o2">Lyon</button>
      </form>
      <form method="get" action="{{ route('designertextile.create') }}">
          
          
          <button type="submit" class="o3">Designer Textile</button>
      </form>
      <form method="post" action="{{ route('webdesigner.create') }}">
          
          
          <button type="submit" class="o4">web designer</button>
      </form>
    </div>
    <div class="f2">
      <form method="get" action="{{ route('photographe.create') }}">
          
          
          <button type="submit" class="o5">photographe</button>
      </form>
      <form method="get" action="{{ route('graphiste.create') }}">
          
          
          <button type="submit" class="o6">graphiste</button>
      </form>
      <form method="get" action="{{ route('motiondesigner.create') }}">
          
          
          <button type="submit" class="o7">motion designer</button>
      </form>
      <form method="get" action="{{ route('dessinateur3D.create') }}">
          
          
          <button type="submit" class="o8">Dessinateur 3 D</button>
      </form>
    </div>
    <div class="f3">
      <form method="get" action="{{ route('illustrateur.create') }}">
          
          
          <button type="submit" class="o9">illustrateur</button>
      </form>
      <form method="get" action="{{ route('directeurartistique.create') }}">
          
          
          <button type="submit" class="o10">directeur artistique</button>
      </form>
      <form method="get" action="{{ route('topography.create') }}">
          
          
          <button type="submit" class="o11">topography</button>
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
          <p> ?? 2021. Graphiste.com - Trouver un graphiste freelance sur graphiste.com. Mentions l??gales</p> 
      </div>
  </footer>
      </body>

      </html>