

<div class="col-sm-6 col-md-4 col-lg-4">
    <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
       <div class="iq-card-body p-0">
          <div class="d-flex align-items-center">
             <div class="col-6 p-0 position-relative image-overlap-shadow">
                <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{$cover_image}}" alt=""></a>
                <div class="view-book">
                   <a href="{{route('shop.books.show',$id)}}" class="btn btn-sm btn-white">View Book</a>
                </div>
             </div>
             <div class="col-6">
                <div class="mb-2">
                   <h6 class="mb-1">{{$title}}</h6>
                   <p class="font-size-13 line-height mb-1">{{$Author}}y</p>
                   <div class="d-block">
                      <span class="font-size-13 text-warning">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                      </span>
                   </div>
                </div>
                <div class="price d-flex align-items-center">
                @if ($on_sale)
                    <span class="pr-1 old-price">{{$price}}LYD.</span>
                    <h6><b>{{$sale_price}}LYD.</b></h6> 
                @else
                    <h6><b>{{$price}}LYD.</b></h6> 
                @endif
                
                   
                </div>
                <div class="iq-product-action">
                   <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                   <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>   