@extends('admin.layouts.app', ['page' => 'users'])

@section('title', 'Edit User')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <a href="{{ route('admin.users.index') }}" class="btn btn-default pull-right">
                    Go To List
                </a>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <span id="name" class="form-control">{{ $user->name ?? '-' }}</span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <span id="email" class="form-control">{{ $user->email ?? '-' }}</span>
                </div>
                                                        
            

            {{-- <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.roles.name')</h5>
                    <div>
                        @forelse ($user->roles as $role)
                        <div class="badge badge-primary">{{ $role->name }}</div>
                        <br />
                        @empty - @endforelse
                    </div>
                </div>
            </div> --}}

            <div class="form-group">
                <a href="{{ route('admin.users.index') }}" class="btn btn-default">
                    <i class="fa fa-arrow"></i>
                    Back
                </a>
            </div>
                {{-- @can('create', App\Models\User::class)@endcan --}}
                <a href="{{ route('admin.users.create') }}" class="btn btn-success">
                    Create New
                    <i class="fa fa-edit"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
