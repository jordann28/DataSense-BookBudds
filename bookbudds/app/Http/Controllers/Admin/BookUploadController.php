<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookUploadController extends Controller
{
    public function create()
    {
        return view('admin.books.upload');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'description' => 'required|string',
            'cover_image' => 'required|image|max:2048', // Adjust max file size as needed
            // Add more validation rules as needed
        ]);

        // Store the cover image securely
        $coverImagePath = $request->file('cover_image')->store('covers', 'public');

        // Create a new book instance
        $book = new Book();
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->genre = $request->input('genre');
        $book->description = $request->input('description');
        $book->cover_image = $coverImagePath;
        // Set other book attributes as needed
        $book->save();

        // Redirect back with success message
        return redirect()->route('admin.books.upload.create')->with('success', 'Book uploaded successfully.');
    }
}
