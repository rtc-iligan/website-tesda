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
                     <!-- <input type="text" style="width:60px;float:right;"> -->
                    </div>
                    <div class="card-body" style="height:350px;">
                        <canvas style="width: 400px;"id="myChart-month"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mr-5" >
                    <div class="card-header text-white text-center --avt-normal" style="background-color: #202937 !important;">
                    RESERVATION GENDER COUNT
                    </div>
                    <div class="card-body" style="height:350px;">
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
               LIST OF RESERVED APPLICANT PER QUALIFICATION
            </div>
            <div class="card-body">
              <button class="btn btn-success mb-2" style="float:right;">
                <i> Export</i>
              </button>
            <table class="table table-bordered" style="height:400px !important;width:100%;display: inline-block;overflow-y: scroll;">
                <thead>
                    <tr>
                        <th style="width:90%">Qualification</th>
                        <th style="">Male</th>
                        <th style="">Female</th>
                        <th style="" >Total</th>
                    </tr>
                </thead>
                <tbody >
                    <tr>
                        <th>Trainers Methodology Level I</th>
                        <td>134</td>
                        <td>247</td>
                        <td>381</td>
                    </tr>
                    <tr>
                        <th>Automotive Servicing NC I</th>
                        <td>431</td>
                        <td>58</td>
                        <td>489</td>
                    </tr> 
                    <tr>
                        <th>Automotive Servicing NC II</th>
                        <td>194</td>
                        <td>8</td>
                        <td>202</td>
                    </tr>
                        <tr>
                        <th>Bread and Pastry Production NC II</th>
                        <td>135</td>
                        <td>854</td>
                        <td>989</td>
                    </tr>
                        <tr>
                        <th>Construction Painting NC II</th>
                        <td>20</td>
                        <td>9</td>
                        <td>29</td>
                    </tr>
                        <tr>
                        <th>Computer Systems Servicing NC II</th>
                        <td>390</td>
                        <td>662</td>
                        <td>1052</td>
                    </tr> 
                   
                </tbody>
            </table>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{asset('stack/js/jquery-3.1.1.min.js')}}"></script>
<script>
   $.ajax({
        url: "{{url('getReservePerMonth')}}",
        type: "GET",
        async: false,
        success:function(data){

let userData = null;
try {
    userData = JSON.parse(data); 
} catch (e) {
    userData = data;
}

                const ctx = document.getElementById('myChart-month');
                new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'] ,
                    datasets: [{
                    label: '# of Reserve Applicants',
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
<script>

  var xValues = ["Male", "Female"];
        var yValues = [55, 49];
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


@endsection
