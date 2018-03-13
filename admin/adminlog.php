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
        <!-- SCROLL TO TOP -->
    <?php include 'scroll-to-top.php'; ?>



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

                <!-- LOGIN -->

                    <div id="login" class="card-body">
                    <form name="loginForm" method="post" action="log.php" onsubmit="return ValidateUsername() ">
                    <table align="center" width="150%">
                    <tr>
                      <td>
                        <h2>Admin Login</h2>
                      </td>
                    </tr>
                    <tr>  
                      <td>
                        <input type="text" name="email" id="user" placeholder="exapmle@somaiya.edu" required>
                      </td> 
                    </tr>
                    <br>
                    <tr>  

                      <td >
                        <input type="password" name="password" id="pass" placeholder="Password" required>
                      </td>
                    </tr>
                    <tr>
                      
                      <td>
                        <input type="submit" name="login" value="Let me in.." class="click">
                      </td>
                    </tr>
                    <!--
                    <tr>
                      <td colspan="2" class="signin">
                        <input type="image" src="signin_google.png" alt="Login with Google" width="50%" height="50%">

                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" class="signin">
                        <input type="image" src="signin_fb.png" alt="Login with FB" width="50%" height="50%">

                      </td>
                    </tr>
                    //-->
                    </table>
                    </form>
                    </div> 


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
