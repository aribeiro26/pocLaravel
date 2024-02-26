<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{
    public function getAll()
    {
        $bands = $this->getBands();

        return response()->json($bands);
    }

    public function getById($id)
    {
        $bands = $this->getBands();

        $band = array_filter($bands, function ($band) use ($id) {
            return $band["id"] == $id;
        });

        return response()->json(array_values($band));
    }

    // protected function getBands()
    // {
    //     return [
    //         ["id" => 1, "name" => "AC/DC", "gender" => "Rock", "year" => 1973],
    //         ["id" => 2, "name" => "Metallica", "gender" => "Rock", "year" => 1981],
    //         ["id" => 3, "name" => "Ramones", "gender" => "Punk", "year" => 1974],
    //         ["id" => 4, "name" => "Queen", "gender" => "Rock", "year" => 1970],
    //         ["id" => 5, "name" => "Guns N Roses", "gender" => "Rock", "year" => 1985]
    //     ];
    // }
}
