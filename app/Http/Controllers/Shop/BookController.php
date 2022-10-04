<?php

namespace App\Http\Controllers\Shop;

use App\Tag;
use App\Book;
use App\Level;
use App\Publisher;
use Illuminate\Http\Request;
use App\Http\Requests\BookStoreRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\BookUpdateRequest;
use App\Jobs\GetBooksCoverImages;

class BookController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$this->authorize('view-any', Book::class);
//dd($request->all());
        $search = $request->get('search', '');

        $books = Book::search($search)
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('shop.index', compact('books', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //$this->authorize('create', Book::class);

        $levels = Level::pluck('name', 'id');
        $publishers = Publisher::pluck('Name', 'id');

        return view('shop.books.create', compact('levels', 'publishers'));
    }

    /**
     * @param \App\Http\Requests\BookStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookStoreRequest $request)
    {
        //$this->authorize('create', Book::class);

        $validated = $request->validated();
        if ($request->hasFile('cover_image')) {
            $validated['cover_image'] = $request
                ->file('cover_image')
                ->store('public');
        }

        $book = Book::create($validated);
        GetBooksCoverImages::dispatch($book);

        return redirect()
            ->route('books.edit', $book)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Book $book
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Book $book)
    {
        //$this->authorize('view', $book);

        return view('shop.books.show', compact('book'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Book $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Book $book)
    {
        //$this->authorize('update', $book);

        $levels = Level::pluck('name', 'id');
        $publishers = Publisher::pluck('Name', 'id');

        $tags = Tag::get();

        return view(
            'shop.books.edit',
            compact('book', 'levels', 'publishers', 'tags')
        );
    }

    /**
     * @param \App\Http\Requests\BookUpdateRequest $request
     * @param \App\Book $book
     * @return \Illuminate\Http\Response
     */
    public function update(BookUpdateRequest $request, Book $book)
    {
        //$this->authorize('update', $book);

        $validated = $request->validated();
        if ($request->hasFile('cover_image')) {
            if ($book->cover_image) {
                Storage::delete($book->cover_image);
            }

            $validated['cover_image'] = $request
                ->file('cover_image')
                ->store('public');
        }

        $book->tags()->sync($request->tags);

        $book->update($validated);

        return redirect()
            ->route('books.edit', $book)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Book $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Book $book)
    {
        //$this->authorize('delete', $book);

        if ($book->cover_image) {
            Storage::delete($book->cover_image);
        }

        $book->delete();

        return redirect()
            ->route('books.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
