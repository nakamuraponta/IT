@extends('layouts.app')
@section('content')
<h1>{{$album->name}}</h1>
<a class="button secondary" href="/">Go Back</a>
<a class="button" href="/photos/create/{{$album->id}}">Upload Photo to Album</a>
<hr>
@if(count($album->photos) > 0)
    <?php
        $colcount=count($album->photos);
        $i=1;
    ?>

    <div id="photos">
        <div class="row text-center">
            <div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-4">
                @foreach($album->photos as $photo)
                    @if($i==$colcount)
                        <div class="cell">
                            <a href="/photos/{{$photo->id}}">
                                <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}"
                                alt="{{$photo->title}}">
                            </a>
                        <h4>{{$photo->title}}</h4>
                    @else
                        <div class="cell">
                            <a href="/photos/{{$photo->id}}">
                                <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}"
                                alt="{{$photo->title}}">
                           </a>
                        <h4>{{$photo->title}}</h4>
                    @endif

                    @if($i % 3 == 0)
                        <div></div>
                        <div class="row text-center">
                        <div class="grid-x grid-margin-x">
                    @else
                        </div>
                    @endif
                        <?php $i++; ?>
                @endforeach
                    </div></div>
                @else
                    <p>No photos found</p>
@endif
@endsection