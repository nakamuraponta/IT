@extends('layouts.app')
@section('content')
    
    <h1>Posts</h1>
    @if(count($posts)>1)
        @foreach($posts as $post)
        <div class="card mb-3">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}">
                </div>
            <div class="col-md-8 col-sm-8 card-body">
                <div class="card-title"><h3><a href="/posts/{{$post->id}}"> {{$post->title}}</a></h3></div>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                <p class="card-text"><h5>{!!$post->body!!}</h5></p>
            </div>
        </div>
        </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection