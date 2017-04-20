@extends('layout')

@section('title', 'Offre')

@section('content')
  <div class="row">
      <div class="col-md-6">
        <article>
          <h1 class="h3">Type: {{ $projet->type_projet }}</h1>
          <h1 class="h3">{{ $projet->titre }}</h1>
          <h2 class="h5 text-muted">Publié le <time>@datetime($projet->created_at)</time></h2>
          <p class="lead text-justify">@nl2br($projet->description)</p>

          <p class="lead text-justify">Budget: @nl2br($projet->budget)</p>
        </article>
      </div>
  </div> 
@endsection
