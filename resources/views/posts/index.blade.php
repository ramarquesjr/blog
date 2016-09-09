@extends('template')

@section('title')
    Últimos posts divulgados
@endsection

@section('content')
    @foreach($dados as $dado)
        <h4><a href="/public/posts/{{$dado->id}}">{{$dado->title}}</a></h4>
    @endforeach
{{ $dados->links() }}

@endsection