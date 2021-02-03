<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Editorial extends Controller
{
    public function index(){
        $editorial=DB::table('editorial')
        ->get();
        return view('editorial.editorial', ['editorial'=>$editorial]);
    }

}
