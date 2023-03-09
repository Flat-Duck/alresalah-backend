<?php

namespace App\Http\Controllers\Admin;

use App\Level;
use Illuminate\Http\Request;
use App\Http\Requests\LevelStoreRequest;
use App\Http\Requests\LevelUpdateRequest;

class LevelController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$this->authorize('view-any', Level::class);

        $search = $request->get('search', '');

        $levels = Level::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('admin.levels.index', compact('levels', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //$this->authorize('create', Level::class);

        return view('admin.levels.create');
    }

    /**
     * @param \App\Http\Requests\LevelStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(LevelStoreRequest $request)
    {
        //$this->authorize('create', Level::class);

        $validated = $request->validated();

        $level = Level::create($validated);

        return redirect()
            ->route('levels.edit', $level)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Level $level
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Level $level)
    {
        //$this->authorize('view', $level);

        return view('admin.levels.show', compact('level'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Level $level
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Level $level)
    {
        //$this->authorize('update', $level);

        return view('admin.levels.edit', compact('level'));
    }

    /**
     * @param \App\Http\Requests\LevelUpdateRequest $request
     * @param \App\Level $level
     * @return \Illuminate\Http\Response
     */
    public function update(LevelUpdateRequest $request, Level $level)
    {
        //$this->authorize('update', $level);

        $validated = $request->validated();

        $level->update($validated);

        return redirect()
            ->route('levels.edit', $level)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Level $level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Level $level)
    {
        //$this->authorize('delete', $level);

        $level->delete();

        return redirect()
            ->route('levels.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
