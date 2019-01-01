<?php 
	$id = $_REQUEST['id'];
	  $host = mysqli_connect("localhost","root","","sistem_akademik");
    $query = mysqli_query($host,"DELETE FROM fakultas WHERE kd_fakultas = '$id'");
    if($query){
    	echo "<script>alert('Data Sukses DiHapus');
    	document.location='../index.php?p=view_fakultas'</script>";
    }else{
    	echo "<script>alert('Gagal')</script>";
    }
?>	