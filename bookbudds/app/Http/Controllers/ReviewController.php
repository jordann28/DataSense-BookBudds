<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;
use App\Http\Requests\CreateReviewRequest;

class ReviewController extends Controller
{
    /**
     * Store a newly created review for the specified book.
     *
     * @param  \App\Http\Requests\CreateReviewRequest  $request
     * @param  int  $bookId
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateReviewRequest $request, $bookId)
    {
        $book = Book::findOrFail($bookId);

        $review = new Review([
            'user_id' => auth()->user()->id,
            'book_id' => $book->id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        $review->save();

        return response()->json(['message' => 'Review added successfully', 'review' => $review], 201);
    }

    /**
     * Display the specified review.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $review = Review::findOrFail($id);

        return response()->json(['review' => $review], 200);
    }

    /**
     * Update the specified review.
     *
     * @param  \App\Http\Requests\CreateReviewRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CreateReviewRequest $request, $id)
    {
        $review = Review::findOrFail($id);

        $review->update([
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return response()->json(['message' => 'Review updated successfully', 'review' => $review], 200);
    }

    /**
     * Remove the specified review from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return response()->json(['message' => 'Review deleted successfully'], 200);
    }
}
