<!DOCTYPE html>
<html>

<head>
    <?php
    include 'meta.php';
    ?>

    <title>Big Data <?php include 'title.php' ?></title>

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

        <!-- PAGE CONTENT Holder Starts -->

        <div id="content">

            <!-- NAVBAR Starts -->

            <?php include 'navbar.php'; ?>
             <script>
                document.getElementById("pageCategory").href = 'big-data.php';
                document.getElementById("pageCategory").innerHTML = 'Big Data';
            </script>
            
            <!-- NAVBAR Ends -->

            <h3 style="text-align: center">Big Data</h3>
            <p>
                Big data is an evolving term that describes any voluminous amount of structured, semistructured and unstructured data that has the potential to be mined for information. Big data is data sets that are so voluminous and complex that traditional data processing application software are inadequate to deal with them.
            </p>
           
            <div class="line"></div>
            
            

            <!-- CONTRIBUTORS Starts -->
            
            <div class="container">
                
            	<div class="row">
            		<div class="card" style="width: 25em; margin: auto;">
                    	
                    		<div class="card-body">
                    			<h4 class="card-title">Hadoop</h4>
                    			<p class="card-text">Hadoop is an open source, Java-based programming framework that supports the processing and storage of extremely large data sets in a distributed computing environment.</p>
                    			<div class="text-center">
                                    <a href="bd-blog-1.php" class="btn btn-secondary" style="background-color: #009688">  
                                        <i class="fa fa-angle-double-right"></i>
                                        Continue Reading                                    
                                    </a>
                                </div>
                    		</div>
                	</div>

                	<div class="card" style="width: 25em; margin: auto;">
                    	
                    		<div class="card-body">
                    			<h4 class="card-title">MapReduce</h4>
                    			<p class="card-text">MapReduce is a programming framework that allows us to perform distributed and parallel processing on large data sets in a distributed environment. MapReduce consists of two tasks – Map and Reduce.</p>
                    			<div class="text-center">
                                    <a href="bd-blog-2.php" class="btn btn-secondary" style="background-color: #009688">  
                                        <i class="fa fa-angle-double-right"></i>
                                        Continue Reading                                    
                                    </a>
                                </div>
                    		</div>
                	</div>
                    
                </div>
                <div style="width: 100%; height: 1em;"></div>
                <div class="row">
                    
                    <div class="card" style="width: 25em; margin: auto;">
                    	
                    		<div class="card-body">
                    			<h4 class="card-title">Types of Big Data</h4>
                    			<p class="card-text">“Data” is defined as ‘the quantities, characters, or symbols on which operations are performed by a computer, which may be stored and transmitted in the form of electrical signals.</p>
                    			<div class="text-center">
                                    <a href="bd-blog-3.php" class="btn btn-secondary" style="background-color: #009688">  
                                        <i class="fa fa-angle-double-right"></i>
                                        Continue Reading                                    
                                    </a>
                                </div>
                    		</div>
                	</div>
                    
                    <div class="card" style="width: 25em; margin: auto;">
                    	
                    		<div class="card-body">
                    			<h4 class="card-title">DSMS</h4>
                    			<p class="card-text">DSMS is a computer software system to manage continuous data streams. It is similar to a DBMS, which is, however, designed for static data in conventional databases</p>
                    			<div class="text-center">
                                    <a href="bd-blog-4.php" class="btn btn-secondary" style="background-color: #009688">  
                                        <i class="fa fa-angle-double-right"></i>
                                        Continue Reading                                    
                                    </a>
                                </div>
                    		</div>
                	</div>
            	</div>
                                              
                
            </div>
            
            <!-- CONTRIBUTORS Ends -->
            
            <br>



            <!-- FOOTER Starts-->

            <?php
            include 'footer.php';
            ?>

            <!-- FOOTER Ends -->

        </div>

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
