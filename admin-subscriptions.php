<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        include 'meta.php';
        ?>

        <title>Subscription Details<?php include 'title.php' ?></title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/carousel.css">

        <!-- Favicon -->
        <link rel="icon" href="images/favicon.ico">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

 
    <body>
        <!-- SCROLL TO TOP -->
    <?php include 'scroll-to-top.php'; ?>



      <div class="wrapper">
          <!-- PAGE CONTENT Holder Starts-->
          <?php
        include 'sidebar.php';
        ?>
          <script>
              document.getElementById("subscription-details").classList.add("active");
          </script>
                  

            <div id="content" style="width: 100%;">

                <!-- NAVBAR Starts -->
                <?php include 'navbar.php'; ?>
             <script>
                document.getElementById("pageCategory").href = '#';
                document.getElementById("pageCategory").innerHTML = 'Subscription Details';
            </script>

                <!-- NAVBAR Ends -->

                <!-- PAGE CONTENTS Starts -->

                <div class="container">
                   <div class="table-responsive">
                      <br />
                      <table class="table table-bordered table-striped table-hover" id="fdbk">
                      <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Topic</th>
                          <th>Time</th>
                      </tr>
                      </table>
                    </div>
                </div> 

                <!-- PAGE CONTENTS Ends -->

                

                <!-- FOOTER Starts -->

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



                 $.getJSON("subscriptions.json",function(data){
                  var sub_data = '';
                  $.each(data,function(key,value){
                    sub_data += '<tr>';
                    sub_data += '<td>'+value.name+'</td>';
                    sub_data += '<td>'+value.email+'</td>';
                    sub_data += '<td>'+value.subject+'</td>';
                    sub_data += '<td>'+value.time+'</td>';
                    sub_data += '<tr>';
                  });

                  $('#fdbk').append(sub_data);
                });
             });
         </script>
    </body>
</html>
