<?php
	require_once('dbcon.php');
	function get_part($addpart){
		include_once('includes/'.$addpart);
		}
		function isLogged(){
				return !empty($_SESSION['user'])? true:false;
				}
			function needLogged(){
		    $isLogged=isLogged();
		    if(!$isLogged){
		        header('Location:login.php');
		        exit();
		    }
		    }
?>
