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
    //Поздно опомнился надо было сразу сделать переход
    public function showOne(){
        $cl=\App\Models\Vlad::all();
        return view('kkk',['kaif'=>$cl]);

    }
  
}
