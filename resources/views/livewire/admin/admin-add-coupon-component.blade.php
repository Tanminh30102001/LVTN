<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span>Add new Coupon
                  
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">Add new Coupon</div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.coupons')}}" class="btn btn-succsess float-end">All Coupons </a>
                                </div>
                            </div>
                        </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                <div class="alert alert-success" role="alert"> {{Session::get('message')}}</div>
                                @endif
                                <form wire:submit.prevent="storeCoupon()"> 
                                    <div class="mb-3 mt-3">
                                        <label for="code" class="form-label">Coupon Code</label>
                                        <input type="text" name="code" class="form-control" placeholder="Enter Coupon Code" wire:model="code" /> 
                                        @error('code')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="type" class="form-label"> Coupon Type</label>
                                        <select class="form-control"name="type"wire:model="type">select type
                                            <option >Select coupon type </option>
                                            <option value="fixed">Fixed</option> 
                                            <option value="percent">Percent</option>    
                                        </select> 
                                        @error('type')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="value" class="form-label">Coupon Value</label>
                                        <input type="text" name="value" class="form-control" placeholder="Enter coupon value" wire:model="value"  >
                                        @error('value')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="cart_value" class="form-label">Cart Value</label>
                                        <input type="text" name="cart_value" class="form-control" placeholder="Enter cart value" wire:model="cart_value" /> 
                                        @error('cart_value')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="expiry_date" class="form-label" wire:ignore> Expiry Date </label>
                                        <input type="date" name="expiry_date" id="expiry_date" class="form-control"wire:model="expiry_date" /> 
                                        @error('expiry_date')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="desc" class="form-label">Coupon Desc</label>
                                        <textarea name="desc"  placeholder="Enter Coupon Desc" class="form-control" wire:model="desc" ></textarea>
                                        @error('desc')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                 
                                    <button type="submit" class="btn btn-primary float-end"> submit</button>
                                </form>
                                 
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

@push('scripts')
<script>

    $(function(){
        $('#expiry_date').datetimepicker({
            format:'Y-MM-DD'
        }).on('dp.change',function(ev){
            var data=$('#expiry_date').val();
            @this.set('expiry_date',data);
        })
    })
</script>

@endpush