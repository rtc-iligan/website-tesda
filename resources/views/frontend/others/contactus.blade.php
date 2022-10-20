@extends('layouts.frontend')
@section('content')
<section class="text-center cta cta-4 space--xxs border--bottom" style="background-image: url('img/login.jpg');background-repeat: no-repeat;">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
             <span class="--avt-bold --txt-r --fs25">Contact Us</span> 
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row col-md-12 --avt-normal" style="align-items: center;justify-content: center;">
       
        <div class="col-md-5 card --avt-normal">
            <div class="card-body">
                <div class="row">
                <div class="col-3">
                    <img src="{{asset('img/tesdanew.png')}}" alt="tesdanew" style="height:90px;width:100px;">
                </div>    
                <div class="col-9 mt-2">
                    <a class=""><b>Email:</b>rtciligan@tesda.gov.ph</a><br>
                    <a class=""><b>Contact Number:</b>221-6541</a><br>
                    <a class=""><b>Address:</b>Maria Cristina, Iligan City 9200</a>
                </div>
                </div>
                
            </div>
        </div>
        <div class="col-md-5 card">
            <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <img src="{{asset('img/rtciligan.png')}}" alt="tesdanew" style="height:90px;width:100px;">
                </div>    
                <div class="col-9 mt-2">
                    <a class=""><b>Email:</b>registrarofficertciligan@gmail.com</a><br>
                    <a class=""><b>Contact Number:</b>09976072537</a><br>
                    <a class=""><b>Address:</b>Maria Cristina, Iligan City 9200</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <div class="container col-md-8 mb-3 ">
       
        <div class="card --avt-normal">
        <p class="--avt-fs3 text-center mt-4">Survey, Feedback, Comments, Questions and Suggestions</p>
            <div class="card-body">
                <form>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter full name">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Contact</label>
                            <input type="number" class="form-control" name="number" placeholder="Enter contact number">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter full address">
                        </div>
                    </div>
                    <div class="row form-group">
                        <textarea name="subjet" id="" cols="30" rows="10" placeholder="Type here . . . . "></textarea>
                    </div>
                
                    
                    <button type="submit" class="btn btn-sm btn-primary " style="width:100px;float:right;">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
   
@endsection