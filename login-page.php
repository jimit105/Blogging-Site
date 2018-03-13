<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        include 'meta.php';
        ?>

        <title>Login<?php include 'title.php' ?></title>

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
          

          <!-- SIDEBAR Ends -->

            <!-- PAGE CONTENT Holder Starts-->

            <div id="content" style="width: 100%;">

                <!-- NAVBAR Starts -->
                <?php include 'navbar.php'; ?>
             <script>
                document.getElementById("pageCategory").href = '#';
                document.getElementById("pageCategory").innerHTML = 'Login Form';
            </script>

                <!-- NAVBAR Ends -->

                <!-- PAGE CONTENTS Starts -->

                <!-- LOGIN -->
                
                <div class="container">
                    <h3 style="text-align: center">Login</h3>
                    <div id="login">
                    <form name="loginForm" method="post" action="login.php">
                        <label>Enter Email</label>
                        <input type="email" name="email" id="user" placeholder="Email" class="form-control" required autofocus>
                        <br>
                        <label>Enter Password</label>
                        <input type="password" name="password" id="pass" placeholder="Password" class="form-control" required>
                        <br>
                        <div class="text-center">
                        <input type="submit" name="login" value="Login" class="btn btn-info click">
                        </div>
                    </form>
                    </div>
                    
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
