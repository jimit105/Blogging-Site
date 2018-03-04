<!DOCTYPE html>
<html>
    <head>
        <?php
        include 'meta.php';
        ?>

        <title>CodeBuzz | Jimit Dholakia</title>

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
          <nav id="sidebar">
              <div class="sidebar-header">
                  <h3><i class="fa fa-podcast"></i>&nbsp;CodeBuzz</h3>
                  <strong><i class="fa fa-podcast"></i></strong>
              </div>

              <ul class="list-unstyled components">

                  <li class="active">
                      <a href="index.php" aria-expanded="false">
                          <i class="fa fa-home"></i>
                          Home
                      </a>
                  </li>

                  <li>
                      <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                          <i class="fa fa-clone"></i>
                          Categories
                      </a>
                      <ul class="collapse list-unstyled" id="pageSubmenu">
                          <li><a href="python.php">Python</a></li>
                          <li><a href="machine-learning.php">Machine Learning</a></li>
                          <li><a href="big-data.php">Big Data</a></li>
                      </ul>
                  </li>

                  <li>
                      <a href="contributors.php">
                          <i class="fa fa-users"></i>
                          Contributors
                      </a>
                  </li>

                  <li>
                      <a href="about.php">
                          <i class="fa fa-info-circle"></i>
                          About
                      </a>
                  </li>

                  <li>
                    <a href="chat-box.php">
                        <i class="fa fa-comments"></i>
                        Chat
                    </a>
                  </li>

              </ul>

              <ul class="list-unstyled CTAs">
                <li><a href="#" class="subscribe"><i class="fa fa-envelope"></i>Subscribe us</a></li>
                <li><a href="#" class="article"><i class="fa fa-share"></i>Share an article</a></li>
            </ul>
          </nav>

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
                            CodeBuzz
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


                <!--<h2>Collapsible Sidebar Using Bootstrap 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="line"></div>

                <h2>Lorem Ipsum Dolor</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="line"></div>

                <h2>Lorem Ipsum Dolor</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="line"></div>

                <h3>Lorem Ipsum Dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->


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
