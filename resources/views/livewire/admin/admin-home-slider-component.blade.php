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
                    <span></span> All Slider
                  
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">All Slider</div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.home.slider.add')}}" class="btn btn-succsess float-end">Add new slider </a>
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
                                            <th> Top Title</th>
                                            <th>  Title</th>
                                            <th> Sub Title</th>
                                            <th> Offer</th>
                                            <th> Link</th>
                                            <th> Status</th>
                                            <th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i=0;   
                                        @endphp
                                        @foreach ($sliders as $item)
                                            <tr>
                                                <td>{{++$i}}.</td>
                                                <td> <img src="{{asset('assets/imgs/slider')}}/{{$item->image}}" width="80"/> </td>
                                                <td> {{$item->top_title}}</td>
                                                <td> {{$item->title}}</td>
                                                <td> {{$item->sub_title}}</td>
                                                <td> {{$item->offer}}</td>
                                                <td>{{$item->link}}</td>
                                                <td> {{$item->status== 1 ?'Active':'InActive'}}</td>
                                                <td>
                                                    <a href="{{route('admin.home.slider.edit',['slide_id'=>$item->id])}}" class="text-success ">Edit </a>
                                                    <a href="#" onclick="deleteConfirmation({{$item->id}})"class="text-danger">Delete </a>
                                                </td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
                        <button type="button" class="btn btn-danger"onclick="deleteSlide()" >delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function deleteConfirmation(id){
        @this.set('slide_id',id);
        $('#deleteConfirmation').modal('show');

    }
    function deleteSlide(){
        @this.call('deleteSlide');
        $('#deleteConfirmation').modal('hide');
    }
</script>


@endpush