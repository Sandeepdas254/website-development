
<?php
include('B1.php');
if(isset($_POST['submit']))
{
    $NAME=$_POST['NAME'];
    $MOBILENUMBER=$_POST['MOBILENUMBER'];
    $MAILID=$_POST['MAILID'];
   
    $PAYMENT=$_POST['PAYMENT'];
}
$abd=mysqli_query($con,"insert into food values('$NAME','$MOBILENUMBER','$MAILID','$PAYMENT')");
?>
