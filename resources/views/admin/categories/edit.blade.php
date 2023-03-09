@extends('admin.layouts.app', ['page' => 'categories'])

@section('title', 'Edit Category')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Category</h3>
            </div>
            <form method="PUT" enctype="multipart/form-data" action="{{ route('admin.categories.update', $category) }}">
                @csrf
                @include('admin.categories.form-inputs')                                                                                  
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-default">
                        Cancel
                    </a>
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-info">
                        Create New
                        <i class="fa fa-edit"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection