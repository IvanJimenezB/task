<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PhpParser\Node\Stmt\Echo_;

class NoteController extends Controller
{
    public function index():view
    {
        $notes = Note::all();

        return view('note.index',compact('notes'));
    }

    public function create():view
    {
        return view('note.create');
    }

    public function store(NoteRequest $request):RedirectResponse
    {
        // en caso de que los name no respeten los nombre a los campos de las tabalas
        // Note::create([
        //     'title' => $request->title,
        //     'description' => $request->description
        // ]);
        // en caso de que los name se respeten 

        Note::create($request->all());


        return to_route('note.index')->with('success', 'Note created successfully');
    }

    public function show(Note $note):view
    { 
        return view('note.show',compact('note'));
    }

    public function edit(Note $note):view
    {
        return view('note.edit', compact('note'));
    }

    public function update(NoteRequest $request,Note $note):RedirectResponse
    {
        // funciona igual que el create
        $note->update($request->all());
        return to_route('note.index')->with('success', 'Note updated successfully');
    }

    public function destroy(Note $note):RedirectResponse
    {
        $note->delete();
        return to_route('note.index')->with('danger', 'Note deleted successfully');
    }
}