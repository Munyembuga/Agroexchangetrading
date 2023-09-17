<?php
include "dbconnect.php";
$email =$_POST['email'];
$password =$_POST['password'];

$sqll = " SELECT * FROM useraccount WHERE Email ='$email' and Passwords ='$password'";
$result3= mysqli_query($connect,$sqll);
$row = mysqli_fetch_array($result3);
if($result3){
    if($row=mysqli_num_rows($result3) > 0){
        echo '<script>
        alert("login successfull");
        </script>';
        header("location:dashboard30.php");
    }
    else{
        echo '<script>
        alert("invalid password and email or phone number");
        </script>';
    }
}
?>