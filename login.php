<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signcss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body><div class="loginbox">
    <!-- <div class=" backhead"><i class="fa-solid fa-arrow-left"></i></div> -->


    <h1> Welcome to Agriexchangecrops</h2>
    <h3> LOGIN</h3>
    
    <form id="registration" action = "loginn.php" method ="POST" > 
        <div class="inputgroup">
    <label for=""> Email </label>
    <input type="text" name="email" placeholder="First name" id="contact-email" onkeyup="validateemail()">
    <span id = "email-error"></span>
</div>

<div>
    <label for=""> Password</label>

    <input type="text" name="password" placeholder="Password" class="name">
</div>
    <button onclick = " return validatesubmittt()">Login </button>
    <span id="submit-error" style="color: red;"> </span>
</form> 
<div>
<p class="par">Not have an account? <a href="newuser.php"> Sign Up Here</a></p>
</div>
</div>
<script src="form.js" ></script>
</body>
</html>