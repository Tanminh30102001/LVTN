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
                    <span></span>Add new product
                  
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">Add new product</div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.product')}}" class="btn btn-succsess float-end">All Product </a>
                                </div>
                            </div>
                        </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                <div class="alert alert-success" role="alert"> {{Session::get('message')}}</div>
                                @endif
                                <form wire:submit.prevent="addProduct()"> 
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label"> Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Product Name" wire:model="name" wire:keyup="generateSlug"/> 
                                        @error('name')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="slug" class="form-label"> Slug</label>
                                        <input type="text" name="slug" class="form-control" placeholder="Enter Product Slug"wire:model="slug"/> 
                                        @error('slug')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="short_desc" class="form-label"> Short Description</label>
                                        <textarea name="short_desc" placeholder="Enter Short Description" class="form-control"wire:model="short_desc"></textarea>
                                        @error('short_desc')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="desc" class="form-label">  Description</label>
                                        <textarea name="desc" placeholder="Enter  Description" class="form-control" wire:model="desc"></textarea>
                                        @error('desc')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="regular_price" class="form-label"> Regular Price</label>
                                        <input type="text" name="regular_price" class="form-control" placeholder="Enter Regular Price"wire:model="regular_price"/> 
                                        @error('regular_price')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="sale_price" class="form-label"> Sale Price</label>
                                        <input type="text" name="sale_price" class="form-control" placeholder="Enter Sale Price"wire:model="sale_price"/> 
                                        @error('sale_price')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="sku" class="form-label"> sku</label>
                                        <input type="text" name="sku" class="form-control" placeholder="Enter sku" wire:model="sku"/> 
                                        @error('sku')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="stock_stauts" class="form-label" > Stock status</label>
                                        <select class="form-control" name="stock_status"wire:model="stock_status" >
                                            <option value="instock">InStock</option>  
                                            <option value="outofstock">Out of Stock</option>  
                                        </select>
                                        @error('stock_status')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="featured" class="form-label" > Featured</label>
                                        <select class="form-control" name="featured" wire:model="featured">
                                            <option value="0">No</option>  
                                            <option value="1">Yes</option>  
                                        </select>
                                        @error('featured')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="quanity" class="form-label"> Quanity</label>
                                        <input type="text" name="quanity" class="form-control" placeholder="Enter quanity"wire:model="quanity"/> 
                                        @error('quanity')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="image" class="form-label"> Image</label>
                                        <input type="file" name="image" class="form-control" wire:model="image"/>
                                        @if ($image)
                                        <img src="{{$image->temporaryUrl()}}" width="120"/>
                                        @endif
                                        @error('image')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="image" class="form-label"> Gallery</label>
                                        <input type="file" name="image" class="form-control" wire:model="images" multiple/>
                                        @if ($images)
                                        @foreach($images as $image)
                                        <img src="{{$image->temporaryUrl()}}" width="120"/> 
                                        @endforeach
                                        @endif
                                        @error('images')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="category_id" class="form-label" > Category</label>
                                        <select class="form-control" name="category_id" wire:model="category_id" wire:change="changeSubcategory">
                                            <option value="">Select Category</option>  
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="subcategory_id" class="form-label" >Sub Category</label>
                                        <select class="form-control" name="subcategory_id" wire:model="subcategory_id">
                                            <option value="">None</option>  
                                            @foreach ($subcategories as $subcategory)
                                                <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                            <div class="mb-2 mt-2">
                                                <label for="subcategory_id" class="form-label" >Product Attributes</label>
                                                <div class="row"> 
                                                    <div class="col-lg-11">
                                                        <select class="form-control" name="subcategory_id" wire:model="attr">
                                                            <option value="">None</option>  
                                                            @foreach ($pattributes as $pattribute)
                                                                <option value="{{$pattribute->id}}">{{$pattribute->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-1"> <button class="btn btn-danger float-end" wire:click.prevent="addAttr"> Add</button></div>
                                                </div>
                                            </div>
                                            @foreach($inputs as $key=>$value)
                                            <div class="mb-3 mt-3">
                                                <label class="form-label"> {{$pattributes->where('id',$attr_array[$key])->first()->name}}</label>
                                                <div class="row"> 
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" placeholder="{{$pattributes->where('id',$attr_array[$key])->first()->name}}"wire:model="attr_values.{{$value}}"/> 
                                                    </div>
                                                    <div class="col-lg-2"><button class="btn btn-danger float-end" wire:click.prevent="remove({{$key}})"> Remove</button></div>
                                                </div>
                                            </div>
                                            @endforeach
                                    <button type="submit" class="btn btn-primary "> submit</button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

