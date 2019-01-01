<?php
	switch($_GET['p']){
		case 'tambah_mahasiswa'	:	if(!file_exists("dashboard/add-mahasiswa.php"))die("Halaman Tidak Ada");
									include("dashboard/add-mahasiswa.php");
									break;
									break;

		case 'edit_mahasiswa'	:	if(!file_exists("dashboard/edit-mahasiswa.php"))die("Halaman Tidak Ada");
									include("dashboard/edit-mahasiswa.php");
									break;
									break;

		case 'tambah_fakultas'	:	if(!file_exists("dashboard/add-fakultas.php"))die("Halaman Tidak Ada");
									include("dashboard/add-fakultas.php");
									break;
									break;
		case 'tambah_matakuliah'	:	if(!file_exists("dashboard/add-matakuliah.php"))die("Halaman Tidak Ada");
									include("dashboard/add-matakuliah.php");
									break;
									break;
		case 'tambah_dosen'			:if(!file_exists("dashboard/add-dosen.php"))die("Halaman Tidak Ada");
									include("dashboard/add-dosen.php");
									break;
									break;

		case 'view_matakuliah'		:if(!file_exists("dashboard/view-matakuliah.php"))die("Halaman Tidak Ada");
									include("dashboard/view-matakuliah.php");
									break;
									break;
		case 'view_fakultas'		:if(!file_exists("dashboard/view-fakultas.php"))die("Halaman Tidak Ada");
									include("dashboard/view-fakultas.php");
									break;
									break;	
		case 'view_mahasiswa'		:if(!file_exists("dashboard/view-mahasiswa.php"))die("Halaman Tidak Ada");
									include("dashboard/view-mahasiswa.php");
									break;
									break;
		case 'view_dosen'			:if(!file_exists("dashboard/view-dosen.php"))die("Halaman Tidak Ada");
									include("dashboard/view-dosen.php");
									break;
									break;
		case 'edit_dosen'			:if(!file_exists("dashboard/edit-dosen.php"))die("Halaman Tidak Ada");
									include("dashboard/edit-dosen.php");
									break;
									break;
		case 'edit_matakuliah'		:if(!file_exists("dashboard/edit-matakuliah.php"))die("Halaman Tidak Ada");
									include("dashboard/edit-matakuliah.php");
									break;
									break;
		case 'view_nilai'			:if(!file_exists("dashboard/view-nilai.php"))die("Halaman Tidak Ada");
									include("dashboard/view-nilai.php");
									break;
									break;
		case 'tambah_nilai'			:if(!file_exists("dashboard/add-nilai.php"))die("Halaman Tidak Ada");
									include("dashboard/add-nilai.php");
									break;
									break;														

	}
?>