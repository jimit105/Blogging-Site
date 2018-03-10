<!DOCTYPE html>
<html>
    <head>
        <?php
        include 'meta.php';
        ?>

        <title>Error <?php include 'title.php' ?></title>

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
          
         

          <!-- SIDEBAR Ends -->

            <!-- PAGE CONTENT Holder Starts-->

            <div id="content">

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
                            Error!
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
                
                <p>Redirecting you to home page in <span id="countdown">10</span></p>
                
                <p style="padding-left: 0em;">If you are not automatically redirected, <a href="index.php" style="text-decoration: underline; color: #00695C">click here</a> </p>
                
                
                <div style="text-align: center"><img src="images/404.png" style="width: 45%;"><br><br></div>
                
                             
                
                
                <!-- JavaScript part -->
                <script type="text/javascript">
    
                    // Total seconds to wait
                    var seconds = 10;
    
                    function countdown() {
                        seconds = seconds - 1;
                        if (seconds < 0) {
                        // Change your redirection link here
                            window.location = "index.php";
                            
                        } else {
                            // Update remaining seconds
                            if(seconds < 2){
                            document.getElementById("countdown").innerHTML = seconds + " second";
                                
                            } else{
                                document.getElementById("countdown").innerHTML = seconds + " seconds";    
                            }
                                                        
                            // Count down using javascript
                            window.setTimeout("countdown()", 1000);
                        }
                    }
    
                // Run countdown function
                    countdown();
                    
                </script>
                
                
                
                

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
