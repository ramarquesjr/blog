@extends('template')

@section('title')
    Administração do blog
@endsection

@section('content')
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
			<td> </td>
			
		</tr>
		@endforeach
	</table>
	{!!$postss->render()!!}


@endsection