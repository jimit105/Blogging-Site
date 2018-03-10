<!DOCTYPE html>
<html>
    <head>
        <?php
        include 'meta.php';
        ?>

        <title>Home Page<?php include 'title.php' ?></title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/carousel.css">

        <!-- Favicon -->
        <link rel="icon" href="images/favicon.ico">

    </head>
    <body>



      <div class="wrapper">

          <!-- SIDEBAR Starts -->
          <?php
          include 'sidebar.php';
          ?>
          
          <script>
              document.getElementById("home").classList.add("active");
          </script>

          <!-- SIDEBAR Ends -->

            <!-- PAGE CONTENT Holder Starts-->

            <div id="content" style="width: 100%;">

                <!-- NAVBAR Starts -->
                <nav class="navbar navbar-expand">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="fa fa-align-justify"></i>
                                <span></span>
                            </button>
                        </div>

                        <div class="pageCategory">
                            Home
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item"><a href="#" class="nav-link">User</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- NAVBAR Ends -->

                <!-- PAGE CONTENTS Starts -->

                <h3>Featured Posts:</h3>
                <br>

                <!-- CAROUSEL Starts -->

                <div id="carouselSlide" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#carouselSlide" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSlide" data-slide-to="1"></li>
                        <li data-target="#carouselSlide" data-slide-to="2"></li>
                    </ul>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="ml-blog-4.php">
                            <img src="images/CarouselML.jpg" alt="Image 1" width="1100" height="500">
                            </a>
                            <div class="carousel-caption">
                                <h3></h3>
                                <p style="color: #009688;">k-Nearest Neighbors</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="#">
                            <img src="images/CarouselBD.jpg" alt="Image 2" width="1100" height="500">
                            </a>
                            <div class="carousel-caption">
                               <!--  <h3>Slide 2</h3> -->
                                <p style="color: ghostwhite;">Key Highlights from Budget 2018</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="#">
                            <img src="images/CarouselPY.jpg" alt="Image 3" width="1100" height="500">
                            </a>
                            <div class="carousel-caption">
                                <!-- <h3>Slide 3</h3> -->
                                <p style="color: ghostwhite;">Around Mumbai in Seven Faiths</p>
                            </div>
                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#carouselSlide" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>

                    <a class="carousel-control-next" href="#carouselSlide" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>

                <!-- CAROUSEL Ends -->           


                <!-- PAGE CONTENTS Ends -->

                

                <!-- FOOTER Starts -->

                <?php
                include 'footer.php';
                ?>

                <!-- FOOTER Ends -->

            </div>

          <!-- PAGE CONTENT Holder Ends -->

        </div>









        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
