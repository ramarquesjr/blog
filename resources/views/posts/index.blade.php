@extends('template')

@section('title')
    Veja nossos últimos posts
@endsection

@section('content')
    @foreach($dados as $dado)
        <h3>{{$dado['titulo']}}</h3>
        <p>{{$dado['descricao']}}</p>
    @endforeach

@endsection