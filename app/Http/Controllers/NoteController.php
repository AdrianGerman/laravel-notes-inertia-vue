<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return Inertia::render('Notes/Index', ['notes' => Note::latest()
        ->where('excerpt', 'LIKE', "%$request->q%")
        ->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Notes/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'excerpt' => 'required',
            'content' => 'required',
        ]);
        $note = Note::create($request->all());
        return redirect()->route('notes.edit', $note->id)->with('status', 'Nota creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return Inertia::render('Notes/Show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return Inertia::render('Notes/Edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        $request->validate([
            'excerpt' => 'required',
            'content' => 'required',
        ]);
        $note->update($request->all());
        return redirect()->route('notes.index')->with('status', 'Nota actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('notes.index')->with('status', 'Nota eliminada');
    }
}