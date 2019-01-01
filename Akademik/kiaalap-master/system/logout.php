<?php 
	session_start();
	session_unset(@$_SESSION['idadm']);
		echo "<script>alert('Selamat Tinggal');
		document.location='../index.php'</script>";

?>