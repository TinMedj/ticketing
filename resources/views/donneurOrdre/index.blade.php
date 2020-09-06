@extends('layouts.admin')

@section('content')
<div style="margin-top: 30px;">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <i style="font-size: 25px;" class="fas fa-plus-circle"></i>
          <div class="col-sm-6">
            <h1><a href="/donneur/ticket/create">Nouveau Ticket</a></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tickets</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 6%" class="text-center">
                          ID
                      </th>
                      <th style="width: 18%" class="text-center">
                          Nom du projet
                      </th>
                      <th style="width: 20%" class="text-center">
                         Date de lancement 
                      </th>
                      <th style="width: 15%" class="text-center">
                         Temps alloué [J]
                      </th>
                      <th style="width: 10%" class="text-center">
                            Niveau
                      </th>
                      <th style="width: 10%" class="text-center">
                            Etat
                      </th>
                      <th style="width: 15%" class="text-center">
                            
                      </th>
                  </tr>
              </thead>
              <tbody>
              @foreach($tickets as $ticket)
                  <tr>
                      <td class="text-center">
                      {{ $ticket->id }}
                      </td>
                      <td class="text-center">
                          <a>
                          {{ $ticket->nom }}
                          </a>
                      </td>
                      
                      <td class="text-center">
                      {{ $ticket->created_at }}
                      </td>
                      <td class="text-center">
                      {{ $ticket->temps }}
                      </td>
                      <td class="text-center">
                      {{ $ticket->niveau }}
                      </td class="text-center">
                      <td class="project-state">
                          <span class="badge badge-success">{{ $ticket->fait }}</span>
                      </td>
                      <td class="project-actions text-center">
                          <a class="btn btn-primary btn-sm" href="/donneur/ticket/{{ $ticket->id }}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                      </td>
                  </tr>
                  @endforeach
                </tbody>

          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
</div>
@endsection