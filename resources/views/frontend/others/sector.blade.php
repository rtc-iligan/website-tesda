@extends('layouts.frontend')
@section('content')
<section class="text-center cta cta-4 space--xxs border--bottom" style="background-image: url({{asset('img/header.jpg')}});background-repeat: no-repeat;" alt="image">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
             <span class="lead" style="font-size: 22px;float: left;">UTPRAS Directory</span> 
            </div>
        </div>
    </div>
</section>
<section>
    <p class="text-center font-weight-bold" style="font-size:25px;">{{ $sector }} SECTOR</p>
    <div class="container">
        <div class="masonry">
            <div class="masonry__container row">
               @foreach($perQualiSector as $perQualiSector)
                    <div class="col-md-3 masonry__item "  data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <div class="card card-2 text-center">
                            <div class="card__top">
                               <img alt="Image" src="{{asset('storage/'.$perQualiSector->image) }}" height="90" width="400">
                            </div>
                            <div class="card__body">
                            <span class="font-weight-bolder text-black">{{ $perQualiSector->title }}</span>
                                <a data-url="{{ URL::to('/perQualiSector/'.$perQualiSector->id)}}" class="show_perQualiSector" >
                                    <p class="float-right "  style="font-size:12px;">See More >>>></p>
                                </a>
                            </div>
                        
                        </div>
                    </div>
               @endforeach
            </div>
        </div>
        <div class="col-12">
            <div class="append-perQualiSector"></div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script src="{{asset('stack/js/jquery-3.1.1.min.js')}}"></script>
   <script>
   
    $(".show_perQualiSector").click(function(){
        //alert(';asdas');
            var div = $('.append-perQualiSector');
			div.empty();
    
            var url = $(this).data('url');
            console.log(url);
            $.ajax({
			    url: url,
			    success:function(data){
			        div.append(data);
                    $('#perQualiSector-card').addClass('Active');
			        $('#perQualiSector-card').show();
                   
                    $('.masonry').hide();
			    }
			});
        });
   </script>
@endsection