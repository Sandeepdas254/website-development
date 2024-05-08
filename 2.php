
<?php

include('connect.php');
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $id=$_POST['id'];
    $address=$_POST['address'];
    $amount=$_POST['amount'];
}
$abd=mysqli_query($con,"insert into kfc values('$name','$mobile','$idd','$address','$amount')");
?>