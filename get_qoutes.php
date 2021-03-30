<?php 
$Weight = 30;
$length = 40;
$width  = 20;

$total = $width + $length;
echo $total;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Level HTML Template by Tooplate</title>

    <!-- load stylesheets -->
    <script src="font-awesome-4.7.0/css/all.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">                                   <!-- Templatemo style -->
    <link rel="stylesheet" href="free.css">
    
</head>

    <body>
        <div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>
            <div class="tm-top-bar" id="tm-top-bar">
                <!-- Top Navbar -->
                <div class="container">
                    <div class="row">
                        
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand mr-auto" href="#">
                                <img src="icargoimages/cargologo.png" alt="Site logo" class="icargo__logo">
                                
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link" href="#top">Home <span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-4">About Us</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-5">Services</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="tracking_cargo.html">Track</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-6">Contact Us</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="/">Sign Up</a>
                                  </li>
                                </ul>
                            </div>                            
                        </nav> 
                    </div>
                </div>
            </div>
<!--  Getting Qoutes Section -->

            <div class="tm-section tm-bg-img" id="tm-section-1">
                <div class="tm-bg-white ie-container-width-fix-2">
                    <div class="container ie-h-align-center-fix">
                        <div class="row">
                            <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                                <form action="" method="post" class="tm-search-form tm-section-pad-2">
                                    <div class="form-row tm-search-form-row">
                                        <div class="form-group tm-form-element tm-form-element-100">
                                            <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                            <input name="pick_up" type="text" class="form-control" id="inputCity" placeholder="Origin City">
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-50">
                                            <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                            <input name="destination" type="text" class="form-control" id="inputCity" placeholder="Desitination City">
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-50">
                                            <i class="fa fa-2x fas fa-truck-loading tm-form-element-icon"></i>
                                            <input name="weight" type="text" class="form-control" id="inputCity" placeholder="Weight (kg)">
                                        </div>
                                    </div>
                                    <div class="form-row tm-search-form-row">
                                        <div class="form-group tm-form-element tm-form-element-2">                                            
                                            <i class="fa fa-2x fas fa-truck-loading tm-form-element-icon"></i>
                                            <input name="length" type="text" class="form-control" id="inputCity" placeholder="Length (cm)">
                                            <i class="fa fa-2x fas fa-truck-loading tm-form-element-icon"></i>
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-2">                                            
                                            <i class="fa fa-2x fas fa-truck-loading tm-form-element-icon"></i>
                                            <input name="width" type="text" class="form-control" id="inputCity" placeholder="Width (cm)">

                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-2">
                                            <i class="fa fa-2x fas fa-truck-loading tm-form-element-icon"></i>
                                            <input name="height" type="text" class="form-control" id="inputCity" placeholder="Height (kg)">

                                            <i class="fa fa-2x fas fa-truck-loading tm-form-element-icon"></i>
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-2">
                                            <button type="submit" name="submit" class="btn btn-primary tm-btn-search">GET PRICE</button>
                                        </div>
                                      </div>
                                      <div class="form-row clearfix pl-2 pr-2 tm-fx-col-xs">
                                          <p class="tm-margin-b-0">Get in touch with us if you have any queries and we will get back to you as soon as possible.</p>
                                          <a href="#" class="ie-10-ml-auto ml-auto mt-1 tm-font-semibold tm-color-primary">Need Help?</a>
                                      </div>
                                </form>
                                <!-- Computation For Qoutation -->
                                <?php 
                                    if (isset($_POST['submit'])){ // Computation button name
                                        $location = $_POST['destination'];
                                        $weight = $_POST['weight'];
                                        $length = $_POST['length'];
                                        $width =  $_POST['width'];  
                                        $height = $_POST['height']; 
                                        // Logistic Companies
                                        $transportify = (int)$weight * 7;
                                        $apcargo= (int)$weight * 10;
                                        $lbc = (int)$weight * 10;
                                        $capex = (int)$weight * 8;
                                        $jrs = (int)$weight * 9;
                                    }   
                                ?>
                            </div>                        
                        </div>      
                    </div>
                </div>                  
            </div>
            
 <!-- Qoutation Table  -->
 
            <div class="qoutation__table">
                <div class="qoutation__table--wrap">
                    <table style="width:50%">
                        <tr>
                        <th>Brand</th>
                        <th>Price</th>
                        </tr>
                        <tr>    
                        <td>
                            <!-- <input type="radio" name="brand" id=""><br> -->
                            <div class="qoutation__table--img">
                           <img src="icargoimages\transportify-logo-green-2.png" alt="" class="">
                            </div>
                        </td>
                        
                        <td><?php echo "P ".$transportify; ?></td>
                        </tr>
                        <tr>
                        <td>
                            <!-- <input type="radio" name="brand" id=""><br> -->
                            <div class="qoutation__table--img">
                           <img src="icargoimages\1200px-LBC_Express_2013_Logo.svg.png" alt="" class="">
                            </div>
                        </td>
                        <td><?php echo "P ".$lbc; ?></td>
                        </tr>
                        <tr>
                        <td>
                            <!-- <input type="radio" name="brand" id=""><br> -->
                            <div class="qoutation__table--imgapcargo">
                           <img src="icargoimages\AP-Cargo-Logo-White.png" alt="" class="qoutation__img--apcargo">
                            </div>
                        </td>
                        <td><?php echo "P ".$apcargo; ?></td>
                        </tr>
                        <tr>
                        <td>
                            <!-- <input type="radio" name="brand" id=""><br> -->
                            <div class="qoutation__table--img">
                           <img src="icargoimages\CaPEx-Logo.png" alt="" class="">
                            </div>
                        </td>
                        <td><?php echo "P ".$capex; ?></td>
                        </tr>
                        <tr>
                        <td>
                            <!-- <input type="radio" name="brand" id=""><br> -->
                            <div class="qoutation__table--img">
                           <img src="icargoimages\jrs-express-logo-main.png" alt="" class="">
                            </div>
                        </td>
                        <td><?php echo "P ".$jrs; ?></td>
                        </tr>
                    </table>
                    
                </div>
            </div>
            <div class="button__qoute">
            <button class="btn__booking">Book Now</button>
            </div>
                   









           
            
            <div class="footer__container">

                <div class="footer__links">
                    <div class="footer__link--wrapper">
                        <div class="footer__link--items">
                             <h2>About Us</h2>
                             <a href="/">How It Works</a>
                             <a href="/">Testimony</a>
                             <a href="/">Investments</a>
                             <a href="/">Terms Of Services</a>
                        </div>
                        <div class="footer__link--items">
                             <h2>Contact Us</h2>
                             <a href="/">How It Works</a>
                             <a href="/">Testimony</a>
                             <a href="/">Investments</a>
                             <a href="/">Terms Of Services</a>
                        </div>
                    </div>
                    <div class="footer__link--wrapper">
                        <div class="footer__link--items">
                             <h2>Others</h2>
                             <a href="/">How It Works</a>
                             <a href="/">Testimony</a>
                             <a href="/">eInvestments</a>
                             <a href="/">Terms Of Services</a>
                        </div>
                        <div class="footer__link--items">
                             <h2>Social Media</h2>
                             <a href="/">Instagram</a>
                             <a href="/">Facebook</a>
                             <a href="/">Twitter</a>
                             <a href="/">Youtube</a>
                        </div>
                    </div>
                </div>
                   
                <div class="social__media">
                    <div class="social__media--wrap">
                        <div class="footer__logo">
                            <a href="/" id="footer__logo">ICARGO</a>
                        </div>
                        <p class="website__rights">ICARGO 2021. All Rights Reserved</p>
                        <div class="social__icons">
                            <a href="/" class="social__icon--link" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="/" class="social__icon--link" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="/" class="social__icon--link" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="/" class="social__icon--link" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/popper.min.js"></script>                    <!-- https://popper.js.org/ -->       
        <script src="js/bootstrap.min.js"></script>                 <!-- https://getbootstrap.com/ -->
        <script src="js/datepicker.min.js"></script>                <!-- https://github.com/qodesmith/datepicker -->
        <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->
        <script>

        </script>             

</body>
</html>
