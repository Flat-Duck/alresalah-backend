@extends('admin.layouts.app', ['page' => 'users'])

@section('title', 'Add New User')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add New User</h3>
            </div>
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.users.store') }}" class="mt-4">
                @csrf
                @include('admin.users.form-inputs')            
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary"> Submit  <i class="fa fa-save"></i> </button>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-default">
                        <i class="fa fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection