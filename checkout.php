<!DOCTYPE html>

<?php
include("functions/functions.php")
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OFS HomePage</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.php">OFS Home</a>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="customer_login.php">Log in</a>
                    </li>
                    <li>
                        <a href="about/aboutus.php">About Us</a>
                    </li>
                    <li>
                        <a href="contact/contact.html">Contact Us</a>
                    </li>

                    <li>
                      <div id="form">
                          <form method="get" action="results.php" enctype="multipart/form-data">
                            <input type="text" name="user_query" placeholder="Search a product" / >
                            <input type="submit" name="search" value="Search"/>
                        </form>
                    </li>

                    <li>
                          <a href="shoppingcart.php">Cart <span class="glyphicon glyphicon-shopping-cart"> <?php total_items(); ?>

                          Price: <?php total_price();  ?>

                          </span></a>
                  </li>


                  <!-- Need help with this part-->
                  <!--Not sure where to place this section in our nav bar, this displays "Weclcome username or guest"-->
                  <li>
                    <?php
          					if(isset($_SESSION['customer_email'])){
          					echo "<b>Welcome:</b>" . $_SESSION['customer_email'];
          					}
          					else {
          					echo "<b>Welcome Guest:</b>";
          					}
          					?>

                  </li>
                  <!---ends here-->




                </ul>

            <!-- /.navbar-collapse -->
        </div>



        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

      <?php cart(); ?>

        <div class="row">

            <div class="col-md-3">
                <p><center><img src = "images/logo.png" style = "width:200px;height:100px;"></center></p>
                <center><p class="lead">Products</p></center>
                <?php getCats(); ?>

                <!--
                <div class="list-group">
                    <?php getCats(); ?>
                    <a href="fruits.html" class="list-group-item">Fruits</a>
                    <a href="vegetables.html" class="list-group-item">Vegetables</a>
                    <a href="dairy.html" class="list-group-item">Dairy</a>
                    <a href="nutsAndSeeds.html" class="list-group-item">Nuts and Seeds</a>
                    <a href="meats.html" class="list-group-item">Meats</a>
                    <a href="snacks.html" class="list-group-item">Snacks</a>
                </div>
              -->
            </div>

                    <!-- When user clicks on checkout button, if user is not logged in, open login page. If user is logged in, open payment page-->
                           <div class="col-sm-4 col-lg-4 col-md-4">
                                   <?php
                                   if(!isset($_SESSION['customer_email'])){

                                     include("customer_login.php");
                                   }
                                   else {

                                   include("payment.php");

                                   }

                                   ?>
                         </div>
                     </div>

    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <center><p>CS160 &copy; OFS Team One 2017</p></center>
                </div>
                <div>
                  <center><img src = "images/heart.png" style = "width:90px;height:80px;"></center>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
