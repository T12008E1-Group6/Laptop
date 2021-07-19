@extends('layouts.app')

@section('content')
<div>
    <img src="images/Contact.jpg" width="100%" alt="">
</div>

</div>
<div class="container">
    <div class="col-md-12">
        
<div class="py-4">
    <h1 style="text-align:center; display:flex; align-items:center; justify-content:center;font-weight:800; color:#231F20;font-size:10vh;">
        Contact Us
    </h1>
</div>
<div class="h3" style="display:flex; align-items:center;text-align:center; justify-content:center">
    Your voice matters
</div>
<div class="py-4">
    <div class="contact-form">
        <form action="" method="post" style="text-align: center; justify-content: center">
            @csrf
            <div class="py-2" style="display:flex">
                <div class="col-md-1" style="align-items:left">
                    Name
                </div>
                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
            </div>
            <div class="py-2" style="display:flex" >
                <div class="col-md-1" style="align-items:left">
                    Mail
                </div>
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
            </div>
            <div class="py-2" style="display:flex">
                <div class="col-md-1" style="align-items:left">
                    Mess
                </div>
                <textarea name="message" class="form-control" placeholder="Message" row="4" required></textarea>
            </div>
            <div class="py-4">
                <div class="col-md-2" style="float:right">
                    <button class="btn btn-primary form-control submit" type="submit">Send</button>
                </div>
            </div>
                
            </div>                    
        </form>
    </div>
    </div>
</div>
@endsection
