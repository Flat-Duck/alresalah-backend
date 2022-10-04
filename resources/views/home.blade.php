@extends('layouts.shop')
@section('content')
<div class="row">
    <div class="col-lg-12">
       <div class="iq-card-transparent mb-0">
          <div class="d-block text-center">
             <h2 class="mb-3">Search by Book Name</h2>    
             <div class="w-100 iq-search-filter">
                <ul class="list-inline p-0 m-0 row justify-content-center search-menu-options">
                   <li class="search-menu-opt">
                      <div class="iq-dropdown">
                         <div class="form-group mb-0">
                            <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect1">
                               <option selected="">All</option>
                               <option>A Books</option>
                               <option>the Sun</option>
                               <option>Harsh book</option>
                               <option>People book</option>
                               <option>the Fog</option>
                            </select>
                         </div>
                      </div>
                   </li>
                   <li class="search-menu-opt">
                      <div class="iq-dropdown">
                         <div class="form-group mb-0">
                            <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect2">
                               <option selected="">Genres</option>
                               <option>General</option>
                               <option>History</option>
                               <option>Horror</option>
                               <option>Fantasy</option>
                               <option>Literary</option>
                               <option>Manga</option>
                            </select>
                         </div>
                      </div>
                   </li>
                   <li class="search-menu-opt">
                      <div class="iq-dropdown">
                         <div class="form-group mb-0">
                            <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect3">
                               <option selected="">Year</option>
                               <option>2015</option>
                               <option>2016</option>
                               <option>2017</option>
                               <option>2018</option>
                               <option>2019</option>
                               <option>2020</option>
                            </select>
                         </div>
                      </div>
                   </li>
                   <li class="search-menu-opt">
                      <div class="iq-dropdown">
                         <div class="form-group mb-0">
                            <select class="form-control form-search-control bg-white border-0" id="exampleFormControlSelect4">
                               <option selected="">Author</option>
                               <option>Milesiy Yor</option>
                               <option>Ira Membrit</option>
                               <option>Anna Mull</option>
                               <option>John Smith</option>
                               <option>David King</option>
                               <option>Kusti Franti</option>
                            </select>
                         </div>
                      </div>
                   </li>
                   <li class="search-menu-opt">
                      <div class="iq-search-bar search-book d-flex align-items-center">
                         <form action="#" class="searchbox">
                            <input type="text" class="text search-input" placeholder="search here...">
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
                @include('shop.partials.book')
                @include('shop.partials.book')
                @include('shop.partials.book')
                @include('shop.partials.book')
                @include('shop.partials.book')
                @include('shop.partials.book')
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
