-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jun 2019 pada 05.41
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpeg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anak`
--

CREATE TABLE `anak` (
  `id_anak` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tpt_lhr` varchar(50) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `pddk` varchar(50) NOT NULL,
  `pkrj` varchar(50) NOT NULL,
  `stts_hub` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahasa`
--

CREATE TABLE `bahasa` (
  `id_bahasa` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `bahasa` varchar(50) NOT NULL,
  `kmp_bcr` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bahasa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_master_eselon` int(11) NOT NULL,
  `id_master_jabatan` int(11) NOT NULL,
  `jenis_jbt` varchar(50) NOT NULL,
  `no_sk_jbt` varchar(50) NOT NULL,
  `tgl_sk_jbt` date NOT NULL,
  `awal_masa_jbt` date NOT NULL,
  `akhir_masa_jbt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi_krj`
--

CREATE TABLE `lokasi_krj` (
  `id_lokasi` int(11) NOT NULL,
  `kode_lokasi` varchar(20) NOT NULL,
  `nm_lokasi` varchar(32) NOT NULL,
  `alamat_lokasi` varchar(128) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi_krj`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_eselon`
--

CREATE TABLE `master_eselon` (
  `id_master_eselon` int(11) NOT NULL,
  `eselon` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_eselon`
--

INSERT INTO `master_eselon` (`id_master_eselon`, `eselon`) VALUES
(1, 'Ia'),
(2, 'Ib'),
(3, 'IIa'),
(4, 'IIb'),
(5, 'IIIa'),
(6, 'IIIb'),
(7, 'IVa'),
(8, 'IVb'),
(9, 'Va');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_golongan`
--

CREATE TABLE `master_golongan` (
  `id_master_golongan` int(11) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `pangkat` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_golongan`
--

INSERT INTO `master_golongan` (`id_master_golongan`, `golongan`, `pangkat`) VALUES
(1, 'CPNS', 'Calon Pegawai Negeri Sipil'),
(2, 'I/A', 'Juru Muda'),
(3, 'I/B', 'Juru Muda Tingkat I'),
(4, 'I/C', 'Juru'),
(5, 'I/D', 'Juru Tingkat I'),
(6, 'II/A', 'Pengatur Muda'),
(7, 'II/B', 'Pengatur Muda Tingkat I'),
(8, 'II/C', 'Pengatur'),
(9, 'II/D', 'Pengatur Tingkat I'),
(10, 'III/A', 'Penata Muda'),
(11, 'III/B', 'Penata Muda Tingkat I'),
(12, 'III/C', 'Penata'),
(13, 'III/D', 'Penata Tingkat I'),
(14, 'IV/A', 'Pembina'),
(15, 'IV/B', 'Pembina Tingkat I'),
(16, 'IV/C', 'Pembina Utama Muda'),
(17, 'IV/D', 'Pembina Utama Madya'),
(18, 'IV/E', 'Pembina Utama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_jabatan`
--

CREATE TABLE `master_jabatan` (
  `id_master_jabatan` int(11) NOT NULL,
  `nm_jabatan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_jabatan`
--

INSERT INTO `master_jabatan` (`id_master_jabatan`, `nm_jabatan`) VALUES
(1, 'Kepala Dinas'),
(2, 'Kepala Sekolah'),
(3, 'Guru'),
(4, 'Staff'),
(5, 'Pengawas'),
(7, 'Sekretaris'),
(8, 'Koordinator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `jenis_mutasi` varchar(50) NOT NULL,
  `no_sk_mts` varchar(50) NOT NULL,
  `tgl_mts` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mutasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `orangtua`
--

CREATE TABLE `orangtua` (
  `id_orangtua` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tpt_lhr` varchar(50) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `pddk` varchar(50) NOT NULL,
  `pkrj` varchar(50) NOT NULL,
  `stts_hub` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orangtua`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pangkat`
--

CREATE TABLE `pangkat` (
  `id_pangkat` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_master_golongan` int(11) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `tmt_pkt` date NOT NULL,
  `pjb_pgs_pkt` varchar(50) NOT NULL,
  `no_sk_pkt` varchar(50) NOT NULL,
  `tgl_sk_pkt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pangkat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nuptk` varchar(20) NOT NULL,
  `nm_pegawai` varchar(32) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `uk` varchar(32) NOT NULL,
  `kec` varchar(32) NOT NULL,
  `no_serdik` varchar(32) NOT NULL,
  `tpt_lhr` varchar(32) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `tgl_pnsn` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `stts_pnkh` varchar(20) NOT NULL,
  `stts_kpgw` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(32) NOT NULL,
  `alamat` varchar(64) NOT NULL,
  `tgl_msk` date NOT NULL,
  `tgl_knk_pkt` date NOT NULL,
  `tgl_knk_gj` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `tingkat` varchar(20) NOT NULL,
  `nm_skl_uv` varchar(100) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `no_ijz` int(11) NOT NULL,
  `tgl_ijz` date NOT NULL,
  `nm_ks_rk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `suami_istri`
--

CREATE TABLE `suami_istri` (
  `id_suami_istri` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tpt_lhr` varchar(50) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `pddk` varchar(5) NOT NULL,
  `pkrj` varchar(50) NOT NULL,
  `stts_hub` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suami_istri`
--

-- --------------------------------------------------------

-- Struktur dari tabel `kelengkapan`
--

CREATE TABLE `dokumen_kelengkapan` (
  `id_dokumen` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `nd` varchar(50) NOT NULL,
  `tgl_upload` date NOT NULL,
  `nilai` varchar(50) NOT NULL,
  `stts` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suami_istri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `level` enum('Administrator','Pegawai', 'Tim Penilai') NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `nama`, `no_hp`, `level`, `id_pegawai`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'Nugi', '082290009830', 'Administrator', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indexes for table `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`id_bahasa`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `lokasi_krj`
--
ALTER TABLE `lokasi_krj`
  ADD PRIMARY KEY (`id_lokasi`),
  ADD KEY `id_lokasi` (`kode_lokasi`),
  ADD KEY `id_lokasi_2` (`kode_lokasi`);

--
-- Indexes for table `master_eselon`
--
ALTER TABLE `master_eselon`
  ADD PRIMARY KEY (`id_master_eselon`);

--
-- Indexes for table `master_golongan`
--
ALTER TABLE `master_golongan`
  ADD PRIMARY KEY (`id_master_golongan`);

--
-- Indexes for table `master_jabatan`
--
ALTER TABLE `master_jabatan`
  ADD PRIMARY KEY (`id_master_jabatan`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`);

--
-- Indexes for table `orangtua`
--
ALTER TABLE `orangtua`
  ADD PRIMARY KEY (`id_orangtua`);

--
-- Indexes for table `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `nip` (`nip`),
  ADD KEY `nip_2` (`nip`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `suami_istri`
--
ALTER TABLE `suami_istri`
  ADD PRIMARY KEY (`id_suami_istri`);

--
-- Indexes for table `kelengkapan`
--
ALTER TABLE `suami_istri`
  ADD PRIMARY KEY (`id_d`); 

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id_anak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `id_bahasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lokasi_krj`
--
ALTER TABLE `lokasi_krj`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_eselon`
--
ALTER TABLE `master_eselon`
  MODIFY `id_master_eselon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `master_golongan`
--
ALTER TABLE `master_golongan`
  MODIFY `id_master_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `master_jabatan`
--
ALTER TABLE `master_jabatan`
  MODIFY `id_master_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orangtua`
--
ALTER TABLE `orangtua`
  MODIFY `id_orangtua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pangkat`
--
ALTER TABLE `pangkat`
  MODIFY `id_pangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suami_istri`
--
ALTER TABLE `suami_istri`
  MODIFY `id_suami_istri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
