-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 16 Mei 2020 pada 03.31
-- Versi Server: 5.5.59-0+deb8u1
-- PHP Version: 5.6.33-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbitase`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bisnis_anggota`
--

CREATE TABLE IF NOT EXISTS `bisnis_anggota` (
`id_anggotabisnis` int(11) NOT NULL,
  `id_team` int(11) DEFAULT NULL,
  `name_ketua` varchar(255) NOT NULL,
  `univ_ketua` varchar(255) NOT NULL,
  `prodi_ketua` varchar(255) NOT NULL,
  `tlahir_ketua` varchar(255) NOT NULL,
  `tgl_ketua` date NOT NULL,
  `alamat_ketua` text NOT NULL,
  `notelp_ketua` varchar(255) NOT NULL,
  `email_ketua` varchar(255) NOT NULL,
  `name_anggota1` varchar(255) NOT NULL,
  `univ_anggota1` varchar(255) NOT NULL,
  `prodi_anggota1` varchar(255) NOT NULL,
  `tlahir_anggota1` varchar(255) NOT NULL,
  `tgl_anggota1` date NOT NULL,
  `alamat_anggota1` text NOT NULL,
  `notelp_anggota1` varchar(255) NOT NULL,
  `email_anggota1` varchar(255) NOT NULL,
  `name_anggota2` varchar(255) NOT NULL,
  `univ_anggota2` varchar(255) NOT NULL,
  `prodi_anggota2` varchar(255) NOT NULL,
  `tlahir_anggota2` varchar(255) NOT NULL,
  `tgl_anggota2` date NOT NULL,
  `alamat_anggota2` text NOT NULL,
  `notelp_anggota2` varchar(255) NOT NULL,
  `email_anggota2` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bisnis_anggota`
--

INSERT INTO `bisnis_anggota` (`id_anggotabisnis`, `id_team`, `name_ketua`, `univ_ketua`, `prodi_ketua`, `tlahir_ketua`, `tgl_ketua`, `alamat_ketua`, `notelp_ketua`, `email_ketua`, `name_anggota1`, `univ_anggota1`, `prodi_anggota1`, `tlahir_anggota1`, `tgl_anggota1`, `alamat_anggota1`, `notelp_anggota1`, `email_anggota1`, `name_anggota2`, `univ_anggota2`, `prodi_anggota2`, `tlahir_anggota2`, `tgl_anggota2`, `alamat_anggota2`, `notelp_anggota2`, `email_anggota2`) VALUES
(5, 10, 'Resti Okta Vina', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi / Fakultas Teknologi Industri Dan Informatika', 'Banyumas', '1999-10-07', 'Tinggarjaya Rt 01 Rw 09, Kecamatan Jatilawang,  Kabupaten Banyumas', '0895361412690', 'restiokta840@gmail.com', 'Faiz Rizqullah Naufal Ahmad', 'Institut Teknologi Telkom Purwokerto', 'Informatika / Fakultas Teknologi Industri Dan Informatika', 'Bekasi', '2000-02-13', 'Perumahan Graha Prima Blok IE 1 No 9, Jalan Cendana 1 Rt 02 Rw 10, Satria Jaya Tambun Utara Bekasi 17510', '085921491177', 'naufalahmadfr@gmail.com', 'Reta Vitantri Cherly Nanda Stelia', 'Institut Teknologi Telkom Purwokerto', 'Informatika / Fakultas Teknologi Industri Dan Informatika', 'Banyumas', '1998-06-24', 'Klapagading Rt 01 Rw 07,  Kecamatan Wangon, Kabupaten Banyumas', '081903277558', 'retavitan@gmail.com'),
(9, 14, 'Tika Febianti', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Cilacap ', '1999-09-16', 'Jalan Letnan Sutrisno, Keleng Rt 01/03 Kecamatan Kesugihan Kabupaten Cilacap', '085843929563', 'tikaafebianti@gmail.com', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', ''),
(10, 15, 'Apriliana Puspitaningrum', 'IT Telkom Purwokerto', 'Sistem Informasi', 'Purwokerto', '1999-04-03', 'Pasirmuncang RT 1 RW 5 Purwokerto Barat', '085600814699', 'lianaapril113@gmail.com', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', ''),
(11, 16, 'Amal Lia Nurdin', 'IT Telkom Purwokerto ', 'Sistem Informasi', 'Purbalingga', '1998-09-29', 'Purbalingga', '085335576969', 'nurdinamallia@gmail.com', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', ''),
(16, 21, 'Mirza Ali Arsyad', 'IT Telkom Purwokerto', 'S1 Sistem Informasi  Fakultas Teknologi Industri Dan Informatika', 'Cilacap', '1999-08-11', 'Jalan Sawah Contoh Rt 01 Rw 01', '089666491712', 'mirzaaliarsyad85@gmail.com', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', ''),
(17, 22, 'Bayu Bilianto', 'Institute Teknologi Telkom Purwokerto', 'Sistem Informasi Fakultas Teknologi Industri Dan Informatika', 'Banyumas', '1999-05-31', 'Kebumen', '082230205581', 'bayubilianto31@gmail.com', 'Bergas Pamungkas', 'Institute Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Purwokerto', '1996-09-20', 'Banyumas', '085329039848', 'bergaspamungkas@gmail.com', 'Bayu Anggoro Krisnamurti', 'Institute Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Purwokerto', '1999-08-10', 'Pekalongan', '08232894491', '17103084@ittelkom-pwt.ac.id'),
(18, 23, 'Monica Dwi Nanda BR Karosekali', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Sidikalang', '1999-02-20', 'Jl_Masjid_No182_B_Sidikalang_Kab_Dairi_Prov_Sumatera_Utara', '081391682106', 'monicakarosekali@gmail.com', 'Ahksaf Audina TTT', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Banyumas', '1999-08-30', 'Pandak_RT01_RW01_Kec_Baturraden_Kab_Banyumas_Prov_JawaTengah', '081392185585', 'ahksafaudina@gmail.com', 'Moniq Kartika Sari', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Magetan', '1999-04-03', 'Ciberem_RT01_RW02_Kec_Sumbang_Kab_Banyumas_Prov_Jawatengah', '085741845387', 'moniq.krt@gmail.com'),
(19, 24, 'Sari Kusuma Wardani', 'IT Telkom Purwokerto', 'Sistem Informasi', 'Purwokerto', '2000-02-05', 'Jalan Pahlawan Gang 3 RT 07 RW 01 Pasirmuncang Purwokerto Barat', '081229973933', 'wardanisari5@gmail.com', 'Eza Nurmalasari', 'IT Telkom Purwokerto', 'Sistem Informasi', 'Purwokerto', '2000-05-06', 'Jalan Jendral Sutoyo Gang 5 RT 06 RW 02 Purwokerto Barat', '085227104545', 'ezanurma@gmail.com', 'Muhamad Amrizal Nahar', 'IT Telkom Purwokerto', 'Sistem Informasi', 'Pemalang', '1998-11-25', 'Desa Klegen RT 02 RW 01 Kecamatan Comal Kabupaten Pemalang', '08174965941', 'muhamadamrizalnahar197@gmail.com'),
(20, 25, 'Oktiara Anggita Fatma', 'IT Telkom Purwokerto', 'S1 Sistem Informasi', 'Banyumas', '1997-10-12', 'Jalan_Dukuhwaluh_Rt01_Rw10_Kecamatan_Kembaran_Kabupaten_Banyumas', '082216539874', 'oktiaragitaa@gmail.com', 'Irma_Rachmawati', 'Universitas_Jendal_Sudirman', 'S1 Keperawatan', 'Sidoarjo', '1999-03-17', 'Lumbir_Rt03_Rw07_Grumbul_Krapyak_Kabupaten_Banyumas', '082223233283', 'irmarachmawati1703@gmail.com', '', '', '', '', '0000-00-00', '', '', ''),
(21, 26, 'Lidiya Nur Hidayah', 'Institut Teknologi Telkom Purwokerto', 'S1 Sistem Informasi', 'Cilacap', '1999-06-08', 'Jalan Damar No 120 Tritih Kulon Cilacap', '08990563312', 'lidiyanur8@gmail.com', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', ''),
(23, 28, 'Alifan Dimas Saputra', 'ITTelkom Purwokerto', 'Sistem Informasi', 'Kebumen', '2019-08-24', 'Kebumen', '082226043135', 'alifan.dimas24@gmail.com', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', ''),
(24, 29, 'Rahmat Hidayat', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Banyumas', '2000-01-17', 'Purwokerto', '083863358317', 'rahmathidayat0183@gmail.com', 'Ovel Canserifo Fikanti', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Banyumas', '1999-06-29', 'Purwokerto', '082220688212', 'ovelcanserifof@gmail.com', 'Evadila Shafira Salsabilla', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Tangerang', '1998-04-19', 'Purwokerto', '082223312419', 'evadilashafiras@gmail.com'),
(25, 30, 'Silvia_Oktaviani', 'IT_TELKOM_PURWOKERTO', 'Sistem_Informasi', 'Pwt', '1999-10-28', 'Jl_m_yusup_rt02_rw03', '081281733923', 'Silviaoktaviani120@gmail.com', 'Farkhan_Hariyadi_Berbudi_Bowo_Leksono', 'IT_TELKOM_PURWOKERTO', 'Sistem_Informasi', 'Pwt', '1999-01-23', 'Perumahan_puri_indah_blok_b37_rt01_rw11', '089693403565', '17103071@ittelkom-pwt.ac.id', '', '', '', '', '0000-00-00', '', '', ''),
(26, 31, 'Riky Haryani Ramadhanti', 'IT TELKOM PURWOKERTO', 'S1 SISTEM INFORMASI', 'Kebumen', '2000-12-26', 'Desa Krandegan Rt 01 Rw 04 Kecamatan Puring Kabupaten Kebumen', '082325219827', 'rikyharyani2612@gmail.com', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', ''),
(27, 32, 'Laily Nur Diah', 'IT Telkom Purwokerto', 'Sistem Informasi', 'Pekalongan', '2000-04-21', 'Jalan Pahlawan Gang VIIA NO 40 Tanjung Purwokerto Barat', '085876033573', 'lailynurdiah@gmail.com', 'Syafira Riza Ramadhana', 'IT Telkom Purwokerto', 'Sistem Informasi', 'Cilacap', '2000-11-27', 'Jalan Pahlawan Gang VIIA NO 40 Tanjung Purwokerto Barat', '08987090004', 'Syafiraariza2729@gmail.com', 'Gina Okta Mulia', 'Universitas Muhammadiyah Purwokerto', 'Akuntansi', 'Cilacap', '2000-10-28', 'Perum Bukit Panorama Tunggul Sulung Jl Utama No 5 Rt 03 Rw 14', '0895357501374', 'ginaoktamulia00@gmail.com'),
(28, 33, 'Agung Laksana', 'Institut Teknologi Telkom Purwokerto', 'S1 Sistem Informasi', 'Purwokerto', '1999-02-03', 'Jalan Pemotongan Hewan Pasar Sumpiuh', '082292774356', 'agunglaksana392@gmail.com', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', ''),
(29, 34, 'Muhammad Faiz Rizza Mubarak', 'Institut Teknologi Telkom Purwokerto', 'S1 Sistem Informasi', 'Banyuwangi', '1999-03-31', 'Muncar Banyuwangi Jawa Timur', '081238146296', 'faizrizza@gmail.com', 'Okta Verina Tri Utami', 'Institut Teknologi Telkom Purwokerto', 'S1 Sistem Informasi', 'Cilacap', '1999-10-08', 'Sampang Cilacap Jawa Tengah', '089632598097', 'oktaverinatriu@gmail.com', '', '', '', '', '0000-00-00', '', '', ''),
(30, 35, 'Iffa Dwi Maulidina', 'IT Telkom Purwokerto', 'S1 Sistem Informasi', 'Banyumas', '1999-06-18', 'Wangon_Banyumas_Jawa Tengah', '083863535312', '17103073@ittelkom-pwt.ac.id', 'Jihan Kumala', 'IT Telkom Purwokerto', 'S1 Sistem Informasi', 'Tegal', '2000-01-28', 'Jalan Sutawijaya_Tegal_Jawa Tengah', '087719420723', 'jihankumala165@gmail.com', 'Intan Yulita Wibowo', 'IT Telkom Purwokerto', 'S1 Sistem Informasi', 'Wonosobo', '1998-07-24', 'Kepencar_Kertek_Wonosobo_Jawa Tengah', '085280476224', 'intanyulita24@gmail.com'),
(32, 37, 'Belinda Sekar Ayuningtyas', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Jakarta', '1998-12-29', 'Perumahan Griya Satria Indah 2 Blok N 3 Sumampir', '083862290477', '17103046@ittelkom-pwt.ac.id', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', ''),
(34, 39, 'HANDHY NUR PRABOWO', 'IT TELKOM PURWOKERTO', 'SISTEM INFORMASI', 'PURWOKERTO', '1997-11-28', 'PERUM_SAPPHIRE_REGENCY_REJASARI_PURWOKERTO_BARAT', '085225845045', 'handhynur13@gmail.com', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', ''),
(35, 40, 'Agung Prayogo', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Sedah Bodan', '1999-08-25', 'Jalan Sarwodadi Purwokerto Selatan', '081254653527', '18103095@ittelkom-pwt.ac.id', 'Asha Gita Dinia', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Banyumas', '1998-11-10', 'Jalan Panjaitan Purwokerto Selatan', '087700210944', '17103003@ittelkom-pwt.ac.id', 'Hertina Sinurat', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Lumban Nainggolan', '1999-07-29', 'Jalan Hos Notosuwiryo Gg 3 Purwokerto Selatan', '085325285828', '18103045@ittelkom-pwt.ac.id'),
(36, 41, 'Rifki Ryandra Wijaya', 'Institut Teknologi Bandung', 'Teknik Industri', 'Kota Bandung', '1998-07-02', 'Jl Pelajar Pejuang 45 No 16 Kota Bandung 40263', '089648407978', 'ryandrarifki@gmail.com', 'Rizki Basuki', 'Institut Teknologi Bandung', 'Teknik Industri', 'Bandung', '1997-09-08', 'Jalantir 2 Selacau Batujajar Bandung Barat', '0895351344455', 'rzkbasuki@students.itb.ac.id', 'Mikail Alby Assyauqi', 'Institut Teknologi Bandung', 'Teknik Industri', 'Tuban', '1997-09-11', 'Jalan Cisitu Lama Gg IV No 19B Kota Bandung', '091235890710', 'mikailalby@students.itb.ac.id'),
(37, 42, 'Dendy Haidar Renaldi', 'Institute_teknologi_telkom_purwokerto', 'Sistem_Informasi', 'Jakarta', '2000-06-04', 'Jl_patriot_karang_Pucung_No_14_Kec_Purwokerto_Selatan_Kab_Banyumas', '0895605264487', 'dendybgt@gmail.com', 'Yanuardi', 'Institute_teknologi_telkom_purwokerto', 'Sistem Informasi', 'Bekasi', '2000-01-25', 'Jln_Veteran_RT_04_05_Desa_Pasirmuncang_Kab_Banyumas', '082327623345', 'yanuardi@outlook.com', 'Ayu Kusumaningtyas', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Jakarta', '1999-09-03', 'Jl_Pramuka_No_175_Kec_Purwokerto_Selatan_Kab_banyumas', '0895322689935', 'ningtyasa03@gmail.com'),
(38, 43, 'Jihan_Shinta_Celina', 'Institut_Teknologi_Telkom_Purwokerto', 'Sistem_Informasi', 'Brebes', '2019-09-16', 'Jl_P_Diponegoro_No_556_Jatisawit_Bumiayu', '085200854545', '17103095@ittelkom-pwt.ac.id', 'Rizky_Firdaus_Kusuma_Adjie', 'Institut_Teknologi_Telkom_Purwokerto', 'Sistem_Informasi', 'Kudus', '2000-04-17', 'Jl_Sirkaya_No_163_Cilacap_Selatan', '089651604860', '17103081@ittelkom-pwt.ac.id', 'Anggi_Jiana_Putri', 'Institut_Teknologi_Telkom_Purwokerto', 'Sistem_Informasi', 'Brebes', '2000-09-03', 'Kedungoleng_Paguyangan_Brebes', '083862447771', '18103036@ittelkom-pwt.ac.id'),
(39, 44, 'Martina Fajariyanti', 'IT Telkom Purwokerto', 'Sistem Informasi', 'Purwokerto', '2019-09-05', 'Perum Widuri Asri Blok G 17 Pemalang', '085700704972', 'fajariyanti52@gmail.com', 'Wike Parwati', 'IT Telkom Purwokerto', 'Sistem Informasi', 'Banyumas', '2019-03-07', 'Karangduren Rt 06 Rw 03', '085747583923', 'wikeparwati17@gamil.com', 'Puspita Pawestrining Tias', 'IT Telkom Purwokerto', 'Sistem Informasi', 'Purwokerto', '2000-06-22', 'Jl Raya Kramat Depan SPBU Kramat Rt 05 Rw 01 Kec Kramat Kab Tegal', '085257054121', 'puspitatyas277@gmail.com'),
(40, 45, 'Sevira Wulandari', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Purbalingga', '2001-12-04', 'Bukateja Purbalingga', '082330140364', 'wulandarisevirr04@gmail.com', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', ''),
(41, 46, 'Hajopan Sarumpaet', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Sibolga', '2001-12-16', 'Jl Sudagaran 1', '082211869417', 'hajopan12@gmail.com', 'Sandry  O Bangun', 'Institut Teknologi Telkom Purwokerto', 'Teknik Telekomunikasi', 'Medan', '2001-10-03', 'Jl Sudagaran 1', '082273392356', 'sandrybangun03@gmail.com', '', '', '', '', '0000-00-00', '', '', ''),
(42, 47, 'Ayu Fadillah Ningrum', 'Institut Teknologi Telkom Purwokerto', 'S1 Sistem Informasi', 'Pemalang', '2001-01-30', 'Jln Markisa Rt 05 Rw 05 Desa Tambakrejo Dusun Tambakringin Kecamatan Pemalang Kabupaten Pemalang', '081393370664', 'ayufadilla30@gmail.com', 'Fiqih Tri Eko Firmansyah', 'Institut Teknologi Telkom Purwokerto', 'S1 Sistem Informasi', 'Banyumas', '2001-09-20', 'Purwokerto', '085747569917', 'fiqihtrieko@gmail.com', 'Nuning Siti Dzulhijjah Nur Ammarah', 'Institut Teknologi Telkom Purwokerto', 'S1 Sistem Informasi', 'Cirebon', '2001-03-09', 'Cirebon', '085802009667', 'nuningd19@gmail.com'),
(43, 48, 'Widi Nur Fakku', 'Intitut Teknologi Telkom Purwokerto', 'S1 Sistem Informasi', 'Kebumen', '2000-05-12', 'Kebumen', '088216388248', 'widifakku05@gmail.com', 'Japitta Togos  Simalango', 'Institut Teknologi Telkom Purwokerto', 'S1 Sistem Informasi', 'Medan', '1999-08-14', 'Medan', '089665815765', 'simalangojapitta@gmail.com', 'Ivan Hidayat', 'Institut Teknologi Telkom Purwokerto', 'S1 Design Komunikasi Visual', 'Banyumas', '2001-10-17', 'Tipar Kidul', '08816746175', 'ivanhidayat438@gmail.com'),
(44, 49, 'Afrijal Farhan Deyantoro', 'IT TELKOM PURWOKERTO', 'SISTEM INFORMASI', 'Jakarta', '1999-06-08', 'Perumahan Griya Satria Bantarsoka Blok J9', '082241159259', 'afrijal.farhan080699@gmail.com', 'Afrijal Farhan Deyantoro', 'IT TELKOM PURWOKERTO', 'SISTEM INFORMASI', 'Jakarta', '1999-06-08', 'Perumahan Griya Satria Bantarsoka Blok J9', '082241159259', 'afrijal.farhan080699@gmail.com', '', '', '', '', '0000-00-00', '', '', ''),
(45, 50, 'Nuzuliyanti Tirtasari', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Pasuruan', '2000-10-12', 'Jalan Sarwodadi', '085706910020', 'tirtasari072@gmail.com', 'Andi Musdalifah', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Onto', '2000-10-20', 'Jalan Pertabatan', '081341642338', 'Ipanana0407@gmail.com', 'Elma Rulfin Tiara Kiu', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Kupang', '2000-04-14', 'Jalan Sarworendah', '085338318819', 'bby123qwerty@gmail.com'),
(46, 51, 'Yusmadi Kristian', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Wonosobo', '1998-10-15', 'Purwokerto', '087788980808', 'tiankris351@gmail.com', 'Dennis Eka Saputra', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Banyumas', '1999-07-04', 'Purwokerto', '082329408850', '17103047@ittelkom-pwt.ac.id', 'Muhammad Fakhrudin Azi', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Pemalang', '1999-09-17', 'Purwokerto', '085292210076', '17103056@ittelkom-pwt.ac.id'),
(47, 52, 'Reka Juliyana', 'IT Telkom Purwokerto', 'S1 Sistem Informasi', 'Banyumas', '2000-07-19', 'Jalan Veteran Purwokerto Barat', '085869991894', 'rjuliyana9@gmail.com', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', ''),
(48, 53, 'Putri Ivana Kasai Sianturi', 'Institut Teknologi Telkom Purwokerto', 'S1 Sistem Informasi', 'Tarutung', '2001-06-17', 'Jalan Pramuka No 175', '082166361956', 'putrisianturi2018@gmail.com', 'Emya Ninta Tarigan', 'Institut Teknologi Telkom Purwokerto', 'S1 Sistem Informasi', 'Tigalingga', '2001-04-07', 'Jalan D I Panjaitan No 68', '082273791373', 'emyaninta123@gmail.com', 'Putri Ivana Kasi Sianturi', 'Institut Teknologi Telkom Purwokerto', 'S1 Sistem Informasi', 'Tarutung', '2001-06-17', 'Jalan Pramuka No 175', '082166361956', 'putrisianturi2018@gmail.com'),
(49, 54, 'Kalyana Galih Ayuning Tyas', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Purwokerto', '2001-02-15', 'Jl Sudagaran 1 Rt 4 Rw 1 Purwokerto Kulon', '082322494752', 'kalyana174@gmail.com', 'Sahrul Nur Hamzah', 'Institut Teknologi Telkom Purwokerto', 'Sistem Informasi', 'Pemalang', '2000-12-05', 'Jl Lombok Rt 3 Rw 6 Dusun Danayasa Desa Kaligelang Taman Pemalang', '085228004206', 'haikalmustofa22@gmail.com', 'Alif Aryadesta Hermawan', 'Institut Teknologi Telkom Purwokerto', 'Desain Komunikasi Visual', 'Jakarta', '2001-01-18', 'Dukuh Zamrud Blok I 20 No 25 Bekasi', '081310135818', 'alif1801@gmail.com'),
(50, 55, 'Isnaeni Rachmawati', 'Institut Teknologi Telkom Purwokerto', 'S1 Sistem Informasi', 'Purwokerto', '2000-07-18', 'Purwokerto', '085295031486', 'rachmairma345@gmail.com', 'Rita Aishwarya Rao', 'Institut Teknologi Telkom Purwokerto', 'S1 Sistem Informasi', 'Purwokerto', '2001-01-31', 'Purwokerto', '082136828816', 'ritaaishwaryarao@gmail.com', 'Miftahul Jannah', 'Institut Teknologi Telkom Purwokerto', 'S1 Sistem Informasi', 'Purwokerto', '2000-12-22', 'Purwokerto', '082325119038', 'miftahulmip22@gmail.com'),
(51, 56, 'Pero Roberto Kristovic', 'FTII', 'Sistem Informasi', 'Cilacap', '2001-07-31', 'Perumahan Puri Mas No12b', '085879050286', 'perrorovic@gmail.com', 'Muhammad Akbar Riandy', 'FTII', 'Sistem Informasi', 'Bandung', '2001-03-14', 'Hasnotosurwiyo Gang3', '081295834002', 'riandyhuey123@gmail.com', 'Rini Indriyati', 'FTII', 'Teknik Informatika', 'Kebumen', '2001-08-02', 'Sudagaran 2 No29', '089606485979', 'riniindriyati9h@gmail.com'),
(52, 57, 'Muhammad Haiqal', 'ITT Purwokerto', 'Teknik Informatika_S1 If_ Fakultas Teknologi Teknik Purwokerto', 'Medan', '1997-02-12', 'Jln Santun No 49a Medan', '6281245487505', 'muhammad.haiqal@yahoo.com', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bisnis_team`
--

CREATE TABLE IF NOT EXISTS `bisnis_team` (
`id_team` int(11) NOT NULL,
  `namateam` varchar(255) NOT NULL,
  `sum_team` int(11) NOT NULL,
  `judulprop` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `fileprop` varchar(255) NOT NULL,
  `filestruct` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bisnis_team`
--

INSERT INTO `bisnis_team` (`id_team`, `namateam`, `sum_team`, `judulprop`, `token`, `fileprop`, `filestruct`) VALUES
(10, 'Limid', 2, 'Mager Tapi Dadi : Banyumas Finger Print Application To Diagnose Disease', '9338df751b7ec4aa6a319546b498f9d696e92082', 'prop_61e01a140ddfc7d4191d29295a307882e294b5fb.pdf', ''),
(14, 'Tika Febianti', 0, 'Jamur Enoki Lava', '15ed7d0fe39bd28c8260e33e935cce4d7c507e4f', 'prop_15ed7d0fe39bd28c8260e33e935cce4d7c507e4f.pdf', ''),
(15, 'Apriliana Puspitaningrum', 0, 'Coffee Cookies And Cream Oreo ', '96463a761eab82b9da78c4769502d4e35761155a', 'prop_96463a761eab82b9da78c4769502d4e35761155a.pdf', ''),
(16, 'Amal Lia Nurdin ', 0, 'Bakso Kaget Kota Knalpot ', '64efe08704941e7e3a7b1d025e4a7727875a4e3b', 'prop_18ce952121692f67bc9c2587c0b536b873c9d38c.pdf', ''),
(21, 'Golden Team', 0, 'Online Custom Accessories', '019605442444538f264ade9b909a6f4e1de093c5', 'prop_5551e072e95ee9d443fe4c9cc3a1e1a0dd930d2a.pdf', ''),
(22, 'TRIPLE B PROJECT', 2, 'Pariwisata', '4bea68cb8cda27bf78f25521ce5058b2da9aea4c', 'prop_4bea68cb8cda27bf78f25521ce5058b2da9aea4c.pdf', 'struct_TRIPLE B PROJECT.jpg'),
(23, 'BUMI', 2, 'Paving Limbah Palstik', 'be5219f40945b211b6557f524861b52f19525a84', 'prop_be5219f40945b211b6557f524861b52f19525a84.pdf', ''),
(24, 'SAE SIE', 2, 'Perancangan Software Sistem Informasi Perbelanjaan Berbasis Aplikasi GPS', '0156e4082c5bcf5bad7787e4ac7307d5fd93fc5f', 'prop_0156e4082c5bcf5bad7787e4ac7307d5fd93fc5f.pdf', 'struct_SAE SIE.jpg'),
(25, 'OKMA_AR', 1, 'BUSINESS_PLAN_JUS_KUMAN_ADM_JUS_KULIT_MANGGA_ANTIDIABETES', 'cc3812a89fe86e86caafb824b3c6fd258ba37fdf', 'prop_cc3812a89fe86e86caafb824b3c6fd258ba37fdf.pdf', 'struct_OKMA_AR.jpg'),
(26, 'Lidiya Nur Hidayah', 0, 'Sistem Pelayanan Online Puskesmas', 'eb5abca42051e24e0485b2ba0b47087fe2ee761d', 'prop_eb5abca42051e24e0485b2ba0b47087fe2ee761d.pdf', 'struct_Lidiya Nur Hidayah.jpg'),
(27, 'Alifan Dimas Saputra', 0, 'Bakso Lava Berbasis Aplikasi', '', '', 'struct_Alifan Dimas Saputra.jpg'),
(28, 'Alifan', 0, 'Bakso Lava Berbasis Aplikasi', 'e6f7192d998b3de00ec84e80130e3ac24bd4ac08', 'prop_e6f7192d998b3de00ec84e80130e3ac24bd4ac08.pdf', 'struct_Alifan.jpg'),
(29, 'ERO Tim', 2, 'BusinessPlanAplikasiJasaTambalBanTAMBALIN', '276cb7c5d2fd995c923391c9bcb38f893e7f6992', 'prop_276cb7c5d2fd995c923391c9bcb38f893e7f6992.pdf', 'struct_ERO Tim.jpg'),
(30, 'Awis Team', 1, 'Hekidi_in_the_industrial_revolution_era_4_0', 'c135883740081d767b495c05633dfb8fb83732e7', 'prop_c135883740081d767b495c05633dfb8fb83732e7.pdf', 'struct_Awis Team.jpg'),
(31, 'RIKY', 0, 'SISTEM PENDUKUNG KEBUGARAN TUBUH BERDASARKAN  UKURAN LINGKAR PERUT', 'e3a1deec8976f450a9d2e23114623a1e71dd93d0', 'prop_e3a1deec8976f450a9d2e23114623a1e71dd93d0.pdf', ''),
(32, 'Nirmala', 2, 'Inovasi Daun Meniran Dan Pegagan', '24edf62530b8d4c0612fbf9143a8b6a5e46e1253', 'prop_24edf62530b8d4c0612fbf9143a8b6a5e46e1253.pdf', 'struct_Nirmala.jpg'),
(33, 'Amaski', 0, 'Apotek Bergaya Teknologi', 'bdc7acda28ce91fa12a4118a44bc79e4b1c5efa6', 'prop_bdc7acda28ce91fa12a4118a44bc79e4b1c5efa6.pdf', 'struct_Amaski.png'),
(34, 'Fosy', 2, 'FosyId Penyedia Jasa Sewa Sepeda Dan Kesehatan Online', '8f7609f68eca005e610d49886bd87c04025c278d', 'prop_8f7609f68eca005e610d49886bd87c04025c278d.pdf', ''),
(35, 'Soedirman', 2, 'Soedirman Street', 'ce2e79964c4bc23caab12afc4db9b647844706ab', 'prop_ce2e79964c4bc23caab12afc4db9b647844706ab.pdf', 'struct_Soedirman.jpg'),
(37, 'Belinda Sekar Ayuningtyas', 0, 'Aplikasi Jasa Tukang', 'ebbd08e3d4cc2a8246f0dcec3f8022b330374dfe', 'prop_ebbd08e3d4cc2a8246f0dcec3f8022b330374dfe.pdf', 'struct_Belinda Sekar Ayuningtyas.jpg'),
(39, 'EnaEnaTeam', 0, 'BWC2019_EnaEnaTeam_Agroindustry_SistemInformasiTPICilacap', '43c06432950a513e2e14c921b8f573e5f97435fa', 'prop_43c06432950a513e2e14c921b8f573e5f97435fa.pdf', 'struct_EnaEnaTeam.jpg'),
(40, 'El Joven', 2, 'Aplikasi Menu Kita', '2a9079e8993cc1d2dc6d9ef968b0f0c74974bd90', 'prop_2a9079e8993cc1d2dc6d9ef968b0f0c74974bd90.pdf', 'struct_El Joven.png'),
(41, 'Locateam', 2, 'Locado Empowering National Tourism Through Fun Traveling Game', '44942c3faa0dd7b4c3fee3e02e3b288437866ae2', 'prop_44942c3faa0dd7b4c3fee3e02e3b288437866ae2.pdf', 'struct_Locateam.jpg'),
(42, 'Team_Rabbit', 2, 'Dream House', 'ab1d664ef3b2f1aaa4d88c1732a79e5f23ccdf0e', 'prop_ab1d664ef3b2f1aaa4d88c1732a79e5f23ccdf0e.pdf', ''),
(43, 'Mamam_nasi', 2, 'Wedding_Organizer', '21d86a0a1504ce7efa5d756bb8e349c637cef948', 'prop_21d86a0a1504ce7efa5d756bb8e349c637cef948.pdf', ''),
(44, 'NgegasID', 2, 'TourMas App', 'cdeb5dee6981803c48cea263ec3d9dba94cf01b3', 'prop_cdeb5dee6981803c48cea263ec3d9dba94cf01b3.pdf', ''),
(45, 'The Infinity', 0, 'Milennial Cafe With Unlimited Themes', '34a5e6d3f330c61d37e2cd5c4178751b855a6211', '', ''),
(46, 'Senja', 1, 'Pengairan Dan Pengusir Burung Otomatis Pada Pertanian Padi', 'b044b1d59ca8b7ac93ccc9fec6a4baedbe2a176a', 'prop_b044b1d59ca8b7ac93ccc9fec6a4baedbe2a176a.pdf', ''),
(47, 'NAF Team', 2, 'Business Plan 3428coffee', '8d714ede64c1e7eb7569ed9107c3ac87277a8650', 'prop_8d714ede64c1e7eb7569ed9107c3ac87277a8650.pdf', ''),
(48, 'Innovate', 2, 'AgRev Ecommerce Yang Berfokus Pada Agroindustri', '1cc9dfe7990ccff062a00a0618deb47e7db4253e', 'prop_1cc9dfe7990ccff062a00a0618deb47e7db4253e.pdf', ''),
(49, 'Afrijal Farhan Deyantoro', 1, 'Pondok Kopi', '5c360ffc848127f8feb526e070efb134c8cbffcf', 'prop_5c360ffc848127f8feb526e070efb134c8cbffcf.pdf', ''),
(50, 'TIFEL BEST TEAM', 2, 'Card For Around The World', '3cfe7f9775aea81ef111f750eb885e62aed309e2', 'prop_3cfe7f9775aea81ef111f750eb885e62aed309e2.pdf', ''),
(51, 'Nocte', 2, 'Gelang Harapan', 'd1f9ae9b977ce172c316760b3e1498c66aa9a8ec', 'prop_d1f9ae9b977ce172c316760b3e1498c66aa9a8ec.pdf', ''),
(52, 'Reka Juliyana', 0, 'Aplikasi Rongsok', '85bf84db9902498b88f09fc024ad92c7316d32d6', 'prop_85bf84db9902498b88f09fc024ad92c7316d32d6.pdf', ''),
(53, 'Gomgom', 2, 'Mie Gomak Andaliman', 'f2aea57f1f8342d8cb6604d8f58f85251422028d', 'prop_f2aea57f1f8342d8cb6604d8f58f85251422028d.pdf', 'struct_Gomgom.jpg'),
(54, 'Kitakuat', 2, 'Bisnis Plan Transportasi Pariwisata Online', 'c8a6723327d5b0a802b4817add211abbf668f753', 'prop_c8a6723327d5b0a802b4817add211abbf668f753.pdf', 'struct_Kitakuat.jpg'),
(55, 'RIM', 2, 'Tebu Untuk Penderita Diabetes', '2c2377bb4381f80977f3f87b6c1215baf9a57057', '', ''),
(56, 'Piroshki Bread', 2, 'Pengembangan Usaha Roti Piroshki Dari Ubi', '12949383252541f56ed59b57995910a5deaee86c', '', ''),
(57, 'Lets Go Clim', 0, 'Lets Go Climb', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rulebook`
--

CREATE TABLE IF NOT EXISTS `rulebook` (
`id_rb` int(11) NOT NULL,
  `bisnis_view` varchar(255) NOT NULL,
  `bisnis_dw` varchar(255) NOT NULL,
  `vlog_view` varchar(255) NOT NULL,
  `vlog_dw` varchar(255) NOT NULL,
  `gtalent_view` varchar(255) NOT NULL,
  `gtalent_dw` varchar(255) NOT NULL,
  `badminton_view` varchar(255) NOT NULL,
  `badminton_dw` varchar(255) NOT NULL,
  `pubg_view` varchar(255) NOT NULL,
  `pubg_dw` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rulebook`
--

INSERT INTO `rulebook` (`id_rb`, `bisnis_view`, `bisnis_dw`, `vlog_view`, `vlog_dw`, `gtalent_view`, `gtalent_dw`, `badminton_view`, `badminton_dw`, `pubg_view`, `pubg_dw`) VALUES
(1, 'https://drive.google.com/file/d/1NZIvddkKhlK0LNlFfE7XkmkWlS7wOqRA/preview', 'https://drive.google.com/a/ittelkom-pwt.ac.id/uc?authuser=1&id=1NZIvddkKhlK0LNlFfE7XkmkWlS7wOqRA&export=download', 'https://drive.google.com/file/d/1Du-tRDrJ4vvt9mgCGNLK6uw68f-KAtxb/preview', 'https://drive.google.com/a/ittelkom-pwt.ac.id/uc?authuser=1&id=1Du-tRDrJ4vvt9mgCGNLK6uw68f-KAtxb&export=download', 'https://drive.google.com/file/d/1mDZZ5EPW6aq-8Yfdr0nvt7q64i1gY36u/preview', 'https://drive.google.com/uc?authuser=0&id=1mDZZ5EPW6aq-8Yfdr0nvt7q64i1gY36u&export=download', 'https://drive.google.com/file/d/1hDRJ1qCusFWxmQ2PJy4LsUyeLdglmJgR/preview', 'https://drive.google.com/uc?authuser=0&id=1hDRJ1qCusFWxmQ2PJy4LsUyeLdglmJgR&export=download', 'https://drive.google.com/file/d/1TBL5ZV-Oa7BgbGUNmJf-wJBU7WKeO5ev/preview', 'https://drive.google.com/uc?authuser=0&id=1TBL5ZV-Oa7BgbGUNmJf-wJBU7WKeO5ev&export=download');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user`, `pass`) VALUES
(1, 'adminitase', '3b4965f9840a9dea95ed191781be4105aab4fc27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vlog_anggota`
--

CREATE TABLE IF NOT EXISTS `vlog_anggota` (
`id_vloganggota` int(11) NOT NULL,
  `id_vlog` int(11) NOT NULL,
  `namaketua` varchar(255) NOT NULL,
  `nimketua` varchar(255) NOT NULL,
  `tempatketua` varchar(255) NOT NULL,
  `tglketua` date NOT NULL,
  `univketua` varchar(255) NOT NULL,
  `hpketua` varchar(255) NOT NULL,
  `alamatketua` text NOT NULL,
  `emailketua` varchar(255) NOT NULL,
  `namaanggota1` varchar(255) NOT NULL,
  `nimanggota1` varchar(255) NOT NULL,
  `tempatanggota1` varchar(255) NOT NULL,
  `tglanggota1` date NOT NULL,
  `univanggota1` varchar(255) NOT NULL,
  `hpanggota1` varchar(255) NOT NULL,
  `alamatanggota1` text NOT NULL,
  `emailanggota1` varchar(255) NOT NULL,
  `namaanggota2` varchar(255) NOT NULL,
  `nimanggota2` varchar(255) NOT NULL,
  `tempatanggota2` varchar(255) NOT NULL,
  `tglanggota2` date NOT NULL,
  `univanggota2` varchar(255) NOT NULL,
  `hpanggota2` varchar(255) NOT NULL,
  `amalatanggota2` text NOT NULL,
  `emailanggota2` varchar(255) NOT NULL,
  `namaanggota3` varchar(255) NOT NULL,
  `nimanggota3` varchar(255) NOT NULL,
  `tempatanggota3` varchar(255) NOT NULL,
  `tglanggota3` date NOT NULL,
  `univanggota3` varchar(255) NOT NULL,
  `hpanggota3` varchar(255) NOT NULL,
  `alamatanggota3` text NOT NULL,
  `emailanggota3` varchar(255) NOT NULL,
  `namaanggota4` varchar(255) NOT NULL,
  `nimanggota4` varchar(255) NOT NULL,
  `tempatanggota4` varchar(255) NOT NULL,
  `tglanggota4` date NOT NULL,
  `univanggota4` varchar(255) NOT NULL,
  `hpanggota4` varchar(255) NOT NULL,
  `alamatanggota4` text NOT NULL,
  `emailanggota4` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vlog_anggota`
--

INSERT INTO `vlog_anggota` (`id_vloganggota`, `id_vlog`, `namaketua`, `nimketua`, `tempatketua`, `tglketua`, `univketua`, `hpketua`, `alamatketua`, `emailketua`, `namaanggota1`, `nimanggota1`, `tempatanggota1`, `tglanggota1`, `univanggota1`, `hpanggota1`, `alamatanggota1`, `emailanggota1`, `namaanggota2`, `nimanggota2`, `tempatanggota2`, `tglanggota2`, `univanggota2`, `hpanggota2`, `amalatanggota2`, `emailanggota2`, `namaanggota3`, `nimanggota3`, `tempatanggota3`, `tglanggota3`, `univanggota3`, `hpanggota3`, `alamatanggota3`, `emailanggota3`, `namaanggota4`, `nimanggota4`, `tempatanggota4`, `tglanggota4`, `univanggota4`, `hpanggota4`, `alamatanggota4`, `emailanggota4`) VALUES
(1, 1, 'Shjlhs', '12345678', 'Cirebon', '1999-11-28', 'Lsjhjs', '12345678901', 'Sjkjsh', 'kampret007299@gmail.com', 'Alsjhas', '121313', 'Sdjjshd', '1999-12-12', 'Sljdhjsdh', '12912871212', 'Asjlsd', 's@a', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', ''),
(2, 2, 'Roni', '121212', 'Cirebon', '1999-11-28', 'ITTP', '23456789012', 'Jalan', 'kampret007299@gmail.com', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', ''),
(3, 3, 'Ketua Ya', '1234567', 'Cirebon', '1999-11-28', 'ITTP', '12345678901', 'Alamat Ketua', 'kampret007299@gmail.com', 'Anggota 1', '12345678901', 'CILACAP', '1999-12-12', 'ITTP', '12345678901', 'ALAMAT', 'A1@A', 'ANGGOTA 2', '123456', 'CIREBON', '1999-12-12', 'ITTP', '12345678911', 'ALAMAT', 'A@A', 'ANGGOTA 3', '123456', 'CILEGON', '1999-12-12', 'ITTP', '12345678911', 'ALAMAT 3', 'A@WW', 'ANGGOTA 4', '123456789', 'CILACAP', '1999-12-12', 'ITTP', '12345678921', 'ALAMAT 4 ', 'A4@A'),
(4, 4, 'Roni', '121212', 'Cirebon', '1999-12-12', 'ITTP', '12345678901', 'Jalan', 'kampret007299@gmail.com', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vlog_team`
--

CREATE TABLE IF NOT EXISTS `vlog_team` (
`id_vlog` int(11) NOT NULL,
  `namateam` varchar(255) NOT NULL,
  `sum_vlog` int(11) NOT NULL,
  `judulvlog` varchar(255) NOT NULL,
  `temavlog` varchar(255) NOT NULL,
  `filestruct` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vlog_team`
--

INSERT INTO `vlog_team` (`id_vlog`, `namateam`, `sum_vlog`, `judulvlog`, `temavlog`, `filestruct`) VALUES
(1, 'Lsjhjh', 1, 'Sjhljsh', 'Jshjl', ''),
(2, 'Team Testt', 0, 'Judul Vlog', 'Tema Vlog', ''),
(3, 'Yess No', 4, 'Judul Vlog', 'Tema Vlog', ''),
(4, 'Testtt Akhir', 0, 'Judul', 'Tema', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bisnis_anggota`
--
ALTER TABLE `bisnis_anggota`
 ADD PRIMARY KEY (`id_anggotabisnis`), ADD UNIQUE KEY `id_team` (`id_team`);

--
-- Indexes for table `bisnis_team`
--
ALTER TABLE `bisnis_team`
 ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `rulebook`
--
ALTER TABLE `rulebook`
 ADD PRIMARY KEY (`id_rb`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vlog_anggota`
--
ALTER TABLE `vlog_anggota`
 ADD PRIMARY KEY (`id_vloganggota`), ADD UNIQUE KEY `id_vlog` (`id_vlog`);

--
-- Indexes for table `vlog_team`
--
ALTER TABLE `vlog_team`
 ADD PRIMARY KEY (`id_vlog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bisnis_anggota`
--
ALTER TABLE `bisnis_anggota`
MODIFY `id_anggotabisnis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `bisnis_team`
--
ALTER TABLE `bisnis_team`
MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `rulebook`
--
ALTER TABLE `rulebook`
MODIFY `id_rb` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vlog_anggota`
--
ALTER TABLE `vlog_anggota`
MODIFY `id_vloganggota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vlog_team`
--
ALTER TABLE `vlog_team`
MODIFY `id_vlog` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bisnis_anggota`
--
ALTER TABLE `bisnis_anggota`
ADD CONSTRAINT `bisnis_anggota_ibfk_1` FOREIGN KEY (`id_team`) REFERENCES `bisnis_team` (`id_team`);

--
-- Ketidakleluasaan untuk tabel `vlog_anggota`
--
ALTER TABLE `vlog_anggota`
ADD CONSTRAINT `vlog_anggota_ibfk_1` FOREIGN KEY (`id_vlog`) REFERENCES `vlog_team` (`id_vlog`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
