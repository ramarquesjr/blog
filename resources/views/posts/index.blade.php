@extends('layouts.app')

@section('content')
	<div class="container">
    	<div class="row">
			<h1>Últimos posts divulgados</h1>
		    @foreach($dados as $dado)
		        <h4><a href="{{URL::to('posts',$dado->id)}}">{{$dado->title}}</a></h4>
		    @endforeach
			{{ $dados->links() }}
		</div>
	</div>

@endsection