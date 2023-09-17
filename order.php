<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="orderr.css">
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
            <a href=""onclick="logout()" id="logoutLink">
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
    <!-- <script>
        var orders = [];

        function submitOrder() {
            var buyerName = document.getElementById("buyerName").value;
            var selectedCrop = document.getElementById("crop").value;
            var quantity = document.getElementById("quantity").value;
            var price = document.getElementById("price").value;
            var notes = document.getElementById("notes").value;
            var selectedImage = document.getElementById("cropImage").files[0];

            if (buyerName && selectedCrop && quantity && price && selectedImage) {
            var reader = new FileReader();

            reader.onload = function(event) {
                var base64Image = event.target.result;

                var order = {
                    buyerName: buyerName,
                    selectedCrop: selectedCrop,
                    quantity: quantity,
                    price: price,
                    notes: notes,
                    selectedImage: base64Image
                };

                orders.push(order);

                // Save orders to sessionStorage
                localStorage.setItem("orders", JSON.stringify(orders));

                // Redirect to the respective crop page
                if (selectedCrop === "Beans") {
                    window.location.href = "ibishyimbobuy.html";
                } else if (selectedCrop === "maize") {
                    window.location.href = "ibigoribuy.html";
                }
            };

            reader.readAsDataURL(selectedImage);
        } else {
            alert("Please fill in all fields and select an image.");
        }
        }
    </script> -->
</head>
<body>
    <form action="orderdb.php" method="POST">
    <div class="order-form">
        <h2>Place Your Order</h2>
        <div class="form-group">
            <label for="buyerName">Write Full Name:</label>
            <input type="text" id="buyerName" name="buyerName" placeholder="Enter Full name">
        </div>
        <div class="form-group">
            <label for="crop">Categories:</label>
            <select id="crop" name="categories">
                <option  value="categories">sectect Categories</option>
                <option name="Farmer" value="Farmer">Farmer</option>
                <option name="buyer" value="Business man">Buyer</option>
                
            </select>
        </div>


        <div class="form-group">
            <label for="crop">Select Crop:</label>
            <select id="crop" name="crop">
                <option  value="beans">sectect Crops Name</option>
                <option  value="Ibigori">Ibigori</option>
                <option  value="ibishyimbo">ibishyimbo</option>
                <option   value="ibirayi">Ibirayi</option>
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="text" id="quantity" name="quantity" placeholder="Enter quantity">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" placeholder="Enter price">
        </div>
        <div class="form-group">
            <label for="notes">Additional Notes:</label>
            <textarea id="notes" name="notes" placeholder="Enter additional notes"></textarea>
        </div>
        <div class="form-group">
            <label for="cropImage">Crop Image:</label>
            <input name="productimage" type="file" id="cropImage">
        </div>
        <button name="submitttt">Place Order</button>
    </div>
    </form>
 <script src="form.js"></script>
</body>
</html>