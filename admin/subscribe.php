<!DOCTYPE html>
<html>
    <head>
        <?php
        include 'meta.php';
        ?>

        <title>Home Page<?php include 'title.php' ?></title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/carousel.css">

        <!-- Favicon -->
        <link rel="icon" href="images/favicon.ico">

    </head>
    <body>
        <?php  
     $message = '';  
     $error = '';  
     if(isset($_POST["submit"]))  
     {  
          if(empty($_POST["name"]))  
          {  
               $error = "<label class='text-danger'>Enter Name</label>";  
          }  
          else if(empty($_POST["email"]))  
          {  
               $error = "<label class='text-danger'>Enter Email</label>";  
          }  
          else if(empty($_POST["subject"]))  
          {  
               $error = "<label class='text-danger'>Choose Subject</label>";  
          }  
          else if (empty($_POST["time"])) {
               $error = "<label class='text-danger'>Choose time</label>";  
            # code...
          }
          else  
          {  
               if(file_exists('subs.json'))  
               {  
                    $current_data = file_get_contents('subs.json');  
                    $array_data = json_decode($current_data, true);  
                    $extra = array(  
                         'name'               =>     $_POST['name'],  
                         'email'          =>     $_POST["email"],  
                         'subject'     =>     $_POST["subject"],
                         'time'      =>   $_POST["time"] 
                    );  
                    $array_data[] = $extra;  
                    $final_data = json_encode($array_data);  
                    if(file_put_contents('subs.json', $final_data))  
                    {  
                         $message = "<label class='text-success'>Thank You for Subscribing!</p>";  
                    }  
               }  
               else  
               {  
                    $error = 'JSON File not exits';  
               }  
          }  
     }  
     ?>  
        <!-- SCROLL TO TOP -->
    <?php include 'scroll-to-top.php'; ?>



      <div class="wrapper">

          <!-- SIDEBAR Starts -->
          <?php
          include 'sidebar.php';
          ?>
          
          <script>
              document.getElementById("home").classList.add("active");
          </script>

          <!-- SIDEBAR Ends -->

            <!-- PAGE CONTENT Holder Starts-->

            <div id="content" style="width: 100%;">

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
                            Home
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item"><a href="adminlog.php" class="nav-link">Admin SignUp</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- NAVBAR Ends -->
                <!-- PAGE CONTENTS Starts -->
                <div class="container" style="width:500px;">  
                <h3 align="">Subscribe With Us!</h3><br/>                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" /><br />  
                     <label>Email Address</label>  
                     <input type="email" name="email" class="form-control" /><br />  
                     <label>Your Subject</label> 
                     <select class="form-control" id="subject" name="subject">
                        <option>Machine Learning</option>
                        <option>Python</option>
                        <option>Big Data</option>
                     </select><br> 
                     <label>Your preferred time</label> 
                     <select class="form-control" id="time" name="time">
                        <option>Morning</option>
                        <option>Noon</option>
                        <option>Evening</option>
                     </select> <br>
 
                     <input type="submit" name="submit" value="Subscribe" class="btn btn-info" /><br />    

                 
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
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
             });
         </script>
    </body>
</html>
