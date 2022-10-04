@extends('admin.layouts.app', ['page' => 'books'])

@section('title', 'Import Books')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Import Books</h3>
            </div>
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.books.import') }}" class="mt-4">
                @csrf
                <div class="form-group">
                    <label for="file">Upload Excel file</label>
                    <input type="file" name="file"  class="form-control" id="file"  placeholder="Upload File" required/>
                </div>
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