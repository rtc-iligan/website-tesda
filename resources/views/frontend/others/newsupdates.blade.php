@extends('layouts.frontend')
@section('content')
<section class="text-center cta cta-4 space--xxs border--bottom" style="background-image: url('img/login.jpg');background-repeat: no-repeat;">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
             <span class="--avt-bold --txt-r --fs25">News and Updates</span> 
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="masonry">
            <!-- <div class="masonry-filter-container text-center d-flex flex-wrap justify-content-center align-items-center"> <span>Category:</span>
                <div class="masonry-filter-holder">
                    <div class="masonry__filters" data-filter-all-text="All Categories">
                        <ul>
                            <li class="active" data-masonry-filter="*">All Categories</li>
                            <li data-masonry-filter="print">Print</li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <div class="row">
                @foreach($newss as $news)
                    <div class="masonry__item col-md-6 text-center filter-print" data-masonry-filter="Print">
                            <div class="project-thumb">
                                <a href="#"> <img alt="Image" class="border--round" src="{{asset('storage/'.$news->image) }}" style="height: 335px;"> </a>
                                <h4>{{ $news->title }}</h4>
                                <span>{{ $news->location }} / {{ $news->date }}</span> 
                                <!-- <a class="d-flex justify-content-end" href="http://127.0.0.1:8000/newsupdates"> >>See More</a></div> -->
                                <p class="--fs20">{{$news->content}}</p>    
                            </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center" id="link-st" style="margin: 0 auto !important;">
                    {{ $newss->links() }}
                </div>
            </div> 
    </div>
</section>
<br><br><br>
@endsection
@section('scripts') 
   
@endsection