<!DOCTYPE html>
<html>
<head>
<title></title>
<?php include 'link/links.php'; ?>
<?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#sypmid">symptoms</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
     
    </ul>
    
  </div>
</nav>
<div class="main_header">
  <div class="row w-100 h-100">
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-lg-2">
      <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
        <img src="images/1.png" width="300" height="300">
      </div>
    </div>
    <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-lg-1">
      <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
        <h1> Let's Stay  Safe  and  Fight  Together  Against C<span class="corona_rot"><img src="images/o.png"  width="40" height="40"></span>r<span class="corona_rot"><img src="images/o.png"  width="40" height="40"></span>na Virus</h1>
      </div>
    </div>
  </div>
  </div>
  <section class="corona_update container-fluid">
    <div class="mb-3">
      <h3 class="text-upperase text-center">COVID-19 UPDATES</h3>
      </div>
      <div class="table-responsive">
        <table class=" table table-bordered table-striped text-center" id="tbval">
          <tr>
            <th>Country</th>
            <th>TotalConfirmed</th>
            <th>TotalRecovered</th>
            <th>TotalDeaths</th>
            <th>NewConfirmed</th>
            <th>NewRecovered</th>
            <th>NewDeaths</th>
          </tr>
        </table>
      </div>
  </section>
  <!--**********************about***********-->
  <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="section_header text-center mb-5 mt-4">
      <h1>About Corona Virus</h1>
    </div>
     <div class="row pt-5">
      <div class="col-lg-5 col-md-6 col-12 ml-5">
        <img src="images/about corona.jpg" class="img-fluid">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2>About Corona Virus(COVID-19)</h2>
        <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
Most people who fall sick with COVID-19 will experience mild to moderate symptoms and recover without special treatment.</p>
        <p>The virus that causes COVID-19 is mainly transmitted through droplets generated when an infected person coughs, sneezes, or exhales. These droplets are too heavy to hang in the air, and quickly fall on floors or surfaces.
You can be infected by breathing in the virus if you are within close proximity of someone who has COVID-19, or by touching a contaminated surface and then your eyes, nose or mouth.</p>
      </div>
     </div>
  </div>
  <!--**************Symptoms**************-->
  <div class="container-fluid  pt-5 pb-5" id="sypmid">
    <div class="section_header text-center mb-5 mt-4">
      <h1>Coronavirus symptoms</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/1.jpg" class="img-fluid bg-info" width="120" height="120">
          </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/2.jpg" class="img-fluid bg-info" width="120" height="120">
          </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/3.jpg" class="img-fluid bg-info" width="120" height="120">
          </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/4.jpg" class="img-fluid bg-info" width="120" height="120">
          </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/5.jpg" class="img-fluid bg-info" width="120" height="120">
          </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/6.jpg" class="img-fluid bg-info" width="120" height="120">
          </figure>
        </div>
      </div>
    </div>
  </div>
  <!--**************prevention**************-->
  <div class="container-fluid sub_section  pt-5 pb-5" id="preventid">
    <div class="section_header text-center mb-5 mt-4">
      <h1>Steps For Prevention Against Coronavirus</h1>
    </div>
      <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/p1.jpg" class="img-fluid bg-info" width="200" height="200">
          </figure>

        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/p2.jpg" class="img-fluid bg-info" width="200" height="200">
          </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/p3.jpg" class="img-fluid bg-info" width="200" height="200">
          </figure>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/p4.jpg" class="img-fluid bg-info" width="200" height="200">
          </figure>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/p5.jpg" class="img-fluid bg-info" width="200" height="200">
          </figure>
  </div>
  <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/p6.jpg" class="img-fluid bg-info" width="200" height="200">
          </figure>
        </div>
      </div>
    </div>
  </div>
   <!--**************Contact us**************-->
  <div class="container-fluid  pt-5 pb-5" id="contactid">
    <div class="section_header text-center mb-5 mt-4">
      <h1>CONTACT US</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">

          <form action="" method="POST">
  <div class="form-group">
    <label >Username</label>
    <input type="text" class="form-control" name="Username" placeholder="name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >Email </label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
  </div>
  <div class="form-group">
    <label >Mobile</label>
    <input type="number" class="form-control" name="number" placeholder="number" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Select Symptoms</label><br>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronsym[]"value="cold">
    <label class="custom-control-label" for="customcheckbox1">cold</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronsym[]"value="fever">
    <label class="custom-control-label" for="customcheckbox2">fever</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronsym[]"value="breath">
    <label class="custom-control-label" for="customcheckbox3">Breath problem</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronsym[]"value="weak">
    <label class="custom-control-label" for="customcheckbox4">Weakness</label>
    </div>





  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Describe your situtaion</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
          
        </div>
        
      </div>
      
    </div>
  </div>
  <!-- ******************footer*****************-->
  <footer class="mt-5">
    <div class="footer_style text_white text-center container-fluid">
      <p> copyright by SS NIT Srinagar</p>
      
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function fetch(){
      $.get("https://api.covid19api.com/summary",

        function(data){
         // console.log(data['Countries'].length);
         var tbval=document.getElementById('tbval');
         for(vr i=1;i<(data['Countries'].length);i++)
         {
          var x=tbval.insertRow();
          x.insertCell(0);
          tbval.rows[i].cells[0].innerHtml=data['Countries'][i-1]['Country'];
          x.insertCell(1);
          tbval.rows[i].cells[1].innerHtml=data['Countries'][i-1]['TotalConfirmed'];
          x.insertCell(2);
          tbval.rows[i].cells[2].innerHtml=data['Countries'][i-1]['TotalRecovered'];
          x.insertCell(3);
          tbval.rows[i].cells[3].innerHtml=data['Countries'][i-1]['TotalDeaths'];
          x.insertCell(4);
          tbval.rows[i].cells[4].innerHtml=data['Countries'][i-1]['NewConfirmed'];
          x.insertCell(5);
          tbval.rows[i].cells[5].innerHtml=data['Countries'][i-1]['NewDeaths'];
         }
        }


        )
    }
  </script>
</body>
</html>
<?php

include 'dbcon.php';
if(isset($_POST['submit']))
{
  $Username=$_POST['Username'];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $symp=$_POST['coronsym'];
  $msg=$_POST['msg'];
  $chk = "";
  foreach($symp as $chk1)
  {
    $chk .= $chk1."," ;
  }
  $insertquery = " insert into coronacase(Username,email,mobile,symptoms,message) values('$Username','$email','$number','$chk','$msg') ";
  $query = mysqli_query($con , $insertquery);
  if($query){
  ?>
  <script>
    alert("insertion succesfull");
  </script>
  <?php
}
else{
  ?>
  <script>
    alert("Failed ");
  </script>
  <?php
}
}



?>