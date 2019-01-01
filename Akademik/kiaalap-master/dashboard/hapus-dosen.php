<?php 
	$id = $_REQUEST['id'];
	  $host = mysqli_connect("localhost","root","","sistem_akademik");
    $query = mysqli_query($host,"DELETE FROM dosen WHERE nid = '$id'");
    if($query){
    	echo "<script>alert('Data Sukses DiHapus');
    	document.location='../index.php?p=view_dosen'</script>";
    }else{
    	echo "<script>alert('Gagal')</script>";
    }
?>	