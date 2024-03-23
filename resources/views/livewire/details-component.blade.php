<div>
<style>
    .custom-toast {
    background-color: #ff0000; /* Màu đỏ */
    color: #fff; /* Màu chữ trắng */
}
    .rating {
        display: inline-block;
    }
    .hide{
        display: none;
    }
    .star-container {
        display: inline-block;
        font-size: 15px;
        
    }
    .img-main{
        width: 100%;
        height: 600px;
    }
    .star {
        color: #ccc;
    }
    .img-main-waper{
        height: 600px;
    }
    .star.active {
        color: #ff9800; /* Change color of active stars */
    }
</style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Fashion
                    <span></span> {{$product->name}}
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery" wire:ignore>
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                                <figure class="border-radius-10 img-main-waper">
                                                    <img class="img-main" src="{{asset('assets/imgs/products')}}/{{$product->image}}" alt="product image">
                                                </figure>
                                            @php
                                             $images= explode('-',$product->images) ;  
                                            //  $images=$product->images;
                                            @endphp
                                            @foreach($images as $image)
                                            @if($image)
                                            <figure class="border-radius-10 img-main-waper">
                                              <div><img src="{{asset('assets/imgs/products')}}/{{$image}}"alt="{{$image}}" class="img-main">  </div>
                                            </figure>
                                            @endif
                                            @endforeach
                                        </div>
                                        <br>
                                        <br>
                                        <!-- THUMBNAILS -->
                                         <div class="slider-nav-thumbnails pl-15 pr-15">  
                                            <div> <img  src="{{asset('assets/imgs/products')}}/{{$product->image}}" alt="product image"> </div>    
                                        @foreach($images as $image)
                                            @if($image !='')
                                              <div><img  class="{{$image==''?'hiden':''}}" src="{{asset('assets/imgs/products')}}/{{$image}}" alt="{{$image}}" > </div>  
                                            @endif
                                        @endforeach
                                        
                                        </div> 
                                    </div>
                                    <!-- End Gallery -->
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li><strong class="mr-10">Share this:</strong></li>
                                            <li class="social-facebook"><a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a></li>
                                            <li class="social-twitter"> <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a></li>
                                            <li class="social-instagram"><a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a></li>
                                            <li class="social-linkedin"><a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{$product->name}}</h2>
                                        <div class="product-detail-rating">
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:90%">
                                                        @php
                                                            $avg=0;
                                                        @endphp
                                                        @foreach($product->orderDetails->where('rstatus',1) as $orderItem)
                                                            @php
                                                            $totalRating = $product->orderDetails->where('rstatus',1)->pluck('review.rating')->sum();
                                                            $numberOfRatings = $product->orderDetails->where('rstatus',1)->pluck('review.rating')->count(); 
                                                                // $avg=$avg+$orderItem->review->rating;
                                                                $avg = $numberOfRatings > 0 ? $totalRating / $numberOfRatings : 0;
                                                            @endphp
                                                        @endforeach
                                                            <div class="rating">
                                                                <div class="star-container">
                                                                    @for ($i = 1; $i <= 5; $i++)
                                                                    @if ($i <= $avg )
                                                                    <span class="star active">&#9733;</span>
                                                                    @else
                                                                    <span class="star">&#9733;</span>
                                                                    @endif
                                                                    @endfor
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> ({{$product->orderDetails->where('rstatus',1)->count()}} ) {{__('Đánh giá')}}</span>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand">{{$product->sale_price}}</span></ins>
                                               <ins><span class="old-price font-md ml-15">{{$product->regular_price}}</span></ins>
                                                {{-- <span class="save-price  font-md color3 ml-15">25% Off</span> --}}
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <p>{{$product->short_desc}}</p>
                                        </div>
                                        <div class="attr-detail attr-color mb-15">
                                            @foreach($product->attributeValues->where('product_attribute_id',3)->unique('product_attribute_id') as $av)
                                            <strong class="mr-10">{{$av->productAttribute->name}}</strong>
                                            <ul class="list-filter color-filter">
                                                @foreach($av->productAttribute->attributeValues->where('product_id',$product->id) as $value)
                                                <li class="{{in_array($value->values,$colors)?"active":''}}"><a href="#" data-color="{{$value->values}}" wire:click.prevent="selectColors('{{$value->values}}')" > <span class="product-color-{{$value->values}}"></span></a></li> 
                                              @endforeach
                                            </ul>
                                            @endforeach
                                        </div>
                                        <div class="attr-detail attr-size">
                                            @foreach($product->attributeValues->where('product_attribute_id',2)->unique('product_attribute_id') as $avs)
                                            <strong class="mr-10">{{$avs->productAttribute->name}}</strong>
                                            <ul class="list-filter size-filter font-small">
                                                @foreach($avs->productAttribute->attributeValues->where('product_id',$product->id) as $size)
                                                <li class="{{in_array($size->values,$sizes)?'active':''}}"><a href="#" wire:click.prevent="selectSizes('{{$size->values}}')"> {{$size->values}}</a></li>
                                                @endforeach
                                            </ul>
                                            @endforeach
                                        </div>
                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                        {{-- @if(session('chose_size_color') )
                                                <div class="alert alert-warning" id="Alert-size">
                                                    {{ session('chose_size_color') }}
                                                </div>
                                        @endif --}}
                                        <div class="detail-extralink">   
                                            <div class="product-extra-link2">                                                                                                                                                                                                           
                                                <button type="submit" class="button button-add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}','{{$product->regular_price}}')"  @if(empty($sizes))onclick="showCustomToast()"  @endif >{{__('Thêm vào giỏ hàng')}}</button>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}','{{$product->regular_price}}')"><i class="fi-rs-heart"></i></a>
                                            </div>
                                        </div>
                                        <ul class="product-meta font-xs color-grey mt-50">
                                            <li class="mb-5">SKU: <a href="#">{{$product->SKU}}</a></li>
                                            {{-- <li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">Women</a>, <a href="#" rel="tag">Dress</a> </li> --}}
                                            <li>{{__('Số lượng hiện có')}}:<span class="in-stock text-success ml-5">{{$product->quantity}}</span></li>
                                        </ul>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">{{__('Mô tả')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info">{{__('Thông tin thêm')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">{{__("Đánh giá")}} ({{$product->orderDetails->where('rstatus',1)->count()}})</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Description">
                                        {{$product->desc}}
                                    </div>
                                    <div class="tab-pane fade" id="Additional-info">
                                        <table class="font-md">
                                            <tbody>
                                                <tr class="stand-up">
                                                    <th>Size M</th>
                                                    <td>
                                                        <p>{{__('Chiều cao ')}} 1m6-1m64</p>
                                                    </td>
                                                    <td>
                                                        <p>{{__('Cân nặng')}}55-60kg</p>
                                                    </td>
                                                </tr>
                                                <tr class="folded-wo-wheels">
                                                    <th>Size L</th>
                                                    <td>
                                                        <p>{{__('Chiều cao ')}} 1m64-1m69</p>
                                                    </td>
                                                    <td>
                                                        <p>{{__('Cân nặng')}}61-68kg</p>
                                                    </td>
                                                </tr>
                                                <tr class="folded-w-wheels">
                                                    <th>Size XL</th>
                                                    <td>
                                                        <p>{{__('Chiều cao ')}} 1m7-1m74</p>
                                                    </td>
                                                    <td>
                                                        <p>{{__('Cân nặng')}}69-73kg</p>
                                                    </td>
                                                </tr>
                                                <tr class="folded-w-wheels">
                                                    <th>Size XXL</th>
                                                    <td>
                                                        <p>{{__('Chiều cao ')}} 1m75-1m8</p>
                                                    </td>
                                                    <td>
                                                        <p>{{__('Cân nặng')}}74-80kg</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="Reviews">
                                        <!--Comments-->
                                        <div class="comments-area">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <h4 class="mb-30">{{__('Đánh giá của các khách hàng đã mua')}}</h4>
                                                    <div class="comment-list">
                                                        @foreach($product->orderDetails->where('rstatus',1) as $orderItem)
                                                            @if ($orderItem->review)
                                                                <div class="single-comment justify-content-between d-flex">
                                                                    <div class="user justify-content-between d-flex">
                                                                        <div class="thumb text-center">
                                                                            <img src="{{asset('assets/imgs/user')}}/{{$orderItem->order->user->image}}" alt="">
                                                                            <h6><a href="#">{{$orderItem->order->user->name}}</a></h6>
                                                                        </div>
                                                                        <div class="desc">
                                                                            <div class="product-rate d-inline-block">
                                                                                <div class="product-rating" style="width:90%">
                                                                                    <div class="rating">
                                                                                        <div class="star-container">
                                                                                            @for ($i = 1; $i <= 5; $i++)
                                                                                                @if ($i <= $orderItem->review->rating)
                                                                                                    <span class="star active">&#9733;</span>
                                                                                                @else
                                                                                                    <span class="star">&#9733;</span>
                                                                                                @endif
                                                                                            @endfor
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <p>{{$orderItem->review->comment}}</p>
                                                                            <div class="d-flex justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <p class="font-xs mr-30">{{Carbon\Carbon::parse($orderItem->review->created_at)->format('d F Y g:i A')}} </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!--comment form-->
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-60">
                                <div class="col-12">
                                    <h3 class="section-title style-1 mb-30">{{__('Các sản phẩm liên quan')}}</h3>
                                </div>
                                <div class="col-12">
                                    <div class="row related-products">
                                        @foreach($rproducts as $rproduct)
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap small hover-up">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{route('product.details',['slug'=>$rproduct->slug])}}" tabindex="0">
                                                            <img class="default-img" src="{{asset('assets/imgs/products')}}/{{$rproduct->image}}" alt="{{$rproduct->name}}">
                                                            <img class="hover-img" src="{{asset('assets/imgs/products')}}/{{$rproduct->image}}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                                        <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                                    </div>
                                                    <div class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="hot">Hot</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="{{route('product.details',['slug'=>$rproduct->slug])}}" tabindex="0">{{$rproduct->name}}</a></h2>
                                                    <div class="rating-result" title="90%">
                                                        <span>
                                                        </span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>{{$rproduct->regular_price}} </span>
                                                    </div>
                                                </div>
                                            </div>                        
                                        </div>
                                        @endforeach
                                       
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                   
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">{{__('Danh mục')}}</h5>
                            <ul class="categories">
                                @foreach($categories as $category)
                                <li><a href="{{route('product.category',['slug'=>$category->slug])}}">{{$category->name}}</a></li>
                                @endforeach
                               
                                
                            </ul>
                        </div>
                        <!-- Fillter By Price -->
                        {{-- <div class="sidebar-widget price_range range mb-30">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">Fill by price</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            <div class="price-filter">
                                <div class="price-filter-inner">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group">
                                <div class="list-group-item mb-10 mt-10">
                                    <label class="fw-900">Color</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                        <label class="form-check-label" for="exampleCheckbox1"><span>Red (56)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                                        <label class="form-check-label" for="exampleCheckbox2"><span>Green (78)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                                        <label class="form-check-label" for="exampleCheckbox3"><span>Blue (54)</span></label>
                                    </div>
                                    <label class="fw-900 mt-15">Item Condition</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="">
                                        <label class="form-check-label" for="exampleCheckbox11"><span>New (1506)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox21" value="">
                                        <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished (27)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox31" value="">
                                        <label class="form-check-label" for="exampleCheckbox31"><span>Used (45)</span></label>
                                    </div>
                                </div>
                            </div>
                            <a href="shop.html" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Fillter</a>
                        </div> --}}
                        <!-- Product sidebar Widget -->
                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">{{__("Các sản phẩm mới ")}}</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            @foreach($nproducts as $nproduct)
                            <div class="single-post clearfix">   
                                <div class="image">
                                    <img src="{{asset('assets/imgs/products')}}/{{$nproduct->image}}" alt="#">
                                </div>
                                <div class="content pt-10">
                                    <h5><a href="{{route('product.details',['slug'=>$rproduct->slug])}}">{{$nproduct->name}}</a></h5>
                                    <p class="price mb-0 mt-5">{{$nproduct->regular_price}}</p>
                                    <div class="product-rate">
                                        <div class="product-rating" style="width:90%"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>                        
                    </div>
                </div>
            </div>
        </section>
    </main>
    
</div>

@push('scripts')
 <script>
            $(document).ready(function() {
        $(".star").click(function() {
            var rating = $(this).data("rating");
            $(".star").removeClass("active"); // Xóa lớp active của tất cả các ngôi sao
            $(this).addClass("active"); // Thêm lớp active cho ngôi sao được click và các ngôi sao trước nó
            // Để làm gì đó với rating, ví dụ như gửi đánh giá lên máy chủ
        });
    });

    
        function showCustomToast() {
            Toastify({
                text: 'Bạn chưa chọn size và màu ',
                duration: 2000, // Thời gian hiển thị thông báo (4 giây)
                close: true, // Cho phép người dùng đóng thông báo
                gravity: "bottom", // Vị trí hiển thị (bottom, top, left, right)
                position: "right", // Vị trí cụ thể (left, center, right)
                className: "custom-toast",
                theme: "colored",
            }).showToast();
        }
</script>
@endpush