<?php 
	$id = $_REQUEST['id'];
	  $host = mysqli_connect("localhost","root","","sistem_akademik");
    $query = mysqli_query($host,"DELETE FROM nilai WHERE kd_nilai = '$id'");
    if($query){
    	echo "<script>alert('Data Sukses DiHapus');
    	document.location='../index.php?p=view_nilai'</script>";
    }else{
    	echo "<script>alert('Gagal')</script>";
    }
?>	