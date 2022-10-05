<!DOCTYPE html>
<html>
<style>
    @page  
    { 
        size: 21cm 29.7cm;
        margin: 5px;
        font-family: Arial, sans-serif;
    }
    body  
    { 

      background:  no-repeat fixed center; 
      background-repeat: no-repeat;
      background-attachment: fixed;
        margin:2.5mm 2.5mm 2.5mm 2.5mm;
    }
}
    
</style>
<body>
<!-- <div style="border-left:0.8px solid black;height:39px;margin-left:-3px;position:absolute;left:450px;top:299px;"></div> -->
<!-- <hr style="position:absolute;left:0px;top:330px;width:760px;border-width:0.5;"> -->
<!-- <img width="80" height="80" src="{{asset('image/logo.jpg')}}" style="position:absolute;left:40px;top:5px;" alt="">  -->
<p style="position:absolute;left:225px;top:0px;color: #0073e6;font-size:12px;"><strong>Technical Education and Skills Development Authority</strong><p>
<div style="position:absolute;left:190px;top:15px;"><p style="color: #0073e6;font-size:12px;">Pangasiwaan sa Edukasyong Teknikal at Pagpapaunlad ng Kasanayan</div>
<p style="position:absolute;left:260px;top:40px;font-size:12px;">REGIONAL TRAINING CENTER - ILIGAN</p>
<p style="position:absolute;left:310px;top:60px;font-size:10px;">Maria Cristina, Iligan City</p>
<p style="position:absolute;left:290px;top:80px;font-size:10px;">Tel No. (063) 223-6541/ 223-6542</p>
<p style="position:absolute;left:280px;top:95px;font-size:10px;">e-mail Address : rtciligan@tesda.gov.ph</p>
<div style="position:absolute;left:640px;top:50px; width: 80px;height: 80px;border: 1px solid black;">
    <p align="center"style="font-size:10px;"><br><br>I.D. Picture</p>
</div>

<div style="position:absolute;left:20px;top:140px;background-color: lightgray;height:20px;width:725px;text-align: center;">ENROLLMENT FORM</div>

</div>
<p style="position:absolute;left:20px;top:150px;font-size:12px;">REGISTRAR'S OFFICE COPY</p>
<p style="position:absolute;left:20px;top:170px;font-size:12px;">Please Check:</p>
<div style="position:absolute;left:120px;top:180px; width: 15px;height: 15px;border: 1px solid black;"></div>
<p style="position:absolute;left:145px;top:170px;font-size:12px;">Old Student</p>
<div style="position:absolute;left:230px;top:180px; width: 15px;height: 15px;border: 1px solid black;"></div>
<p style="position:absolute;left:255px;top:170px;font-size:12px;">New Student</p>
<div style="position:absolute;left:345px;top:180px; width: 15px;height: 15px;border: 1px solid black;"></div>
<p style="position:absolute;left:370px;top:170px;font-size:12px;">Transferee</p>
<div style="position:absolute;left:445px;top:180px; width: 15px;height: 15px;border: 1px solid black;"></div>
<p style="position:absolute;left:470px;top:170px;font-size:12px;">Returnee</p>
<p style="position:absolute;left:55px;top:200px;font-size:12px;">{{$date}}</p>
<p style="position:absolute;left:20px;top:200px;font-size:12px;">Date: ________________________</p>
<p style="position:absolute;left:350px;top:200px;font-size:12px;">{{strtoupper($reservation_all->res_qualification)}}</p>
<p style="position:absolute;left:220px;top:200px;font-size:12px;">Qualification Title: _____________________________________________________</p>
<p style="position:absolute;left:20px;top:240px;font-size:12px;">Name:</p>
<div style="position:absolute;left:80px;top:240px"><input type="text" style="text-align:center;height:16px;width:150px;font-size:12px;border:none;"value="{{$reservation_all->res_lname}}"></div>

<p  style="position:absolute;left:120px;top:260px;font-size:12px;">(Family Name)</p> <p style="position:absolute;left:90px;top:240px;font-size:12px;">_____________________</p>
<div style="position:absolute;left:275px;top:240px"><input type="text" style="text-align:center;height:16px;width:150px;font-size:12px;border:none;"value="{{$reservation_all->res_fname}}"></div>

<p  style="position:absolute;left:320px;top:260px;font-size:12px;">(First Name)</p> <p style="position:absolute;left:285px;top:240px;font-size:12px;">_____________________</p>
<div style="position:absolute;left:475px;top:240px"><input type="text" style="text-align:center;height:16px;width:150px;font-size:12px;border:none;"value="{{$reservation_all->res_mname}}"></div>
<p  style="position:absolute;left:515px;top:260px;font-size:12px;">(Middle Name)</p> <p style="position:absolute;left:485px;top:240px;font-size:12px;">_____________________</p>
<div style="position:absolute;left:650px;top:240px"><input type="text" style="text-align:center;height:16px;width:50px;font-size:12px;border:none;"value="{{$reservation_all->res_extension}}"></div>
<p  style="position:absolute;left:650px;top:260px;font-size:12px;">(Extension)</p> <p style="position:absolute;left:650px;top:240px;font-size:12px;">_________</p>
<p style="position:absolute;left:150px;top:290px;font-size:12px;">{{strtoupper($reservation_all->res_street)}}&nbsp;&nbsp;&nbsp;{{strtoupper($reservation_all->res_barangay)}}&nbsp;&nbsp;&nbsp;{{strtoupper($reservation_all->res_city)}}&nbsp;&nbsp;&nbsp;{{strtoupper($reservation_all->res_province)}}</p>
<p style="position:absolute;left:20px;top:290px;font-size:12px;">Permanent Address: __________________________________________________________________________________</p>
<p style="position:absolute;left:160px;top:315px;font-size:12px;">{{strtoupper($reservation_all->res_educational)}}</p>
<p style="position:absolute;left:20px;top:315px;font-size:12px;">Educational Attainment: _______________________________________________________________________________</p>
<p style="position:absolute;left:110px;top:340px;font-size:12px;">{{strtoupper($reservation_all->res_civilstat)}}</p>
<p style="position:absolute;left:20px;top:340px;font-size:12px;">Civil Status: _____________________________</p>
<p style="position:absolute;left:110px;top:365px;font-size:12px;">{{strtoupper($reservation_all->res_birthmonth)}}&nbsp;&nbsp;{{strtoupper($reservation_all->res_birthday)}}&nbsp;&nbsp;{{strtoupper($reservation_all->res_birthyear)}}</p>
<p style="position:absolute;left:20px;top:365px;font-size:12px;">Date of Birth: ____________________________</p>
<p style="position:absolute;left:110px;top:390px;font-size:12px;">{{strtoupper($reservation_all->res_nationality)}}</p>
<p style="position:absolute;left:20px;top:390px;font-size:12px;">Citizenship: _____________________________</p>
<p style="position:absolute;left:485px;top:340px;font-size:12px;">{{strtoupper($reservation_all->res_contact)}}</p>
<p style="position:absolute;left:400px;top:340px;font-size:12px;">Contact No.: _______________________________</p>
<p style="position:absolute;left:480px;top:369px;font-size:10px;">{{strtoupper($reservation_all->res_birthcity)}}&nbsp;&nbsp;{{strtoupper($reservation_all->res_birthprov)}}&nbsp;&nbsp;{{strtoupper($reservation_all->res_birthreg)}}</p>
<p style="position:absolute;left:400px;top:365px;font-size:12px;">Place of Birth: ______________________________</p>
<p style="position:absolute;left:490px;top:390px;font-size:12px;">{{($reservation_all->res_email)}}</p>
<p style="position:absolute;left:400px;top:390px;font-size:12px;">Email Address: _____________________________</p>
<p style="position:absolute;left:200px;top:415px;font-size:12px;">{{($reservation_all->res_parent)}}</p>
<p style="position:absolute;left:20px;top:415px;font-size:12px;">Parent/Guardian/Spouse: ______________________________________________________________________________</p>
<p style="position:absolute;left:65px;top:480px;font-size:12px;">Registrar</p><p style="position:absolute;left:30px;top:465px;font-size:12px;">__________________</p> <p style="position:absolute;left:35px;top:465px;font-size:12px;">Ada Sheena Q. Sicat</p>
<p style="position:absolute;left:230px;top:480px;font-size:12px;">I.D.</p><p style="position:absolute;left:180px;top:465px;font-size:12px;">____________________</p> <p style="position:absolute;left:185px;top:465px;font-size:12px;">Ralph John D. Pacapat</p>
<p style="position:absolute;left:390px;top:480px;font-size:12px;">Trainer</p><p style="position:absolute;left:345px;top:465px;font-size:12px;">____________________</p> <p style="position:absolute;left:350px;top:465px;font-size:12px;"></p>
<p style="position:absolute;left:500px;top:450px;font-size:12px;">Remarks:</p>
<p style="position:absolute;left:165px;top:545px;font-size:12px;">VIS</p><p style="position:absolute;left:120px;top:530px;font-size:12px;">__________________</p> <p style="position:absolute;left:125px;top:530px;font-size:12px;">Guadalope B. Tinoy</p>
<p style="position:absolute;left:295px;top:545px;font-size:12px;">OIC-Center Administrator</p><p style="position:absolute;left:295px;top:530px;font-size:12px;">____________________</p> <p style="position:absolute;left:320px;top:530px;font-size:12px;">Vicente E. Cruz</p>
<p style="position:absolute;left:560px;top:525px;font-size:12px;">Signature of Student</p><p style="position:absolute;left:550px;top:510px;font-size:12px;">____________________</p>
<p style="position:absolute;left:20px;top:600px;">---------------------------------------------------------------------------------------------------------------------------------------</p>
<div style="position:absolute;left:20px;top:750px; width: 720px;height: 250px;border: 1px solid black;"></div>
<div style="position:absolute;left:525px;top:770px; width: 200px;height: 200px;border: 2px solid black;"></div>
<div style="border-left:0.8px solid black;height:252px;margin-left:-3px;position:absolute;left:515px;top:750px;"></div>
<div style="border-left:0.8px solid black;height:252px;margin-left:-3px;position:absolute;left:300px;top:750px;"></div>
<p style="position:absolute;left:190px;top:685px;font-size:20px;"><strong>REGIONAL TRAINING CENTER - ILIGAN</strong></p>
<p style="position:absolute;left:255px;top:710px;font-size:17px;"><strong>IDENTIFACTION CARD FORM</strong></p>

<div style="position:absolute;left:22px;top:755px"><input type="text" style="text-align:center;height:15px;width:263px;font-size:12px;border:none;"value="{{strtoupper($reservation_all->res_fname)}}&nbsp;&nbsp;{{ucfirst(strtoupper(substr($reservation_all->res_mname,0,1)))}}.&nbsp;&nbsp;{{strtoupper($reservation_all->res_lname)}}&nbsp;&nbsp;{{strtoupper($reservation_all->res_extension)}}"></div>
<div style="position:absolute;left:22px;top:780px;background-color: lightgray;height:20px;width:274px;text-align: center;font-size:12px">FULL NAME</div>
<p style="position:absolute;left:355px;top:750px;font-size:12px;">{{strtoupper($reservation_all->res_birthmonth)}}&nbsp;{{strtoupper($reservation_all->res_birthday)}}&nbsp;{{strtoupper($reservation_all->res_birthyear)}}</p>
<div style="position:absolute;left:298px;top:780px;background-color: lightgray;height:20px;width:213px;text-align: center;font-size:12px">BIRTHDATE</div>

 <div style="position:absolute;left:22px;top:805px"><input type="text" style="text-align:center;height:15px;width:263px;font-size:10px;border:none;"value="{{strtoupper($reservation_all->res_street)}}&nbsp;{{strtoupper($reservation_all->res_barangay)}}&nbsp;{{strtoupper($reservation_all->res_city)}}&nbsp;{{strtoupper($reservation_all->res_province)}}"></div>
<div style="position:absolute;left:22px;top:830px;background-color: lightgray;height:20px;width:274px;text-align: center;font-size:12px">HOME ADDRESS</div>
<p style="position:absolute;left:365px;top:800px;font-size:12px;">{{strtoupper($reservation_all->res_contact)}}</p>
<div style="position:absolute;left:298px;top:830px;background-color: lightgray;height:20px;width:213px;text-align: center;font-size:12px">CONTACT NUMBER</div>
<div style="position:absolute;left:22px;top:855px"><input type="text" style="text-align:center;height:15px;width:263px;font-size:12px;border:none;"value="{{strtoupper($reservation_all->res_parent)}}"></div>
<div style="position:absolute;left:22px;top:880px;background-color: lightgray;height:20px;width:274px;text-align: center;font-size:12px">PARENT/GUARDIAN/SPOUSE</div>
<p style="position:absolute;left:365px;top:850px;font-size:12px">{{$reservation_all->res_parentcon}}</p>
<div style="position:absolute;left:298px;top:880px;background-color: lightgray;height:20px;width:213px;text-align: center;font-size:12px">CONTACT NO#</div>
 <div style="position:absolute;left:22px;top:905px"><input type="text" style="text-align:center;height:15px;width:263px;font-size:10px;border:none;"value="{{strtoupper($reservation_all->res_parentmailbar)}}&nbsp;{{strtoupper($reservation_all->res_parentmailcit)}}&nbsp;{{strtoupper($reservation_all->res_parentmailpro)}}"></div>
 <div style="position:absolute;left:22px;top:930px;background-color: lightgray;height:20px;width:274px;text-align: center;font-size:12px">HOME ADDRESS</div>
<!-- <p style="position:absolute;left:20px;top:970px;font-size:10px;">{{strtoupper($reservation_all->res_qualification)}}</p> -->
<div style="position:absolute;left:21px;top:970px"><input type="text" style="text-align:center;height:15px;width:267px;font-size:10px;border:none;"value="{{strtoupper($reservation_all->res_qualification)}}"></div>
 
<p style="position:absolute;left:22px;top:940px;font-size:12px;"><strong>QUALIFICATION:</strong></p>
<p style="position:absolute;left:365px;top:990px;font-size:10px;"><strong>Signature here</strong></p>
<p style="position:absolute;left:610px;top:840px;font-size:20px;"><strong>2X2</strong></p>
<p style="position:absolute;left:580px;top:970px;font-size:13px;"><strong>{{ucfirst(strtoupper(substr($reservation_all->res_lname,0,1)))}}{{ucfirst(strtoupper(substr($reservation_all->res_fname,0,1)))}}{{ucfirst(strtoupper(substr($reservation_all->res_mname,0,1)))}}-{{substr($reservation_all->res_birthyear,-2)}}-{{$curYear}}-{{$reservation_all->autoid}}</strong></p>
<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
</script>

</body>
</html>