-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Des 2018 pada 15.47
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrator`
--

CREATE TABLE `administrator` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `administrator`
--

INSERT INTO `administrator` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Effendy', 'effendy48', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_nilai`
--

CREATE TABLE `detail_nilai` (
  `kd_detail_nilai` int(11) NOT NULL,
  `kd_nilai` int(11) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `ekt1` int(11) DEFAULT NULL,
  `ekt2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_nilai`
--

INSERT INTO `detail_nilai` (`kd_detail_nilai`, `kd_nilai`, `uts`, `uas`, `ekt1`, `ekt2`) VALUES
(1, 1, 100, 100, 100, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nid` int(11) NOT NULL,
  `nama_dosen` varchar(35) DEFAULT NULL,
  `alamat_dosen` text,
  `tempat_lahir` text,
  `tgl_lahir` date DEFAULT NULL,
  `kd_fakultas` int(11) DEFAULT NULL,
  `jenkel` varchar(15) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nid`, `nama_dosen`, `alamat_dosen`, `tempat_lahir`, `tgl_lahir`, `kd_fakultas`, `jenkel`, `no_hp`, `deskripsi`) VALUES
(10139334, 'Effendy Wahyu, S.Kom., M.Kom', 'Jakarta', 'Jakarta', '2018-01-01', 1, 'Laki - Laki', '085939157988', 'Jakarta Adalah Kota Besar dan Menjadi Percontohan Perkembangan Bisnis Untuk Kota - Kota Di Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `kd_fakultas` int(11) NOT NULL,
  `fakultas` varchar(50) DEFAULT NULL,
  `dekan` varchar(50) DEFAULT NULL,
  `email` text,
  `no_tlp` text,
  `jumlah_mahasiswa` int(11) DEFAULT NULL,
  `status` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`kd_fakultas`, `fakultas`, `dekan`, `email`, `no_tlp`, `jumlah_mahasiswa`, `status`) VALUES
(1, 'Teknik', NULL, NULL, NULL, NULL, NULL),
(2, 'Ilmu Sosial dan Politik', 'Prof. Effendy Wahyu Pradana', 'wahyupradana729@gmail.com', '0859491223', 500, 'Aktif'),
(4, 'Ekonomi', 'Prof. Aldi Sutawi', 'aldi@gmail.com', '0808080111', 200, 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text,
  `kd_fakultas` int(11) DEFAULT NULL,
  `kd_prodi` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `tempat_tgl_lahir` text,
  `website_url` text,
  `no_hp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `kd_fakultas`, `kd_prodi`, `semester`, `tempat_tgl_lahir`, `website_url`, `no_hp`) VALUES
(1604030021, 'Jack Sparow', 'tangerang', 1, 1, 5, 'Bojonegoro, 26 Juni 1999', 'himauntika.org', '88975');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kd_matkul` int(11) NOT NULL,
  `matkul` varchar(35) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  `matkul_tgl_mulai` text,
  `durasi` text,
  `kd_fakultas` int(11) DEFAULT NULL,
  `dosen` varchar(35) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kd_matkul`, `matkul`, `sks`, `matkul_tgl_mulai`, `durasi`, `kd_fakultas`, `dosen`, `semester`) VALUES
(2, 'Kalkulus 1', 4, ' 20 Agustus 2018', '15 Pertemuan', 0, 'Ir. Effendy Wahyu Pradana', 5),
(6, 'Mobile Programming 1', 4, ' 20 Agustus 2018', '15 Pertemuan', 0, 'Ir. Effendy Wahyu Pradana', 3),
(7, 'Mobile Programming 4', 4, ' 20 Agustus 2018', '15 Pertemuan', 0, 'Effendy Wahyu Pradana S.Kom., M.Kom', 3),
(10, 'Kalkulus 1', 4, ' 20 Agustus 2018', '15 Pertemuan', 0, 'Taufiq Hidayat S.Kom, M.Kom', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `kd_nilai` int(11) NOT NULL,
  `kd_matkul` int(11) DEFAULT NULL,
  `nim` int(11) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `ekt1` int(11) DEFAULT NULL,
  `ekt2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`kd_nilai`, `kd_matkul`, `nim`, `uts`, `uas`, `ekt1`, `ekt2`) VALUES
(1, 9, 1604030021, NULL, NULL, NULL, NULL),
(2, 1, 80, 80, 80, 70, 80),
(3, 1604030021, 0, 90, 90, 90, 70),
(4, 0, 1604030021, 88, 80, 90, 60),
(5, 1604030021, 0, 70, 80, 88, 90),
(6, 1604030021, 0, 88, 78, 80, 60),
(7, 1604030021, 0, 77, 77, 77, 77),
(8, 1604030021, 0, 88, 88, 88, 88),
(10, 0, 1604030021, 99, 77, 90, 80),
(11, 6, 1604030021, 70, 60, 90, 90),
(12, 7, 1604030021, 75, 80, 90, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `kd_prodi` int(11) NOT NULL,
  `prodi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`kd_prodi`, `prodi`) VALUES
(1, 'Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_nilai`
--
ALTER TABLE `detail_nilai`
  ADD PRIMARY KEY (`kd_detail_nilai`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`kd_fakultas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`kd_matkul`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`kd_nilai`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kd_prodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `detail_nilai`
--
ALTER TABLE `detail_nilai`
  MODIFY `kd_detail_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `kd_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1604030022;
--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `kd_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `kd_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `kd_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
