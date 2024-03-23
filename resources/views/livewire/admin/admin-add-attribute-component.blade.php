<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span>Add new Categories
                  
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">Add new Categories</div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.attribute')}}" class="btn btn-succsess float-end">All categories </a>
                                </div>
                            </div>
                        </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                <div class="alert alert-success" role="alert"> {{Session::get('message')}}</div>
                                @endif
                                <form wire:submit.prevent="storeAttribute()"> 
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label">Attribute Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Attribute Name" wire:model="name" /> 
                                        @error('name')
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
