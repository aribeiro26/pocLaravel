<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band; 

class BandController extends Controller
{
    public function getAll()
    {
        $bands = Band::all(); 
        return response()->json($bands);
    }

    public function getById($id)
    {
        $band = Band::find($id);

        return response()->json($band);
    }
}
