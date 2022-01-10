@extends('layout')

@section('content')
<h1>Personnes</h1>
<ul>
    @foreach($personnes as $personnes)
        <li>{{$personnes->name}}</li>
    @endforeach
</ul>
<hr>
<form action="/personnes" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control @error('pseudo') is-invalid @enderror" name="pseudo" placeholder="Entrez votre nom">
    </div>
    @error('pseudo')
    <div class="invalid-feedback">
        {{$errors->first('pseudo')}}
    </div>
    @enderror
    <div class="form-group">
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Entrez votre adresse mail">
    </div>
    @error('email')
    <div class="invalid-feedback">
        {{$errors->first('email')}}
    </div>
    @enderror
    <button type="submit" class="btn btn-primary">Ajouter les personnes</button>
</form>
@endsection