@extends('layout')

@section('content')

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
    Add User
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
      <form method="post" action="{{ route('realisations.store') }}">
          <div class="form-group">
        @csrf
        <input type="text" class="form-control" placeholder="Enter title" wire:model="fileTitle">
    </div>
    <div class="form-group">
        <input type="file" class="form-control" wire:model="fileName">
    </div>
  
    <button type="submit" class="btn btn-primary">creer une realisation</button>
      </form>
  </div>
</div>
@endsection