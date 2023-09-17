<?php
require ("dbconnect.php");
if(isset($_POST['submit']))
{

$newPassword= $_POST['newPassword'];


$currentPassword= $_SESSION['currentPassword'];
$hashedPassword = password_hash($newPassword,PASSWORD_DEFUALT);

$sqlll = "UPDATE buyertable SET Passwords ='$currentPassword'  where Passwords = $currentPassword ";
$result = mysqli_query($sqlll,$connect);
header("location:dashboard30.pgp");
}


?>