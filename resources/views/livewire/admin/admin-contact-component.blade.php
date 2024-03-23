<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> All Categories
                  
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">All Message from user</div>
                                <div class="col-md-6">
                                    {{-- <a href="{{route('admin.add.categories')}}" class="btn btn-succsess float-end">Add new categories </a> --}}
                                </div>
                            </div>
                        </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead> 
                                        <tr>
                                            <th> #</th>
                                            <th> Name</th>
                                            <th> email</th>
                                            <th>phone</th>
                                            <th>Subject</th>
                                            <th>Content</th>
                                            <th> created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i=($contacts->currentPage()-1)*$contacts->perPage();   
                                        @endphp
                                        @foreach ($contacts as $item)
                                            <tr>
                                                {{-- <td> {{$item->id}}</td> --}}
                                                <td>{{++$i}}.</td>
                                                <td>{{$item->name}}</td>
                                                <td> {{$item->email}}</td>
                                                <td> {{$item->phone}}</td>
                                                <td>{{$item->subject}}</td>
                                                <td>{{$item->content}}</td>
                                                <td>{{$item->created_at}}</td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$contacts->links()}}
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
</div>
