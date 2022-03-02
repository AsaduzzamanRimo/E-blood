<?php
include_once("config.php");
$id=$_GET['id'];
$result=mysqli_query($con,"SELECT * FROM donorinfo WHERE id=$id");
while($res =mysqli_fetch_array($result))
{
	$name=$res['name'];
	$pnumber=$res['phonenumber'];
	$bgroup=$res['bloodgroup'];
	$email=$res['email'];
	$address=$res['address'];
	$bamount=$res['bloodamount'];

}

?>
<form ation="profileedit.php" method="post">
<input type="text" name="name" value="<?php echo $name;?>"/>
<input type="text" name="phonenumber" value="<?php echo $pnumber;?>"/>
<input type="text" name="bloodgroup" value="<?php echo $bgroup;?>"/>
<input type="email" name="email" value="<?php echo $email;?>"/>
<input type="text" name="address" value="<?php echo $address;?>"/>
<input type="number" name="bamount" value="<?php echo $bamount;?>"/>
<input type="text" name="id" value="<?php echo $id;?>"hidden/>
<input type="submit" name="update" value="update"/>
</form>
<?php
if(isset($_POST["update"]))
{
	$name=$_POST['name'];
	$phonenumber=$_POST['phonenumber'];
	$bloodgroup=$_POST['bloodgroup'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$bamount=$_POST['bamount'];
	$sql=mysqli_query($con,"update donorinfo SET id='$id',name='$name',phonenumber='$phonenumber',bloodgroup='$bloodgroup',email='$email', address='$address',bloodamount='$bamount' WHERE id=$id");
	header("Location:donorprofile.php");
}
?>