<?php
namespace App\Http\Controllers\Api;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrderCollection;

class BookOrdersController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Book $book)
    {
        $this->authorize('view', $book);

        $search = $request->get('search', '');

        $orders = $book
            ->orders()
            ->search($search)
            ->latest()
            ->paginate();

        return new OrderCollection($orders);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Book $book
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Book $book, Order $order)
    {
        $this->authorize('update', $book);

        $book->orders()->syncWithoutDetaching([$order->id]);

        return response()->noContent();
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Book $book
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Book $book, Order $order)
    {
        $this->authorize('update', $book);

        $book->orders()->detach($order);

        return response()->noContent();
    }
}
