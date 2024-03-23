
    <div class="contanier">
        <div class="row">
            <div class="col-12">
                <br>
                <br>
                <div><h1>Thông tin chủ đơn hàng:</h1></div>
                <table class="table table-striped">
                    <thead> 
                        <tr>
                           
                            <th>Email</th>
                            <th> User Name</th>
                            <th> User Address</th>
                            <th> User Phone Number</th>
                            <th>User Name</th>
                            <th> Note</th>
                        </tr>
                    </thead>
                    <tbody>
                             <tr>  
                                <td> {{$order->email}}</td>
                                <td> {{$order->user_name}}</td>
                                <td> {{$order->user_address}}</td>
                                <td>{{$order->user_phone}}</td>
                                <td> {{$order->user->name}}</td>
                                <td> {{$order->notes}}</td>  
                            </tr>
                    </tbody>
                </table>
                <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                    <div class="text-center"> <h1>Ordered Items of order :{{$order->id}} </h1> </div>
                    <div class="table-responsive">
                        <table class="table shopping-summery text-center clean">
                            <thead>
                                <tr class="main-heading">
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Subtotal</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @if(Session::has('success_message'))
                                <div class="alert alert-success"> 
                                    <strong> Success |{{Session::get('success_message')}}</strong>
                                </div>
                                @endif
                              
                                @foreach($order->orderDetails as $item)
                                
                                <tr>
                                    <td class="image product-thumbnail"><img src="{{asset('assets/imgs/products')}}/{{$item->product->image}}" alt="#"></td>
                                    <td class="product-des product-name">
                                        <h5 class="product-name"><a href="{{route('product.details',['slug'=>$item->product->slug])}}">{{$item->product->name}}</a></h5>
                                        {{-- <p class="font-xs">Maboriosam in a tonto nesciung eget<br> distingy magndapibus.
                                        </p> --}}
                                    </td>
                                    <td class="price" data-title="Price"><span>{{$item->product->regular_price}} </span></td>
                                    <td class="text-center" data-title="Stock">
                                        <div class="detail-qty border radius  m-auto">
                                            <span class="qty-val">{{$item->quantity}}</span>
                                        </div>
                                    </td>

                                    <td class="text-right" data-title="Cart">
                                        <span>${{$item->quantity * $item->product->regular_price}} </span>
                                    </td>
                                </tr>
                                
                                @endforeach

                            </tbody>
                           
                        </table>
                        <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                        <div class="table-responsive">
                                <table class="table shopping-summery text-center clean">
                                    <tbody>
                                        {{-- @foreach($order->orderDetails as $item) --}}
                                        @php $shipFee=config('cart.tax'); @endphp
                                        <tr>
                                            <td class="cart_total_label" >Sub Total</td>
                                            <td class="cart_total_amount"><span class="font-lg fw-900 text-brand"> {{$order->total -$shipFee }}</span></td>
                                        </tr>
                                        {{-- ${{$order->total - round($order->total * (0.1/1.1),1)}} --}}
                                        {{-- <tr>
                                            <td class="cart_total_label">Tax</td>
                                            <td class="cart_total_amount"><span class="font-lg fw-900 text-brand">${{round($order->total * (0.1/1.1),1)}}</span></td>
                                        </tr> --}}
                                        
                                        <tr>
                                            <td class="cart_total_label">Shipping</td>
                                            <td class="cart_total_amount"> <i class="ti-gift mr-5"></i>  {{$shipFee}}</td>
                                        </tr>
                                        <tr>
                                            <td class="cart_total_label">Total</td>
                                            <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand">${{$order->total}}</span></strong></td>
                                        </tr>
                                    </tbody>
                                </table> 
                            
                            
                        </div>
                       >
                        
                    </div>
            </div>
        </div>
    </div>

