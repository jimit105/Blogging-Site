<?php
include 'db.php'
?>

<!DOCTYPE html>
<html>
    <head>        
        <?php
        include 'meta.php';
        ?>

        <title>Chat Box <?php include 'title.php' ?></title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/carousel.css">

        <!-- Favicon -->
        <link rel="icon" href="images/favicon.ico">
        
        <link rel="stylesheet" href="styles/chat.css" media="all">

    <script>
      function ajax(){
        var req = new XMLHttpRequest();

        req.onreadystatechange = function(){
          if(req.readyState == 4 && req.status == 200){
            document.getElementById('chat').innerHTML = req.responseText;
          }
        }

        req.open('GET', 'chat.php', true);
        req.send();

      }
      setInterval(function(){ajax();}, 1000);
        
        function playSound(){
            var audioElement = document.createElement('audio');
            audioElement.setAttribute('src', 'assests/chat.mp3');            audioElement.setAttribute('autoplay', 'autoplay');
            audioElement.load();
            audioElement.play();
            
        }

    </script>

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
            document.getElementById("chat-box").classList.add("active");
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
                            Chat
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

                <!-- PAGE CONTENTS Starts -->
                
                <!-- CHAT BOX Starts -->

                <div id="container">
                    <div id="chat_box">            
                        <div id="chat">
                            <i class="fa fa-spinner fa-spin"></i>
                            Loading Chat Box..
                            
                        </div>
                    </div>
                    
                    <form method="post" action="chat-box.php">
                        <input type="text" name="name" placeholder="Enter Name">
                        &nbsp;
                        <textarea name="msg" placeholder="Enter Message"></textarea>
                        &nbsp;
                        <input type="submit" name="submit" value="Send">
                    </form>

                    <?php
                        if(isset($_POST['submit'])){
                            $name = $_POST['name'];
                            $msg = $_POST['msg'];

                            $query = "INSERT INTO chat(name, msg) VALUES('$name', '$msg')";

                            $run = $con->query($query);


                            // if successfully inserted, pop sound
                            if($run){
                                // echo "<embed loop='false' src='chat.mp3' hidden='true' autoplay='true'/>";
                                echo '<script type="text/javascript">playSound();</script>';

                            }


                        }
                    ?>

                </div>
                
                <!-- CHAT BOX Ends -->
                

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
