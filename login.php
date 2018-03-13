<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "Blogging-Site";

	$con=mysqli_connect($host, $user, $pass, $db_name) or die("Cannot connect to Database ");
    
    $username=filter($_POST['email']);
	$password=filter($_POST['password']);
    
	$query="SELECT * FROM users WHERE email='".$username."' AND password='".$password."' ";
    
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)                         
	{
		$row=mysqli_fetch_array($result);
		$_SESSION['username']=$username;
        $_SESSION['fname']=$row['fname'];
	}
	else
	{
		echo '<script type="text/javascript"> alert("Wrong Username or Password!");
        window.location.href="login-page.php";
		</script>';
        
	}
}

if(isset($_SESSION['username'])){
	echo "username set";
	$uname=$_SESSION['username'];
    header("Location:index.php");
	if($uname=='admin@example.com'){
	header("Location:admin-subscriptions.php");
	}
}

function filter($str)
{
	trim($str);
	htmlspecialchars($str);
	
	return($str);
}
?>