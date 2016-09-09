<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Posts extends Controller
{
    public function index(){
        $dados = \App\Posts::paginate(15);
        return view('posts.index',compact('dados'));
    }

    public function get($id){
        $consulta = \App\Posts::find($id);
        return view('posts.get',compact('consulta'));
    }
}
