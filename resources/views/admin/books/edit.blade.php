@extends('admin.layouts.app', ['page' => 'books'])

@section('title', 'Update Book')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Update Book</h3>
            </div>
            <form method="PUT" enctype="multipart/form-data" action="{{ route('admin.books.update', $book) }}" class="mt-4">
                @csrf
                @include('admin.books.form-inputs')
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary"> Submit  <i class="fa fa-save"></i> </button>
                    <a href="{{ route('admin.books.index') }}" class="btn btn-default">
                        <i class="fa fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection