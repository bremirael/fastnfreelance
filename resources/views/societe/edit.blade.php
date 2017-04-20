@extends('layout')

@section('navbar', 'Societe')

@section('title', 'Édition de projet')

@section('content')
  <h1 class="text-xs-center">Projets</h1>
  @if (count($errors) > 0)
    @foreach ($errors->all() as $error)
      <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
  @endif
  @if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
  @endif
  <form action="" method="post" class="p-y-3 p-x-2"  novalidate>
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <input type="text" name="type_projet" class="form-control" placeholder="Type de Projet" value="{{ $projet->type_projet }}">
    <input type="text" name="titre" class="form-control" placeholder="Nom du projet" value="{{ $projet->titre }}">
    <textarea name="description" class="form-control" placeholder="Texte du projet">{{ $projet->description }}</textarea>
    <input type="text" name="budget" class="form-control" placeholder="Budget" value="{{ $projet->budget }}">
    <input type="submit" class="btn btn-success" value="Éditer">
  </form>
@endsection
