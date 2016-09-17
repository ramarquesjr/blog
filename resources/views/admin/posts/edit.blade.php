@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<h1>Editando post <span class="text-info">{{$post->title}}</span></h1>
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
				{!! Form::label('tags',"Tags:",['class'=>'control-label']) !!}
				{!! Form::textarea("tags",$post->TagList,['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Salvar post',['class'=>'btn btn-']) !!}
			</div>
			{!! Form::close() !!}
		</h1>
	</div>

@endsection