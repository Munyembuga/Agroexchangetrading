<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="updatetable.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
  <div class="sliderbar">
    <div class="log"></div>
    <ul class="main">
        <li class="active">
            <a href="index.html">
            <i class="fas fa-tachometer-alt"></i>
            <span>Home</span></a>
        </li>
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
        <li class="logout">
            <a href="" onclick="logout()" id="logoutLink">
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
    <!-- <h2>jjjjj</h2> -->
    <div class="container">
        <h1 style="color: black;"><center>Update Your Orders</center></h1>
        <table id="orderTable">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Buyer Name</th>
                    <th>Name Of Crops</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Additional Notes</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Orders will be dynamically added here -->
                <?php
                require("dbconnect.php");

                $result= mysqli_query($connect, "SELECT *FROM oder");
               while( $row = mysqli_fetch_assoc($result))
        {
                    echo "<tr> <td>" .$row['ID']."<td>".$row['Full_name']."<td>".$row['Name_crops']."<td>".$row['Quantity']."<td>".$row['Price']."<td>".$row['Additional_note']."<td><button>Edit</button> &nbsp<button>Delete</button>"."</tr>";
        }
                ?>
            </tbody>
        </table>
    </div>
    <h1 style="color: black;"><center>Update User Information</center></h1>
    </div>
 
   
  </div> 
  <script src="dashbord.js"></script>
</body>
</html>