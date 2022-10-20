@extends('layouts.frontend')
@section('content')
<section class="text-center cta cta-4 space--xxs border--bottom" style="background-image: url('img/login.jpg');background-repeat: no-repeat;">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12">
                         <span class="--avt-bold --txt-r --fs25" >Mission & Vision</span> 
                        </div>
                    </div>
                </div>
</section>
 <section class="switchable feature-large">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 col-12">
                <div class="video-cover ">
                    <div class="background-image-holder"> </div>
                    <img src="{{asset('img/building.jpg')}}"> </div>
            		</div>
            <div class="col-md-6 col-lg-5">
                <div class="switchable__text">
                    <h2 class="--avt-bold --fs20">Mandate</h2>
                    <p class="--avt-fs5"> The Technical Education and Skills Development Authority (TESDA) is the government agency tasked to manage and supervise technical education and skills development (TESD) in the Philippines. It was created by virtue of Republic Act 7796, otherwise known as the “Technical Education and Skills Development Act of 1994”. The said Act integrated the functions of the former National Manpower and Youth Council (NMYC), the Bureau of Technical-Vocational Education of the Department of Education, Culture and Sports (BTVE-DECS) and the Office of Apprenticeship of the Department of Labor and Employment (DOLE). </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section >
    <div class="container bg-light">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="tabs-container tabs--vertical mt-3">
                    <ul class="tabs">
                        <li class="active">
                            <div class="tab__title"> <span class="--avt-bold --fs20">Mission</span> </div>
                            <div class="tab__content">
                                <p class="--avt-fs5 --center"> The transformational leader in the Techinical Education and Skills Development of the filipino workforce.</p>
                               
                            </div>
                        </li>
                        <li>
                            <div class="tab__title"> <span class="--avt-bold --fs20">Vission</span> </div>
                            <div class="tab__content">
                                <p class="--avt-fs5"> TESDA sets direction, promulgates relevant standards, and implements programs geared towards a quality-assured and inclusive Technical Education and Skills Development and Certification System. </p>
                              
                            </div>
                        </li>
                        <li>
                            <div class="tab__title"> <span class="--avt-bold --fs20">Values Statement</span> </div>
                            <div class="tab__content">
                                <p class="--avt-fs5"> We believe in demonstrated competence, institutional integrity, personal commitment, culture of innovativeness and a deep sense of nationalism. </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<div class="col-md-12">
					<span class="--avt-bold --fs20"> Quality Policy</span>
					<p class="--avt-fs4">
						"WE MEASURE OUR WORTH BY THE LEVEL OF SATISFACTION OF THE CLIENTELE WE SERVE."
					</p>
					<p class="--avt-normal h5">Through:</p>
					<p class="--avt-normal"><b style="color: blue;font-size: 25px !important;">S</b>tratigic Decision</p>
					<p class="--avt-normal"><b style="color: blue;font-size: 25px !important;">E</b>ffectiveness</p>
					<p class="--avt-normal"><b style="color: blue;font-size: 25px !important;">R</b>esponsiveness</p>
					<p class="--avt-normal"><b style="color: blue;font-size: 25px !important;">V</b>alue Added Performance</p>
					<p class="--avt-normal"><b style="color: blue;font-size: 25px !important;">I</b>ntegrity</p>
					<p class="--avt-normal"><b style="color: blue;font-size: 25px !important;">C</b>itizen focus</p>
					<p class="--avt-normal"><b style="color: blue;font-size: 25px !important;">E</b>fficiency</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
