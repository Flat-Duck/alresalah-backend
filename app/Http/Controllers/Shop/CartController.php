<?php

namespace App\Http\Controllers\Shop;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
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
            ->paginate(5)
            ->withQueryString();

        return view('shop.carts.index', compact('carts', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Cart::class);

        $users = User::pluck('name', 'id');

        return view('shop.carts.create', compact('users'));
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

        return redirect()
            ->route('carts.edit', $cart)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Cart $cart)
    {
        $this->authorize('view', $cart);

        return view('shop.carts.show', compact('cart'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Cart $cart)
    {
        $this->authorize('update', $cart);

        $users = User::pluck('name', 'id');

        return view('shop.carts.edit', compact('cart', 'users'));
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

        return redirect()
            ->route('carts.edit', $cart)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('carts.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
