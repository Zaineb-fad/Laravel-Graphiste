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
       
    
    .push-top {
      margin-top: 50px;
    }
    .d1{
    padding-left:700px;
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
<ul class="nav nav-tabs">
    
    
    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Annonce<span class="caret"></span><ul class="dropdown-menu"><li><a href="/annonces">Les  annonces</a></li></ul></a></li>
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">Realisation<span class="caret"></span><ul class="dropdown-menu"><li><a href="/file_uploads">Les Realisation</a></li></ul></a></li>
    
        <li  role="presentation"class="dropdown"><a href="#"type="button"data-toggle="dropdown"aria-expanded="false"aria-haspopup="true">portfolio<span class="caret"></span></a></li>

</ul>
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Deposer une realisation</button>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Inscription</h4>
        </div>
        <div class="modal-body">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <div class="d1">
    <form method="get" action="{{ route('file_uploads.create') }}">
 <button type="submit" class="btn  btn-lg btn-block btn-danger">Creer une Realisation</button></form></div>
</div>

  <div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>file title</td>
          <td>file name</td>
          <
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($file_upload as $file_uploads)
        <tr>
            <td>{{$file_uploads->id}}</td>
            <td>{{$file_uploads->file_title}}</td>
            <td>{{$file_uploads->file_name}}</td>
            
            <td class="text-center">
                <a href="{{ route('file_uploads.edit', $file_uploads->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('file_uploads.destroy', $file_uploads->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
  
        </body>
        
        </html>
