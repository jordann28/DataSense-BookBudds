<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('admin.genres.index', compact('genres'));
    }

    public function create()
    {
        return view('admin.genres.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'type' => 'required|string|max:255|unique:genres',
            // Add more validation rules as needed
        ]);

        // Create a new genre instance
        $genre = new Genre();
        $genre->type = $request->input('type');
        // Set other genre attributes as needed
        $genre->save();

        // Redirect back with success message
        return redirect()->route('admin.genres.index')->with('success', 'Genre created successfully.');
    }

    public function show(Genre $genre)
    {
        return view('admin.genres.show', compact('genre'));
    }

    public function edit(Genre $genre)
    {
        return view('admin.genres.edit', compact('genre'));
    }

    public function update(Request $request, Genre $genre)
    {
        // Validate the request data
        $request->validate([
            'type' => 'required|string|max:255|unique:genres,type,' . $genre->id,
            // Add more validation rules as needed
        ]);

        // Update the genre instance
        $genre->type = $request->input('type');
        // Update other genre attributes as needed
        $genre->save();

        // Redirect back with success message
        return redirect()->route('admin.genres.index')->with('success', 'Genre updated successfully.');
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();
        // Redirect back with success message
        return redirect()->route('admin.genres.index')->with('success', 'Genre deleted successfully.');
    }
}
