
<div >
<style>
        .hidden {
        display: none;
        }
    .gradient-custom {
    /* fallback for old browsers */
    background: #a8729a;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to top left, rgb(252, 252, 252), rgba(246, 243, 255, 1));

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to top left, rgb(241, 84, 18,1), rgb(255, 255, 255));
    

    }
    
</style>
    <main class="main">
        <div class="row">
            <div class="col-12">    
                        <div class="col col-lg-2" style="padding-top:100px">
                            <a href="{{route('user.order')}}" class="btn btn-danger" >Your all Order</a>
                        </div>
                        <div class="col-md-auto">
                            <div class="text-center"> <h1>Your Order </h1> 
                        </div> 
                        <div class="col col-lg-2"></div>
                    <div class="row">
                        <h2></h2>
                        <div class="col-sm"></div>
                        <div class="col-sm">
                            <div id="formContainer" @if($showForm) class="" @else class="hidden" @endif>
                                <textarea name="reason_cancel" placeholder="Write your reason here..." cols="30" rows="10"  wire:model='reason_cancel'></textarea>
                                <div class="text-center"><a href="#" type="button" class="btn btn-danger " id="cancelButton" wire:click.prevent="cancelOrder">Xác nhận Hủy</a> </div>
                                
                                </div>
                        </div>
                        <div class="col-sm"></div>
                    </div>
               
                    @if(Session::has('cancel_message'))
                    <div class="alert alert-success"> 
                        <strong> {{Session::get('cancel_message')}}</strong>
                    </div>
            @endif
            @if(Session::has('review_message'))
            <div class="alert alert-success"> 
                <strong> {{Session::get('review_message')}}</strong>
            </div>
            @endif
           
                <section class="h-100 gradient-custom">
                    <div class="container py-5 h-100">
                      <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-10 col-xl-8">
                          <div class="card" style="border-radius: 10px;">
                            <div class="card-header px-4 py-5">
                              <h5 class="text-muted mb-0">Thanks for your Order, <span style="color: #f15412;">{{Auth::user()->name}}</span>!</h5>
                            </div>
                            <div class="card-body p-4">
                              <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="lead fw-normal mb-0" style="color: #a8729a;">Receipt</p>
                                <p class="small text-muted mb-0">
                                    @if($order->status_delivery != 'canceled' && $order->status_delivery!='delivered')
                                    <a href="#" id="showFormButton"class="btn btn-danger" wire:click.prevent="showForm">Cancel Order</a> 
                                    @endif</p>
                              </div>
                             {{-- --}}
                             @foreach($order->orderDetails as $item)
                             <div class="card shadow-0 border mb-4">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{asset('assets/imgs/products')}}/{{$item->product->image}}" alt="#">
                                    </div>
                                    <div class="col-md-3 text-center d-flex justify-content-center align-items-center">
                                      <p class="text-muted mb-0">{{$item->product->name}}</p>
                                    </div>
                                    <div class="col-md-1 text-center d-flex justify-content-center align-items-center">
                                      @php
                                        $options=json_decode($item->options);
                                       
                                        
                                      @endphp
                                      {{-- <p class="text-muted mb-0 small"> @foreach($options->color as $key => $value) {{$value}} @endforeach  </p>
                                       --}}
                                       <p class="text-muted mb-0 small">
                                       @if(isset($options->color) && is_array($options->color) && count($options->color) > 0)
                                            @foreach($options->color as $key => $value)
                                                {{$value}}
                                            @endforeach
                                        @endif
                                       </p>
                                    </div>
                                    <div class="col-md-1 text-center d-flex justify-content-center align-items-center">
                                      <p class="text-muted mb-0 small">@foreach($options->size as $key => $va) {{$va}} @endforeach</p>
                                    </div>
                                    <div class="col-md-1 text-center d-flex justify-content-center align-items-center">
                                      <p class="text-muted mb-0 small">Qyt:{{$item->quantity}}</p>
                                    </div>
                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                      <p class="text-muted mb-0 small">${{$item->product->regular_price}}</p>
                                    </div>
                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                        @if($order->status_delivery=='delivered'&& $item->rstatus== false)
                                        <p class="text-muted mb-0 small"><a href="{{route('user.review',['order_details_id'=>$item->id])}}"> Write Review</a></p>
                                        @endif
                                    </div>
                                  </div>
                                  <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                                  <div class="row d-flex align-items-center">
                                    <div class="col-md-2">
                                      <p class="text-muted mb-0 small">Track Order</p>
                                    </div>
                                    <div class="col-md-10">
                                      <div class="progress" style="height: 6px; border-radius: 16px;">
                                        <div class="progress-bar" role="progressbar" style="width:{{ $order->status_delivery == 'accept order' ? 30 : ($order->status_delivery == 'delivering' ? 60 : 100) }}%;
                                         border-radius: 16px; background-color: #a8729a;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <div class="d-flex justify-content-around mb-1">
                                        <p class="text-muted mt-1 mb-0 small ms-xl-5">Accept Order</p>
                                        <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivering</p>
                                        <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                                      </div>
                                    </div>
                                    @if($order->status_delivery=='canceled')
                                    <p class="text-muted mt-1 mb-0 small ms-xl-5">Canceled</p>
                                    @endif
                                  </div>
                                </div>
                              </div>
                             @endforeach
                              <div class="d-flex justify-content-between pt-2">
                                <p class="fw-bold mb-0">Order Details</p>
                                <p class="text-muted mb-0"><span class="fw-bold me-4">Sub Total</span> ${{$order->total - round($order->total * (0.1/1.1),1)}}</p>
                              </div>
                  
                              <div class="d-flex justify-content-between pt-2">
                                <p class="text-muted mb-0">Order No : {{$order->id}}</p>
                                <p class="text-muted mb-0"><span class="fw-bold me-4">Discount</span> $0</p>
                              </div>
                  
                              <div class="d-flex justify-content-between">
                                <p class="text-muted mb-0">Invoice Date : {{$order->created_at->format('d.m.Y')}}</p>
                                <p class="text-muted mb-0"><span class="fw-bold me-4">Tax 10%</span> {{round($order->total * (0.1/1.1),1)}}</p>
                              </div>
                  
                              <div class="d-flex justify-content-between mb-5">
                                <p class="text-muted mb-0">Recepits Voucher : None</p>
                                <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p>
                              </div>
                            </div>
                            
                            <div class="card-footer border-0 px-4 py-5"
                              style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                              <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total
                                paid: <span class="h2 mb-0 ms-2">${{$order->total}}</span></h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>

            </div>
        </div>
    </div>
    </main>
</div>


@push('scripts')
<script>

  </script>
@endpush