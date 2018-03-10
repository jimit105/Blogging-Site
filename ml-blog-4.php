<!DOCTYPE html>
<html>
    <head>
        <?php
        include 'meta.php';
        ?>

        <title>k-Nearest Neighbors <?php include 'title.php' ?></title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="styles/main.css">
        
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
            document.getElementById("category").classList.add("active");
            document.getElementById("machine-learning").classList.add("active");
        </script>
          
          <!-- SIDEBAR Ends -->
          

            <!-- PAGE CONTENT Holder Starts -->
          
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
                        
                        <a href="machine-learning.php">
                        <div class="pageCategory">
                            Machine Learning
                        </div>
                        </a>

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

                <h2>KNN (K- Nearest Neighbors)</h2>
                <p>It can be used for both classification and regression problems. However, it is more widely used in classification problems in the industry. K nearest neighbors is a simple algorithm that stores all available cases and classifies new cases by a majority vote of its k neighbors. The case being assigned to the class is most common amongst its K nearest neighbors measured by a distance function.</p>
                
                <p>These distance functions can be Euclidean, Manhattan, Minkowski and Hamming distance. First three functions are used for continuous function and fourth one (Hamming) for categorical variables. If K = 1, then the case is simply assigned to the class of its nearest neighbor. At times, choosing K turns out to be a challenge while performing KNN modeling.</p>
                
                <p>KNN can easily be mapped to our real lives. If you want to learn about a person, of whom you have no information, you might like to find out about his close friends and the circles he moves in and gain access to his/her information!</p>
                
                <p>Things to consider before selecting KNN:</p>
            
                <ul style="font-family: 'Raleway', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #696969;">
                    <li>KNN is computationally expensive</li>
                    <li>Variables should be normalized else higher range variables can bias it</li>
                    <li>Works on pre-processing stage more before going for KNN like outlier, noise removal</li>
                                   
                </ul>
            
        
                            
                
                <!-- PAGE CONTENTS Ends -->                
                
                
                
                
                <!-- FOOTER Starts-->
                
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
