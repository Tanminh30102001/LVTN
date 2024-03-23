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
                    <span></span> All Order
                  
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">All Order</div>
                                <div class="col-md-6">                      
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
                                            <th> Order ID</th>
                                            <th> Status</th>
                                            <th>Status of Delivery</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                            <th>Update Status</th>
                                            <th>Update Delivery</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i=($orders->currentPage()-1)*$orders->perPage();   
                                        @endphp
                                        @foreach ($orders as $item)
                                            <tr>
                                                {{-- <td> {{$item->id}}</td> --}}
                                                <td>{{++$i}}.</td>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->status== 1?'Payed':'Not Pay'}}</td>
                                                <td>{{$item->status_delivery}}</td>
                                                <td> ${{$item->total}}</td>
                                                {{-- <td> {{$item->discount}}</td> --}}
                                                <td><a href="{{route('admin.orderdetails',['order_id'=>$item->id])}}"> details</a></td>
                                                <td><div class="dropdown">
                                                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                      Status
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                      <li><a class="dropdown-item" href="#" wire:click.prevent="updateStatus({{$item->id}},1)" >Payed</a></li>
                                                      <li><a class="dropdown-item" href="#"wire:click.prevent="updateStatus({{$item->id}},0)">Not Pay</a></li>
                                                    </ul>
                                                  </div>
                                                  
                                                </td>
                                                <td><div class="dropdown">
                                                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                       Delivery
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                      <li><a class="dropdown-item" href="#" wire:click.prevent="updateStatusDelivery({{$item->id}},'Delivering')" >Delivering</a></li>
                                                      <li><a class="dropdown-item" href="#"wire:click.prevent="updateStatusDelivery({{$item->id}},'Delivered')">Delivered</a></li>
                                                      <li><a class="dropdown-item" href="#"wire:click.prevent="updateStatusDelivery({{$item->id}},'Cancel')">Cancel</a></li>
                                                    </ul>
                                                  </div></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$orders->links()}}
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
                        <button type="button" class="btn btn-danger"onclick="deleteProduct()" >delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function deleteConfirmation(id){
        @this.set('product_id',id);
        $('#deleteConfirmation').modal('show');

    }
    function deleteProduct(){
        @this.call('deleteProduct');
        $('#deleteConfirmation').modal('hide');
    }
</script>


@endpush