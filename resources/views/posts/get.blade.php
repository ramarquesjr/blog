@extends('template')

@section('title')
    {{$consulta->title}}
@endsection

@section('content')
    <h6 class="text-info"><b>Criado em: </b>{{$consulta->created_at->format('d/m/Y h:m')}} </h6>
    <h6 class="text-warning"><b>Modificado em: </b>{{$consulta->updated_at->format('d/m/Y h:m')}}</h6>
    <h6> Tags:</h6>
    	<ul>
		@foreach($consulta->tags as $tag)
			<li>{{$tag->name}}</li>
		@endforeach
		</ul>
    <p>{{$consulta->content}}</p>
    <h3>Comentários</h3>
    @foreach($consulta->comments as $comment)
    <p>
    	<b>Name: </b> {{$comment->name}} <br />
    	<b>Comment:</b>{{$comment->comment}}
    </p>
    @endforeach()

@endsection