@extends('layouts.app')

@section('content')
	<div class="container">
	<div class="row">
		<h1>Administração do blog</h1>
		<p><a href="{{route('admin.posts.create')}}" class="btn btn-success">Crie o novo post</a></p>
		<table class="table">
			<tr>
				<th>id</th>
				<th>Título</th>
				<th>Ação</th>
			</tr>
			@foreach($postss as $post)
			<tr>
				<td>{{$post->id}}</td>
				<td>{{$post->title}}</td>
				<td><a href="{{route('admin.posts.edit',['id'=>$post->id])}}" class="btn btn-default">Edit</a>
				<a href="{{route('admin.posts.destroy',['id'=>$post->id])}}" class="btn btn-danger">Destroy</a></td>
			</tr>
			@endforeach
		</table>
		{!!$postss->render()!!}
	</div>
	</div>


@endsection