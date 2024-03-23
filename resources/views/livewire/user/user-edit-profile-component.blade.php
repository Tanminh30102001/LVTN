<div>
<style>
        body{margin-top:20px;
       
       }
       .img-account-profile {
           height: 10rem;
       }
       .rounded-circle {
           border-radius: 50% !important;
       }
       .card {
           box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
       }
       .card .card-header {
           font-weight: 500;
       }
       .card-header:first-child {
           border-radius: 0.35rem 0.35rem 0 0;
       }
       .card-header {
           padding: 1rem 1.35rem;
           margin-bottom: 0;
           background-color: rgba(33, 40, 50, 0.03);
           border-bottom: 1px solid rgba(33, 40, 50, 0.125);
       }
       .form-control, .dataTable-input {
           display: block;
           width: 100%;
           padding: 0.875rem 1.125rem;
           font-size: 0.875rem;
           font-weight: 400;
           line-height: 1;
           color: #393d43;
           background-color: #fff;
           background-clip: padding-box;
           border: 1px solid #c5ccd6;
           -webkit-appearance: none;
           -moz-appearance: none;
           appearance: none;
           border-radius: 0.35rem;
           transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
       }
       
      
 </style>
    {{-- <div class="container">
        <div class="row">
            <h5>Account Details</h5>
            @if(Session::has('message'))
            <div class="alert alert-success" role="alert"> {{Session::get('message')}}</div>
             @endif
            <div class="col-lg-8">
                <form  wire:submit.prevent="updateUser">
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="name" class="form-label">Full Name <span class="required">*</span></label>
                            <input  class="form-control square" name="name"  wire:model="name" />
                            @error('name') <span>{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-md-8">
                            <label for="phone" class="form-label">Phone Number <span class="required">*</span></label>
                            <input  class="form-control square" name="phone" wire:model="phone" />
                            @error('phone') <span>{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-md-8">
                            <label for="address" class="form-label">Address <span class="required">*</span></label>
                            <input class="form-control square" name="address" wire:model="address" />
                            @error('address') <span>{{ $message }}</span> @enderror
                        </div>
                        {{-- <div class="form-group col-md-12">
                            <label>Confirm Password <span class="required">*</span></label>
                            <input required="" class="form-control square" name="cpassword" type="password">
                        </div> --}}
                        {{-- <div class="col-md-12">
                            <button type="submit" class="btn btn-fill-out submit" >Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>  
    </div> --}} 
  
    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        @if(Session::has('message'))
        <div class="alert alert-success" role="alert"> {{Session::get('message')}}</div>
        @endif
        <hr class="mt-0 mb-4">
        <div class="row " >
            
            <div class="col-xl-8" style="align-items: center">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form wire:submit.prevent="updateUser">
                            <div class="col-xl-12">
                                <!-- Profile picture card-->
                                <div class="card mb-4 mb-xl-0">
                                    <div class="card-header">Profile Picture</div>
                                    <div class="card-body text-center">
                                        <!-- Profile picture image-->
                                        @if($newimage)
                                        <img class="img-account-profile rounded-circle mb-2" src="{{$newimage->temporaryUrl()}}" alt="">
                                        @else
                                        <img class="img-account-profile rounded-circle mb-2" src="{{asset('assets/imgs/user')}}/{{$image}}" alt="">
                                        @endif
                                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                        <!-- Profile picture upload button-->
                                        <input type="file" name="image" class="form-control" wire:model="newimage"/>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="name">FullName </label>
                                <input class="form-control"  type="text" placeholder="Enter your Full name"name="name"  wire:model="name">
                            </div>
                          
                            <div class="mb-3">
                                <label class="small mb-1" for="address">Your address</label>
                                <input class="form-control"  type="text" placeholder="Enter your address" name="address" wire:model="address">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                    <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" name="phone" wire:model="phone">
                                </div>
                                <!-- Form Group (birthday)-->
                                {{-- <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Birthday</label>
                                    <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
                                </div> --}}
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="submit">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



