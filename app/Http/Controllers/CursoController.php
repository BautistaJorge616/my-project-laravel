<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('cursos.index');
    }

    public function show($var){
        return view('cursos.show',compact('var'));
    }

    public function create(){
        return view('cursos.create');
    }
}
