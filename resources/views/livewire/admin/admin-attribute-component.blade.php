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
                    <span></span> All Attribute
                  
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">All Attribute</div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.add.attribute')}}" class="btn btn-succsess float-end">Add new Attribute </a>
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
                                            <th> Name</th>
                                            <th> Date</th>
                                            <th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach ($pattributes as $item)
                                            <tr>
                                                {{-- <td> {{$item->id}}</td> --}}
                                                <td> {{$item->name}}</td>
                                                <td> {{$item->created_at}}</td>

                                                <td><a href="{{route('admin.edit.attribute',['attribute_id'=>$item->id])}}" class="text-success ">Edit </a>
                                                    <a href="#" wire:click.prevent="deleteAttribute({{$item->id}})"class="text-danger  ">Delete </a>
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
