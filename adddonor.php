<?php
include_once("config.php");
if(isset($_POST["submit"]))
{
	
	$name=$_POST['name'];
	$phone=$_POST['phonenumber'];
	$bloodgroup=$_POST['bloodgroup'];
	$email=$_POST['email'];
	$livingdistrict=$_POST['livingdistrict'];
	$bloodamount=$_POST['bloodamount'];
	
$sql="INSERT INTO donorinfo(name,phonenumber,bloodgroup,email,address,bloodamount) values('$name','$phone','$bloodgroup','$email','$livingdistrict','$bloodamount')";
	if(mysqli_query($con,$sql))
	{
		?>
		<script type="text/javascript">
				alert("Donation Sucessfull!")
			</script> 
			<?php
			header ("refresh:0; url=donorinfo.php");
	}
	else
	{
		?>
		<script type="text/javascript">
				alert("Donation is not successfull")
			</script> 
			<?php
			header ("refresh:0; url=donorinfo.php");
	}

}
?>