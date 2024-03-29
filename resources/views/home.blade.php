@extends('layouts.app')
<style>
        .text-teal-500 {
    --tw-text-opacity: 1;
    color: rgb(20 184 166 / var(--tw-text-opacity));
}
       </style>
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-4 ">
            <div class="card ml-5" style="border-radius: 15px;">
                <div class="card-body">
                    <h6 class="text-center --avt-normal "style="font-size:20px;">Registered Qualification</h6>
                    <h6 class="text-center --avt-bold "style="font-size:30px;">{{ $getQualification }}</h6>
                    <h6 class="text-center --avt-normal text-teal-500"style="font-size:15px;">Total number of registered qualification</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body">
                    <h4 class="text-center --avt-normal "style="font-size:20px;">Online Reservation</h4>
                    <h6 class="text-center --avt-bold "style="font-size:30px;">{{ $getReservation }}</h6>
                    <h6 class="text-center --avt-normal text-teal-500"style="font-size:15px;">Total number of online reservation</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mr-5" style="border-radius: 15px;">
                <div class="card-body">
                    <h4 class="text-center --avt-normal "style="font-size:20px;">User</h4>
                    <h6 class="text-center --avt-bold "style="font-size:30px;">{{ $getUser }}</h6>
                    <h6 class="text-center --avt-normal text-teal-500"style="font-size:15px;">Total number of user</h6>
                </div>
            </div>
        </div>
       
    </div>
</div>
<section class="mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card ml-5" >
                    <div class="card-header text-white text-center --avt-normal" style="background-color: #202937 !important;">
                    ONLINE RESERVATION COUNT (CURRENT YEAR)
                     <input type="text" class="yearpicker text-center" placeholder="2023" style="width:80px;float:left;" id="year" data-url="{{ URL::to('/getReservePerMonth/') }}" autocomplete="off">
                    </div>
                    <div class="card-body append-again" >
                        
                    </div>
                    <canvas style="width: 400px;"id="myChart-month" ></canvas>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mr-5" >
                    <div class="card-header text-white text-center --avt-normal" style="background-color: #202937 !important;">
                    RESERVATION GENDER COUNT
                    </div>
                    <div class="card-body" style="height:315px;display: flex;justify-content: center;">
                        <canvas id="myChart-gender"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-5">
    <div class="container-fluid ">
        <div class="card ml-5 mr-5">
            <div class="card-header text-white text-center --avt-normal" style="background-color: #202937 !important;">
               TOTAL LIST OF RESERVED APPLICANT PER QUALIFICATION REMARKS
            </div>
            <div class="card-body">
            <button class="btn btn-success mb-2" style="float:right;">
                <i> Export</i>
              </button>
            </div>
            <div class="card-body">
                <!-- <div class="col-md-12">
                    <div class="card mr-5" >
                    
                        <div class="card-body" style="height:400px;">
                            <canvas id="myChart-remarks"></canvas>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{asset('stack/js/jquery-3.1.1.min.js')}}"></script>
<link rel='stylesheet' href="{{asset('css/yearpicker.css')}}"/>
<script src="{{asset('js/yearpicker.js')}}"></script>
<script>$(".yearpicker").yearpicker()</script>
<script>
    $("#year").on('change', function(){   
        var yearSelected = $('#year').val();
        var url = $('#year').data('url');
       // console.log(yearSelected);
        $.ajax({
        url: url+"/"+yearSelected,
        success:function(data){

            const jsonArray =  data;
            const counts = jsonArray.map(obj => obj.count);
            const months = jsonArray.map(obj => obj.month);
            //console.log(data)
            $("#myChart-month").remove();
            $(".append-again").append('<canvas id="myChart-month"></canvas>');
                const ctx = document.getElementById('myChart-month');
                new Chart(ctx, {
                type: 'bar',
                data: {
                    labels:  months,
                    datasets: [{
                    label: '# of Reserve Applicants',
                    data: counts,
                    borderWidth: 1,
                    }]
                },
                options: {
                    aspectRatio:2.5,
                    scales: {
                    y: {
                        beginAtZero: true,
                    }
                    }
                }
        });
    }
});
    }); 
</script>
<script>
   $.ajax({
        url: "{{url('getResPerMonth')}}",
        type: "GET",
        async: false,
        success:function(data){

            const jsonArray =  data;
            const counts = jsonArray.map(obj => obj.count);
            const months = jsonArray.map(obj => obj.month);

            //console.log(counts)
                const ctx = document.getElementById('myChart-month');
                new Chart(ctx, {
                type: 'bar',
                data: {
                    labels:  months,
                    datasets: [{
                    label: '# of Reserve Applicants',
                    data: counts,
                    borderWidth: 1,
                    }]
                },
                options: {
                    aspectRatio:2.5,
                    scales: {
                    y: {
                        beginAtZero: true,
                    }
                    }
                }
        });
    }
});
   
</script>
<script>

  var xValues = ["Male", "Female"];
        var yValues = [{{ $genderMale }}, {{ $genderFemale }}];
        var barColors = [
            "#a4d0f4",
        "#f4a4d2",
        ];

        new Chart("myChart-gender", {
        type: "doughnut",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            title: {
            display: true,
            text: "Gender Count"
            }
        }
        });
</script>
<script>
$.ajax({
    url: "{{url('getResByRemarks')}}",
    type: "GET",
    async: false,
    success:function(data){
      var someObj = data;

                const ctx = document.getElementById('myChart-remarks');
                new Chart(ctx, {
                type: 'bar',
                data: {
                    labels:  [],
                    datasets: [{
                    label: 'Confirm',
                    data: [],
                    borderWidth: 1,
                    }]
                },
                options: {
                    aspectRatio:2.5,
                    scales: {
                    y: {
                        beginAtZero: true,
                    }
                    }
                }
        });
    }
});
</script>
@endsection
