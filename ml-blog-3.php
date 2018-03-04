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

                <h2>Naive Bayes</h2>
                <p>It is a classification technique based on Bayes’ theorem with an assumption of independence between predictors. In simple terms, a Naive Bayes classifier assumes that the presence of a particular feature in a class is unrelated to the presence of any other feature. For example, a fruit may be considered to be an apple if it is red, round, and about 3 inches in diameter. Even if these features depend on each other or upon the existence of the other features, a naive Bayes classifier would consider all of these properties to independently contribute to the probability that this fruit is an apple.</p>
                
                <p>Naive Bayesian model is easy to build and particularly useful for very large data sets. Along with simplicity, Naive Bayes is known to outperform even highly sophisticated classification methods.</p>
                
                <p>Bayes theorem provides a way of calculating posterior probability P(c|x) from P(c), P(x) and P(x|c).</p>
                
                <p>Here,</p>
            
                <ul style="font-family: 'Raleway', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;">
                    <li>P(c|x) is the posterior probability of class (target) given predictor (attribute)</li>
                    <li>P(c) is the prior probability of class</li>
                    <li>P(x|c) is the likelihood which is the probability of predictor given class</li>
                    <li>P(x) is the prior probability of predictor</li>
                
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
