@extends('layout')

@section('title', 'Projets')

@section('content')


  <div class="row">
  <h1>Bienvenue !</h1>
      <h5 class="h5 text-muted" style="color:#00CC33"><p>Sur Fast n' Freelance trouvez des sociétes qui mettent à disposition des missons ou des Freelancers qui correspondraient aux compétences nécéssaires pour un de vos projet.</p></br>
      <p>Les projets suivants sont destinés aux prestataires informatiques et au travailleur indépendants presents sur notre place de marché. Si vous souhaitez répondre à ces offres et avoir des chances de trouver des nouveaux clients, inscrivez-vous comme prestataire freelancer sur Fastn'Freelance.</p></h5>
      </br>
      <h1>Les nouveaux projets</h1>
      </div>

  <div class="list-group">
    @foreach ($projets as $key => $projet)
      <div class="list-group-item">
        <article>
          <h1 class="h3"><mark>Type:</mark> <a href="{{ url('offre') }}/{{ $projet->id }}" style="color:#FF99FF">{{ $projet->type_projet }}</a></h1>
          <h1 class="h3"><span style="color:#FFCC33">{{ $projet->titre }}</span></h1>
          <h2 class="h5 text-muted">Publié le <time>@datetime($projet->created_at) </time></h2> <!-- {{ $projet->users_id }} -->
          <p class="lead text-justify">@nl2br($projet->description)</p>

          <p class="lead text-justify"><mark>Budget:</mark><span style="color:#33FFCC"> @nl2br($projet->budget)</span></p>
        </article>
      </div>
      @if( $key % 2 == 1 )
        <div class="hidden-sm-down clearfix"></div>
      @endif
    @endforeach
  </div>
@endsection
