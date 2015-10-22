@extends('app')

@section('content')
    <h1>Articles List</h1>
    <hr />
    <ul>
        @foreach ($articles as $article)
            <li>
                <a href="{{ url('articles', $article->id) }}">
                    {{ $article->title }}
                </a> ({{ $article->published_at }})
            </li>
        @endforeach
    </ul>
@stop
