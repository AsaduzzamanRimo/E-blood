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
  	 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
      <div class="container">
         <a class="navbar-brand" href="homepage.php"><span style="color: red">E-BLOOD</span></a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav nav ml-auto">
           
           <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Donors by Groups
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="anegative.php"> A negative(-)</a>
                                        <a class="dropdown-item" href="apositive.php">A positive(+)</a>
                                        <a class="dropdown-item" href="bnegative.php">B negative(-)</a>
                                        <a class="dropdown-item" href="bpositive.php">B positive(+)</a>
                                        <a class="dropdown-item" href="abnegative.php">AB negative(-)</a>
                                        <a class="dropdown-item" href="abpositive.php">AB positive(+)</a>
                                        <a class="dropdown-item" href="onegative.php">O negative(-)</a>
                                        <a class="dropdown-item" href="opositive.php">O positive(+)</a>
                                        
                                    </div>
                                </li>
           
            <li class="nav-item"><a href="bloodrequest.php" class="nav-link"><span>Blood Request</span></a></li>
            <li class="nav-item"><a href="signout.php" class="nav-link"><span>Sign Up</span></a></li>
           
          </ul>
        </div>
      </div>
    </nav>
	  
	  <section class="hero-wrap js-fullheight" style="background: white;" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
          <div class="col-md-12 pt-5 ftco-animate">
          	<div class="p-5" style="background: gray;">
<?php
include_once("config.php");
$result=mysqli_query($con,"SELECT * FROM donorinfo where bloodgroup='AB positive(+)'");

?>

    <br>
    <table align="center" width="80%" style=" border-radius: 20px 20px 20px 20px; font-size:22px;background-color: #eaeae1 ;">
      <tr>
        <th>
          <center>
          <span style="color: green;">Donor list by Blood Group</span>
        </center>
        </th>
      </tr>
    </table>
    <hr>
  
    <center>
      <table border="1" style="font-size: 16px; background:#f5f5f0; bottom: 1px solid;color: black; font-family: Helvetica;text-align: center;" width="80%;" <tr><th>Name</th><th>Blood Group</th><th>Contract number</th><th>Email</th><th>Address</th><th>Blood amount</th></tr>
  
          <?php
              while($res = mysqli_fetch_array($result))
          {
            echo "<tr><td>".$res['name']."</td>";
            echo "<td>".$res['bloodgroup']."</td>";
            echo "<td>".$res['phonenumber']."</td>";
            echo"<td>".$res['email']."</td>";
             echo"<td>".$res['address']."</td>";
              echo"<td>".$res['bloodamount']."</td></tr>";
            

          } 
              

          ?>
          </table>
      
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