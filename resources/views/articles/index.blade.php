@extends('app')


@section('content')

<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../" class="navbar-brand">Bootstrap</a>
    </div>
    <nav id="bs-navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li>
          <a href="../getting-started/">Getting started</a>
        </li>
        <li>
          <a href="../css/">CSS</a>
        </li>
        <li>
          <a href="../components/">Components</a>
        </li>
        <li>
          <a href="../javascript/">JavaScript</a>
        </li>
        <li>
          <a href="../customize/">Customize</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://expo.getbootstrap.com" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Expo');">Account</a></li>
        <li><a href="http://blog.getbootstrap.com" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');">Login/a></li>
      </ul>
    </nav>
  </div>
</header>

@foreach ($articles as $element)
	

<h2><a href="articles/{{$element->id}}" class="">{{$element->title}}</a></h2>
<div class="body">{{$element->body}}</div>	
{{-- <small>{{$user->name}}</small>
 --}}
@endforeach

<a href="/articles/create"><button type="button" class="btn btn-info fix_bottom">+ Add</button></a>
@stop
