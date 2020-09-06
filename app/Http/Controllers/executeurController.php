<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Profil;
use App\User;
use App\Documents;
use App\Tache;
class executeurController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
       }
    
      public function index() {
        
        
        $profil = Profil::where('user_id',2)->first();
        
        $niveau = $profil['niveau'];
        $tickets = Ticket::where('niveau',$niveau)->get();
        return view('executeur.index',
        ['tickets'=> $tickets]);
        
      }

      public function show($id) {
    
        $ticket = Ticket::findOrFail($id);
        $fichiers = Documents::where('ticket_id','=',$ticket->id)->get();
    
        return view('executeur.show',compact('ticket', 'fichiers'));
      }

      public function edit($id) {
        $ticket = Ticket::findOrFail($id);
        
        return view('executeur.edit',['ticket'=> $ticket]);
        
      }

      public function update($id, Request $request) {
          $ticket = Ticket::findOrFail($id);
          $ticket->fait = true;
          $ticket->save(); 
          
          $tache = new Tache;
          $tache->user_id = 2;
          $tache->ticket_id = $id;
          $tache->msg = $request->msg;
          $tache->save();

          if($request->file('file')){
     
            $file_array=$request->file('file');
      
            for($i=0; $i<count($file_array);$i++){
              $data = new Documents;
            $file = $file_array[$i];
            $filename=$file->getClientOriginalName();
            $file->move('storage/tickets/', $filename);
            $data->file = $filename;
            $data->title=$ticket->nom;
            $data->type='tache';
            $data->ticket_id= $tache->id;
            $data->save();   
          }
        }
          
        return redirect('/executeur/ticket');
    
      }
      
}
