<!DOCTYPE html>
<html>
    <head>        
        <?php
        include 'meta.php';
        ?>

        <title>RSS Articles <?php include 'title.php' ?></title>

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
            document.getElementById("rss").classList.add("active");
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

                        <div class="pageCategory">
                            RSS Articles
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
                
                <h3 style="text-align: center">Articles from Other Sites</h3>

                <!-- PAGE CONTENTS Starts -->

                <?php
                $html = "";
                $url = "https://www.kdnuggets.com/feed";
                //https://www.sciencedaily.com/rss/matter_energy/engineering.xml
                $xml = simplexml_load_file($url);
                for($i = 0; $i < 10; $i++){
                    $title = $xml->channel->item[$i]->title;
                    $link = $xml->channel->item[$i]->link;
                    $description = $xml->channel->item[$i]->description;
                    $pubDate = $xml->channel->item[$i]->pubDate;
                    $pubDate = date_create($pubDate);
                    date_timezone_set($pubDate, timezone_open('Asia/Kolkata'));

                    $html .= "<hr><a href='$link'><h3 style='color: #007f96;'>$title</h3></a>";
                    $html .= "<p>$description</p>";
                    $html .= "<p style='color: #4a7077'>".date_format($pubDate, 'l, dS M Y, h:i:s a T')."</p>";
                    
                }
                echo $html;
                ?>


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
