@extends('layouts.frontend')
@section('content')
<section class="text-center cta cta-4 space--xxs border--bottom" style="background-image: url('img/login.jpg');background-repeat: no-repeat;">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
             <span class="lead" style="font-size: 22px;float: left;">RTC Iligan Personnel</span> 
            </div>
        </div>
    </div>
</section>

<section class="text-center">
    <div class="container">
    <p style="font-size:20px;font-weight:bold;">Regular Personnel</p>
        <div class="row">
            <div class="col">
                <div class="slider" data-paging="true">
                    <ul class="slides">
                        @foreach($regular as $reg)
                        <li class="col-md-4 col-12" >
                            <div class="project-thumb">
                                <a href="#"> <img alt="Image" class="border--round" src="{{asset('storage/'.$reg->image) }}" style="height: 300px;width: 300px;"> </a>
                                <h4>{{$reg->name}}</h4> <span>{{$reg->position}}</span> </div>
                        </li>
                        @endforeach
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="text-center">
    <div class="container">
    <p style="font-size:20px;font-weight:bold;">Job Order Personnel</p>
        <div class="row">
            <div class="col">
                <div class="slider" data-paging="true">
                    <ul class="slides">
                    @foreach($joborder as $jo)
                        <li class="col-md-4 col-12" >
                            <div class="project-thumb">
                                <a href="#"> <img alt="Image" class="border--round" src="{{asset('storage/'.$jo->image) }}" style="height: 300px;width: 300px;"> </a>
                                <h4>{{$jo->name}}</h4> <span>{{$jo->position}}</span> </div>
                        </li>
                        @endforeach
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
   
@endsection