@extends('layout')

@section('title', 'Changer de mot de passe')

@section('content')
  <h1 class="text-xs-center">Mon compte</h1>
  <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
    @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
      @endforeach
    @endif
    @if (session('status'))
      <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    
    <form action="" method="post" class="p-y-3 p-x-2" novalidate>
      {{ method_field('PUT') }}
      {{ csrf_field() }}
      <input type="password" name="passwordOld" class="form-control" placeholder="Ancien mot de passe">
      <input type="password" name="password" class="form-control" placeholder="Nouveau mot de passe">
      <input type="password" name="passwordConfirm" class="form-control" placeholder="Confirmez le nouveau mot de passe">
      <input type="submit" class="btn btn-success" value="Changer mot de passe">
    </form>
  </div>
@endsection
