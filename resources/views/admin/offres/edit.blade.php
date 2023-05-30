@extends('layouts.admin_template')

@section('title', 'Creer une offre')

@section('content')
<div class="container" style="max-width: 800px;">
    <h1 class="text-center mb-2">@yield('title')</h1>
    <form action="{{ route('admin.offres.store')}}" method="post">
        @csrf
        <div class="col-12">
            <label for="title">TITRE</label>
            <input type="text" name="title" id="title" class="form-control @error ('title') is-invalid @enderror"  placeholder="Le titre de votre offre" value="{{ $offre->title}}">
            @error('title')
                <div class="alert alert-danger m-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mt-4">
            <label for="companyName">NOM DE L'ENTREPRISE</label>
            <input type="text" name="companyName" id="companyName" class="form-control @error ('companyName') is-invalid @enderror"  placeholder="Le nom de l'entreprise" value="{{ $offre->companyName}}">
            @error('companyName')
                <div class="alert alert-danger m-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mt-4">
            <label for="title">REGION</label>
            <input type="text" name="location" id="location" class="form-control @error ('location') is-invalid @enderror"  placeholder="La region" value="{{ $offre->location}}">
            @error('location')
                <div class="alert alert-danger m-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mt-4">
            <div class="form-group purple-border">
                <label for="content">CONTENU</label>
                <textarea class="form-control @error ('content') is-invalid @enderror" id="content" name="content"  rows="3" >{{ $offre->content}}</textarea>
                @error('content')
                    <div class="alert alert-danger m-2">{{ $message }}</div>
                @enderror
            </div>
            <script>
                tinymce.init({
                  selector: '#content'
                });
              </script>
            <div class="d-flex justify-content-center mb-6">
                <button type="submit" class="btn btn-primary mt-3">Poster l'offre</button>
            </div>
        </div>
    </form>
</div>
@endsection
