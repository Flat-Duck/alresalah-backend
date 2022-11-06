@extends('admin.layouts.app', ['page' => 'books'])
@section('title', 'Books')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Books</h3>
                <a class="pull-right btn btn-sm btn-info" href="{{ route('admin.books.importing') }}">
                    Import
                </a>
                <a class="pull-right btn btn-sm btn-primary" href="{{ route('admin.books.create') }}">
                    Add New Book
                </a>
            </div>
            <div class="box-body">
                <div class="searchbar mt-4 mb-5">
                    <div class="row">                                      
                        <div class="col-md-8">
                            <form>
                                <div class="input-group margin col-md-4">
                                    <input id="indexSearch" name="search" placeholder="Searsh" value="{{ $search ?? '' }}" type="text" class="form-control" spellcheck="false" data-ms-editor="true" autocomplete="off">
                                    <span class="input-group-btn">                                    
                                        <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>                                
                            </form>
                        </div>                    
                    </div>
                </div>
            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">Cover</th>
                            <th class="text-left">Title</th>
                            <th class="text-left">Publisher</th>
                            <th class="text-left">ISBN</th>
                            <th class="text-left">Level</th>                            
                            <th class="text-left">Price</th>
                            <th class="text-left">Qty</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($books as $k=> $book)
                        <tr>
                            <td>{{$k+1}}</td>
                            <td>
                                @php $src = $book->cover_image ? \Storage::url($book->cover_image) : '' @endphp
                                @if($src)                                
                                <img src="{{ $book->cover_image ? \Storage::url($book->cover_image) : '' }}" class="border rounded" style="width: 60px; height: 80px; object-fit: cover;">
                                @else <div class="border border-info" style="width: 60px; height: 80px;"></div>
                                @endif
                            </td>
                            <td>{{ $book->title ?? '-' }}</td>
                            <td>{{ optional($book->publisher)->Name ?? '-' }}</td>
                            <td>{{ $book->ISBN ?? '-' }}</td>
                            <td>{{ optional($book->level)->name ?? '-' }}</td>
                            <td>{{ $book->price ?? '-' }}</td>                            
                            <td>{{ $book->quantity ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div role="group" aria-label="Row Actions" class="btn-group">
                                    <a href="{{ route('admin.books.edit', $book) }}"  class="btn btn-info">
                                        <i class="fa fa-edit"></i>                                        
                                    </a>
                                    {{-- <a href="{{ route('admin.books.show', $book) }}" class="btn btn-warning">
                                        <i class="fa fa-eye"></i>                                        
                                    </a> --}}
                                    <form action="{{ route('admin.books.destroy', $book) }}" method="POST" class="inline pointer inline pointer btn btn-danger">
                                        @csrf
                                        @method('DELETE')
                                        <a onclick="if (confirm('Are you sure?')) { this.parentNode.submit() }">
                                            <i class="fa fa-trash-o btn-danger"></i>
                                        </a>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr> <td colspan="9">No records found</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="box-footer clearfix">
                {{ $books->links('vendor.pagination.default') }}
            </div>
        </div>
    </div>
</div>
@endsection