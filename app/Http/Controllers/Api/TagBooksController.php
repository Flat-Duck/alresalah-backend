<?php
namespace App\Http\Controllers\Api;

use App\Models\Tag;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookCollection;

class TagBooksController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Tag $tag)
    {
        $this->authorize('view', $tag);

        $search = $request->get('search', '');

        $books = $tag
            ->books()
            ->search($search)
            ->latest()
            ->paginate();

        return new BookCollection($books);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tag $tag
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Tag $tag, Book $book)
    {
        $this->authorize('update', $tag);

        $tag->books()->syncWithoutDetaching([$book->id]);

        return response()->noContent();
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tag $tag
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Tag $tag, Book $book)
    {
        $this->authorize('update', $tag);

        $tag->books()->detach($book);

        return response()->noContent();
    }
}
