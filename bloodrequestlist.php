<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Donate Blood</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
    	input
    	{
    		width: 400px;
    		height: 28px;
    		bottom: 1px solid;
    		font-size: 14px;
    	}
    
    </style>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  	<div class="py-1 bg-black top">
      <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
          <div class="col-lg-12 d-block">
            <div class="row d-flex">
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                <span class="text">donate@gmail.com</span>
              </div>
              
              <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                <p class="mb-0 register-link"><a href="signout.php" class="mr-3">Sign Up</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="homepage.php"><span style="color: red">E-BLOOD</span></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="donorprofile.php" class="nav-link"><span>Profile</span></a></li>
	         
	          <li class="nav-item"><a href="bloodrequestlist.php" class="nav-link"><span>Blood Request list</span></a></li>
	         <li class="nav-item cta mr-md-2"><a href="donorinfo.php" class="nav-link">DONATE NOW</a></li>
	         
	        </ul>
	      </div>
	    </div>
	  </nav>
	  
	  <section  style="background: white;" >
      <div class="container">


          <div class=" pt-5 ftco-animate">
          	<div class="p-5" style="background: gray;">
               <?php
include_once("config.php");
$result=mysqli_query($con,"SELECT * FROM bloodrequestinfo order by id DESC");

?>

    <br>
    <table align="center" width="80%" style=" border-radius: 20px 20px 20px 20px; font-size:22px;background-color: #eaeae1 ;">
      <tr>
        <th>
          <center>
          <span style="color: green;">Current <span style="color: red;">Blood</span> Request list</span>
        </center>
        </th>
      </tr>
    </table>
    <hr>
  
    <center>
  
          <?php
          while($res = mysqli_fetch_array($result))
          {
            $all[] = $res;}
            foreach ($all as $res ) {
              ?>  
              
      <table style="font-size: 16px; background:#f5f5f0; bottom: 1px solid;color: black; font-family: Helvetica;" class="p-5" width="80%;">

            <tr><td><b>Blood Group: </b><?php echo $res['bloodgroup']; ?> </td></tr>
            <tr><td><b>Blood Amount(unit/bag): </b><?php echo $res['bloodamount'] ?> </td><tr>
            <tr><td><b>Donation Date: </b><?php echo $res['donationdate']?> </td></tr>
            <tr><td><b>Request From(Name): </b><?php echo $res['name']?> </td></tr>
            <tr><td><b>Patient;s Location:</b> <?php echo $res['patientlocation']?> </td></tr>
            <tr><td><b>District: </b><?php echo $res['patientdistrict']?> </td></tr>
            <tr><td><b>Contract Number:</b> <?php echo $res['phonenumber']?> </td></tr>
            <tr><td><b>More message: </b><?php echo $res['moremessage']?> </td></tr>


</table>
 <br><br>
          <?php 
        }

          ?>
      
    </center>
 
            </div>
          </div>
        </div>
      </div>
    </section>

		
  
	
  

  <!-- loader -->
  


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>