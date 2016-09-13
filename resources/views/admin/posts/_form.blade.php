<div class="form-group">
		{!! Form::label('title','Título:') !!}
		{!! Form::text('title',$post->title,['class'=>'form-control']) !!}
	</div>


	<div class="form-group">
		{!! Form::label('content','Conteúdo:') !!}
		{!! Form::textarea('content',$post->content,['class'=>'form-control']) !!}
	</div>