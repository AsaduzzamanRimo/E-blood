<?php
include_once("config.php");
if(isset($_POST["submit"]))
{
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$pass=$_POST['password'];
	$enpass=md5($pass);
	$userType=$_POST['UserType'];
	$address=$_POST['Address'];
$sql="INSERT INTO registrationinfo(name,email,phone,password,UserType,address) values('$name','$email','$phone','$enpass','$userType','$address')";
	if(mysqli_query($con,$sql))
	{
		?>
		<script type="text/javascript">
				alert("Registration successfully! ")
			</script> 
			<?php
			header ("refresh:0; url=registration.html");
	}
	else
	{
		?>
		<script type="text/javascript">
				alert("Registration is not successfully!")
			</script> 
			<?php
			header ("refresh:0; url=registration.html");
	}

}
?>