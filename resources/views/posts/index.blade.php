@extends('template')

@section('title')
    Últimos posts divulgados
@endsection

@section('content')
    @foreach($dados as $dado)
        <h4><a href="{{URL::to('posts',$dado->id)}}">{{$dado->title}}</a></h4>
    @endforeach
{{ $dados->links() }}

@endsection