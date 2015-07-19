@extends('app')

@section('content')
	
<h1 class="text-center">Hello nati</h1>

<ul>
@foreach ($persons as $person)
	{{-- expr --}}
	<li>{{$person}}</li>
@endforeach
</ul>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

@stop

