<?php

include("connect.php");
ob_start();

?>


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/LOGOOO.png" type="">

  <title> Foodies </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
#submit{
  background-color: black;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 25px;
}
</style>
</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Foodies
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="book.php">Book Table <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              
            </ul>

          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Book A Table
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
          <form method="POST" action="#" id="signup-form" class="signup-form">

              <div>
                <b>
                  Fill the information:
                </b>
                <input type="text" class="form-control" placeholder="Your Name" name ="name"required>
              </div>
              <div>
                <input type="tel" class="form-control" placeholder="Phone Number" name ="phone" maxlength = "10" required>
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Your Email" name ="email" required>
              </div>
              <div>
                <b>
                  Enter your order Here:
                </b>
                <select class="form-control nice-select wide" name ="canteen">
                  <option value="" disabled selected>
                    Which Canteen you Prefer
                  </option>
                  <option value="shreji">
                    Shreeji 
                  </option>
                  <option value="Ice Burg">
                    Ice Burg
                  </option>
                  <option value="Danny's">
                    Danny's 
                  </option>
                  <option value="Nescafe">
                    Nescafe
                  </option>
                  <option value="WaghBakari">
                    WaghBakri
                  </option>
                  <option value="Sweet Spot">
                    Sweet Spot
                  </option>
                </select>
              </div>
              <div>

                <input type="tel" class="form-control" placeholder="How many person " name ="person" required>
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Enter your order here" name ="order"required>
              </div>
              <div>
                <b>
                  Enter Your Time:
                </b>
                <br>form:
                <input type="time" class="form-control" name ="stime" min="09:00" max="17:30"required > to:
                <input type="time" class="form-control" name ="etime" min="09:00" max="17:30"   required>
              </div>
            
              <div class="btn_box">
                  <input type="submit" name="submit" id="submit">
              </div>
            </form>
<?php
 if(isset($_POST['submit']))
 {
 $date=date('Y-m-d');
 $qry="insert into foodies values('"."','".$_POST['name']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['canteen']."','".$_POST['person']."','".$_POST['order']."','".$_POST['stime']."','".$_POST['etime']."','".$_POST['date']."')";
 mysqli_query($con,$qry) or die(mysqli_error());
 header('location:payment.php');
 }
 ob_flush();
 ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap">
              <img src="images/Menu.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Foodies
            </a>
            <p>
            All Charusat Canteen Booked here
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            9:00 AM to 4:30
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a><br><br>
          &copy; <span id="displayYear"></span> Distributed By
          <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->
</body>

</html>