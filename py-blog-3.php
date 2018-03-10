<!DOCTYPE html>
<html>
    <head>
        <?php
        include 'meta.php';
        ?>

        <title>Functions in Python <?php include 'title.php' ?></title>

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
            document.getElementById("python").classList.add("active");
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
                        
                        <a href="python.php">
                        <div class="pageCategory">
                            Python
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

                <h2>Functions in Python</h2>
                <p>You can define functions in any Python program, using the def statement that specifies the function signature, followed by a sequence of statements that constitute the function.</p>
                
                <p>The typical structure of a Python program, having three components:</p>
                

            
                <ul style="font-family: 'Raleway', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #696969;">
                    <li>A sequence of import statements</li>
                    <li>A sequence of function definitions</li>
                    <li>Arbitrary global code, or the body of the program</li>
                
                </ul>

        <p>The first line of a function definition, known as its signature, gives a name to the function and to each parameter variable. The signature consists of the keyword def; the function name; a sequence of zero or more parameter variable names separated by commas and enclosed in parentheses; and a colon. The indented statements following the signature define the function body. The function body can consist of various kinds of control and looping statements. It also can contain a return statement, which transfers control back to the point where the function was called and returns the result of the computation or return value. The body may also define local variables, which are variables that are available only inside the function in which they are defined.</p>


        
                            
                
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
