<?php 
			
	class login{
		function loginadmin($username, $password){
			$host = mysqli_connect("localhost","root","","sistem_akademik");
			$query = mysqli_query($host,"SELECT * FROM administrator WHERE username='$username' AND password='$password'");
			$rec = mysqli_num_rows($query);
			if($rec != 0){
				@session_start();
				$arr = mysqli_fetch_array($query);
				@$_SESSION['idadm'] = $arr['id_admin'];
				@$_SESSION['username'] = $arr['username'];
				@$_SESSION['nama'] = $arr['nama'];

				echo "<script>alert('Berhasil');
				document.location='index.php'</script>";
			}else{
				echo "<script>alert('Gagal')</script>";
			}
		}
	}
	class inputdata{
		function inputmahasiswa($nim,$nama,$alamat,$kd_fakultas,$kd_prodi,$semester,$tempat_tgl_lahir,$website_url,$no_hp){
			$host = mysqli_connect("localhost","root","","sistem_akademik");
			$query = mysqli_query($host,"INSERT INTO mahasiswa() VALUES('$nim','$nama','$alamat','$kd_fakultas','$kd_prodi','$semester','$tempat_tgl_lahir','$website_url',$no_hp)");
			if($query){
				echo "<script>alert('Berhasil');
				document.location='index.php'</script>";
			}else{
				echo "<script>alert('Gagal')</script>";
			}
		}
		function inputfakultas($fakultas,$dekan,$email,$no_tlp,$jumlah_mhs,$status){
			$host = mysqli_connect("localhost","root","","sistem_akademik");
			$query = mysqli_query($host, "INSERT INTO fakultas(fakultas, dekan, email, no_tlp, jumlah_mahasiswa, status) VALUES('$fakultas','$dekan','$email','$no_tlp','$jumlah_mhs','$status')");
			if($query){
				echo "<script>alert('Berhasil');
				document.location='?p=view_fakultas'</script>";
			}else{
				echo "<script>alert('Tidak Masuk')</script>";
			}
		}
		function inputmatkul($mata_kuliah,$jumlah_sks,$mata_kuliah_tgl_mulai,$durasi,$fakultas,$dosen,$semester,$modul){
			$host = mysqli_connect("localhost","root","","sistem_akademik");

			$nama_file = substr((microtime()), 0, 10).'_'.$_FILES['modul']['name'];
			$modul = "modul/".$nama_file;
			$query = mysqli_query($host, "INSERT INTO mata_kuliah(matkul,sks,matkul_tgl_mulai, durasi, kd_fakultas, dosen, semester,modul) VALUES('$mata_kuliah','$jumlah_sks','$mata_kuliah_tgl_mulai','$durasi','$fakultas','$dosen','$semester','$modul')");
			$cek = move_uploaded_file($_FILES['modul']['tmp_name'], $modul);

			if($query){
				echo "<script>alert('Berhasil');
				document.location='?p=view_matakuliah'</script>";
			}else{
				echo "<script>alert('Gagal')</script>";
			}
		}
		function inputdosen($nid,$nama,$alamat,$tempat_lahir,$tgl_lahir,$kd_fakultas,$jenkel,$no_hp,$deskripsi){
			$host = mysqli_connect("localhost","root","","sistem_akademik");

		

			$query = mysqli_query($host,"INSERT INTO dosen(nid,nama_dosen,alamat_dosen,tempat_lahir,tgl_lahir,kd_fakultas,jenkel,no_hp,deskripsi,modul) VALUES ('$nid','$nama','$alamat','$tempat_lahir','$tgl_lahir','$kd_fakultas','$jenkel','$no_hp','$deskripsi',$modul)");
			
			if($query){
				echo "<script>alert('Berhasil');
				document.location='?p=view_dosen'</script>";
			}else{
				echo "<script>alert('Gagal')</script>";
			}
		}
		function inputnilai($kd_matkul, $nim, $uts, $uas, $ekt1, $ekt2){
			$host = mysqli_connect("localhost","root","","sistem_akademik");
			$query = mysqli_query($host,"INSERT INTO nilai(kd_matkul, nim, uts, uas, ekt1, ekt2) VALUES ('$kd_matkul','$nim','$uts', '$uas', '$ekt1', '$ekt2')");
			if($query){
				echo "<script>alert('Berhasil');
				document.location='?p=view_nilai'</script>";
			}else{
				echo "<script>alert('Gagal')</script>";
			}
		}
	}
	class editdata{
		function editdosen($nid,$nama,$alamat,$tempat_lahir,$tgl_lahir,$kd_fakultas,$jenkel,$no_hp,$deskripsi){
			$host = mysqli_connect("localhost","root","","sistem_akademik");
			$query = mysqli_query($host,"UPDATE dosen SET nama_dosen = '$nama', alamat_dosen = '$alamat', tempat_lahir = '$tempat_lahir',
				tgl_lahir='$tgl_lahir',kd_fakultas='$kd_fakultas', jenkel ='$jenkel', no_hp='$no_hp',deskripsi='$deskripsi' WHERE nid='$nid'");
			if($query){
				echo "<script>alert('Berhasil');
				document.location='?p=view_dosen'</script>";
			}else{
				echo "<script>alert('Gagal')</script>";
			}
		}
		function editmahasiswa($nim,$nama,$alamat,$kd_fakultas,$kd_prodi,$semester,$tempat_tgl_lahir,$website_url,$no_hp){
			$host = mysqli_connect("localhost","root","","sistem_akademik");
			$query = mysqli_query($host,"UPDATE mahasiswa SET nama = '$nama', alamat = '$alamat', kd_fakultas = '$kd_fakultas', kd_prodi = '$kd_prodi', semester='$semester', tempat_tgl_lahir='$tempat_tgl_lahir', website_url = '$website_url', no_hp = '$no_hp' WHERE nim='$nim'");
			if($query){
				echo "<script>alert('Berhasil');
				document.location='?p=view_mahasiswa'</script>";
			}else{
				echo "<script>alert('Gagal')</script>";
			}
		}
		function editmatkul($kd_matkul,$mata_kuliah,$jumlah_sks,$mata_kuliah_tgl_mulai,$durasi,$fakultas,$dosen,$semester){
			$host = mysqli_connect("localhost","root","","sistem_akademik");
			$query = mysqli_query($host, "UPDATE mata_kuliah SET matkul='$mata_kuliah', sks='$jumlah_sks', matkul_tgl_mulai='$mata_kuliah_tgl_mulai',durasi='$durasi', kd_fakultas='$fakultas', dosen='$dosen', semester ='$semester' WHERE kd_matkul='$kd_matkul'");
			if($query){
				echo "<script>alert('Berhasil');
				document.location='?p=view_matakuliah'</script>";
			}else{
				echo "<script>alert('Gagal')</script>";
			}
		}
	}
?>