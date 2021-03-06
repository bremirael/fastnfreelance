@extends('layout')

@section('navbar', 'Administration')

@section('title', 'Édition d\'utilisateur')

@section('content')
  <h1 class="text-xs-center">Utilisateurs</h1>
  @if (count($errors) > 0)
    @foreach ($errors->all() as $error)
      <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
  @endif
  @if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
  @endif

  @if ($user->is_freelancer === 1)
  <form action="" method="post" class="p-y-3 p-x-2"  novalidate>
    {{ method_field('PUT') }}
    {{ csrf_field() }}

      <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{ $user->nom }}">
      <input type="text" name="prenom" class="form-control" placeholder="Prénom" value="{{ $user->prenom }}">
      <input type="text" name="profession" class="form-control" placeholder="Profession" value="{{ $user->profession }}">
      <textarea name="competence" class="form-control" placeholder="Compétence(s)">{{ $user->competence }}</textarea>
      <input type="date" name="date_naissance" class="form-control" placeholder="Date de naissance" value="{{ $user->date_naissance }}">
      <textarea name="bio" class="form-control" placeholder="Bio, années exp, tarif..">{{ $user->bio }}</textarea>
      <input type="text" name="ville" class="form-control" placeholder="Ville" value="{{ $user->ville }}">
      <input type="text" name="adresse" class="form-control" placeholder="Adresse" value="{{ $user->adresse }}">
      <input type="text" name="code_post" class="form-control" placeholder="Code Postal" value="{{ $user->code_post }}">
      <input type="text" name="photo" class="form-control" placeholder="Photo" value="{{ $user->photo }}">
      <input type="text" name="tel" class="form-control" placeholder="Numéro de Téléphone" value="{{ $user->tel }}">

      <input type="submit" class="btn btn-success" value="Modifier">
  </form>
  @endif
  
  @if ($user->is_societe === 1)
  <form action="" method="post" class="p-y-3 p-x-2"  novalidate>
    {{ method_field('PUT') }}
    {{ csrf_field() }}

      <input type="text" name="raison_sociale" class="form-control" placeholder="Raison Sociale" value="{{ $user->raison_sociale }}">
      <input type="text" name="secteur_activite" class="form-control" placeholder="Secteur activite" value="{{ $user->secteur_activite }}">
      <input type="text" name="nombre_employes" class="form-control" placeholder="Nombre d'employés" value="{{ $user->nombre_employes }}">
      <textarea name="inf_complementaire" class="form-control" placeholder="Informations complémentaires">{{ $user->inf_complementaire }}</textarea>
      <input type="text" name="ville" class="form-control" placeholder="Ville" value="{{ $user->ville }}">
      <input type="text" name="adresse" class="form-control" placeholder="Adresse" value="{{ $user->adresse }}">
      <input type="text" name="code_post" class="form-control" placeholder="Code Postal" value="{{ $user->code_post }}">
      <input type="text" name="photo" class="form-control" placeholder="Photo" value="{{ $user->photo }}">
      <input type="text" name="tel" class="form-control" placeholder="Numéro de Téléphone" value="{{ $user->tel }}">

      <input type="submit" class="btn btn-success" value="Modifier">
  </form>
  @endif
@endsection