<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TTT extends Controller
{
    public function show(){
        $e=\App\Models\Ellow::all();
        return view('HHH',['gg'=>$e]);
    }
}
