@extends('layouts.head')

@section('content')

  <div class="content" style="margin-top:170px; margin-left:200px; margin-right:200px;">
   <div class="card text-center">
  <div class="card-header black">
    Bienvenu!
  </div>
  <div class="card-body">
    <h5 > Systeme de Ticketing KPMG</h5>
    <p class="card-text">Veuillez choisir votre type d'usage.</p>
    <a href="/donneur/ticket" class="btn btn-dark" style="padding: 10px 5px;">Donneur d'orde</a>
    <a href="/executeur/ticket" class="btn btn-dark" style="padding: 10px 28px;">Executeur</a>
  </div>
</div>

               
</div>
        
@endsection