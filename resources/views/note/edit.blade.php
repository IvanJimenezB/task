@extends('welcome')

@section('title-section','Notes > Create')
@section('content')
<div>
    <a href="{{route('note.index')}}">Back</a>
    <h2 style="text-align: center">¿Edit this note?</h2>



    <form action="{{route('note.update',$note)}}" method="POST">
        @method('PUT')
        @csrf
        <div>
            <label for="title">Title</label><br>
            <input type="text" name="title" id="title" value="{{$note->title}}">
            @error('title')
                <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="description">Description</label><br>
            <textarea name="description" id="description" cols="30" rows="5">{{$note->description}}</textarea>
            @error('title')
                <p style="color:red">{{$message}}</p>
            @enderror
        </div>

        <button type="submit">Editar</button>
    </form>

</div>
@endsection

<style>
    button{
        padding: 4px 20px;
        background-color: greenyellow;
    }
    button:hover{
        cursor: pointer;
    }
</style>