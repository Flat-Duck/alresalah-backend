<?php
namespace App\Http\Controllers\Api;

use App\Tag;
use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TagCollection;

class BookTagsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Book $book
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Book $book)
    {
        $this->authorize('view', $book);

        $search = $request->get('search', '');

        $tags = $book
            ->tags()
            ->search($search)
            ->latest()
            ->paginate();

        return new TagCollection($tags);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Book $book
     * @param \App\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Book $book, Tag $tag)
    {
        $this->authorize('update', $book);

        $book->tags()->syncWithoutDetaching([$tag->id]);

        return response()->noContent();
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Book $book
     * @param \App\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Book $book, Tag $tag)
    {
        $this->authorize('update', $book);

        $book->tags()->detach($tag);

        return response()->noContent();
    }
}
