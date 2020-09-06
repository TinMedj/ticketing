<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Documents;
class donnateurController extends Controller
{
    public function __construct(){
    $this->middleware('auth');
   }

  public function index() {
    $tickets = Ticket::all();

    return view('donneurOrdre.index',
    ['tickets'=> $tickets]);
  }

  public function create(){
      return view('donneurOrdre.create');
  }

  public function store(Request $request) {
    
    $ticket = new Ticket();

    $ticket->nom = $request->nom;
    $ticket->description = $request->description;
    $ticket->temps = $request->temps;
    $ticket->niveau = $request->niveau;
    $ticket->fait = false;
    
    $ticket->save();

    
    if($request->file('file')){
     
      $file_array=$request->file('file');

      for($i=0; $i<count($file_array);$i++){
        $data = new Documents;
      $file = $file_array[$i];
      $filename=$file->getClientOriginalName();
      $file->move('storage/tickets/', $filename);
      $data->file = $filename;
      $data->title=$request->nom;
      $data->type='ticket';
      $data->ticket_id= $ticket->id;
      $data->save();
       
    }
     
    }
    return redirect('/donneur/ticket');

  }
  

  public function show($id) {
    
    $ticket = Ticket::findOrFail($id);
    $fichiers = Documents::where('type','ticket')->where('ticket_id','=',$id)->get();
   
    

    return view('show',compact('ticket', 'fichiers'));
  }
}

