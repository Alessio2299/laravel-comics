@extends('layouts.layout')


@section('content')
  <div class="comic" >
    <div class="containerImage">
      <div class="imageComic">
        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
        <span class="target">{{$comic['type']}}</span>
      </div>
    </div>
  </div>
@endsection
