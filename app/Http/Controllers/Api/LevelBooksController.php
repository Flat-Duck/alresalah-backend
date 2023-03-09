<?php

namespace App\Http\Controllers\Api;

use App\Level;
use Illuminate\Http\Request;
use App\Http\Resources\BookResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookCollection;

class LevelBooksController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Level $level
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Level $level)
    {
        $this->authorize('view', $level);

        $search = $request->get('search', '');

        $books = $level
            ->books()
            ->search($search)
            ->latest()
            ->paginate();

        return new BookCollection($books);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Level $level
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Level $level)
    {
        $this->authorize('create', Book::class);

        $validated = $request->validate([
            'title' => 'required|max:255|string',
            'ISBN' => 'required|max:255|string',
            'edition' => 'required|max:255|string',
            'format' => 'required|max:255|string',
            'Author' => 'required|max:255|string',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'description' => 'required|max:255|string',
            'featured' => 'required|boolean',
            'on_sale' => 'required|boolean',
            'publisher_id' => 'required|exists:publishers,id',
            'cover_image' => 'image|max:1024|required',
        ]);

        if ($request->hasFile('cover_image')) {
            $validated['cover_image'] = $request
                ->file('cover_image')
                ->store('public');
        }

        $book = $level->books()->create($validated);

        return new BookResource($book);
    }
}
