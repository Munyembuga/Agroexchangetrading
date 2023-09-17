<?php

require ("dbconnect.php");

    $fname = $_POST['buyerName'];
    $categories = $_POST['categories'];
     $crop = $_POST['crop'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $notes = $_POST['notes'];
    $productimage = $_FILES['productimage'];

    $image = uniqid("productimage_") . ".jpg";



        // if($hobby == "Cooperative" || $hobby == "Group farmer" || $hobby == "self farme" )
        // {
       
        // $_SESSION['Register Account Successful'] = true;
        // header("location: homepage.php");
        // }
        // else
        // {
        //     $sqll = "INSERT INTO buyertable (Full_name,Phone_number,Email,Message_user,Country,Province,District,Sectors,Cell,Village,categories,Passwords) values('$fname','$phone','$email','$message','$country','$province','$District','$Sector','$celle','$Village','$hobby','$password')";
        //     $resultt = mysqli_query($connect,$sqll);   
        // }
    
     if(move_uploaded_file($productimage,"images/" .$image)){
    if(isset($_POST['submitttt'])){
    $sql4 = "INSERT INTO oder(Full_name,Categoties,Name_crops,Quantity,Price,Additional_note,Image) values('$fname','$categories','$crop','$quantity','$price','$notes','$image')";
    $result4 = mysqli_query($connect,$sql4);
    header("location:order.php");
}}
//  }
// else{
//     echo "invalid";
// }
?>