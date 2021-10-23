<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
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
        <titre></titre>
    <style>
        .g1 ul li a {
        background-color:#eee;
        color:black;
        font-size:15px;
        
      }
      .g1 {
        width:320px;
      }
         .t12{
padding-left:1210px;

      }
       
    
    .push-top {
      margin-top: 50px;
    }
    .j1{
    color:white;
    width:200px;

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

</ul></div><br>

<!-- Modal -->
  
 
<br><br>
    <div class="container">
     <div class="btn btn-lg btn-danger">
        
            <a href="{{ route('client.create') }}" class="j1">creer une realisation</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th width="30%">Avatar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $key=>$item)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td><img src="{{$item->getFirstMediaUrl('avatar')}}" / width="120px"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
