<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class Alucard extends Controller
{
    //Передача в blade
    public function show(){
        $t=\App\Models\Vlad::all();
        return view('jjj',['prod'=>$t]);
    }
    
}