@extends('admin.layouts.app', ['page' => 'levels'])

@section('title', 'Edit Level')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Level</h3>
            </div>
            <form method="PUT" enctype="multipart/form-data" action="{{ route('admin.levels.update', $level) }}">
                @csrf
                @include('admin.levels.form-inputs')                                                                                  
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.levels.index') }}" class="btn btn-default">
                        Cancel
                    </a>
                    <a href="{{ route('admin.levels.create') }}" class="btn btn-info">
                        Create New
                        <i class="fa fa-edit"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection