<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band; 

class BandController extends Controller
{
    public function index()
    {
        $bands = Band::all();
        return response()->json($bands);
    }

   
    public function show($id)
    {
        $band = Band::find($id);
        return response()->json($band);
    }
    
}
