<?php

namespace App\Http\Controllers\Admin;

use App\Models\Publisher;
use Illuminate\Http\Request;
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
        //$this->authorize('view-any', Publisher::class);

        $search = $request->get('search', '');

        $publishers = Publisher::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('admin.publishers.index', compact('publishers', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //$this->authorize('create', Publisher::class);

        return view('admin.publishers.create');
    }

    /**
     * @param \App\Http\Requests\PublisherStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublisherStoreRequest $request)
    {
        //$this->authorize('create', Publisher::class);

        $validated = $request->validated();

        $publisher = Publisher::create($validated);

        return redirect()
            ->route('publishers.edit', $publisher)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Publisher $publisher
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Publisher $publisher)
    {
        //$this->authorize('view', $publisher);

        return view('admin.publishers.show', compact('publisher'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Publisher $publisher
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Publisher $publisher)
    {
        //$this->authorize('update', $publisher);

        return view('admin.publishers.edit', compact('publisher'));
    }

    /**
     * @param \App\Http\Requests\PublisherUpdateRequest $request
     * @param \App\Models\Publisher $publisher
     * @return \Illuminate\Http\Response
     */
    public function update(
        PublisherUpdateRequest $request,
        Publisher $publisher
    ) {
        //$this->authorize('update', $publisher);

        $validated = $request->validated();

        $publisher->update($validated);

        return redirect()
            ->route('publishers.edit', $publisher)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Publisher $publisher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Publisher $publisher)
    {
        //$this->authorize('delete', $publisher);

        $publisher->delete();

        return redirect()
            ->route('publishers.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
