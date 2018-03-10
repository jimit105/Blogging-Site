<!DOCTYPE html>
<html>

<head>
    <?php
    include 'meta.php';
    ?>

    <title>Machine Learning <?php include 'title.php' ?></title>

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

                    <div class="pageCategory">
                        Machine Learning
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

            <h3 style="text-align: center">Machine Learning</h3>
            <p>
                Lorem ipsum dolor sit amet, scripta molestiae eos ei, ea viderer verterem nec, id fabulas legimus posidonium pro. Debet instructior pri id, dolor possit eu cum. Eum ut sint veniam. Usu insolens scribentur ad, eam melius molestiae eu. Alii invidunt sea
                ne.
            </p>
           
            <div class="line"></div>
            
            

            <!-- CONTRIBUTORS Starts -->
            
            <div class="container">
                
            	<div class="row">
            		<div class="card" style="width: 25em; margin: auto;">
                    	
                    		<div class="card-body">
                    			<h4 class="card-title">Linear Regression</h4>
                    			<p class="card-text">Linear regression is a linear approach for modelling the relationship between a scalar dependent variable y and one or more explanatory variables denoted X</p>
                    			<div class="text-center">
                                    <a href="ml-blog-1.php" class="btn btn-secondary" style="background-color: #009688">  
                                        <i class="fa fa-angle-double-right"></i>
                                        Continue Reading                                    
                                    </a>
                                </div>
                    		</div>
                	</div>
                    
                	<div class="card" style="width: 25em; margin: auto;">
                    	
                    		<div class="card-body">
                    			<h4 class="card-title">Logistic Regression</h4>
                    			<p class="card-text">Logistic regression is a statistical method for analyzing a dataset in which there are one or more independent variables that determine an outcome.</p>
                    			<div class="text-center">
                                    <a href="ml-blog-2.php" class="btn btn-secondary" style="background-color: #009688"> 
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
                    			<h4 class="card-title">Naive Bayes</h4>
                    			<p class="card-text">NB classifiers are a family of simple probabilistic classifiers based on applying Bayes' theorem with strong independence assumptions between the features.</p>
                    			<div class="text-center">
                                    <a href="ml-blog-3.php" class="btn btn-secondary" style="background-color: #009688"> 
                                        <i class="fa fa-angle-double-right"></i>
                                        Continue Reading                                    
                                    </a>
                                </div>
                    		</div>
                	</div>
                    
                    <div class="card" style="width: 25em; margin: auto;">
                    	
                    		<div class="card-body">
                    			<h4 class="card-title">KNN (K- Nearest Neighbors)</h4>
                    			<p class="card-text">KNN is to use a database in which the data points are separated into several classes to predict the classification of a new sample point.</p>
                    			<div class="text-center">
                                    <a href="ml-blog-4.php" class="btn btn-secondary" style="background-color: #009688"> 
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
