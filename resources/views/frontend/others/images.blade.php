@extends('layouts.frontend')
@section('content')
<section class="text-center cta cta-4 space--xxs border--bottom" style="background-image: url('img/login.jpg');background-repeat: no-repeat;">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
             <span class="--avt-bold --txt-r --fs25">Gallery</span> 
            </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="masonry">
            <div class="masonry-filter-container text-center row justify-content-center align-items-center"> 
                <div class="masonry-filter-holder">
                    <div class="masonry__filters" data-filter-all-text="All Categories">

                        <ul>
                            <li class="active" data-masonry-filter="*">All Categories</li>
                            <li data-masonry-filter="people">People</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="masonry__container row">
            @foreach($gallerys as $gl)
               <div class="masonry__item col-lg-4 col-4 filter-people" data-masonry-filter="People">
                    <a href="{{asset('storage/'.$gl->image) }}" data-lightbox="Gallery 1"> <img alt="Image" src="{{asset('storage/'.$gl->image) }}" style="height: 300px;width:500px;border-radius: 10px;"> </a>
                    <p class="--avt-fs5 text-center">{{$gl->subject}} / {{$gl->date}}</p>
                </div>
            @endforeach
            </div>
            <div class="d-flex justify-content-center" id="link-st" style="margin: 0 auto !important;">
                    {{ $gallerys->links() }}
                </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
   
@endsection