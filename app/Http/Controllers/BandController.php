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

    public function store(Request $request)
    {
        $band = new Band();
        $band->name = $request->name;
        $band->gender = $request->gender;
        $band->year = $request->year;
        $band->save();

        return response()->json($band, 201); 
    }

    public function update(Request $request, $id)
    {
        $band = Band::find($id);

        if (!$band) {
            return response()->json(['error' => 'Banda não encontrada'], 404);
        }

        $band->name = $request->name ?? $band->name;
        $band->gender = $request->gender ?? $band->gender;
        $band->year = $request->year ?? $band->year;
        $band->save();

        return response()->json($band);
    }
}
