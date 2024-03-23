<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
        </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> All Coupons
                  
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">All Coupons</div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.add.coupons')}}" class="btn btn-succsess float-end">Add new coupons </a>
                                </div>
                            </div>
                        </div>
                            <div class="card-body">
                                @if(Session::has('message') )
                                <div class="alert alert-success" role="alert"> {{Session::get('message')}}</div>

                                @endif
                                <table class="table table-striped">
                                    <thead> 
                                        <tr>
                                            <th> #</th>
                                            <th> Code</th>
                                            <th> Type</th>
                                            <th>Value</th>
                                            <th>Cart Value</th>
                                            <th>Expiry date</th>
                                            <th> Desc</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i=($coupons->currentPage()-1)*$coupons->perPage();   
                                        @endphp
                                        @foreach ($coupons as $item)
                                            <tr>
                                                {{-- <td> {{$item->id}}</td> --}}
                                                <td>{{++$i}}.</td>
                                                
                                                <td> {{$item->code}}</td>
                                                <td> {{$item->type}}</td>
                                                @if($item->type=='fixed')
                                                <td> {{$item->value}}</td>
                                                @else
                                                <td>%{{$item->value}} </td>
                                                @endif
                                                <td>{{$item->cart_value}} </td>
                                                <td> {{$item->expiry_date}}</td>
                                                <td>{{$item->desc}} </td>
                                                <td><a href="{{route('admin.edit.coupons',['coupon_id'=>$item->id])}}" class="text-success">Edit </a>
                                                    <a href="#" onclick="deleteConfirmation({{$item->id}})"  class="text-danger  ">Delete </a>
                                                </td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$coupons->links()}}
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="row">
                    <div class="col-md-12 text-center" >
                        <h4 class="pb-3">Do you want Delete</h4>
                        <button type="button" class="btn btn-secondary" data-bs-modal="modal" data-bs-modal="#deleteConfirmation">Cancel</button>
                        <button type="button" class="btn btn-danger"onclick="deleteCoupon()" >delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    function deleteConfirmation(id){
        @this.set('coupon_id',id);
        $('#deleteConfirmation').modal('show');
    }
    function deleteCoupon(){
        @this.call('deleteCoupon');
        $('#deleteConfirmation').modal('hide');
    }
    
</script>


@endpush