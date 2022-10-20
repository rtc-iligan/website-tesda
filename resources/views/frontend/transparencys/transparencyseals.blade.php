@extends('layouts.frontend')
@section('content')
<section class="text-center cta cta-4 space--xxs border--bottom" style="background-image: url('img/header.jpg');background-repeat: no-repeat;">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
             <span class="--avt-bold --txt-r --fs25">Transparency Seal</span> 
            </div>
        </div>
    </div>
</section>
<section>
    <p class="text-center font-weight-bold" style="font-size:25px;">
        <img src="{{asset('img/translogowback.jpg')}}" alt="translogowback">
    </p>
    <div class="container">
    <p class="lead">A Transparency Seal, prominently displayed on the main page of the website of a particular government agency, is a certificate that it has complied with the requirements of Section 93. This Seal links to a page within the agency’s website which contains an index of downloadable items of each of the above-mentioned documents.</p>
    <p class="lead" >SYMBOLISM</p>
    <p class="lead">A pearl buried inside a tightly-shut shell is practically worthless. Government information is a pearl, meant to be shared with the public in order to maximize its inherent value. The Transparency Seal, depicted by a pearl shining out of an open shell, is a symbol of a policy shift towards openness in access to government information. On the one hand, it hopes to inspire Filipinos in the civil service to be more open to citizen engagement; on the other, to invite the Filipino citizenry to exercise their right to participate in governance.</p>   
    <p class="lead">This initiative is envisioned as a step in the right direction towards solidifying the position of the Philippines as the Pearl of the Orient – a shining example for democratic virtue in the region.</p>   
    <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    @foreach($trans as $trans)
                    <div class="card-header">
                       <strong class="fs-6"> {{$trans->title}} </strong>
                    </div>
                        @php
                            $get_id = $trans->id;
                            $posting=DB::table('postings')->orderBy('sort','ASC')->get();
                        @endphp
                        @foreach($posting as $post)
                        @if($post->ts_id == $get_id)
                        <div class="container">
                            {{$post->year}}&nbsp;
                            <a href="{{$post->link}}"><font color="blue">{{$post->sub_title}} &nbsp;</a></font>
                        </div>
                        @endif
                   
                        @endforeach
                    @endforeach
                    		
		        </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
@section('scripts')
   
@endsection