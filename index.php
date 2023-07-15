<!DOCTYPE html>
<html lang="en">
<head>
    <title>Drive Way Car Rentals</title>
    <script src="https://kit.fontawesome.com/cd17775da3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Styles\style.css">
    <link rel="icon" href="Assets\Images\Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="Styles/navbar.css">
</head>
<body>
  <div class="background1">   <!-- Added first background image to this division  -->

    <!-- Navigation bar  -->
    <nav>
      <div class="logo">
        <a href="index.php">
          <img src="Assets/Images/Logo.png" alt="Logo" width="100px" height="100px">
        </a>
      </div>
      <input type="checkbox" id="menu-toggle">
      <label for="menu-toggle" class="menu-icon">&#9776;</label>
      <ul class="menu">
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="reserve_page\main.php">Cars</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="contact.php">Contact Us</a></li> 
        
      </ul>
      <button id="login_btn" onclick="location.href='login.php';" >Login</button>
    </nav>

    <!-- First part of the home page  -->
    <div class="container1">
      <h1>Drive Way Car Rentals</h1>
      <p>Rent a car anywhere <br> Sri Lanka...</p>
      <button>. Reserve Now >> .</button>
    </div>
    
  </div>



  <!-- Third part of the home page  -->
  <div class="background3">
    <div class="container_bg3">
      <h1>Best Prices in Sri Lanka</h1>
      <p>
        Best price guarantee - in the unlikely event
        you find a lower Hertz price, <br>we'll refund the
        difference
        <br>*No cancellation or change fees* <br>
        *When the booking is cancelled within two
        days of being made. <br>
        No credit card fees
      </p>
    </div>
  </div>

  <!-- Fourth part of the home page -->
  <section class="categoriesScrollListSection">
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
    <div class="viewall_button">
      <button onclick="location='reserve_page/main.php'">view all</button>
    </div>
  </section>
  <script src="JS\cars.js"></script>

  <!-- Fifth part of the home page -->
  <div class="background5">
    <div class="bg5contents">
      <h1>More than 5000 people are using our services</h1>
      <p>Contact us via our web site & experience our amazing customer service...</p>
      <button onclick="location.href='contact.php'">. Contact us now .</button>
    </div>
  </div>

  <!-- sixthh part of the home page -->
  <div class="background6">
    <div class="bg6_contents">
      <div class="bg6_header">
        <h1>4 Simple steps to rent a car!</h1>
      </div>
      <div class="bg5_body">
        <div class="step1">
          Set Date & Location
        </div>
        <div class="step2">
          Choose a car_
        </div>
        <div class="step3">
          Make a reservation
        </div>
        <div class="step4">
          Enjoy your ride
        </div>
      </div>
    </div>
  </div>


  <footer>
  <div class="top-section">
    <img src="Assets/Images/Logo.png" alt="Company Logo">
    <h3>Drive Way Car Rentals</h3>
  </div>
  <div class="subtopics">
  <div class="contact-details">
    <h4>Contact Us</h4>
    <p>123 Main Street, Kaduwela</p>
    <p>Phone: 0112233676</p>
    <p>Email: drivewaycarrentals.com</p>
  </div>
  <div class="newsletter">
    <h4>Newsletter</h4>
    <p>Subscribe to our newsletter for updates.</p>
    <a href="contact.html">Contact Us</a>
  </div>
  <div class="customer-links">
    <h4>Customer Links</h4>
    <ul>
      <li><a href="#">FAQ</a></li>
      <li><a href="#">latest cars</a></li>
      <li><a href="#">Terms &amp; Conditions</a></li>
    </ul>
  </div>
  </div>
  <hr>
  <p>&copy; 2023 Company Name. All rights reserved.</p>
</footer>

<script src="JS\app.js"></script>

</body>
</html>