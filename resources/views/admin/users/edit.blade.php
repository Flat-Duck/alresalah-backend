@extends('admin.layouts.app', ['page' => 'users'])

@section('title', 'Edit User')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit User</h3>
            </div>
            <form method="PUT" enctype="multipart/form-data" action="{{ route('admin.users.update', $user) }}">
                @csrf
                @include('admin.users.form-inputs')                                                                                  
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-default">
                        Cancel
                    </a>
                    <a href="{{ route('admin.users.create') }}" class="btn btn-info">
                        Create New
                        <i class="fa fa-edit"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection