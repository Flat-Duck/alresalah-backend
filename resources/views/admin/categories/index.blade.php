@extends('admin.layouts.app', ['page' => 'categories'])
@section('title', 'Categories')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Categories</h3>
                <a class="pull-right btn btn-sm btn-primary" href="{{ route('admin.categories.create') }}">
                    Add New Category
                </a>
            </div>
            <div class="box-body">
                <div class="searchbar mt-4 mb-5">
                    <div class="row">                                      
                        <div class="col-md-8">
                            <form>
                                <div class="input-group margin col-md-4">
                                    <input id="indexSearch" name="search" placeholder="Searsh" value="{{ $search ?? '' }}" type="text" class="form-control" spellcheck="false" data-ms-editor="true" autocomplete="off">
                                    <span class="input-group-btn">                                    
                                        <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>                                
                            </form>
                        </div>                    
                    </div>
                </div>

                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>                    
                    <tbody>
                        @forelse($categories as $k=>$category)
                        <tr>
                            <td>{{ $k+1}}</td>
                            <td>{{ $category->name ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div role="group" aria-label="Row Actions" class="btn-group">
                                    <a href="{{ route('admin.categories.edit', $category) }}"  class="btn btn-info">
                                        <i class="fa fa-edit"></i>                                        
                                    </a>
                                    <a href="{{ route('admin.categories.show', $category) }}" class="btn btn-warning">
                                        <i class="fa fa-eye"></i>                                        
                                    </a>
                                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" class="inline pointer inline pointer btn btn-danger">
                                        @csrf
                                        @method('DELETE')
                                        <a onclick="if (confirm('Are you sure?')) { this.parentNode.submit() }">
                                            <i class="fa fa-trash-o btn-danger"></i>
                                        </a>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr> <td colspan="4">No records found</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="box-footer clearfix">
                {{ $categories->links('vendor.pagination.default') }}
            </div>
        </div>
    </div>
</div>
@endsection