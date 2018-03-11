<!DOCTYPE html>
<html>

<head>
    <?php
    include 'meta.php';
    ?>

    <title>Python <?php include 'title.php' ?></title>

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

        <!-- PAGE CONTENT Holder Starts -->

        <div id="content">

            <!-- NAVBAR Starts -->

            <?php include 'navbar.php'; ?>
             <script>
                document.getElementById("pageCategory").href = 'python.php';
                document.getElementById("pageCategory").innerHTML = 'Python';
            </script>
            
            <!-- NAVBAR Ends -->

            <h3 style="text-align: center">Python</h3>
            <p>
                Python is a general-purpose interpreted, interactive, object-oriented, and high-level programming language. It has simple easy-to-use syntax, making it the perfect language for someone trying to learn computer programming for the first time.
            </p>
           
            <div class="line"></div>
            
            

            <!-- CONTRIBUTORS Starts -->
            
            <div class="container">
                
            	<div class="row">
            		<div class="card" style="width: 25em; margin: auto;">
                    	
                    		<div class="card-body">
                    			<h4 class="card-title">Understanding Python</h4>
                    			<p class="card-text">Python is a high-level, interpreted, interactive and object-oriented scripting language. It uses English keywords frequently and it has fewer syntactical constructions than other languages.</p>
                    			<div class="text-center">
                                    <a href="py-blog-1.php" class="btn btn-secondary" style="background-color: #009688">  
                                        <i class="fa fa-angle-double-right"></i>
                                        Continue Reading                                    
                                    </a>
                                </div>
                    		</div>
                	</div>

                	<div class="card" style="width: 25em; margin: auto;">
                    	
                    		<div class="card-body">
                    			<h4 class="card-title">Features of Python</h4>
                    			<p class="card-text">Python is a great language for programmers and supports the development of a wide range of applications from simple text processing to WWW browsers to games.</p>
                    			<div class="text-center">
                                    <a href="py-blog-2.php" class="btn btn-secondary" style="background-color: #009688">  
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
                    			<h4 class="card-title">Functions in Python</h4>
                    			<p class="card-text">Separating a larger task into smaller ones is much more important when programming than when writing an essay, because it greatly facilitates debugging, maintenance, and reuse, which are all critical in developing good software.</p>
                    			<div class="text-center">
                                    <a href="py-blog-3.php" class="btn btn-secondary" style="background-color: #009688">  
                                        <i class="fa fa-angle-double-right"></i>
                                        Continue Reading                                    
                                    </a>
                                </div>
                    		</div>
                	</div>
                    
                    <div class="card" style="width: 25em; margin: auto;">
                    	
                    		<div class="card-body">
                    			<h4 class="card-title">Applications of Python</h4>
                    			<p class="card-text">Python is used in many application domains.Python is a general purpose programming language created in the late 1980s that's used by thousands of people to do things from testing microchips at Intel, to powering Instagram etc.</p>
                    			<div class="text-center">
                                    <a href="py-blog-4.php" class="btn btn-secondary" style="background-color: #009688">  
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
