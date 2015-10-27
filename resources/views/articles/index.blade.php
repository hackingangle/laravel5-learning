@extends('app')

@section('content')
    <h1>Articles List</h1>
    <p>
        <a href="{{ url('articles/create') }}">create Article</a>
    </p>
    <hr />
    <ul>
        @foreach ($articles as $article)
            <li>
                <a href="{{ url('articles', $article->id) }}">
                    {{ $article->title }}
                </a> ({{ $article->published_at }})
                <a href="{{ url('articles', [$article->id, 'edit']) }}" class="btn btn-danger">
                    edit
                </a>
            </li>
        @endforeach
    </ul>
@stop
