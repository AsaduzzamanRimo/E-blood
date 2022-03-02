<?php
include_once("config.php");
if(isset($_POST["submit"]))
{
	
	$name=$_POST['name'];
	$phone=$_POST['phonenumber'];
	$bloodgroup=$_POST['bloodgroup'];
	$bloodamount=$_POST['bloodamount'];
	$patientlocation=$_POST['patientlocation'];
	$patientdistrict=$_POST['patientdistrict'];
	$donationdate=$_POST['donationdate'];
	$moremessage=$_POST['moremessage'];
$sql="INSERT INTO bloodrequestinfo(name,phonenumber,bloodgroup,bloodamount,patientlocation,patientdistrict,donationdate,moremessage) values('$name','$phone','$bloodgroup','$bloodamount','$patientlocation','$patientdistrict','$donationdate','$moremessage')";
	if(mysqli_query($con,$sql))
	{
		?>
		<script type="text/javascript">
				alert("Data is successfully added")
			</script> 
			<?php
			header ("refresh:0; url=bloodrequest.php");
	}
	else
	{
		?>
		<script type="text/javascript">
				alert("Data is not successfully added")
			</script> 
			<?php
			header ("refresh:0; url=bloodrequest.php");
	}

}
?>