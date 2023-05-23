@extends('layouts.admin_template')

@section('title', 'Creer une offre')
    

@section('content')

    <div class="container">
        <h1 class="text-center mb-2">Poster une nouvelle offre</h1>
        <form action="{{ route('admin.offres.store')}}" method="post">
            @csrf
            <div class="col-12">
                <label for="title">TITRE</label>
                <input type="text" name="title" id="title" class="form-control @error ('title') is-invalid @enderror"  placeholder="Le titre de votre offre">
                @error('title')
                    <div class="alert alert-danger m-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mt-4">
                <label for="companyName">NOM DE L'ENTREPRISE</label>
                <input type="text" name="companyName" id="companyName" class="form-control @error ('companyName') is-invalid @enderror"  placeholder="Le nom de l'entreprise">
                @error('companyName')
                    <div class="alert alert-danger m-2">{{ $message }}</div>
                @enderror
                <small class="form-text text-muted mt-2">Décrivrez le contenu de votre offre</small>
            </div>
            <div class="col-12 mt-4">
                <label for="title">REGION</label>
                <input type="text" name="location" id="location" class="form-control @error ('location') is-invalid @enderror"  placeholder="La region">
                @error('location')
                    <div class="alert alert-danger m-2">{{ $message }}</div>
                @enderror
            <div class="col-12">
                <div class="form-group purple-border">
                    <label for="content">Contenu</label>
                    <textarea class="form-control @error ('content') is-invalid @enderror" id="content" name="content"  rows="3">
                    </textarea>
                    @error('location')
                    <div class="alert alert-danger m-2">{{ $message }}</div>
                @enderror
                  </div>

                    

                    <div class="d-flex justify-content-center mb-6">
                        <button type="submit" class="btn btn-primary mt-3">Poster l'offre</button>

                    </div>

                </div>

            </div>
        </form>
    </div>
    
@endsection