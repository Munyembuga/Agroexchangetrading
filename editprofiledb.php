<?php
require ("dbconnect.php");
if(isset($_POST['submit']))
{
 
$fullName= $_POST['fullName'];
$email= $_POST['email'];
$Phonenumber = $_POST['Phonenumber'];

$cfullName= $_SESSION['cfullName'];

$sqlll = "UPDATE buyertable SET Full_name ='$fullName' and Email ='$email' and  set Phone_number='$Phonenumber' where Full_name = $cfullName ";
$result = mysqli_query($sqlll,$connect);
}


?>