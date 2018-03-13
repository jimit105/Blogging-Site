<?php

echo'
<nav id="sidebar">
	<div class="sidebar-header" id="header">
    <a href="index.php">
		<h3>
			<i class="fa fa-podcast"></i>&nbsp;CodeBuzz
		</h3>
		<strong>
			<i class="fa fa-podcast"></i>
		</strong>
    </a>
	</div>
	<ul class="list-unstyled components">
		<li id="home">
			<a href="index.php" aria-expanded="false">
				<i class="fa fa-home"></i>
                          Home
            
			</a>
		</li>
		<li id="category">
			<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
				<i class="fa fa-clone"></i>
                          Categories
                      
			</a>
			<ul class="collapse list-unstyled" id="pageSubmenu">
				<li id="python">
					<a href="python.php">Python</a>
				</li>
				<li id="machine-learning">
					<a href="machine-learning.php">Machine Learning</a>
				</li>
				<li id="big-data">
					<a href="big-data.php">Big Data</a>
				</li>
			</ul>
		</li>
		<li id="rss">
			<a href="rss-articles.php">
				<i class="fa fa-rss"></i>
                          RSS Articles
                      
			</a>
		</li>
		<li id="about">
			<a href="about.php">
				<i class="fa fa-info-circle"></i>
                          About
                      
			</a>
		</li>
		<li id="chat-box">
			<a href="chat-box.php">
				<i class="fa fa-comments"></i>
                        Chat
                    
			</a>
		</li>
        
        <li id="subscription-details" style="display: none">
			<a href="admin-subscriptions.php">
				<i class="fa fa-list-ul"></i>
                        Subscription Details
                    
			</a>
		</li>
        
	</ul>
	<ul class="list-unstyled CTAs">
		<li>
			<a href="subscribe.php" class="subscribe">
				<i class="fa fa-envelope"></i>Subscribe us
			</a>
		</li>
        <!--
		<li>
			<a href="#" class="article">
				<i class="fa fa-share"></i>Share an article
			</a>
		</li>
        -->
        <li>
			<a href="#" class="subscribe">
				<div id="google_translate_element"></div>
			</a>
		</li>
	</ul>
</nav>';

// Hide Subscription details if user is not admin
if(isset($_SESSION['username'])){
	
	if($_SESSION['username']=='admin@example.com'){
	echo '
<script>
    document.getElementById("subscription-details").style.display="block";
</script>
';
	}
}


//  Google Translate
echo '
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: "en"}, "google_translate_element");
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
';




?>
