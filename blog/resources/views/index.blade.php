@extends('layouts.layout')

@section('content')
    @foreach($posts as $post)
        <div class="row">
            <div class="col-md-4">
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->intro }}</p>
                <p><a href="/posts/{{ $post->id }}" class="btn btn-default">Read more</a></p>
                <p><a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a></p>
                <form action="/posts/{{ $post->id }}" method="post">
                    {{ csrf_field() }}
                    {!! method_field('delete') !!}
                    <button type="submit" class="btn btn-danger">delete</button>
                </form>
            </div>
        </div>
    @endforeach

@endsection