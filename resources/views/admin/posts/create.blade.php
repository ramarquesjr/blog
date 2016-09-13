@extends('template')

@section('title')
    Create new post
@endsection

@section('content')
	@if($errors->any())
		<ul class="alert">
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	@endif
	{!! Form::open(['method'=>'post','route'=>'admin.posts.store']) !!}
	<div class="form-group">
		{!! Form::label('title','Título:') !!}
		{!! Form::text('title',null,['class'=>'form-control']) !!}
	</div>


	<div class="form-group">
		{!! Form::label('content','Conteúdo:') !!}
		{!! Form::textarea('content',null,['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Criar post',['class'=>'btn btn-']) !!}
	</div>

	{!! Form::close() !!}

@endsection