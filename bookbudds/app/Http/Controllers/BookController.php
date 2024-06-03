<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;
use App\Http\Requests\CreateReviewRequest;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return response()->json(['books' => $books], 200);
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        return response()->json(['book' => $book], 200);
    }

    public function storeReview(CreateReviewRequest $request, $id)
    {
        $book = Book::findOrFail($id);

        $review = new Review([
            'user_id' => auth()->user()->id,
            'book_id' => $book->id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        $review->save();

        return response()->json(['message' => 'Review added successfully', 'review' => $review], 201);
    }
}
