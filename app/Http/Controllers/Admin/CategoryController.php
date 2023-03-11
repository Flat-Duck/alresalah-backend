<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;

class CategoryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$this->authorize('view-any', Category::class);

        $search = $request->get('search', '');

        $categories = Category::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('admin.categories.index', compact('categories', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //$this->authorize('create', Category::class);

        return view('admin.categories.create');
    }

    /**
     * @param \App\Http\Requests\CategoryStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        //$this->authorize('create', Category::class);

        $validated = $request->validated();

        $category = Category::create($validated);

        return redirect()
            ->route('categories.edit', $category)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Category $category)
    {
        //$this->authorize('view', $category);

        return view('admin.categories.show', compact('category'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Category $category)
    {
        //$this->authorize('update', $category);

        return view('admin.categories.edit', compact('category'));
    }

    /**
     * @param \App\Http\Requests\CategoryUpdateRequest $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        //$this->authorize('update', $category);

        $validated = $request->validated();

        $category->update($validated);

        return redirect()
            ->route('categories.edit', $category)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $category)
    {
        //$this->authorize('delete', $category);

        $category->delete();

        return redirect()
            ->route('categories.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
