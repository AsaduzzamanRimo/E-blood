<?php
include_once("config.php");
session_start();
if(isset($_POST["submit"]))
{
$name=$_POST['name'];
$pass=$_POST['password'];
$sql="SELECT id FROM admin where name = '$name' and password = '$pass'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $_SESSION['ID']=$row['id'];
        echo $_SESSION['ID'];
        header("Location:Admin.php");
    }
}
else
{
	?>
	<script type="text/javascript">
				alert("Username & Password invalid!pleace try again ")
			</script> 
			<?php
			header ("refresh:0; url=Adminlogin.html");

}
}
?>