@extends('layouts.layout')

@section('content')
<div class="row">

    <div class="col-sm-8 blog-main">

        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ $post->updated_at }}</p>

            <p>{{ $post->body }}</p>

    </div><!-- /.blog-sidebar -->

</div>
@endsection