<?php

namespace App\Http\Controllers\Api;

use App\Models\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\LevelResource;
use App\Http\Resources\LevelCollection;
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
        $this->authorize('view-any', Level::class);

        $search = $request->get('search', '');

        $levels = Level::search($search)
            ->latest()
            ->paginate();

        return new LevelCollection($levels);
    }

    /**
     * @param \App\Http\Requests\LevelStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(LevelStoreRequest $request)
    {
        $this->authorize('create', Level::class);

        $validated = $request->validated();

        $level = Level::create($validated);

        return new LevelResource($level);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Level $level
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Level $level)
    {
        $this->authorize('view', $level);

        return new LevelResource($level);
    }

    /**
     * @param \App\Http\Requests\LevelUpdateRequest $request
     * @param \App\Models\Level $level
     * @return \Illuminate\Http\Response
     */
    public function update(LevelUpdateRequest $request, Level $level)
    {
        $this->authorize('update', $level);

        $validated = $request->validated();

        $level->update($validated);

        return new LevelResource($level);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Level $level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Level $level)
    {
        $this->authorize('delete', $level);

        $level->delete();

        return response()->noContent();
    }
}
