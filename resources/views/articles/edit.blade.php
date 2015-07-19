@extends('app')

@section('content')

<h1>write an article</h1>
<hr>
{!! Form::model($article , ['method' => 'PATCH' , 'url' => 'articles/' . $article->id]) !!}

<div class="form-group">
	{!! Form::label('title' , 'Title:') !!}
	{!! Form::text('title' , null , ['class' => 'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('body' , 'Body:') !!}
	{!! Form::textarea('body' , null , ['class' => 'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('publish_at' , 'Publish on:') !!}
	{!! Form::input('date' , 'publish_at', date('Y-m-d'),  ['class' => 'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::submit('Save Article' , ['class' => 'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}

@include('errors.list')

@stop



