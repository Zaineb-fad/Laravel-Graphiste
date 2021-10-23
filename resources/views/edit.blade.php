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
         .t12{
padding-left:1145px;

      }
       
    .g1 {
        width:320px;
      }
    .push-top {
      margin-top: 50px;
    }
    .d1{
    padding-left:700px;
}
.g1 ul li a {
        background-color:#eee;
        color:black;
        font-size:15px;
        
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
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Realisation<span class="caret"></span><ul class="dropdown-menu"><li><a href="/file_uploads">Les Realisation</a></li></ul></a></li>
    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">portfolio<span class="caret"></span></a></li>

</ul></div></div></div>

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Edit & Update
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('annonces.update', $annonoe->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="annonce">Annonce</label>
              <input type="textarea" class="form-control" name="annonce" value="{{ $annonce->annonce }}"/>
          </div>
          
          <button type="submit" class="btn btn-block btn-danger">Update Annonce</button>
      </form>
  </div>
</div>
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
</body></html>