<?php 
require_once("authenciation.php");
	 if (!isset($_SESSION['ID'])){
      redirect(web_root."admin/login.php");
     } 

$content='home.php';
$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {  
	default :
	  $content    = 'home.php';
}
require_once("navigation/navigations.php");
?>