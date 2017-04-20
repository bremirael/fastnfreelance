@extends('layout')

@section('navbar', 'Sociétés')

@section('title', 'Catalogue')

@section('content')

  <h1>Les profils Societe</h1>
  <div class="list-group">

    @foreach ($users as $key => $user)
      <div class="list-group-item">
        <article>
          <h1 class="h2">
          <img src="http://localhost/FastnFreelance/img/profil/profilso.png" height="150" width="150" alt="Freelancer"> 
          <b style="color:#00CC33">  {{ $user->raison_sociale }} </b></h1>
          <h2 class="h5 text-muted">Compte crée le <time>@datetime($user->created_at)</time></h2>
          <h1 class="h4"><mark>Secteur d'activité:</mark> <span style="color:#33FFCC"> {{ $user->secteur_activite }}</span></h1>
          <h1 class="h4"><mark>Nombre d'employés:</mark> <span style="color:#FF99FF"> {{ $user->nombre_employes }}</span></h1>
          
          <h1 class="h4"><mark>Email:</mark> <span style="color:#FFCC33">{{ $user->email }} <mark>Tel:</mark> {{ $user->tel }}</span></h1><br>
          <p class="lead text-justify">@nl2br($user->inf_complementaire)</p>

          <h1 class="h4"><mark>Ville:</mark><span style="color:#CC99FF"> @nl2br($user->ville)</span></h1>
        </article>
      </div>
      @if( $key % 2 == 1 )
        <div class="hidden-sm-down clearfix"></div>
      @endif
    @endforeach
  </div>
@endsection