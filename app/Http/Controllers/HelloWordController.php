<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWordController extends Controller
{
    public function helloPost($name, Request $request)
    {

        return response()->json([
            "message" => "Hello Controller {$name}",
            "data" => $request->foo
        ]);

    }
}
