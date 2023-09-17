
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signcss.css">
    <title>Document</title>
</head>
<body>

    <div class="signupbox"> 
         <h1>Welcome to Agroexchangecrops</h1><br><br>
        <h3 >Register</h3>
    
      
       
        <form action="logg.php" method="POST">
            <div class="contenthw">
        <div class="inputgroup">
            <label for="">  Full name:</label>
            <input type="text" name="fname" placeholder="full name" id="fname-name" onkeyup = "validatename()">
            <span id = "fname-error"> </span>
        </div>
        <div class="inputgroup">
            <label for="">   Phone:</label>
            <input type="text" name="phone" placeholder=" Enter phone number" id="contact-phone" onkeyup="validatephone()">
            <span id="phone-error" ></span>
        </div>
        <div class="inputgroup">
            <label for="">   Email:</label>
            <input type="text" name="email" placeholder="email" id="contact-email" onkeyup="validateemail()" >
            <span id="email-error"> </span>
        </div>
       
        <div class="inputgroup">
            <label for=""> Your message</label>
            <textarea name="message"   rows="5" placeholder="Enter Your message" id="contact-message" onkeyup="validatemessage()">
            </textarea> <br>
            <span id = "message-error"></span>
        </div>
        <div class="inputgroup">
            <label for="">Country:</label>
            <input type="text" name="country" placeholder="enter country name"  id="contact-country" onkeyup="validatecountry()" required>
            <span id="country-error"> </span>
        </div>
        
        <div class="inputgroup">
            <label for="">  Province:</label> <br>
            <input type="text" name="province" placeholder="enter Province name"  id="contact-province" onkeyup="validateprovince()" required>
            <span id="province-error"> </span>
            
        </div>
        <div class="inputgroup">
            <label for="">District:</label>
            <input type="text" name="District" placeholder="enter District name"  id="contact-district" onkeyup="validatedistrict()" required>
            <span id="district-error"> </span>
        </div>
        <div class="inputgroup">
            <label for="">Sector:</label>
            <input type="text" name="Sector" placeholder="enter Sector name"  id="contact-sector" onkeyup="validatesector()" required>
            <span id="sector-error"> </span>
        </div>
        <div class="inputgroup">
            <label for="">Cell:</label>
            <input type="text" name="cell" placeholder="enter Cell name"  id="contact-cell" onkeyup="validatecell()" required>
            <span id="cell-error"> </span>
        </div>
        <div class="inputgroup">
            <label for="">Village:</label>
            <input type="text" name="Village" placeholder="enter Village name"  id="contact-village" onkeyup="validatevillage()" required>
            <span id="village-error"> </span>
        </div>
       
       
       
        
    

<div class="categories">
     <h4>Which categories:</h4><br>
     <select name="selectt" id="">
        <option value="which categories">select Categories</option>
        <option value="self farme">self farme</option>
        <option value="Cooperative">Cooperative</option>
        <option value="Group farmer">Group farmer</option>
        <option value="Industry">Industry</option>
        <option value="Busibessman">Busibessman</option>
     </select>
    </div>
    <label for=""> New password</label>     
    <input type="password"name= "password" placeholder=" new password"/> <br> <br>
    <label for="">Confirm password:</label>
    <input type="text" name="confirm password" placeholder="Confirm password"/><br> <br>
    <div class="Accept"><p1><input type="checkbox" name="Acceptterm" /> Accept Term & Policy </p1><br><br> </div>

<div>
  <button name="submittt" class="buttonsignup" onclick = " return validatesubmitt() "> Submitt</button>
    <span id="submit-error" style="color: red;"> </span>
</div></div>
          
        </form>
    <p>By clicking the Sign up button ,you agree to our <br>
    <a href="">Term and Condition </a> and <a href="">Police And Privancy
    </a> </p></div>
    
    <p class="par">Already have an  account ? <a href="login.php"> Login here </a></p>
   
    <script src="form.js"></script>
</body>
</html>