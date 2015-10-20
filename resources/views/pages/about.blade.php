@extends('app')

@section('content')
<h1>Hi, {{ $name }}</h1>
<p>To be a full stack programmer.To be a full stack programmer.To be a full stack programmer.To be a full stack programmer.To be a full stack programmer.</p>
<h2>Interests List</h2>
<ul>
    @foreach ($interests as $interest)
        <li> {{ $interest }} </li>
    @endforeach
</ul>
@stop
