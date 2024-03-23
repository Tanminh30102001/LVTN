<div>
    <style>
        .hiden{
            display: none;
        }
        </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span>Edit Categories
                  
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
                                    <a href="{{route('admin.categories')}}" class="btn btn-succsess float-end">All categories </a>
                                </div>
                            </div>
                        </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                <div class="alert alert-success" role="alert"> {{Session::get('message')}}</div>
                                @endif
                                <form wire:submit.prevent="updateCategory()"> 
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label"> Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter category" wire:model="name" wire:keyup="generateSlug"/> 
                                        @error('name')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="slug" class="form-label"> Slug</label>
                                        <input type="text" name="slug" class="form-control" placeholder="Enter category"wire:model="slug"/> 
                                        @error('slug')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="newimage" class="form-label"> Image</label>
                                        <input type="file" name="newimage" class="form-control" wire:model="newimage"/> 
                                        @error('newimage')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                        @if ($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}"width="120"/>
                                        @else
                                        <img src="{{asset('assets/imgs/category/')}}{{$image}}"width="120"/>
                                        @endif
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="is_popular" class="form-label"> Popular</label>
                                        <select class="form-control"name="is_popular"wire:model="is_popular" >
                                                <option value="0">no</option>
                                                <option value="1">yes</option>
                                        </select>
                                        @error('is_popular')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="category_id" class="form-label"> Parent category</label>
                                        <select class="form-control"name="category_id"wire:model="category_id" >
                                                <option value="">None</option>
                                                @foreach ($categories as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-end" > submit</button>
                                </form>
                                 
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>