@extends('shop.layouts.app')
@section('content')
<div class="col-lg-12">
       <div class="iq-card-transparent mb-0">
          <div class="d-block text-center">
             <h2 class="mb-3">Search</h2>
             <div class="w-100 iq-search-filter">
                <ul class="list-inline p-0 m-0 row justify-content-center search-menu-options">      
                   <li class="search-menu-opt">
                      <div class="iq-search-bar search-book d-flex align-items-center">
                         <form  class="searchbox">
                            
                            <input id="indexSearch" name="search" placeholder="Search title, ISBN, author ... etc" value="{{ $search ?? '' }}" type="text" class="text search-input" spellcheck="false" data-ms-editor="true" autocomplete="off">
                            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                         </form>
                         <button type="submit" class="btn btn-primary search-data ml-2">Search</button>
                      </div>
                   </li>
                </ul>
             </div> 
          </div>
       </div>
       <div class="iq-card">
          <div class="iq-card-body">
             <div class="row">
                @foreach ($books as $book)
                @php $cover_image = $book->cover_image ? \Storage::url($book->cover_image) : ''; @endphp
                @include('shop.partials.book',[
                    'id' => $book->id,
                    'title' => $book->title,
                    'price' => $book->price,
                    'Author' => $book->Author,
                    'on_sale' => $book->on_sale,
                    'featured' => $book->featured,
                    'sale_price' => $book->sale_price,
                    'cover_image' => $cover_image
                ])
                @endforeach                
             </div>
          </div>
          <div class="card-footer flex align-items-center">
            {{ $books->links('vendor.pagination.shop') }}
          </div>
       </div>
    </div>

@endsection
