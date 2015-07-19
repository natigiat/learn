@extends('app')


@section('content')

<h1>Article</h1>
<hr>
<h2>{{$article->title}}</h2>
<p>{{$article->body}}</p>

<small>{{$article->publish_at}}</small>



<a href="/articles/{{$article->id}}/edit"><button type="button" class="btn btn-info fix_bottom">Edit</button></a>

@stop
