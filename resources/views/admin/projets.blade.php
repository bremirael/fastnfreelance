@extends('layout')

@section('navbar', 'Administration')

@section('title', 'Espace administration')

@section('content')
  <h1 class="text-xs-center">Déposer Projet(s)</h1>
  <div class="row">
    <div class="col-md-6">
      @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
          <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
      @endif
      <form action="" method="post" class="p-y-3 p-x-2">
        {{ csrf_field() }}
        <input type="text" name="type_projet" class="form-control" placeholder="Type de Projet" value="{{ old('type_projet') }}">
        <input type="text" name="titre" class="form-control" placeholder="Nom du projet" value="{{ old('titre') }}">
        <textarea name="description" class="form-control" placeholder="Texte du projet">{{ old('description') }}</textarea>
        <input type="text" name="budget" class="form-control" placeholder="Budget" value="{{ old('budget') }}">
        
        <input type="submit" class="btn btn-success" value="Publier">
      </form>
    </div>
    <div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Titre</th>
            <th>Éditer</th>
            <th>Supprimer</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($projets as $projet)
            <tr>
              <th>{{ $projet->id }}</th>
              <td>{{ $projet->titre }}</td>
              <td><a href="{{ url('admin/editer') }}/{{ $projet->id }}" class="text-success">Éditer</a></td>
              <td><a href="{{ url('admin/supprimer') }}/{{ $projet->id }}" class="text-success">Supprimer</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
