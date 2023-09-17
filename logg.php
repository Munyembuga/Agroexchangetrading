<?php
session_start();
require("dbconnect.php");

    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $country = $_POST['country'];
    $province = $_POST['province'];
    $District = $_POST['District'];
    $Sector = $_POST['Sector'];
    $celle = $_POST['cell'];
    $Village = $_POST['Village'];
    $hobby = $_POST['selectt'];
    $password = $_POST['password'];

  
        if(isset($_POST['submittt'])){
        if($hobby == "Cooperative" || $hobby == "Group farmer" || $hobby == "self farme" )
        {
        $sql = "INSERT INTO useraccount(Full_name,Phone_number,Email,Message_user,Country,Province,District,Sector,Cell,Village,categories,Passwords) values('$fname','$phone','$email','$message','$country','$province','$District','$Sector','$celle','$Village','$hobby','$password')";
        $result = mysqli_query($connect,$sql);
        $_SESSION['Register Account Successful'] = true;
        header("location: dashboard30.php");
        }
        else
        {
            $sqll = "INSERT INTO buyertable (Full_name,Phone_number,Email,Message_user,Country,Province,District,Sectors,Cell,Village,categories,Passwords) values('$fname','$phone','$email','$message','$country','$province','$District','$Sector','$celle','$Village','$hobby','$password')";
            $resultt = mysqli_query($connect,$sqll);   
            
        header("location:dashboard30.php");
        }
    }
      
?>