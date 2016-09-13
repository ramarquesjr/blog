@extends('template')

@section('title')
    Editando post {{$post->title}}
@endsection

@section('content')
	@if($errors->any())
		<ul class="alert">
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	@endif
	{!! Form::model($post,['method'=>'put','route'=>['admin.posts.update',$post->id]]) !!}
	@include('admin.posts._form')
	<div class="form-group">
		{!! Form::submit('Salvar post',['class'=>'btn btn-']) !!}
	</div>

	{!! Form::close() !!}

@endsection