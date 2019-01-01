<?php
	session_start();
	if(!@$_SESSION['idadm']){
		include "login.php";
	}else{
		include "admin.php";
	}
?>