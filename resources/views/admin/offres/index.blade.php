@extends('layouts.admin_template')

@section('title', 'Administration')
    

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="text-center mt-5">@yield('title')</h1>
            <a href="{{ route('admin.offres.create')}}" class="btn btn-info my-5"><i class="fas fa-plus mx-1"></i>Nouvelle offre</a>
        </div>
        <table class="table table-hover">
            <thead>
              <tr class="table-active">
                <th scope="col">ID</th>
                <th scope="col">TITRE</th>
                <th scope="col">CEER LE</th>
                <th scope="col">ACTION</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($offres as $offre)
                    <tr>
                        <th scope="row">{{ $offre->id}}</th>
                        <td>{{ $offre->title}}</td>
                        <td>{{ $offre->dateFormat()}}</td>
                        <td class="d-flex">
                            <a href="{{ route('admin.offres.edit', $offre->id)}}" class="btn btn-warning mx-3">Editer</a>
                            <button type="button" class="btn btn-danger" onclick="document.getElementById('model-open-{{$offre->id}}').style.display='block'">Supprimer</button>
                            <form action="{{ route('admin.offres.destroy', $offre->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <div class="modal" id="model-open-{{$offre->id}}">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title">La suppression d'un élément est difinitive</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="document.getElementById('model-open').style.display='none'" aria-label="Close">
                                            <span aria-hidden="true"></span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <p>Etes-vous sur de vouloir supprimer cette offre ? </p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="submit" class="btn btn-primary">Oui</button>
                                          <button type="button" class="btn btn-secondary" onclick="document.getElementById('model-open-{{$offre->id}}').style.display='none'" data-bs-dismiss="modal">Annuler</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                
                            </form>
                        </td>
                    </tr>
                @endforeach
              
            </tbody>    
        </table>
    </div>
@endsection