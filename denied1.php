<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Set the page to the width of the device and set the zoon level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>Timothy Tan</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/main.css">
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>
          <a class="navbar-brand" href="#">Timothy Tan</a>
        </div>

        <div class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="sub/gallery/aboutme.html">About Me</a></li>
            <li><a href="sub/gallery/contact.html">Contact</a></li>
            <li><a href="#cart">Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
  </div>
</div>

<div class="content-block-one">
<p> </p>
<br>
	<div class="container">

          <form class="form-signin" method="get" action="input.php">
            <h2 class="form-signin-heading">Sign Up Form</h2>
            <input type="text" id="inputfname" class="form-control" placeholder="First Name" name="reg_fname" required />
            <input type="text" id="inputlname" class="form-control" placeholder="Last Name" name="reg_lname" required />
            <input type="text" id="email_addr" class="form-control" placeholder="E-mail Address" name="reg_email" required />
            <input type="text" id="phone_num" class="form-control" placeholder="Phone #" name="reg_phone" required />
            <input type="date" id="b_day" class="form-control" placeholder="DOB" name="reg_bday" required />
            <input type="text" id="gender_" class="form-control" placeholder="Gender" name="reg_gender" required />
            <br />
            <input type="password" id="pass_wrd" class="form-control" placeholder="Password" name="reg_pass" required />
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit" id="submitButton">Sign Up!</button>
        </form>

<form class="form-signin" method="get" action="login.php">
   <h2 class="form-signin-heading">Login Here</h2>
            <input type="text" id="email_addr" class="form-control" placeholder="E-mail Address" name="reg_email" required />
            <input type="password" id="pass_wrd" class="form-control" placeholder="Password" name="reg_pass" required />
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit" id="submitButton">Welcome Back!</button>
        </form>
<br>
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/city2.png" alt="Chania">
      <div class="carousel-caption">
        <h3>New York City</h3>
        <p>Interesting picture of NYC</p>
      </div>
    </div>

    <div class="item">
      <img src=" img/city1.png" alt="NYC">
      <div class="carousel-caption">
        <h3>Shanghai</h3>
        <p>A cool picture of Shanghai.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/Wallpapershirtdesign.png" alt="Urban Jungle">
      <div class="carousel-caption">
        <h3>Urban Jungle</h3>
        <p>A piece I made in 2015</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="content-block-one">
  <h1> Some interesting images </h1>
  <p>Cities, cities, and more cities!</p>
</div>





  <div class="content-space-two">
                <div class="text-center">
            <h1>Even more cities</h1>
                    <div class="page-break"></div>
                <p>I love cities</p>
                </div>
            </div>
  </div>
<!--/Main parallax wrapper-->

<div class="content-block-one">

    <div class="container">

      

      </div> 
  <h1> Follow me at: </h1>
  <p> 
    <a class="fa fa-behance-square" href="https://www.behance.net/DefyGravity"></a>       
          
    <i class="fa fa-facebook"></i>       
    <a class="fa fa-linkedin" href = "https://www.linkedin.com/in/timothy-tan-745683106/"></a>
    <i class="fa fa-google-plus"></i>    
    <a class="fa fa-instagram" href = "https://www.instagram.com/lys_dexia/"></a> 

     </p>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/eaea0243f3.js"></script>


</body>
</html>