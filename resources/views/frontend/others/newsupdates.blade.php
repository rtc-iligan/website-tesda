@extends('layouts.frontend')
@section('content')
<section class="text-center cta cta-4 space--xxs border--bottom" style="background-image: url('img/login.jpg');background-repeat: no-repeat;">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
             <span class="lead" style="font-size: 22px;float: left;">News and Updates</span> 
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="masonry">
            <div class="masonry-filter-container text-center d-flex flex-wrap justify-content-center align-items-center"> <span>Category:</span>
                <div class="masonry-filter-holder">
                    <div class="masonry__filters" data-filter-all-text="All Categories">
                        <ul>
                            <li class="active" data-masonry-filter="*">All Categories</li>
                            <li data-masonry-filter="print">Print</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="masonry__container row masonry--active">
                <div class="masonry__item col-md-6 text-center filter-print" data-masonry-filter="Print">
                    <div class="project-thumb">
                        <a href="#"> <img alt="Image" class="border--round" src="img/tesdabuilding.png" style="height: 335px;"> </a>
                        <h4>TESDA</h4> <span>Brief History of TESDA</span> </div>
                </div>
                <div class="masonry__item col-md-6 text-center filter-print" data-masonry-filter="Print">
                    <div class="project-thumb">
                        <a href="#"> <img alt="Image" class="border--round" src="img/building.jpg"> </a>
                        <h4>Central Office</h4> <span>CO</span> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="d-flex justify-content-center">
	<nav aria-label="Page navigation example ">
	  <ul class="pagination">
	    <li class="page-item">
	      <a class="page-link" href="#" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	        <span class="sr-only">Previous</span>
	      </a>
	    </li>
	    <li class="page-item"><a class="page-link" href="#">1</a></li>
	    <li class="page-item"><a class="page-link" href="#">2</a></li>
	    <li class="page-item"><a class="page-link" href="#">3</a></li>
	    <li class="page-item">
	      <a class="page-link" href="#" aria-label="Next">
	        <span aria-hidden="true">&raquo;</span>
	        <span class="sr-only">Next</span>
	      </a>
	    </li>
	  </ul>
	</nav>
</section>
<br><br><br>
@endsection
@section('scripts')
   
@endsection