@extends('welcome')
@section('title-section','Notes')
@section('content')
    <div>
        <a href="{{route('note.create')}}">Create new note</a>
        <br>
        <br>

        <ol>
            @forelse ($notes as $note)                
                <li style="display: flex">
                    <a href="{{route('note.edit',$note)}}">Edit</a> ----
                    <form action="{{route('note.destroy',$note)}}" method="POST">
                        @method('delete')
                        @csrf
                        <input type="submit" value="Eliminar">
                    </form>
                    
                    ---->> <a href="{{route('note.show',$note)}}"> {{$note->title}} </a></li>
            @empty
                <h1>No data!!</h1>
            @endforelse
        </ol>
    </div>
@endsection