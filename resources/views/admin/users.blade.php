@extends('layout')

@section('navbar', 'Administration')

@section('title', 'Gérer utilisateur')

@section('content')
  <h1 class="text-xs-center">Gestion utilisateurs</h1>
 

      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Email</th>
            <th>Freelancer</th>
            <th>Societe</th>
            <th>Éditer</th>
            <th>Supprimer</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
              <th>{{ $user->id }}</th>
              <td>{{ $user->email }}</td>
              <td>{{ $user->is_freelancer }}</td>
              <td>{{ $user->is_societe }}</td>
              <td><a href="{{ url('admin/gestion/editer') }}/{{ $user->id }}" class="text-success">Éditer</a></td>
              <td><a href="{{ url('admin/gestion/supprimer') }}/{{ $user->id }}" class="text-success">Supprimer</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection