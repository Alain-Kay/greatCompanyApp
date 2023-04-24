@extends('layouts.template')

@section('title', 'Offres-d\'emploies')

@section('content')
    
    
<div class="container my-5">
  <h3 class="text-center mb-5">Offres d'emplois</h3>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($offres as $offre)
      <div class="col">
        <a href="{{ route('offre', $offre->slug)}}" class="list-group-item">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">{{$offre->title}}</h4>
            <h5 class="card-subtitle mb-2 text-muted">{{$offre->companyName}} - {{ $offre->location}}</h5>
            <p class="card-text">{{$offre->content}}</p>
            <a href="{{ route('offre', $offre->slug)}}" class="btn btn-primary">Voir plus</a>
          </div>
        </div>
      </a>
      </div>  
    @endforeach     
  </div>
</div>


@endsection



