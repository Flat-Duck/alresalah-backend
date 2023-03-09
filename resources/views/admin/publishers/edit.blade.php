@extends('layouts.app')
{{-- 
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('admin.publishers.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.publishers.edit_title')
            </h4>

            <x-form
                method="PUT"
                action="{{ route('admin.publishers.update', $publisher) }}"
                class="mt-4"
            >
                @include('app.publishers.form-inputs')

                <div class="mt-4">
                    <a
                        href="{{ route('admin.publishers.index') }}"
                        class="btn btn-light"
                    >
                        <i class="icon ion-md-return-left text-primary"></i>
                        @lang('crud.common.back')
                    </a>

                    <a
                        href="{{ route('admin.publishers.create') }}"
                        class="btn btn-light"
                    >
                        <i class="icon ion-md-add text-primary"></i>
                        @lang('crud.common.create')
                    </a>

                    <button type="submit" class="btn btn-primary float-right">
                        <i class="icon ion-md-save"></i>
                        @lang('crud.common.update')
                    </button>
                </div>
            </x-form>
        </div>
    </div>
</div>
@endsection --}}
