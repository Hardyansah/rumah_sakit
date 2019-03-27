<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PasienRequest;

class StaticsController extends Controller
{
    public function pasien(){
        return view('pasiens/index');
    }
    public function pasienProses(ContactUS $request){
        
        Pasien::create($request->all());
        
        return view('pasiens.pasien', compact('request'));
    }
}