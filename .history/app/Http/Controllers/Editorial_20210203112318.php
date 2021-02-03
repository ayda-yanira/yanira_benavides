<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Editorial extends Controller
{
    public function index(){//retorna la vista o interactua con el modelo de datos
        $edit=DB::table('editorial')
        ->get();
        return view('editorial.editorial', ['lib'=>$lib]);//vista principal
    }

}
