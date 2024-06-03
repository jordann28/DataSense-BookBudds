<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        return view('admin.books.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'genre_id' => 'required|exists:genres,id',
            // Add more validation rules as needed
        ]);

        // Create a new book instance
        $book = new Book();
        $book->title = $request->input('title');
        $book->author_id = $request->input('author_id');
        $book->genre_id = $request->input('genre_id');
        // Set other book attributes as needed
        $book->save();

        // Redirect back with success message
        return redirect()->route('admin.books.index')->with('success', 'Book created successfully.');
    }

    public function show(Book $book)
    {
        return view('admin.books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('admin.books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'genre_id' => 'required|exists:genres,id',
            // Add more validation rules as needed
        ]);

        // Update the book instance
        $book->title = $request->input('title');
        $book->author_id = $request->input('author_id');
        $book->genre_id = $request->input('genre_id');
        // Update other book attributes as needed
        $book->save();

        // Redirect back with success message
        return redirect()->route('admin.books.index')->with('success', 'Book updated successfully.');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        // Redirect back with success message
        return redirect()->route('admin.books.index')->with('success', 'Book deleted successfully.');
    }
}
