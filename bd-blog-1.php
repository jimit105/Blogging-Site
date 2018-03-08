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

            <h2>Hadoop</h2>
            <p>Hadoop is an open source, Java-based programming framework that supports the processing and storage of extremely large data sets in a distributed computing environment. It is part of the Apache project sponsored by the Apache Software Foundation.</p>

            <p>Hadoop makes it possible to run applications on systems with thousands of commodity hardware nodes, and to handle thousands of terabytes of data. Its distributed file system facilitates rapid data transfer rates among nodes and allows the system to continue operating in case of a node failure. This approach lowers the risk of catastrophic system failure and unexpected data loss, even if a significant number of nodes become inoperative. Consequently, Hadoop quickly emerged as a foundation for big data processing tasks, such as scientific analytics, business and sales planning, and processing enormous volumes of sensor data, including from internet of things sensors</p>

            <p>As a software framework, Hadoop is composed of numerous functional modules. At a minimum, Hadoop uses Hadoop Common as a kernel to provide the framework's essential libraries. Other components include Hadoop Distributed File System (HDFS), which is capable of storing data across thousands of commodity servers to achieve high bandwidth between nodes; Hadoop Yet Another Resource Negotiator (YARN), which provides resource management and scheduling for user applications; and Hadoop MapReduce, which provides the programming model used to tackle large distributed data processing -- mapping data and reducing it to a result. Hadoop also supports a range of related projects that can complement and extend Hadoop's basic capabilities. Complementary software packages include:

                <ul style="font-family: 'Raleway', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #696969;">



                    <li>Apache Hive. A data warehouse that provides data summarization, query and analysis;</li>
                    <li>Apache HBase :An open source, nonrelational, distributed database;</li>
                    <li>Apache Pig. A high-level platform for creating programs that run on Hadoop;</li>
                    <li>Apache Sqoop. A tool to transfer bulk data between Hadoop and structured data stores, such as relational databases;</li>
                    <li>Apache Spark. A fast engine for big data processing capable of streaming and supporting SQL, machine learning and graph processing;</li>



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
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>