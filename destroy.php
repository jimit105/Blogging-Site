<?php
session_start();
session_unset(); 
//header('Location:index.php');
if(isset($_SERVER['HTTP_REFERER'])) {
 header('Location: '.$_SERVER['HTTP_REFERER']);  
} else {
 header('Location: index.php');  
}
?>