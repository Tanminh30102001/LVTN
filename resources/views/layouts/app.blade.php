    <!DOCTYPE html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
    <title>TM Fashion Store</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"  rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/logo/logoTM.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    @livewireStyles
    </head>

    <body>
        <header class="header-area header-style-1 header-height-2">
            <div class="header-top header-top-ptb-1 d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-4">
                            <div class="header-info">
                                
                            {{-- <ul>
                                    <li>
                                        <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> {{__('Select Language')}} <i class="fi-rs-angle-small-down"></i></a>
                                        <ul class="language-dropdown">
                                            <li><a href="{{route('languages',['locale' => 'vi'])}}"><img src="{{asset('assets/imgs/theme/flag-fr.png')}}" alt="">Vietnam</a></li>
                                            <li> <a href="{{route('languages',['locale' => 'en'])}}"><img src="{{asset('assets/imgs/theme/flag-ru.png')}}" alt="">English</a></li>
                                        </ul>
                                    </li>                                
                                    <a href="{{route('languages',['locale' => 'vi'])}}">
                                        <a href="{{route('languages',['locale' => 'en'])}}"> 
                                </ul> --}}
                                
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4">
                            <div class="text-center">
                                <div id="news-flash" class="d-inline-block">
                                    <ul>
                                        <li>{{__('Giảm giá đến 50%')}} <a href="shop.html">{{__('Xem chi tiết')}}</a></li>
                                        <li>{{__('Siêu Ưu Đãi - Siêu tiết kiệm ')}}</li>
                                        <li> {{__('Mã giảm giá lên đến 50% cho người m')}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <div class="header-info header-info-right">
                                @auth
                                <ul>                                
                                    <li><i class="fi-rs-user"></i>{{Auth::user()->name}}  /
                                        <form method="POST" action="{{route('logout')}}">
                                        @csrf 
                                        <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">{{__('Đăng xuất ')}}</a> 
                                        </form>
                                    </li>
                                </ul>
                                @else
                                <ul>                                
                                    <li><i class="fi-rs-key"></i><a href="{{route('login')}}">{{__('Đăng nhập')}} </a>  / <a href="{{route('register')}}">{{__('Đăng kí')}}</a></li>
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
                <div class="container">
                    <div class="header-wrap">
                        <div class="logo logo-width-1">
                            <a href="/"><img src="{{asset('assets/imgs/logo/logoce.png')}}" alt="logo"></a>
                        </div>
                        <div class="header-right">
                            @livewire('header-search-component')
                            <div class="header-action-right">
                                <div class="header-action-2">
                                    @livewire('wishlist-icon-component')
                                    @livewire('cart-icon-component')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-bottom-bg-color sticky-bar">
                <div class="container">
                    <div class="header-wrap header-space-between position-relative">
                        <div class="logo logo-width-1 d-block d-lg-none">
                            <a href="/"><img src="{{asset('assets/imgs/logo/logotmm.png')}}" style="width: 53px;height: 87px;" alt="logo"></a>
                        </div>
                        <div class="header-nav d-none d-lg-flex">
                            <div class="main-categori-wrap d-none d-lg-block">
                                <a class="categori-button-active" href="#">
                                    <span class="fi-rs-apps"></span> {{__('Tất cả danh mục')}}
                                </a>
                                
                                <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                    <ul>
                                        @foreach($categories as $category) 
                                        @if(count($category->subCategories)>0)
                                        <li class="has-children">
                                            <a href="{{route('product.category',['slug'=>$category->slug])}}"><i class="surfsidemedia-font-dress"></i>{{$category->name}}</a>
                                            <div class="dropdown-menu">
                                                <ul class="mega-menu d-lg-flex">
                                                    <li class="mega-menu-col col-lg-4">
                                                        <ul class="d-lg-flex">
                                                            <li class="mega-menu-col col-lg-6">
                                                                <ul>
                                                                    @foreach($category->subCategories as $scategory)
                                                                    <li><a class="dropdown-item nav-link nav_item" href="{{route('product.category',['slug'=>$category->slug,'scategory_slug'=>$scategory->slug])}}">{{$scategory->name}}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </li>
                                                            
                                                        </ul>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </li>
                                        @else
                                        <li><a href="{{route('product.category',['slug'=>$category->slug])}}"><i class="surfsidemedia-font-desktop"></i>{{$category->name}}</a></li>
                                        @endif
                                        
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                                <nav>
                                    <ul>
                                        <li><a class="active" href="/">{{__('Trang chủ')}} </a></li>
                                        {{-- <li><a href="about.html">{{__('Trang chủ')}} </a></li> --}}
                                        <li><a href="{{route('shop')}}">{{__('Cửa hàng')}} </a></li>
                                       
                                                                          
                                        <li><a href="{{route('contact-us')}}">{{__('Liên hệ')}} </a></li>
                                        @auth
                                        <li><a href="#">My Account<i class="fi-rs-angle-down"></i></a>
                                            @if(Auth::user()->utype=='ADM')
                                                <ul class="sub-menu">
                                                    <li><a href="{{route('admin.dashboard')}}">{{__('Trang chủ ADmin')}} </a></li>
                                                    <li><a href="{{route('admin.product')}}">{{__('Quản lý sản phẩm ')}} </a></li>
                                                    <li><a href="{{route('admin.categories')}}"> {{__('Quản lý Danh mục ')}} </a></li>
                                                    <li><a href="{{route('admin.home.slider')}}">{{__('Quản lý banner')}} </a> </li>
                                                    <li><a href="{{route('admin.order')}}">{{__('Quản lý Đơn hàng ')}} </a></li>
                                                    <li><a href="{{route('admin.contact')}}">{{__('Quản lý Liên hệ ')}} </a></li>
                                                    <li><a href="{{route('admin.user')}}" >{{__('Quản lý khách hàng')}} </a></li>   
                                                    <li><a href="{{route('admin.attribute')}}" >{{__('Quản lý các thuộc tính  sản phẩm ')}} </a></li>   
                                                    <li><a href="{{route('admin.coupons')}}" >{{__('Quản lý mã giảm giá  ')}} </a></li>                              
                                                </ul>
                                            @else
                                            <ul class="sub-menu">
                                                
                                                <li><a href="{{route('user.dashboard.edit',['user_id'=>Auth::user()->id])}}">{{__('Quản lý hồ sơ ')}} </a></li>   
                                                <li><a href="{{route('user.order')}}">{{__('Quản lý đơn hàng của bạn ')}} </a></li>   
                                                </ul>
                                            @endif
                                            
                                        </li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="hotline d-none d-lg-block">
                            <p><i class="fi-rs-smartphone"></i><span>{{__('Hổ trợ 24/7 ')}} </span>0338386701</p>
                        </div>
                        <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                        <div class="header-action-right d-block d-lg-none">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    @livewire('wishlist-icon-component')
                                </div>
                                <div class="header-action-icon-2">
                                    @livewire('cart-icon-component')
                                    {{-- <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="product-details.html"><img alt="Surfside Media" src="assets/imgs/shop/thumbnail-3.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="product-details.html">Plain Striola Shirts</a></h4>
                                                    <h3><span>1 × </span>$800.00</h3>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="product-details.html"><img alt="Surfside Media" src="assets/imgs/shop/thumbnail-4.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="product-details.html">Macbook Pro 2022</a></h4>
                                                    <h3><span>1 × </span>$3500.00</h3>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$383.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="cart.html">View cart</a>
                                                <a href="shop-checkout.php">Checkout</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="header-action-icon-2 d-block d-lg-none">
                                    <div class="burger-icon burger-icon-white">
                                        <span class="burger-icon-top"></span>
                                        <span class="burger-icon-mid"></span>
                                        <span class="burger-icon-bottom"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="mobile-header-wrapper-inner">
                <div class="mobile-header-top">
                    <div class="mobile-header-logo">
                        <a href="/"><img src="assets/imgs/logo/logo.png" alt="logo"></a>
                    </div>
                    <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                        <button class="close-style search-close">
                            <i class="icon-top"></i>
                            <i class="icon-bottom"></i>
                        </button>
                    </div>
                </div>
                <div class="mobile-header-content-area">
                    <div class="mobile-search search-style-3 mobile-header-border">
                        <form action="{{route('product.search')}}">
                            <input type="text" name="q" placeholder="Search for items..." >
                            <button type="submit"><i class="fi-rs-search"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-border">
                        <div class="main-categori-wrap mobile-header-border">
                            <a class="categori-button-active-2" href="#">
                                <span class="fi-rs-apps"></span> {{__('Tất cả danh mục')}}
                            </a>
                            <div class="categori-dropdown-wrap categori-dropdown-active-small">
                                <ul class="dropdown">
                                    @foreach($categories as $category)
                                    @if(count($category->subCategories)>0)
                                    <ul class="mobile-menu">
                                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="{{route('product.category',['slug'=>$category->slug])}}">{{$category->name}}</a>
                                            <ul class="dropdown">
                                                @foreach($category->subCategories as $scategory)
                                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="{{route('product.category',['slug'=>$category->slug,'scategory_slug'=>$scategory->slug])}}">{{$scategory->name}}</a> </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                    @else
                                    <li><a href="{{route('product.category',['slug'=>$category->slug])}}">{{$category->name}}</a></li>
                                    @endif
                                    @endforeach
                                  
                                </ul>
                            </div>
                        </div>
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="{{route('home.index')}}">{{__('Trang chủ')}}</a></li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="{{route('shop')}}">{{__('Cửa hàng')}}</a></li>
                                <li><a href="{{route('contact-us')}}">{{__('Liên hệ')}}</a></li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">{{__('Tài khoản của tôi')}}</a>
                                    @if(Auth::user()?->utype=='ADM')
                                         <ul class="dropdown">
                                            <li><a href="{{route('admin.dashboard')}}">{{__('Trang chủ ADmin')}} </a></li>
                                                    <li><a href="{{route('admin.product')}}">{{__('Quản lý sản phẩm ')}} </a></li>
                                                    <li><a href="{{route('admin.categories')}}"> {{__('Quản lý Danh mục ')}} </a></li>
                                                    <li><a href="{{route('admin.home.slider')}}">{{__('Quản lý banner')}} </a> </li>
                                                    <li><a href="{{route('admin.order')}}">{{__('Quản lý Đơn hàng ')}} </a></li>
                                                    <li><a href="{{route('admin.contact')}}">{{__('Quản lý Liên hệ ')}} </a></li>
                                                    <li><a href="{{route('admin.user')}}" >{{__('Quản lý khách hàng')}} </a></li>   
                                                    <li><a href="{{route('admin.attribute')}}" >{{__('Quản lý các thuộc tính  sản phẩm ')}} </a></li>   
                                                    <li><a href="{{route('admin.coupons')}}" >{{__('Quản lý mã giảm giá  ')}} </a></li>                                
                                         </ul>
                                     @else
                                     <ul class="dropdown">
                                        @if(Auth::check())
                                         <li><a href="{{route('user.dashboard.edit',['user_id'=>Auth::user()->id])}}">{{__('Quản lý hồ sơ')}}</a></li>   
                                        @endif
                                         <li><a href="{{route('user.order')}}">{{__('Quản lý đơn hàng của bạn')}}</a></li>   
                                         </ul>
                                     @endif
                                </li>
                               
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
                    <div class="mobile-header-info-wrap mobile-header-border">
                        
                        <div class="single-mobile-header-info">
                            <a href="{{route('login')}}">{{__('Đăng nhập')}} </a>                        
                        </div>
                        <div class="single-mobile-header-info">                        
                            <a href="{{route('register')}}">{{__('Đăng ký')}}</a>
                        </div>
                        {{-- <div class="single-mobile-header-info">
                            <a href="#">(+1) 0000-000-000 </a>
                        </div> --}}
                    </div>
                    <div class="mobile-social-icon">
                        <h5 class="mb-15 text-grey-4">Follow Us</h5>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>        
        {{$slot}}

        <footer class="main">
            <section class="newsletter p-30 text-white wow fadeIn animated">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 mb-md-3 mb-lg-0">
                            <div class="row align-items-center">
                                <div class="col flex-horizontal-center">
                                    <img class="icon-email" src="assets/imgs/theme/icons/icon-email.svg" alt="">
                                    <h4 class="font-size-20 mb-0 ml-3">{{__('Đăng ký để nhận được thông tin mới ')}}</h4>
                                </div>
                                <div class="col my-4 my-md-0 des">
                                    <h5 class="font-size-15 ml-4 mb-0">...{{__('và nhận được ')}} <strong>{{__('Mã giảm giá lên đến 50%')}}</strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <!-- Subscribe Form -->
                            <form class="form-subcriber d-flex wow fadeIn animated">
                                <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                                <button class="btn bg-dark text-white" type="submit">{{__('Đăng kí')}}</button>
                            </form>
                            <!-- End Subscribe Form -->
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-padding footer-mid">
                <div class="container pt-15 pb-20">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="widget-about font-md mb-md-5 mb-lg-0">
                                <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">{{__('Liên hệ')}}</h5>
                                <p class="wow fadeIn animated">
                                    <strong>{{__('Đia chỉ')}}: </strong>180 Cao Lo, Ward4, District 8, HoChiMinh City
                                </p>
                                <p class="wow fadeIn animated">
                                    <strong>{{__('SĐT')}}: </strong>+84 338386701
                                </p>
                                <p class="wow fadeIn animated">
                                    <strong>Email: </strong>tanminh.tn30102001@gmail.com
                                </p>
                                <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">{{__('Theo dõi chúng tôi')}}</h5>
                                <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                                    <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-youtube.svg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <h5 class="widget-title wow fadeIn animated">{{__('Về chúng tôi')}}</h5>
                            <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                                {{-- <li><a href="#">About Us</a></li> --}}
                                {{-- <li><a href="#">Delivery Information</a></li> --}}
                                <li><a href="#">{{__('Chính sách bảo mật')}}</a></li>
                                <li><a href="#">{{__('Các điểu khoản')}} &amp; {{__('Các điều kiện')}} </a></li>
                                <li><a href="{{route('contact-us')}}">{{__('Liên hệ với chúng tôi')}} </a></li>                            
                            </ul>
                        </div>
                        <div class="col-lg-2  col-md-3">
                            <h5 class="widget-title wow fadeIn animated">{{__('Tài khoản của tôi')}} </h5>
                            <ul class="footer-list wow fadeIn animated">
                                    @if(Auth::check())
                                         <li><a href="{{route('user.dashboard.edit',['user_id'=>Auth::user()->id])}}">My Account</a></li>   
                                    @endif
                                <li><a href="{{route('shop.cart')}}">{{__('Xem giỏ hàng ')}} </a></li>
                                <li><a href="{{route('shop.wishlist')}}">{{__('Xem danh sách yêu thích')}} </a></li>
                                <li><a href="{{route('user.order')}}">{{__('Theo dõi đơn hàng của tôi')}}  </a></li>                            
                                <li><a href="{{route('user.order')}}">{{__('Quản lý các đơn hàng')}} </a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 mob-center">
                            {{-- <h5 class="widget-title wow fadeIn animated">Install App</h5> --}}
                            <div class="row">
                                <div class="col-md-8 col-lg-12">
                                    {{-- <p class="wow fadeIn animated">From App Store or Google Play</p> --}}
                                    <div class="download-app wow fadeIn animated mob-app">
                                        <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active" src="{{asset('assets/imgs/logo/logosss.png')}}" alt=""></a>
                                        {{-- <a href="#" class="hover-up"><img src="{{asset('assets/imgs/theme/google-play.jpg')}}" alt=""></a> --}}
                                    </div>
                                </div>
                                {{-- <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                                    <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                                    <img class="wow fadeIn animated" src="{{asset('assets/imgs/theme/payment-method.png')}}" alt="">
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container pb-20 wow fadeIn animated mob-center">
                <div class="row">
                    <div class="col-12 mb-20">
                        <div class="footer-bottom"></div>
                    </div>
                    <div class="col-lg-6">
                        <p class="float-md-left font-sm text-muted mb-0">
                            <a href="privacy-policy.html">{{__('Chính sách bảo mật')}}</a> | <a href="terms-conditions.html">{{__('Các điểu khoản')}} &amp; {{__('Các điều kiện')}}</a>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p class="text-lg-end text-start font-sm text-muted mb-0">
                            &copy; <strong class="text-brand">TM Fashion Store</strong> All rights reserved
                        </p>
                    </div>
                </div>
            </div>
        </footer>    
        <!-- Vendor JS-->
        <!-- MDB -->
    <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/slick.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.syotimer.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/wow.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/js/plugins/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/js/plugins/magnific-popup.js')}}"></script>
    <script src="{{asset('assets/js/plugins/select2.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/waypoints.js')}}"></script>
    <script src="{{asset('assets/js/plugins/counterup.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/images-loaded.js')}}"></script>
    <script src="{{asset('assets/js/plugins/isotope.js')}}"></script>
    <script src="{{asset('assets/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.vticker-min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.theia.sticky.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.elevatezoom.js')}}"></script>
    <!-- Template  JS -->
    <script src="{{asset('assets/js/main.js?v=3.3')}}"></script>
    <script src="{{asset('assets/js/shop.js?v=3.3')}}"></script>

    @livewireScripts
    @stack('scripts')
    </body>

    </html>