@extends('layouts.head')

@section('content')
<div class="card card-secondary" style="margin-top: 50px;">
              <div class="card-header">
                <h3 class="card-title">Envoyer le travail pour le ticket {{$ticket->id }} </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form role="form" action="/executeur/ticket/update/{{$ticket->id}}" method="POST" enctype='multipart/form-data'>
              @csrf 
                <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px" name='msg'>
                      
                    </textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="file[]" multiple>
                  
                  <p class="help-block">Max. 32MB</p>
                </div>
                <div class="card-footer">
                <div class="float-right">
                <input type="submit" class="btn btn-secondary"></input>
                </div>
              </div>
                </form>
              </div>
              <!-- /.card-body -->
              
              <!-- /.card-footer -->
            </div>
    



@endsection