@extends('layouts.admin')

@section('content')
<div class="row justify-content-center" style="margin-top: 50px;">
    <div class="col-md-6" >
<div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Ajouter un ticket</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/donneur/ticket" method="POST" enctype='multipart/form-data'>
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >Nom du projet</label>
                    <input type="text" class="form-control" name="nom" placeholder="Nom du projet">
                  </div>
                  <div class="form-group">
                    <label >Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label >Temps alloué</label>
                    <input type="text" class="form-control" name="temps" placeholder="Nombre de jours">
                  </div>
                  <div class="form-group">
                    <label >Niveau </label>
                    <select name="niveau" class="form-control">
                    <option value="faible">Faible</option>
                    <option value="moyen">Moyen</option>
                    <option value="elevé">Elevé</option>
                    </select>
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputFile">Attachement</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="file[]" id="exampleInputFile" multiple>
                        
                      </div>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-secondary"></input>
                </div>
              </form>
            </div>

</div>
</div>


@endsection