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

        <!-- Styles -->
       <style>
         
           
#conteneur
{
  
  display:flex;
  justify-content:flex-start;
}

.d1{
    padding-left:300px;
}
.d2{
    padding-left:100px;
}
.d3{
    background-color:#eee;
    height:1700px;
    border:1 px inset blue;
    display:flex;
    justify-content:space-beteween;

}
.box-left{
        background-color:white;
        color:black;
        height:400px;
        width:500px;



}

.box-left1{
        overflow: scroll;
        background-color:white;
        color:black;
        height:300px;
        width:500px;



}
.t1{
    background-color:black;
    color:red;
    font-size:15px;
}
.fa {
  padding: 10px;
  font-size: 10px;
  width: 20px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}
.t12{
padding-left:1145px;

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
        width:100px;

      }
     
       
.h1{
  width:50px;
  height:50px;
  border:1px solid black;
}

.f1{
  background-color:white;
  color:black;
}
.f1 a {
  color:black;
}
.f2{
  background-color:#eee;
  height:20px;
}
.f3{
  background-color:#eee;
  height:20px;
}


.l1{
  padding-left:200px;
}

.kn{
  display:block;
}
.kn2{
  margin-top:870px;
  padding-top:30px;
}
.kn3{
  background-color:#202124d6;
  width:300px;
  height:50px;
}.box-right{
  height:600px;
  width:900px;
  border-raduis:10px;
  border:2px inset:blue;
}
#myCarousel{
  width:67%;
  height:270px;
}

.v1{
  padding-left:160px;
}
       </style>
      
      
      
    </head>
    <body class="antialiased">
       <div class="t12">
      <ul class="nav nav-tabs">
  
     <li  role="presentation"><a href="/register"type="button">register </a></li>
  <li  role="presentation"><a href="/login"type="button">Login </a></li>

          
      </ul></div>
       
<div id="conteneur">
    <div class="d2">
<img src="/image/1.png"></div>
<div class="d1">
    <form method="get" action="{{ route('annonces.create') }}">
 <button type="submit" class="btn  btn-lg btn-block btn-danger">Publier une annonce</button></form></div>
</div>

<div class="container">
          <div class="row">
            <div class="g1">
<ul class="nav nav-tabs">
    
    
  <li  role="presentation"><a href=""type="button">Nos Tutos </a></li>

    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Nos Guide Entreprise<span class="caret"></span></a><ul class="dropdown-menu"><li><a href="/freelance">Trouver un freelance par ville</a></li><li><a href="/file_uploads">Proteger vos marque</a></li><li><a href="/file_uploads">Proteger vos logo</a></li><li><a href="/file_uploads">creer un logo</a></li><li><a href="/file_uploads">creer un charte graphique</a></li><li><a href="/">Les Tarif D'un graphiste</a></li><li><a href="/">Nos GUIDE</a></li><li><a href="/">comment fonctionne graphiste.com</a></li></ul></li>

    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">nos guide freelancer<span class="caret"></span></a><ul class="dropdown-menu"><li><a href="/freelancer_1">comment devenir graphiste</a></li><li><a href="/freelancer_1">les erreur dun graphiste debutant</a></li><li><a href="/freelancer_1">comment faire un devis</a></li><li><a href="/freelancer_1">avis text codeur.com</a></li></ul></li>

    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">nos guide metier<span class="caret"></span></a><ul class="dropdown-menu"><li><a href="/freelancer_1">devenir un graphiste</a></li></ul></li>

    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Nos Categories<span class="caret"></span></a><ul class="dropdown-menu"><li><a href="/freelancer_1">logo</a></li></ul></li>

      <li  role="presentation"><a href=""type="button"><div class="v1"><input type=" search" name=""search> </div> </a></li>



        </ul></div>
  </div></div>
  
<div class="h1">


         </div>
        <div class="d3">
          <div class="container">
    <div class="row">
      <div class="col-md-6">
          <div class="box-right">
            <div class="container">
  <h2>Graphiste</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="/image/b4.jpg" >
      </div>

      <div class="item">
        <img src="/image/b5.jpg" >
      </div>
    
      <div class="item">
        <img src="/image/b6.jpg" >
      </div>
      <div class="item">
        <img src="/image/b7.jpg" >
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="media">
  <div class="media-left media-middle">
    <a href="#">
      <img class="media-object" src="/image/b1.jpg" >
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"> Graphiste Offre une opportunite pour les freelancers en multimedia pour partager ses realisations et les clients</h4>
    <p>Par graphiste vous avez la chance de connaitre les differentes realisations des freelancer en multimedia qui ont partagé ses realisation dans le site graphiste </p> 
  </div>
</div>
<div class="media">
  <div class="media-left media-middle">
    <a href="#">
      <img class="media-object" src="/image/b2.jpg" >
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Chez Graphiste vous pouvez publier vous annonces </h4>
    <p>Graphiste reserve une partie dans le site pour la publication des annonces faire l'inscription et publier vous annonces</p>
  </div>
</div>
<div class="media">
  <div class="media-left media-middle">
    <a href="#">
      <img class="media-object" src="/image/b3.jpg" >
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Graphiste</h4>
    Vous pouvez maintenant consulter le site graphiste et avoir des idee suivant les realisation des logos et des flyer
  </div>
</div>
          </div></div></div></div>
          
             <div class="kn">


            <div class="box-left">
              <div class="box-left1">
<ul class="nav nav-pills nav-stacked">
  <li><a href=" ">graphiste</a></li>
  <li ><a href="#">createur d image pixel</a></li>
  <li><a href="#">renfor equipe graphiste</a></li>
    <li><a href="#">creation d application mobile</a></li>
  <li><a href="#">creation logo societe administrative</a></li>
  <li><a href="#">creation design d'un site web</a></li>

</ul></div>
<div class="s1">
    <form method="get" action="{{ route('annonces.create') }}">
 <button type="submit" class="btn  btn-lg btn-block btn-danger">Publier une annonce</button></form></div>
   <div class="f2"></div>
<div align="center" class="kn2">
  <img src="/image/po.PNG">
   <div class="kn3">
<form method="get" action="{{ route('graphists.create') }}">
  
 <button type="submit" class="btn  btn-danger ">trouver un graphiste</button></form></div></div>
</div>
<div align="center">
<img src=" /image/p6.PNG"></div>
<div class="f3"></div>



<div class="f1">
 <div class="media">
  <div class="media-left media-middle">
    <a href="#">
      <img class="media-object" src="/image/p1.PNG" >
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="">25 templates gratuit pour Powerpoint</a></h4>
    
  </div>
</div>
<div class="media">
  <div class="media-left media-middle">
    <a href="#">
      <img class="media-object" src="/image/p2.PNG" >
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="">5 technique pour enlever le font d une image</a></h4>
    
  </div>
</div>
<div class="media">
  <div class="media-left media-middle">
    <a href="#">
      <img class="media-object" src="/image/p3.PNG" >
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="">Comment changer la couleur d'un objet dans ...</a></h4>
    
  </div>
</div>
<div class="media">
  <div class="media-left media-middle">
    <a href="#">
      <img class="media-object" src="/image/p4.PNG" >
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="">web designer :13 tendance 2020 à adopter</a></h4>
    
  </div>
</div>
<div class="media">
     <div class="media-left media-middle">
    <a href="#">
      <img class="media-object" src="/image/p5.PNG" >
    </a>
      </div>
      <div class="media-body">
       <h4 class="media-heading"><a href="">Middle aligned media</a></h4>
</div>
  
</div>
</div>
</div>
</div></div>
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
