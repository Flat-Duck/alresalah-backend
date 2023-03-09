<?php
namespace App\Http\Controllers\Api;

use App\Book;
use App\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CartCollection;

class BookCartsController extends Controller
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

        $carts = $book
            ->carts()
            ->search($search)
            ->latest()
            ->paginate();

        return new CartCollection($carts);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Book $book
     * @param \App\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Book $book, Cart $cart)
    {
        $this->authorize('update', $book);

        $book->carts()->syncWithoutDetaching([$cart->id]);

        return response()->noContent();
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Book $book
     * @param \App\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Book $book, Cart $cart)
    {
        $this->authorize('update', $book);

        $book->carts()->detach($cart);

        return response()->noContent();
    }
}
