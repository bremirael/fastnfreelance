@extends('layout')

@section('title', 'Inscription Societe')

@section('content')
  <h1 class="text-xs-center">Inscription d'une Société</h1>
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

      <input type="text" name="raison_sociale" class="form-control" placeholder="Raison Sociale">
      <input type="text" name="secteur_activite" class="form-control" placeholder="Secteur activite">
      <input type="text" name="nombre_employes" class="form-control" placeholder="Nombre d'employés">
      <textarea name="inf_complementaire" class="form-control" placeholder="Informations complémentaires"></textarea>
      <input type="text" name="ville" class="form-control" placeholder="Ville">
      <input type="text" name="adresse" class="form-control" placeholder="Adresse">
      <input type="text" name="code_post" class="form-control" placeholder="Code Postal">
      <input type="text" name="photo" class="form-control" placeholder="Photo">
      <input type="text" name="tel" class="form-control" placeholder="Numéro de Téléphone">

      <input type="submit" class="btn btn-success" value="Inscription">
    </form>
  </div>
@endsection
