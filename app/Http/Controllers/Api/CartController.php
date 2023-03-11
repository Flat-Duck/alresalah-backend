<?php

namespace App\Http\Controllers\Api;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Resources\CartResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\CartCollection;
use App\Http\Requests\CartStoreRequest;
use App\Http\Requests\CartUpdateRequest;

class CartController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Cart::class);

        $search = $request->get('search', '');

        $carts = Cart::search($search)
            ->latest()
            ->paginate();

        return new CartCollection($carts);
    }

    /**
     * @param \App\Http\Requests\CartStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CartStoreRequest $request)
    {
        $this->authorize('create', Cart::class);

        $validated = $request->validated();

        $cart = Cart::create($validated);

        return new CartResource($cart);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Cart $cart)
    {
        $this->authorize('view', $cart);

        return new CartResource($cart);
    }

    /**
     * @param \App\Http\Requests\CartUpdateRequest $request
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function update(CartUpdateRequest $request, Cart $cart)
    {
        $this->authorize('update', $cart);

        $validated = $request->validated();

        $cart->update($validated);

        return new CartResource($cart);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Cart $cart)
    {
        $this->authorize('delete', $cart);

        $cart->delete();

        return response()->noContent();
    }
}
