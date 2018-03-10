<!DOCTYPE html>
<html>
    <head>
        <?php
        include 'meta.php';
        ?>

        <title>MapReduce <?php include 'title.php' ?></title>

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
            document.getElementById("big-data").classList.add("active");
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
                        
                        <a href="big-data.php">
                        <div class="pageCategory">
                            Big Data
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

                <h2>MapReduce</h2>
                <p>MapReduce is a programming framework that allows us to perform distributed and parallel processing on large data sets in a distributed environment. MapReduce consists of two distinct tasks – Map and Reduce.As the name MapReduce suggests, reducer phase takes place after mapper phase has been completed.So, the first is the map job, where a block of data is read and processed to produce key-value pairs as intermediate outputs.The output of a Mapper or map job (key-value pairs) is input to the Reducer.The reducer receives the key-value pair from multiple map jobs.Then, the reducer aggregates those intermediate data tuples (intermediate key-value pair) into a smaller set of tuples or key-value pairs which is the final output.</p>
                
                
                
                <p>The entire MapReduce program can be fundamentally divided into three parts:
				
				<ul style="font-family: 'Raleway', sans-serif;
					font-size: 1.1em;
					font-weight: 300;
					line-height: 1.7em;
					color: #696969;">
					<li>Mapper Phase</li> 
					<li> CodeReducer Phase Code </li> 
					<li>Driver Code</li>
				</ul>
				</p>
            
        
                            
                
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
