<?php
include 'db.php'
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>CodeBuzz | Jimit Dholakia</title>

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



      <div class="wrapper">

          <!-- SIDEBAR Starts -->
          <nav id="sidebar">
              <div class="sidebar-header">
                  <h3>CodeBuzz</h3>
                  <strong>CB</strong>
              </div>

              <ul class="list-unstyled components">

                  <li>
                      <a href="index.html" aria-expanded="false">
                          <i class="fa fa-home"></i>
                          Home
                      </a>
                  </li>

                  <li>
                      <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                          <i class="fa fa-clone"></i>
                          Categories
                      </a>
                      <ul class="collapse list-unstyled" id="pageSubmenu">
                          <li><a href="python.html">Python</a></li>
                          <li><a href="machine-learning.html">Machine Learning</a></li>
                          <li><a href="big-data.html">Big Data</a></li>
                      </ul>
                  </li>

                  <li>
                      <a href="contributors.html">
                          <i class="fa fa-users"></i>
                          Contributors
                      </a>
                  </li>

                  <li>
                      <a href="about.html">
                          <i class="fa fa-info-circle"></i>
                          About
                      </a>
                  </li>

                  <li class="active">
                    <a href="chat-box.php">
                        <i class="fa fa-comments"></i>
                        Chat
                    </a>
                  </li>

              </ul>

              <ul class="list-unstyled CTAs">
                <li><a href="#" class="subscribe"><i class="fa fa-envelope"></i>Subscribe us</a></li>
                <li><a href="#" class="article"><i class="fa fa-share"></i>Share an article</a></li>
            </ul>
          </nav>

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

                <div id="container">
        <div id="chat_box">
            <table>
                <div id="chat">
                </div>
            </table>

                
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
//            echo "<embed loop='false' src='chat.mp3' hidden='true' autoplay='true'/>";
              echo '<script type="text/javascript">playSound();</script>';

          }


        }
        ?>

    </div>
                

                <!-- PAGE CONTENTS Ends -->

                <div class="line"></div>

                <!-- FOOTER Starts -->

                <footer>

                    <ul class="nav">

                        <li class="nav-item">
                            <a href="https://github.com/jimit105" target="_blank" class="nav-link"><i class="fa fa-github fa-2x" title="GitHub"></i></a>
                        </li>

                        <li class="nav-item">
                            <a href="https://in.linkedin.com/in/jimit105" target="_blank" class="nav-link"><i class="fa fa-linkedin fa-2x" title="LinkedIn"></i></a>
                        </li>

                        <li class="nav-item">
                            <a href="https://www.facebook.com/jimit105" target="_blank" class="nav-link"><i class="fa fa-facebook fa-2x" title="Facebook"></i></a>
                        </li>

                        <li class="nav-item">
                            <a href="https://plus.google.com/+JimitDholakia" target="_blank" class="nav-link"><i class="fa fa-google-plus fa-2x" title="Google Plus"></i></a>
                        </li>

                        <li class="nav-item">
                            <a href="https://twitter.com/jimit105" target="_blank" class="nav-link"><i class="fa fa-twitter fa-2x" title="Twitter"></i></a>
                        </li>

                        <li class="nav-item">
                            <a href="https://www.instagram.com/jimit105" target="_blank" class="nav-link"><i class="fa fa-instagram fa-2x" title="Instagram"></i></a>
                        </li>

                    </ul>

                </footer>

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
