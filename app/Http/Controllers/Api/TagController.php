<?php

namespace App\Http\Controllers\Api;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Resources\TagResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\TagCollection;
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
        $this->authorize('view-any', Tag::class);

        $search = $request->get('search', '');

        $tags = Tag::search($search)
            ->latest()
            ->paginate();

        return new TagCollection($tags);
    }

    /**
     * @param \App\Http\Requests\TagStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagStoreRequest $request)
    {
        $this->authorize('create', Tag::class);

        $validated = $request->validated();

        $tag = Tag::create($validated);

        return new TagResource($tag);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Tag $tag)
    {
        $this->authorize('view', $tag);

        return new TagResource($tag);
    }

    /**
     * @param \App\Http\Requests\TagUpdateRequest $request
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function update(TagUpdateRequest $request, Tag $tag)
    {
        $this->authorize('update', $tag);

        $validated = $request->validated();

        $tag->update($validated);

        return new TagResource($tag);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Tag $tag)
    {
        $this->authorize('delete', $tag);

        $tag->delete();

        return response()->noContent();
    }
}
