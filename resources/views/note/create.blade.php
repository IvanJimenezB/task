@extends('welcome')

@section('title-section','Notes > Create')
@section('content')
<div>
    <a href="{{route('note.index')}}">Back</a>
    <h2 style="text-align: center">¿Create new note?</h2>



    <form action="{{route('note.store')}}" method="POST">
        @csrf

        <div>
            <label for="title">Title</label><br>
            <input type="text" name="title" id="title">
            @error('title')
                <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="description">Description</label><br>
            <textarea name="description" id="description" cols="30" rows="5"></textarea>
            @error('description')
                <p style="color:red">{{$message}}</p>
            @enderror
        </div>

        <button type="submit">Enviar</button>
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