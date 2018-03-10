<!DOCTYPE html>
<html>
    <head>
        <?php
        include 'meta.php';
        ?>

        <title>Applications of Python <?php include 'title.php' ?></title>

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
            document.getElementById("python").classList.add("active");
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
                        
                        <a href="python.php">
                        <div class="pageCategory">
                            Python
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

                <h2>Applications of Python</h2>
                
                <ul style="font-family: 'Raleway', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #696969;">
                    <li>Web and Internet Development : Frameworks such as Django and Pyramid. Micro-frameworks such as Flask and Bottle. Advanced content management systems such as Plone and django CMS.</li>

                    <li>Scientific and Numeric : Python is widely used in scientific and numeric computing. SciPy is a collection of packages for mathematics, science, and engineering. Pandas is a data analysis and modeling library. IPython is a powerful interactive shell that features easy editing and recording of a work session, and supports visualizations and parallel computing. The Software Carpentry Course teaches basic skills for scientific computing, running bootcamps and providing open-access teaching materials.</li>

                    <li>Education : Python is a superb language for teaching programming, both at the introductory level and in more advanced courses.</li>

                    <li>Desktop GUIs : The Tk GUI library is included with most binary distributions of Python. Some toolkits that are usable on several platforms are available separately: wxWidgets Kivy, for writing multitouch applications. Qt via pyqt or pyside</li>

                    <li>Software Development : Python is often used as a support language for software developers, for build control and management, testing, and in many other ways. SCons for build control. Buildbot and Apache Gump for automated continuous compilation and testing. Roundup or Trac for bug tracking and project management.
                    </li>

                    <li>Business Applications : Python is also used to build ERP and e-commerce systems.Odoo is an all-in-one management software that offers a range of business applications that form a complete suite of enterprise management applications.Tryton is a three-tier high-level general purpose application platform.</li>
                
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
