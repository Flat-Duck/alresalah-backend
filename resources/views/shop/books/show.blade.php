@extends('shop.layouts.app')
@section('content')
<div class="col-sm-12">
    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
       <div class="iq-card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title mb-0">Books Details</h4>
       </div>
       <div class="iq-card-body pb-0">
          <div class="description-contens align-items-top row">
             <div class="col-md-6">
                <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                   <div class="iq-card-body p-0">
                      <div class="row align-items-center">
                         <div class="col-3">
                            <ul id="description-slider-nav" class="list-inline p-0 m-0  d-flex align-items-center">
                               <li>
                                  <a href="javascript:void(0);">
                                  <img src="{{\Storage::url($book->cover_image)}}" class="img-fluid rounded w-100" alt="">
                                  </a>
                               </li>                             
                            </ul>
                         </div>
                         <div class="col-9">
                            <ul id="description-slider" class="list-inline p-0 m-0  d-flex align-items-center">
                               <li>
                                  <a href="javascript:void(0);">
                                  <img src="{{\Storage::url($book->cover_image)}}" class="img-fluid w-100 rounded" alt="">
                                  </a>
                               </li>                               
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-md-6">
                <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                   <div class="iq-card-body p-0">
                      <h3 class="mb-3">{{$book->title}}</h3>
                      <div class="price d-flex align-items-center font-weight-500 mb-2">
                         <span class="font-size-20 pr-2 old-price">${{$book->price}}</span>
                         <span class="font-size-24 text-dark">{{$book->sale_price}}</span>
                      </div>
                      <div class="mb-3 d-block">
                         <span class="font-size-20 text-warning">
                         <i class="fa fa-star mr-1"></i>
                         <i class="fa fa-star mr-1"></i>
                         <i class="fa fa-star mr-1"></i>
                         <i class="fa fa-star mr-1"></i>
                         <i class="fa fa-star"></i>
                         </span>
                      </div>
                      <span class="text-dark mb-4 pb-4 iq-border-bottom d-block">{{$book->description}}</span>
                      <div class="text-primary mb-4">Author: <span class="text-body">{{$book->Author}}</span></div>
                      <div class="mb-4 d-flex align-items-center">                                       
                         <a href="#" class="btn btn-primary view-more mr-2">Add To Cart</a>
                         <a href="book-pdf.html" class="btn btn-primary view-more mr-2">Read Sample</a>
                      </div>
                      <div class="mb-3">
                         <a href="#" class="text-body text-center"><span class="avatar-30 rounded-circle bg-primary d-inline-block mr-2"><i class="ri-heart-fill"></i></span><span>Add to Wishlist</span></a>
                      </div>
                      <div class="iq-social d-flex align-items-center">
                         <h5 class="mr-2">Share:</h5>
                         <ul class="list-inline d-flex p-0 mb-0 align-items-center">
                            <li>
                               <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                               <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                               <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            </li>
                            <li >
                               <a href="#" class="avatar-40 rounded-circle bg-primary pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 @endsection
