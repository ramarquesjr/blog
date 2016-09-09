@extends('template')

@section('title')
    {{$consulta->title}}
@endsection

@section('content')
    <h6 class="text-info"><b>Criado em: </b>{{$consulta->created_at->format('d/m/Y h:m')}} </h6>
    <h6 class="text-warning"><b>Modificado em: </b>{{$consulta->updated_at->format('d/m/Y h:m')}}</h6>
    <p>{{$consulta->content}}</p>

@endsection