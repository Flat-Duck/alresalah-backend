<?php
namespace App\Http\Controllers\Api;

use App\Models\Cart;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookCollection;

class CartBooksController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Cart $cart)
    {
        $this->authorize('view', $cart);

        $search = $request->get('search', '');

        $books = $cart
            ->books()
            ->search($search)
            ->latest()
            ->paginate();

        return new BookCollection($books);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Cart $cart
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cart $cart, Book $book)
    {
        $this->authorize('update', $cart);

        $cart->books()->syncWithoutDetaching([$book->id]);

        return response()->noContent();
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Cart $cart
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Cart $cart, Book $book)
    {
        $this->authorize('update', $cart);

        $cart->books()->detach($book);

        return response()->noContent();
    }
}
