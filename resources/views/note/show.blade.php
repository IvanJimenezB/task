@extends('welcome')
@section('title-section','show')
@section('content')
    <div>
        <a href="{{route('note.index')}}">back</a>
        <h3>{{$note->title}}</h3>
        <p>{{$note->description}}</p>
    </div>
@endsection