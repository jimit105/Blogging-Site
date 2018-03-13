<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    include 'meta.php';
    ?>

    <title>About <?php include 'title.php' ?></title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="styles/main.css">

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.ico">
    
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZERMJubgSsXGICl1FnmC9DfGKNQ_QtpY&callback=initialize"></script>
    <link rel="stylesheet" href="styles/maps.css">
    
    <!-- GOOGLE MAPS Script Starts -->
        <script>
var myCenter = new google.maps.LatLng(19.073138, 72.899417);
function initialize(){
    var mapProp = {
        center:myCenter,
        zoom:12,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("map"),mapProp);

    var marker = new google.maps.Marker({
        position:myCenter,
        animation:google.maps.Animation.BOUNCE
    });

    marker.setMap(map);
    
    var infowindow = new google.maps.InfoWindow({
    content: "K. J. Somaiya College of Engineering"
  });
  infowindow.open(map,marker);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
        
        <!-- GOOGLE MAPS Script Ends -->

   
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
              document.getElementById("about").classList.add("active");
          </script>

        <!-- PAGE CONTENT Holder Starts -->

        <div id="content">

            <!-- NAVBAR Starts -->

            <?php include 'navbar.php'; ?>
             <script>
                document.getElementById("pageCategory").href = '#';
                document.getElementById("pageCategory").innerHTML = 'About';
            </script>
            
            <!-- NAVBAR Ends -->

            <h3 style="text-align: center">About Us</h3>
            <p>
                Lorem ipsum dolor sit amet, scripta molestiae eos ei, ea viderer verterem nec, id fabulas legimus posidonium pro. Debet instructior pri id, dolor possit eu cum. Eum ut sint veniam. Usu insolens scribentur ad, eam melius molestiae eu. Alii invidunt sea
                ne.
            </p>
            <p>
                Ne appetere recteque duo, nulla noluisse eos no. Ius virtute tractatos eu. Vidisse tritani maiorum vel in, volumus consequuntur mel te. Et eos solum movet repudiandae, mei vide nonumes in, augue posidonium at est. Inermis eloquentiam in eum, munere aperiri
                ea vel.
            </p>
            
            <div class="line"></div>

            <!-- CONTRIBUTORS Starts -->
            
            <div class="container">
                <br>
                <h3 class="text-center">Contributors</h3>
                <p class="text-center">Those who write with us!</p>
                <br>
            	<div class="row">
            		<div class="card" style="width: 25em; margin: auto;">
                    	<img class="img-fluid" src="images/male.png" style="width:70%; margin: auto;">
                    		<div class="card-body">
                    			<h4 class="card-title" style="text-align: center;">Jimit Dholakia</h4>
                    			<p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    			<div class="text-center">
                                    <a href="https://in.linkedin.com/in/jimit105" class="btn btn-primary" target="_blank">  
                                        <i class="fa fa-envelope"></i>
                                        Contact                                        
                                    </a>
                                </div>
                    		</div>
                	</div>

                	<div class="card" style="width: 25em; margin: auto;">
                    	<img class="img-fluid" src="images/female.png" style="width:70%; margin: auto;">
                    		<div class="card-body">
                    			<h4 class="card-title" style="text-align: center;">Ushma Bhatt</h4>
                    			<p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    			<div class="text-center">
                                    <a href="https://in.linkedin.com/in/ushma-bhatt-950a82133" class="btn btn-primary" target="_blank">  
                                        <i class="fa fa-envelope"></i>
                                        Contact                                        
                                    </a>
                                </div>
                    		</div>
                	</div>

            	</div>
            </div>
            
            <!-- CONTRIBUTORS Ends -->
            
            <br>
            
            <!-- GOOGLE MAPS Starts -->
            <div class="line"></div>
            <h3 class="text-center">Locate Us</h3><br>
            
            <div id="map"></div>

            <!-- GOOGLE MAPS Ends -->



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
