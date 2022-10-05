<?php

namespace App\Http\Controllers\Api;

use App\Publisher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PublisherResource;
use App\Http\Resources\PublisherCollection;
use App\Http\Requests\PublisherStoreRequest;
use App\Http\Requests\PublisherUpdateRequest;

class PublisherController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Publisher::class);

        $search = $request->get('search', '');

        $publishers = Publisher::search($search)
            ->latest()
            ->paginate();

        return new PublisherCollection($publishers);
    }

    /**
     * @param \App\Http\Requests\PublisherStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublisherStoreRequest $request)
    {
        $this->authorize('create', Publisher::class);

        $validated = $request->validated();

        $publisher = Publisher::create($validated);

        return new PublisherResource($publisher);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Publisher $publisher
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Publisher $publisher)
    {
        $this->authorize('view', $publisher);

        return new PublisherResource($publisher);
    }

    /**
     * @param \App\Http\Requests\PublisherUpdateRequest $request
     * @param \App\Publisher $publisher
     * @return \Illuminate\Http\Response
     */
    public function update(
        PublisherUpdateRequest $request,
        Publisher $publisher
    ) {
        $this->authorize('update', $publisher);

        $validated = $request->validated();

        $publisher->update($validated);

        return new PublisherResource($publisher);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Publisher $publisher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Publisher $publisher)
    {
        $this->authorize('delete', $publisher);

        $publisher->delete();

        return response()->noContent();
    }
}
