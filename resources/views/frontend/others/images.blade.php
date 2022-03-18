@extends('layouts.frontend')
@section('content')
<section class="text-center cta cta-4 space--xxs border--bottom" style="background-image: url('img/login.jpg');background-repeat: no-repeat;">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
             <span class="lead" style="font-size: 22px;float: left;">Gallery</span> 
            </div>
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
            <div class="masonry__container row masonry--active">
                <div class="masonry__item col-lg-4 col-6 filter-people" data-masonry-filter="People">
                    <a href="img/building.jpg" data-lightbox="Gallery 1"> <img alt="Image" src="img/building.jpg" style="height: 190px;"> </a>
                </div>
                 <div class="masonry__item col-lg-4 col-6 filter-people" data-masonry-filter="People">
                    <a href="img/tesdabuilding.png" data-lightbox="Gallery 1"> <img alt="Image" src="img/tesdabuilding.png" style="height: 190px;"> </a>
                </div>
               <div class="masonry__item col-lg-4 col-6 filter-people" data-masonry-filter="People">
                    <a href="img/IMG-2891.jpg" data-lightbox="Gallery 1"> <img alt="Image" src="img/IMG-2891.jpg" style="height: 190px;"> </a>
                </div>
                <div class="masonry__item col-lg-4 col-6 filter-people" data-masonry-filter="People">
                    <a href="img/building.jpg" data-lightbox="Gallery 1"> <img alt="Image" src="img/building.jpg" style="height: 190px;"> </a>
                </div>
                 <div class="masonry__item col-lg-4 col-6 filter-people" data-masonry-filter="People">
                    <a href="img/tesdabuilding.png" data-lightbox="Gallery 1"> <img alt="Image" src="img/tesdabuilding.png" style="height: 190px;"> </a>
                </div>
               <div class="masonry__item col-lg-4 col-6 filter-people" data-masonry-filter="People">
                    <a href="img/IMG-2891.jpg" data-lightbox="Gallery 1"> <img alt="Image" src="img/IMG-2891.jpg" style="height: 190px;"> </a>
                </div>
                <div class="masonry__item col-lg-4 col-6 filter-people" data-masonry-filter="People">
                    <a href="img/building.jpg" data-lightbox="Gallery 1"> <img alt="Image" src="img/building.jpg" style="height: 190px;"> </a>
                </div>
                 <div class="masonry__item col-lg-4 col-6 filter-people" data-masonry-filter="People">
                    <a href="img/tesdabuilding.png" data-lightbox="Gallery 1"> <img alt="Image" src="img/tesdabuilding.png" style="height: 190px;"> </a>
                </div>
               <div class="masonry__item col-lg-4 col-6 filter-people" data-masonry-filter="People">
                    <a href="img/IMG-2891.jpg" data-lightbox="Gallery 1"> <img alt="Image" src="img/IMG-2891.jpg" style="height: 190px;"> </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
   
@endsection