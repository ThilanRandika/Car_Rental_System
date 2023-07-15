<!DOCTYPE html>
<html lang="en">
<head>
    <title>cars</title>
    <script src="https://kit.fontawesome.com/cd17775da3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Styles/cars.css">
    <link rel="stylesheet" href="Styles/navbar.css">
</head>
<body>
    <!-- Navigation bar  -->
    <nav>
        <div class="logo">
          <a href="home_registeredUser.php">
            <img src="Assets/Images/Logo.png" alt="Logo" width="100px" height="100px">
          </a>
        </div>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
        <ul class="menu">
          <li><a class="active" href="home_registeredUser.php">Home</a></li>
          <li><a href="reserve_page/main.php">Cars</a></li>
          <li><a href="feedback.php">Feedback</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <i onclick="location.href='Customer_profile.php';" class="fa-solid fa-user acount_icon"></i>
    </nav>

    <div class="allContentsOfCategoriesList">
        <i class="fa-sharp fa-solid fa-square-caret-right" id="backBtn"></i>
        <div class="car_categories">
            <div class="threeCategories">
              <div class="category">
                <img src="Assets\Images\hatchback.png" alt="Hatchback">
                <h2>Hatchback</h2>
              </div>
              <div class="category">
                <img src="Assets\Images\suv.png" alt="SUV">
                <h2>SUV</h2>
              </div>
              <div class="category">
                <img src="Assets/Images/sports.jpg" alt="Sports">
                <h2>Sports</h2>  
              </div>
            </div>
            <div class="threeCategories">
              <div class="category">
                <img src="Assets\Images\electric.jpg" alt="Electric">
                <h2>Electric</h2>
              </div>
              <div class="category">
                <img src="Assets\Images\sedan.jpg" alt="Sedan">
                <h2>Sedan</h2>
              </div>
              <div class="category">
                <img src="Assets/Images/offroad.jpeg" alt="Off-Road">
                <h2>Off-Road</h2>  
              </div>  
            </div>
            <div class="threeCategories">
                <div class="category">
                  <img src="Assets\Images\convertiable.jpg" alt="Convertible">
                  <h2>Convertible</h2>
                </div>
                <div class="category">
                  <img src="Assets\Images\minivan.png" alt="Minivan">
                  <h2>Minivan</h2>
                </div>
                <div class="category">
                  <img src="Assets/Images/luxury.jpg" alt="Luxury">
                  <h2>Luxury</h2>  
                </div>
            </div>
        </div>
        <i class="fa-sharp fa-solid fa-square-caret-right" id="nextBtn"></i>
    </div>

    <section>
      <?php
        require "config.php";
        echo "<h2>All Cars</h2>";
        $sql = "SELECT * FROM car WHERE Availability='Yes'";
        $result = $con -> query($sql);
        if ($result->num_rows > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='car' id='car'>
              <div class='car_heading'>" . $row['Brand'] . " " . $row['model'] . "<br> </div>
              <div class ='car_details'>
                <div class = 'details'>
                  <span>Color : </span>" . $row['Color'] . "<br> <br>
                  <span>Type: </span>" . $row['Type']. "<br> <br>
                  <span>Price per day:</span>". $row['Price_per_day'] . "<br> <br>
                  <span>YOM: </span>" . $row['YOM']. "<br> <br>
                  <span>Registration Number: </span>" . $row['reg_no']. "<br> <br>
                  <span>Transmission: </span>" . $row['transmission']. "<br> <br>
                  <span>Fuel Type: </span>" . $row['fuel_type']. "<br> <br>
                  <span>Engine (cc): </span>" . $row['engine_cc']. "<br> <br>
                  <span>options: </span>" . $row['options']. "<br> <br>
                </div>
                <div class='image'>
                  <image class='car_photo' src='Assets\Images\luxury.jpg'>
                </div>
              </div>
              <div class='when_details_hidden' id='when_hidden'>
                <image class='car_photo' src='Assets\Images\luxury.jpg'>
              </div>
            </div>";
          }
        }
      ?>
    </section>

    <script src="JS\cars.js"></script>

</body>
</html>