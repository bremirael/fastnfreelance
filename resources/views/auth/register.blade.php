@extends('layout')

@section('title', 'Inscription')

@section('content')
  <h1 class="text-xs-center">Inscription</h1>
  <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
    @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
      @endforeach
    @endif
    <form action="" method="post" class="p-y-3 p-x-2" novalidate>
      {{ csrf_field() }}
      <input type="email" name="email" class="form-control" placeholder="Adresse e-mail" value="{{ old('email') }}">
      <input type="password" name="password" class="form-control" placeholder="Mot de passe">
      <input type="password" name="passwordConfirm" class="form-control" placeholder="Confirmez le mot de passe">
      <input type="submit" class="btn btn-success" value="Inscription">
    </form>
  </div>
@endsection
