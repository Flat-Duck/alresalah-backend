<?php

namespace App\Http\Controllers\Shop;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;

class TagController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$this->authorize('view-any', Tag::class);

        $search = $request->get('search', '');

        $tags = Tag::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('shop.tags.index', compact('tags', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //$this->authorize('create', Tag::class);

        return view('shop.tags.create');
    }

    /**
     * @param \App\Http\Requests\TagStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagStoreRequest $request)
    {
        //$this->authorize('create', Tag::class);

        $validated = $request->validated();

        $tag = Tag::create($validated);

        return redirect()
            ->route('tags.edit', $tag)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Tag $tag)
    {
        //$this->authorize('view', $tag);

        return view('shop.tags.show', compact('tag'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Tag $tag)
    {
        //$this->authorize('update', $tag);

        return view('shop.tags.edit', compact('tag'));
    }

    /**
     * @param \App\Http\Requests\TagUpdateRequest $request
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function update(TagUpdateRequest $request, Tag $tag)
    {
        //$this->authorize('update', $tag);

        $validated = $request->validated();

        $tag->update($validated);

        return redirect()
            ->route('tags.edit', $tag)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Tag $tag)
    {
        //$this->authorize('delete', $tag);

        $tag->delete();

        return redirect()
            ->route('tags.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
