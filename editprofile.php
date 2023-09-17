<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="editprofile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
  <div class="sliderbar">
    <div class="log"></div>
    <ul class="main">
        <li class="active">
            <a href="dashboard30.html">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
        <li>
            <a href="profile.html">
            <i class="fas fa-user"></i>
            <span>Profile</span>
            </a>
        </li>
        <!-- <li>
            <a href="">
            <i class="fas fa-chart-bar"></i>
            <span>Statistic</span></a>
        </li> -->
        <li>
            <a href="update.html">
            <i class="fas fa-tachometer-alt"></i>
            <span>Update</span></a>
        </li>
        <li>
            <a href="order.html">
            <i class="fas fa-tachometer-alt"></i>
            <span>Order</span>
        </a>
        </li>
        <li>
            <a href="faq.html">
            <i class="fas fa-question-circle"></i>
            <span>FAQ</span></a>
        </li>
        <li>
            <a href="setting.html">
            <i class="fas fa-cog"></i>
            <span>Settings</span></a>
        </li>
        <li class="logout"onclick="logout()" id="logoutLink">
            <a href="">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
        </li>
    </ul>
  </div> 
  <div class="maincontent">
    <div class="headerwrapper">
        <div class="headertitle">
            <span>User</span>
            <h2>dashboard</h2>
        </div>
        <div class="userinformation">
            <div class="searchbox">
            <i class="fa-solid fa-search"></i>
            <input type="text" placeholder="Search">
        </div>
            <img src="profile.jpg" alt="">
    </div>

    </div>
   
    <header>
        <h1>Edit Profile</h1>
    </header>
    <main>
        <section class="edit-profile-form">
            <h2>Edit Your Profile</h2>
            <form id="profileForm" action="editprofiledb.php" method="POST">
                <div class="form-group">
                    <label for="fullName"> Current Full Name:</label>
                    <input type="text" id="fullName" name="cfullName" required>
                </div>
                <div class="form-group">
                    <label for="fullName">Full Name:</label>
                    <input type="text" id="fullName" name="fullName" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="location">Phone Number:</label>
                    <input type="text" id="phone" name="Phonenumber">
                </div>
                <button name="submit">sub</button>
                <!-- Add more user profile fields here -->
                <!-- <button  type="submit">Save Changes</button> -->
            </form>
        </section>
    </main>
    <script src="editprofile4.js"></script>
    </div>
   
  </div> 
  <script src="form.js"></script>
</body>
</html>