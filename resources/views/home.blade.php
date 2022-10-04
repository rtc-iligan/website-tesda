@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 ">
            <div class="card" style="background: linear-gradient(to right, #0ac282, #0df3a3);">
                <div class="card-header font-weight-bold">{{ __('QUALIFICATION') }}</div>

                <div class="card-body">
                <i class="fa-solid fa-layer-group"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="background: linear-gradient(to right, #fe9365, #feb798);">
                <div class="card-header font-weight-bold">{{ __('ACCREDITED QUALIFICATION') }}</div>

                <div class="card-body">
                <i class="fa-solid fa-layer-group"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="background: linear-gradient(to right, #eb3422, #ef5f51);">
                <div class="card-header font-weight-bold">{{ __('RESERVATION') }}</div>

                <div class="card-body">
                <i class="fa-sharp fa-solid fa-window"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="background: linear-gradient(to right, #01a9ac, #01dbdf);">
                <div class="card-header font-weight-bold">{{ __('USER') }}</div>

                <div class="card-body">
                <i class="fa-regular fa-person-circle-check"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-md-5" style="background: linear-gradient(to right, #01a9ac, #01dbdf);">asda</div>
        <div class="col-md-7" style="background: linear-gradient(to right, #eb3422, #ef5f51);">sadsadas</div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
