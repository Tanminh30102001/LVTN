<div>
    <style>
           

            .spinner {
      border: 4px solid rgba(0, 0, 0, 0.1);
      border-top: 4px solid #3498db;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      animation: spin 1s linear infinite;
      margin: 20px auto;
    }

            @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
            }
    .hidden{
        display: none;
    }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">{{__('Trang chủ')}}</a>
                    <span></span> {{__('cửa hàng')}}
                    <span></span> {{__('thanh toán')}}
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
              
                @if(!Session::has('coupon'))
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-10 mt-50">
                            <div class="heading_s1 mb-3">
                                <h4>{{__('Nhập mã giảm giá ')}}</h4>
                            </div>
                            <div class="total-amount">
                                <div class="left">
                                    <div class="coupon">
                                        @if(Session::has('cp_mess'))
                                        <div class="alert alert-danger" > {{Session::get('cp_mess')}}</div>
                                        @endif
                                        @if(Session::has('cp_applied'))
                                        <div class="alert alert-success" > {{Session::get('cp_applied')}}</div>
                                        @endif
                                        <form wire:submit.prevent="applyCoupon">
                                            <div class="form-row row justify-content-center">
                                                <div class="form-group col-lg-6">
                                                    <input class="font-medium" name="Coupon" style="width:100%" placeholder="Nhập mã giảm giá của bạn" wire:model="couponcode" >
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <button class="btn btn-sm" type="submit" ><i class="fi-rs-label mr-10"></i>{{__('Nhập')}}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                @endif
                <div class="row">
                    <div class="col-12">
                        <div class="divider mt-50 mb-50"></div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-25">
                            <h4>{{__('Chi tiết đơn hàng')}}</h4>
                        </div>
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert"> {{Session::get('message')}}</div>
                        @endif
                        <?php

                        ?>
                        <form wire:submit.prevent="placeOrder" onsubmit="$('#processing').show();">
                           
                            <div class="form-group">
                                <input type="text" required="" name="email" placeholder="{{ Auth::user()->email }}" wire:model="email" @auth value="{{ Auth::user()->email }}" readonly @endauth />
                                @error('email')
                                 <p class="text-danger">{{$message}} </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" required="" name="name" placeholder="{{ Auth::user()->name }}" wire:model="user_name"  @auth value="{{ Auth::user()->name }}" readonly @endauth/>
                                @error('user_name')
                                     <p class="text-danger">{{$message}} </p>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" required="" name="phone" placeholder="SĐT"wire:model="user_phone"/>
                                @error('user_phone')
                                     <p class="text-danger">{{$message}} </p>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <input type="text"  required="" name="address" placeholder="Địa chỉ"wire:model="user_address"/>
                                @error('user_address')
                                    <p class="text-danger">{{$message}} </p>
                                @enderror
                            </div>
                            
                            <div class="mb-20">
                                <h5>{{__('Thông tin ghi chú thêm')}}</h5>
                            </div>
                            <div class="form-group mb-30">
                                <textarea rows="5" name="address" placeholder="Ghi chú" wire:model="notes"></textarea>
                            </div>
                           
                        
                            </div>
                            <div class="col-md-6">
                             <div class="order_review">
                                <div class="mb-20">
                                <h4>{{__('Đơn hàng của bạn')}}</h4>
                            </div>
                            <div class="table-responsive order_table text-center">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th >{{__('Sản phẩm')}}</th>
                                            <th>{{__('Tên sản phẩm ')}}</th>
                                            <th>{{__('Tổng tiền')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(Cart::instance('cart')->content() as $item)
                                        <tr>
                                            {{-- class="image product-thumbnail" --}}
                                            <td ><img src="{{asset('assets/imgs/products')}}/{{$item->model->image}}" style="height: 150px; width:100px;" alt="#"></td>
                                            <td>
                                                <h5><a href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a></h5> <span class="product-qty">x {{$item->qty}}</span>
                                            </td>
                                            <td>{{$item->subtotal}}</td>
                                        </tr>
                                        
                                        @endforeach
                                        <tr>
                                            <th>{{__('Tạm tính ')}}</th>
                                            <td class="product-subtotal" colspan="2">{{Cart::subtotal()}}</td>
                                        </tr>
                                        @if(Session::has('coupon'))
                                        <tr>
                                            <th>{{__('Giảm giá')}}({{Session::get('coupon')['code']}}) <a href="" wire:click.prevent="removeCoupon"><i class="fi-rs-cross"></i> </a> </th>
                                            <td colspan="2"><em>{{Session::get('coupon')['value']}} </em></td>
                                        </tr>
                                            <tr>
                                                <th>{{__('Tổng tiền sau giảm giá  ')}} </th>
                                                <td colspan="2"><em>{{$subtotalAfterDiscount}}</em></td>

                                            </tr>
                                            <tr>
                                                <th>{{__('Phí vận chuyển ')}}</th>
                                                <td colspan="2"><em>{{config('cart.tax')}}</em></td>
                                                
                                            </tr>
                                            <tr>
                                                <th>{{__('Tổng tiền hóa đơn ')}}</th>
                                                <td colspan="2"><em>{{$totalAfterDiscount}}</em></td>
                                            </tr>
                                        @else
                                            <tr>
                                                <th>{{__('Phí vận chuyển ')}}</th>
                                                <td colspan="2"><em>{{config('cart.tax')}}</em></td>
                                            </tr>
                                            <tr>
                                                <th>{{__('Tổng tiền ')}}</th>
                                                <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">{{Cart::total()}}</span></td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                       
                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                            <div class="payment_method">
                                {{-- <div class="mb-25">
                                    <h5>Payment</h5>
                                </div> --}}
                                {{-- <div class="payment_option">
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3"/>
                                        <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#cashOnDelivery" aria-controls="cashOnDelivery">Cash On Delivery</label>                                        
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios4">
                                        <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#cardPayment" aria-controls="cardPayment">Card Payment</label>                                        
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios5">
                                        <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Paypal</label>                                        
                                    </div>
                                </div> --}}
                            </div>
                           
                            
                            {{-- <div wire:ignore @if($process) class="" @else class="hidden" @endif> 
                                <div class="spinner-border text-primary"  role="status">
                                    <span class="sr-only"></span>
                                  </div>
                            </div> --}}
                            <button type="submit" id="orderButton"class="btn btn-fill-out btn-block mt-30"  >{{__('Đặt hàng ')}}</button>
                            
                         </div>
                        </form>
                        <div>
                            {{-- <form action="{{route('vnpay')}}" method="POST">
                                @csrf 
                                <input type="hidden" name="redirect" id="">
                                
                                <input  name="total" value="{{session()->has('coupon')? $subtotalAfterDiscount: intval(str_replace(',', '', Cart::instance('cart')->total())) }}" placeholder="">
                             <button type="submit"  class="btn btn-fill-out btn-block mt-30" >Order by VNPay</button>
                            </form> --}}
                        </div>
                </div>
            </div>
        </section>
    </main>
</div>

