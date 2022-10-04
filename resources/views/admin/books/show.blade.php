@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('admin.books.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.books.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.books.inputs.title')</h5>
                    <span>{{ $book->title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.books.inputs.ISBN')</h5>
                    <span>{{ $book->ISBN ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.books.inputs.edition')</h5>
                    <span>{{ $book->edition ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.books.inputs.format')</h5>
                    <span>{{ $book->format ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.books.inputs.level_id')</h5>
                    <span>{{ optional($book->level)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.books.inputs.Author')</h5>
                    <span>{{ $book->Author ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.books.inputs.quantity')</h5>
                    <span>{{ $book->quantity ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.books.inputs.price')</h5>
                    <span>{{ $book->price ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.books.inputs.sale_price')</h5>
                    <span>{{ $book->sale_price ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.books.inputs.description')</h5>
                    <span>{{ $book->description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.books.inputs.featured')</h5>
                    <span>{{ $book->featured ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.books.inputs.on_sale')</h5>
                    <span>{{ $book->on_sale ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.books.inputs.publisher_id')</h5>
                    <span>{{ optional($book->publisher)->Name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.books.inputs.cover_image')</h5>
                    {{-- <x-partials.thumbnail
                        src="{{ $book->cover_image ? \Storage::url($book->cover_image) : '' }}"
                        size="150"
                    /> --}}
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('admin.books.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Book::class)
                <a href="{{ route('admin.books.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
