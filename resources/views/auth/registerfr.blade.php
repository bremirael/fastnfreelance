@extends('layout')

@section('title', 'Inscription Freelancer')

@section('content')
  <h1 class="text-xs-center">Inscription Freelanceur</h1>
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

      <input type="text" name="nom" class="form-control" placeholder="Nom">
      <input type="text" name="prenom" class="form-control" placeholder="Prénom">
      <input type="text" name="profession" class="form-control" placeholder="Profession">
      <textarea name="competence" class="form-control" placeholder="Compétence(s)"></textarea>
      <input type="date" name="date_naissance" class="form-control" placeholder="Date de naissance">
      <textarea name="bio" class="form-control" placeholder="Bio, années exp, tarif.."></textarea>
      <input type="text" name="ville" class="form-control" placeholder="Ville">
      <input type="text" name="adresse" class="form-control" placeholder="Adresse">
      <input type="text" name="code_post" class="form-control" placeholder="Code Postal">
      <input type="text" name="photo" class="form-control" placeholder="Photo">
      <input type="text" name="tel" class="form-control" placeholder="Numéro de Téléphone">

      <input type="submit" class="btn btn-success" value="Inscription">
    </form>
  </div>
@endsection
