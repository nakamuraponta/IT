@extends('layouts.app')
@section('content')
<div class="grid-container">
    <h3>CREATE ALBUMS</h3>
    {!!Form::open(['action'=>'AlbumsController@store','method'=>'post','enctype'=>'multipart/form-data'])!!}
    {{Form::text('name','',['placeholder'=>'Album Name'])}}
    {{Form::textarea('description','',['placeholder'=>'Album Description'])}}
    {{Form::file('cover_image')}}
    {{Form::submit('submit')}}
    {!!Form::close()!!}
</div>
@endsection