@extends('layouts.app')
@section('content')

@if(count($albums) > 0)
    <?php
        $colcount=count($albums);
        $i=1;
    ?>

    <div id="albums">
        <div class="row text-center">
            <div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-4">
                @foreach($albums as $album)
                    @if($i==$colcount)
                        <div class="cell">
                            <a href="/albums/{{$album->id}}">
                                <img class="thumbnail" src="/storage/album_covers/{{$album->cover_image}}"
                                alt="{{$album->name}}">
                            </a>
                        <h4>{{$album->name}}</h4>
                    @else
                        <div class="cell">
                            <a href="/albums/{{$album->id}}">
                                <img class="thumbnail" src="/storage/album_covers/{{$album->cover_image}}"
                                alt="{{$album->name}}">
                           </a>
                        <h4>{{$album->name}}</h4>
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
                    <p>No albums found</p>
@endif
@endsection