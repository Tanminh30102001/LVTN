<div>
<style>
  
 </style>
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>                    
                <span></span> Contact us
            </div>
        </div>
    </div>  
    <main class="main">           
        <section class="pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 m-auto">
                        <div class="contact-from-area padding-20-row-col wow FadeInUp">
                            <h3 class="mb-10 text-center">Email to TM-store</h3>
                            <p class="text-muted mb-30 text-center font-sm">We are here to help and answer any question you might have.Tell us about your issue so we can help you more quickly. We look forward to hearing from you.</p>
                            @if(Session::has('contact-message'))
                            <div class="alert alert-success" role="alert"> {{Session::get('contact-message')}}</div>
                            @endif
                            <form class="contact-form-style text-center" id="contact-form"wire:submit.prevent="sendMessage" >
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="name" placeholder="Your full name" type="text" wire:model="name">
                                        </div>
                                        @error('name')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="email" placeholder="Your Email" type="email"wire:model="email">
                                        </div>
                                        @error('email')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="phone" placeholder="Your Phone" type="tel"wire:model="phone">
                                        </div>
                                        @error('phone')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="subject" placeholder="Subject" type="text" wire:model="subject">
                                        </div>
                                        @error('subject')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="textarea-style mb-30">
                                            <textarea name="content" placeholder="Message" wire:model="content"></textarea>
                                        </div>
                                        @error('content')
                                        <p class="text-danger">{{$message}} </p>
                                        @enderror
                                        <button class="submit submit-auto-width" type="submit">Send message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
</div>
