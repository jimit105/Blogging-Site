<!DOCTYPE html>
<html>
    <head>
        <?php
        include 'meta.php';
        ?>

        <title>DSMS <?php include 'title.php' ?></title>

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

                <h2>Data Stream Management System</h2>

                <p>A data stream management system (DSMS) is a computer software system to manage continuous data streams. It is similar to a database management system (DBMS), which is, however, designed for static data in conventional databases. A DSMS also offers a flexible query processing so that the information need can be expressed using queries. However, in contrast to a DBMS, a DSMS executes a continuous query that is not only performed once, but is permanently installed. Therefore, the query is continuously executed until it is explicitly uninstalled. Since most DSMS are data-driven, a continuous query produces new results as long as new data arrive at the system. This basic concept is similar to Complex event processing so that both technologies are partially coalescing.</p>
                
                <p>Processing and streaming models : One of the biggest challenges for a DSMS is to handle potentially infinite data streams using a fixed amount of memory and no random access to the data. There are different approaches to limit the amount of data in one pass, which can be divided into two classes. For the one hand, there are compression techniques that try to summarize the data and for the other hand there are window techniques that try to portion the data into (finite) parts.</p>

				
<ul style="font-family: 'Raleway', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #696969;">
                    
                
                
				<li>Synopses : The idea behind compression techniques is to maintain only a synopsis of the data, but not all (raw) data points of the data stream. The algorithms range from selecting random data points called sampling to summarization using histograms, wavelets or sketching. One simple example of a compression is the continuous calculation of an average. Instead of memorizing each data point, the synopsis only holds the sum and the number of items. The average can be calculated by dividing the sum by the number. However, it should be mentioned that synopses cannot reflect the data accurately. Thus, a processing that is based on synopses may produce inaccurate results</li>

				<li>Windows : Instead of using synopses to compress the characteristics of the whole data streams, window techniques only look on a portion of the data. This approach is motivated by the idea that only the most recent data are relevant. Therefore, a window continuously cuts out a part of the data stream, e.g. the last ten data stream elements, and only considers these elements during the processing. There are different kinds of such windows like sliding windows that are similar to FIFO lists or tumbling windows that cut out disjoint parts. Furthermore, the windows can also be differentiated into element-based windows, e.g., to consider the last ten elements, or time-based windows, e.g., to consider the last ten seconds of data. There are also different approaches to implementing windows. There are, for example, approaches that use timestamps or time intervals for system-wide windows or buffer-based windows for each single processing step. Sliding-window query processing is also suitable to being implemented in parallel processors by exploiting parallelism between different windows and/or within each window extent</li>
				
				
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
