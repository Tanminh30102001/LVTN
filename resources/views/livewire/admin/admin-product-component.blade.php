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
                    <span></span> All Product
                  
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-4">All Product</div>
                                <div class="col-md-4">   <input type="text"  class="form-control" placeholder="Input name,price,quanity to search..."wire:model="searchTerm"/> </div>
                                <div class="col-md-4">
                                    <a href="{{route('admin.product.add')}}" class="btn btn-succsess float-end">Add new Product </a>
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
                                            <th> Image</th>
                                            <th> Name</th>
                                            <th> Stock</th>
                                            <th> Price</th>
                                            <th> Category</th>
                                            <th> Date</th>
                                            <th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i=($products->currentPage()-1)*$products->perPage();   
                                        @endphp
                                        @foreach ($products as $item)
                                            <tr>
                                                {{-- <td> {{$item->id}}</td> --}}
                                                <td>{{++$i}}.</td>
                                                <td><img src="{{asset('assets/imgs/products')}}/{{$item->image}}" alt="{{$item->image}}" width='80px' height='70px'/></td>
                                                <td> {{$item->name}}</td>
                                                <td> {{$item->stock_status}}</td>
                                                <td> {{$item->regular_price}}</td>
                                                <td> {{$item->category->name}}</td>
                                                <td> {{$item->created_at}}</td>
                                                <td><a href="{{route('admin.product.edit',['product_id'=>$item->id])}}" class="text-success ">Edit </a>
                                                    <a href="#" onclick="deleteConfirmation({{$item->id}})"  class="text-danger  ">Delete </a>
                                                </td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$products->links()}}
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