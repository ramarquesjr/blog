<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Posts extends Controller
{
    public function index(){
        $dados = array (
            array('id'=>1, 'titulo'=>'Post 1', 'descricao'=>'Texto, texto e texto!!!'),
            array('id'=>2, 'titulo'=>'Post 2', 'descricao'=>'Texto, texto e texto!!!'),
            array('id'=>3, 'titulo'=>'Post 3', 'descricao'=>'Texto, texto e texto!!!'),
            array('id'=>4, 'titulo'=>'Post 4', 'descricao'=>'Texto, texto e texto!!!'),
            array('id'=>5, 'titulo'=>'Post 5', 'descricao'=>'Texto, texto e texto!!!'),
            array('id'=>6, 'titulo'=>'Post 6', 'descricao'=>'Texto, texto e texto!!!'),
            array('id'=>7, 'titulo'=>'Post 7', 'descricao'=>'Texto, texto e texto!!!'),
            array('id'=>8, 'titulo'=>'Post 8', 'descricao'=>'Texto, texto e texto!!!')
        );
        return view('posts.index',compact('dados'));

    }
}
