@extends('admin.layouts.app', ['page' => 'tags'])

@section('title', 'Edit Tag')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Tag</h3>
            </div>
            <form method="PUT" enctype="multipart/form-data" action="{{ route('admin.tags.update', $tag) }}">
                @csrf
                @include('admin.tags.form-inputs')                                                                                  
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.tags.index') }}" class="btn btn-default">
                        Cancel
                    </a>
                    <a href="{{ route('admin.tags.create') }}" class="btn btn-info">
                        Create New
                        <i class="fa fa-edit"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection