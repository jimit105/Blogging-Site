<?php

echo '
<nav class="navbar navbar-expand">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="fa fa-align-justify"></i>
                                <span></span>
                            </button>
                    </div>

                    <a href="#" id="pageCategory">
                        Home                                                 
                    </a>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item"><a href="#" class="nav-link">';
                            
                            
                            if(isset($_SESSION['username'])){
echo $_SESSION['username'];
}else{
echo 'Guest';
}
                            
                            echo '
                            </a></li>
                            <li class="nav-item">';
                            
                            
                            if(isset($_SESSION['username'])){
echo '<a class="nav-link" href="destroy.php" style="text-decoration:none">Logout</a>';
}else{
echo '<a class="nav-link" href="login-page.php" style="text-decoration:none">Login</a>';
}
                            
                            echo'
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>';

?>