@extends('admin.layouts.app', ['page' => 'levels'])

@section('title', 'Add New Level')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add New Level</h3>
            </div>
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.levels.store') }}" class="mt-4">
                @csrf
                @include('admin.levels.form-inputs')
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary"> Submit  <i class="fa fa-save"></i> </button>
                    <a href="{{ route('admin.levels.index') }}" class="btn btn-default">
                        <i class="fa fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
