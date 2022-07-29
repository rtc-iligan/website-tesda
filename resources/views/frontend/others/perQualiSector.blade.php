<div class="container" id="perQualiSector-card">
    <div class="card-header" style="background-color: white; border-color:white;">
        <p class="btn-close float-right close-card"></p>
    </div>
    <div class="row ">
        <div class="col-md-6"> <img alt="Image" class="border--round box-shadow-wide" src="{{asset('storage/'.$qualification->image) }}"> </div>
        <div class="col-md-6 col-lg-5">
            <div class="switchable__text">
                <h2 class="fw-bold">{{ $qualification->title }}</h2>
                <a class="lead fs-6">CPTR Number: <strong>{{ $qualification->cptr }}</strong></a><br>
                <a class="lead fs-6">Date Registered: <strong>{{ $qualification->date }}</strong></a>
                <p class="lead"> {{ $qualification->discription }}</p> 
            </div>
        </div>
    </div>
</div>

<script>   
 $('#perQualiSector-card:not(.Active)').hide();
    $(".close-card").click(function(){
        $("#perQualiSector-card").hide();
        $(".masonry").show();
    });   
</script>