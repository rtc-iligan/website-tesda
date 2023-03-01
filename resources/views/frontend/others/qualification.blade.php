@extends('layouts.frontend')
@section('content')
<section class="text-center cta cta-4 space--xxs border--bottom" style="background-image: url('img/header.jpg');background-repeat: no-repeat;">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
             <span class="--avt-bold --txt-r --fs25">UTPRAS Directory</span> 
            </div>
        </div>
    </div>
</section>
<section>
    <p class="text-center font-weight-bold" style="font-size:25px;">Unified TVET Program Registration & Accreditation System</p>
    <div class="container">
        <div class="masonry">
            <div class="masonry__container row">
               @foreach($qualiSector as $qualiSector)
                <a href="{{ URL::to('/sector/'.$qualiSector->sector)}}">
                    <div class="col-md-3 masonry__item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" >
                        <div class="card card-2 text-center">
                            <div class="card__top">
                                
                            </div>
                            <div class="card__body">
                            <span class="font-weight-bolder text-black">{{ $qualiSector->sector }}</span>
                            
                            </div>
                        
                        </div>
                    </div>
</a>
               @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
   
@endsection