<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documents;
class DocumentsController extends Controller
{

    public function download($file){
        return response()->download('storage/'.$file);
    } 
    
}
