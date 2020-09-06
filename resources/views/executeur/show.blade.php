@extends('layouts.admin')

@section('content')
<div class="row justify-content-center" style="margin-top: 50px;">
    <div class="col-md-6" >
<div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Ticket </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >Nom du projet</label>
                    <input disabled="disabled" type="text" class="form-control" name="nom" value="{{ $ticket->nom }}">
                  </div>
                  <div class="form-group">
                    <label >Description</label>
                    <input disabled="disabled" type="text" class="form-control" name="description" value="{{ $ticket->description }}">
                  </div>
                  <div class="form-group">
                    <label >Date de création</label>
                    <input disabled="disabled" type="text" class="form-control" name="temps" value="{{ $ticket->created_at }}">
                  </div>
                  <div class="form-group">
                    <label >Temps alloué</label>
                    <input disabled="disabled" type="text" class="form-control" name="temps" value="{{ $ticket->temps }}">
                  </div>
                  <div class="form-group">
                    <label >Niveau </label>
                    <input disabled="disabled" type="text" class="form-control" name="niveau" value="{{ $ticket->niveau }}">
                  </div>  
                  @if($fichiers)
                <div class="form-group">
                    <label >Fichier(s) </label>
                    <ul>
                    @foreach($fichiers as $fichier)
                    <li><a href='/file/download/{{ $fichier->file }}'> {{ $fichier->file }} </a> </li>
                    @endforeach
                    </ul>
                  </div>
                @endif    
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="/executeur/ticket" type="submit" class="btn btn-secondary">Fermer</a>
                  <a href="/executeur/ticket/edit/{{$ticket->id}}" type="submit" class="btn btn-secondary">Modifier</a>
                </div>
              </form>
            </div>
            </div>
</div>


@endsection