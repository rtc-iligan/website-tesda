@extends('layouts.frontend')
@section('content')
<section class="text-center cta cta-4 space--xxs border--bottom" style="background-image: url('img/login.jpg');background-repeat: no-repeat;">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
             <span class="lead" style="font-size: 22px;float: left;">Online Reservation</span> 
            </div>
        </div>
    </div>
</section>
<!-- <section class="imagebg" data-overlay="4" style="height: 5px;">
    <div class="background-image-holder" > <img alt="background" src="stack/img/hero-1.jpg"> </div>
    <div class="container" >
        <div class="row">
            <div class="col-md-12">
                <h1>Simple Title</h1>
            </div>
        </div>
    </div>
</section> -->

<section class="imagebg">
    <div class="container">
        <div class="card">
        	<div class="card-body">
        		 <form class="text-left row">
                	<div class="col-md-12 text-center ">
                        <h2 class="res-txt-cl">General Information</h2><hr>
                    </div>
                    <div class="col-md-6"> 
                    	<span class="res-txt-cl">Last Name:</span>
                    	<input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <span class="res-txt-cl">Extension Name:</span> 
                        <input type="text" name="company" class="form-control"> 
                    </div>
                    <div class="col-md-6"> 
                    	<span class="res-txt-cl">First Name:</span>
                    	<input type="text" name="email" class="form-control" required> 
                    </div>
                    <div class="col-md-6"> 
                    	<span class="res-txt-cl">Middle Name:</span> 
                    	<input type="text" name="phone" class="form-control"> 
                    </div>
                   	<span class="res-txt-cl">Complete Permanent Address</span>
                   	<div class="col-md-4"> 
                    	<span class="res-txt-cl">Region:</span> 
                    	<select class="form-select"></select>
                    </div>
                    <div class="col-md-4"> 
                    	<span class="res-txt-cl">Province:</span> 
                    	<select class="form-select"></select>
                    </div>
                    <div class="col-md-4"> 
                    	<span class="res-txt-cl">City:</span> 
                    	<select class="form-select"></select>
                    </div>
                    <div class="col-md-4"> 
                    	<span class="res-txt-cl">Barangay:</span> 
                    	<select class="form-select"></select>
                    </div>
                    <div class="col-md-4"> 
                    	<span class="res-txt-cl">Street/Purok/Number:</span> 
                    	<input class="form-control">
                    </div>
                    <div class="col-md-4"> 
                    	<span class="res-txt-cl">District:</span> 
                    	<select class="form-select"></select>
                    </div>
                    <div class="col-md-4"> 
                    	<span class="res-txt-cl">Email Address:</span> 
                    	<input class="form-control">
                    </div>
                    <div class="col-md-4"> 
                    	<span class="res-txt-cl">Contact Number:</span> 
                    	<input class="form-control">
                    </div>
                    <div class="col-md-4"> 
                    	<span class="res-txt-cl">Nationality:</span> 
                    	<select class="form-select"></select>
                    </div>
                    <div class="col-md-5"> 
                    	<span class="res-txt-cl">Qualification:</span> 
                    	<select class="form-select"></select>
                    </div>
                    <div class="col-md-4"> 
                    	<span class="res-txt-cl">Educational Attainment:</span> 
                    	<select class="form-select"></select>
                    </div>
                    <div class="col-md-3"> 
                    	<span class="res-txt-cl">National Certificate:</span> 
                    	<input class="form-control">
                    </div>
                    <hr><span class="res-txt-cl">Personal Information</span><hr>
                    <div class="col-md-4"> 
                    	<span class="res-txt-cl">Gender:</span> 
                    	<select class="form-select"></select>
                    </div>
                    <div class="col-md-4"> 
                    	<span class="res-txt-cl">Civil Status:</span> 
                    	<select class="form-select"></select>
                    </div>
                    <div class="col-md-4"> 
                    	<span class="res-txt-cl">Employment Status:</span> 
                    	<select class="form-select"></select>
                    </div>
                    <div class="col-md-3"> 
                    	<span class="res-txt-cl">Birth Date:</span> 
                    	<input class="form-control">
                    </div>
                    <div class="col-md-3"> 
                    	<span class="res-txt-cl">Birth Month:</span> 
                    	<input class="form-control">
                    </div>
                    <div class="col-md-3"> 
                    	<span class="res-txt-cl">Birth Year:</span> 
                    	<input class="form-control">
                    </div>
                    <div class="col-md-3"> 
                    	<span class="res-txt-cl">Age:</span> 
                    	<input class="form-control">
                    </div>
                    <hr><span class="res-txt-cl">Parent/Spouse/Guardian Information</span><hr>
                    <div class="col-md-3"> 
                    	<span class="res-txt-cl">First Name:</span> 
                    	<input class="form-control">
                    </div>
                    <div class="col-md-3"> 
                    	<span class="res-txt-cl">Middle Name:</span> 
                    	<input class="form-control">
                    </div>
                     <div class="col-md-3"> 
                    	<span class="res-txt-cl">Last Name:</span> 
                    	<input class="form-control">
                    </div>
                    <div class="col-md-3"> 
                    	<span class="res-txt-cl">Contact Number:</span> 
                    	<input class="form-control">
                    </div>
                    <div class="col-md-4"> 
                    	<span class="res-txt-cl">Barangay:</span> 
                    	<input class="form-control">
                    </div>
                    <div class="col-md-4"> 
                    	<span class="res-txt-cl">City/Municipality:</span> 
                    	<input class="form-control">
                    </div>
                    <div class="col-md-4"> 
                    	<span class="res-txt-cl">Province:</span> 
                    	<input class="form-control">
                    </div>
                    <hr>
                    <div class="col-md-6"> 
                    	<span class="res-txt-cl">Learners/trainee/Student(Client) Classification:</span> 
                    	<select class="form-select"></select>
                    </div>
                    <hr>
                    <div class="col-md-12 ">
					    <div class="input-checkbox"> <input type="checkbox" name="design">
					    	<label></label>
					    	<p class="res-txt-cl">Agree I hereby allow TESDA to use/post my contact details, name, email,cellphone/landline nos. adn other information I provided which
							maybe used for processing of my scholarship application, for employment opportunities and other purposes.</p> 
					    </div>
					</div>
					<div align="right">
						<button type="submit" class="btn btn-primary" style="width: 70px;">Submit</button>
					</div>
                </form>
        	</div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
   
@endsection
