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
			<a href="rss.php">
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
	</ul>
	<ul class="list-unstyled CTAs">
		<li>
			<a href="#" class="subscribe">
				<i class="fa fa-envelope"></i>Subscribe us
			</a>
		</li>
		<li>
			<a href="#" class="article">
				<i class="fa fa-share"></i>Share an article
			</a>
		</li>
	</ul>
</nav>';

?>
