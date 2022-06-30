-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 06:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotlinesmartri2`
--

-- --------------------------------------------------------

--
-- Table structure for table `aplikasi`
--

CREATE TABLE `aplikasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_owner` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tlp` varchar(50) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `nama_aplikasi` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `copy_right` varchar(50) DEFAULT NULL,
  `versi` varchar(20) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aplikasi`
--

INSERT INTO `aplikasi` (`id`, `nama_owner`, `alamat`, `tlp`, `title`, `nama_aplikasi`, `logo`, `copy_right`, `versi`, `tahun`) VALUES
(1, 'SMART Research Institute', NULL, '', 'Hotline SMARTRI', 'hotlinesmartri', 'AdminLTELogo1.png', 'Copy Right &copy;', '1.0', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akses_menu`
--

CREATE TABLE `tbl_akses_menu` (
  `id` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `view_level` enum('Y','N') DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_akses_menu`
--

INSERT INTO `tbl_akses_menu` (`id`, `id_level`, `id_menu`, `view_level`) VALUES
(1, 1, 1, 'Y'),
(2, 1, 2, 'Y'),
(43, 4, 1, 'Y'),
(44, 4, 2, 'N'),
(62, 5, 1, 'N'),
(63, 5, 2, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akses_submenu`
--

CREATE TABLE `tbl_akses_submenu` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_level` int(11) NOT NULL,
  `id_submenu` int(11) NOT NULL,
  `view_level` enum('Y','N') DEFAULT 'N',
  `add_level` enum('Y','N') DEFAULT 'N',
  `edit_level` enum('Y','N') DEFAULT 'N',
  `delete_level` enum('Y','N') DEFAULT 'N',
  `print_level` enum('Y','N') DEFAULT 'N',
  `upload_level` enum('Y','N') DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_akses_submenu`
--

INSERT INTO `tbl_akses_submenu` (`id`, `id_level`, `id_submenu`, `view_level`, `add_level`, `edit_level`, `delete_level`, `print_level`, `upload_level`) VALUES
(2, 1, 2, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(4, 1, 1, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(6, 1, 7, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(7, 1, 8, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(9, 1, 10, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(13, 1, 14, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(26, 1, 15, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(30, 1, 17, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(32, 1, 18, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(34, 1, 19, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(36, 1, 20, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(59, 4, 1, 'N', 'N', 'N', 'N', 'N', 'N'),
(60, 4, 2, 'N', 'N', 'N', 'N', 'N', 'N'),
(61, 4, 7, 'N', 'N', 'N', 'N', 'N', 'N'),
(62, 4, 8, 'N', 'N', 'N', 'N', 'N', 'N'),
(63, 4, 10, 'N', 'N', 'N', 'N', 'N', 'N'),
(64, 4, 15, 'N', 'N', 'N', 'N', 'N', 'N'),
(65, 4, 17, 'N', 'N', 'N', 'N', 'N', 'N'),
(66, 4, 18, 'N', 'N', 'N', 'N', 'N', 'N'),
(67, 4, 19, 'N', 'N', 'N', 'N', 'N', 'N'),
(68, 4, 20, 'N', 'N', 'N', 'N', 'N', 'N'),
(72, 5, 1, 'N', 'N', 'N', 'N', 'N', 'N'),
(73, 5, 2, 'N', 'N', 'N', 'N', 'N', 'N'),
(74, 5, 7, 'N', 'N', 'N', 'N', 'N', 'N'),
(75, 5, 8, 'N', 'N', 'N', 'N', 'N', 'N'),
(76, 5, 10, 'N', 'N', 'N', 'N', 'N', 'N'),
(77, 5, 15, 'N', 'N', 'N', 'N', 'N', 'N'),
(78, 5, 17, 'N', 'N', 'N', 'N', 'N', 'N'),
(79, 5, 18, 'N', 'N', 'N', 'N', 'N', 'N'),
(80, 5, 19, 'N', 'N', 'N', 'N', 'N', 'N'),
(81, 5, 20, 'N', 'N', 'N', 'N', 'N', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

CREATE TABLE `tbl_data` (
  `id` int(5) NOT NULL,
  `ref_number` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `intervention` varchar(30) NOT NULL,
  `intervention_others` varchar(30) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `position` varchar(30) NOT NULL,
  `unit` varchar(30) DEFAULT NULL,
  `company_email` varchar(30) DEFAULT NULL,
  `phone_requestor` varchar(15) DEFAULT NULL,
  `phone_manager` varchar(15) DEFAULT NULL,
  `date_request` date NOT NULL,
  `description` text NOT NULL,
  `photo` text NOT NULL,
  `supporting_document` text NOT NULL,
  `received_by` varchar(40) DEFAULT NULL,
  `received_date` date DEFAULT NULL,
  `forward_depthead` varchar(40) DEFAULT NULL,
  `id_dept` int(3) NOT NULL,
  `forward_date` date DEFAULT NULL,
  `responsedone_section` varchar(40) DEFAULT NULL,
  `responsedone_pic` varchar(40) DEFAULT NULL,
  `responsedone_date` date DEFAULT NULL,
  `fieldvisitdone_section` varchar(40) DEFAULT NULL,
  `fieldvisitdone_staff` varchar(40) DEFAULT NULL,
  `fieldvisitdone_date` date DEFAULT NULL,
  `recommendation_section` varchar(40) DEFAULT NULL,
  `recommendation_staff` varchar(40) DEFAULT NULL,
  `recommendation_date` date DEFAULT NULL,
  `diagnostic_date` date DEFAULT NULL,
  `diagnostic_location` varchar(40) DEFAULT NULL,
  `diagnostic_pic` varchar(40) DEFAULT NULL,
  `diagnostic_method` varchar(40) DEFAULT NULL,
  `diagnostic_issue` text DEFAULT NULL,
  `diagnostic_estimationimpact` text DEFAULT NULL,
  `diagnostic_nothingdone` text DEFAULT NULL,
  `actionplan_preventiveaction` text DEFAULT NULL,
  `actionplan_curativeplan` text DEFAULT NULL,
  `actionplan_approvedby` varchar(40) DEFAULT NULL,
  `actionplan_date` date DEFAULT NULL,
  `readiness_equipment` varchar(5) DEFAULT NULL,
  `readiness_declaration` varchar(5) DEFAULT NULL,
  `readiness_obstacles` text DEFAULT NULL,
  `followup_method` varchar(40) DEFAULT NULL,
  `followup_location` varchar(40) DEFAULT NULL,
  `followup_researchprogram` varchar(5) DEFAULT NULL,
  `followup_smartripic` varchar(40) DEFAULT NULL,
  `followup_smartridate` date DEFAULT NULL,
  `followup_smartriferquency` int(5) DEFAULT NULL,
  `followup_estatestaff` varchar(40) DEFAULT NULL,
  `followup_estatedate` date DEFAULT NULL,
  `followup_estatefrequency` varchar(5) DEFAULT NULL,
  `followup_otherpic` varchar(40) DEFAULT NULL,
  `followup_otherdate` date DEFAULT NULL,
  `followup_otherfrequency` varchar(5) DEFAULT NULL,
  `followup_training` varchar(5) DEFAULT NULL,
  `followup_issuemcar` varchar(5) DEFAULT NULL,
  `evaluation_date` date DEFAULT NULL,
  `evaluation_realization` varchar(20) DEFAULT NULL,
  `evaluation_feedbackestatestars` varchar(5) DEFAULT NULL,
  `evaluation_feedbackestatecomments` text DEFAULT NULL,
  `evaluation_feedbacksmartri` text DEFAULT NULL,
  `verification_status` varchar(40) DEFAULT NULL,
  `verification_emdate` date DEFAULT NULL,
  `verification_smartridate` date DEFAULT NULL,
  `verificationsmartri_remark` text NOT NULL,
  `verification_closing` varchar(5) DEFAULT NULL,
  `verification_closingdate` date DEFAULT NULL,
  `tahun` int(4) NOT NULL,
  `status_final` int(2) NOT NULL DEFAULT 0,
  `forward_status` int(1) NOT NULL DEFAULT 0,
  `responsedone_status` int(1) NOT NULL DEFAULT 0,
  `fieldvisitdone_status` int(1) NOT NULL DEFAULT 0,
  `diagnostic_status` int(1) NOT NULL DEFAULT 0,
  `actionplan_status` int(1) NOT NULL DEFAULT 0,
  `readiness_status` int(1) NOT NULL DEFAULT 0,
  `followup_status` int(11) NOT NULL,
  `evaluation_status` int(1) NOT NULL DEFAULT 0,
  `evaluationsmartri_status` int(1) NOT NULL DEFAULT 0,
  `verificationem_status` int(1) NOT NULL DEFAULT 0,
  `verificationsmartri_status` int(1) NOT NULL DEFAULT 0,
  `verificationclosing_status` int(1) NOT NULL DEFAULT 0,
  `distribution_status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`id`, `ref_number`, `tanggal`, `intervention`, `intervention_others`, `full_name`, `position`, `unit`, `company_email`, `phone_requestor`, `phone_manager`, `date_request`, `description`, `photo`, `supporting_document`, `received_by`, `received_date`, `forward_depthead`, `id_dept`, `forward_date`, `responsedone_section`, `responsedone_pic`, `responsedone_date`, `fieldvisitdone_section`, `fieldvisitdone_staff`, `fieldvisitdone_date`, `recommendation_section`, `recommendation_staff`, `recommendation_date`, `diagnostic_date`, `diagnostic_location`, `diagnostic_pic`, `diagnostic_method`, `diagnostic_issue`, `diagnostic_estimationimpact`, `diagnostic_nothingdone`, `actionplan_preventiveaction`, `actionplan_curativeplan`, `actionplan_approvedby`, `actionplan_date`, `readiness_equipment`, `readiness_declaration`, `readiness_obstacles`, `followup_method`, `followup_location`, `followup_researchprogram`, `followup_smartripic`, `followup_smartridate`, `followup_smartriferquency`, `followup_estatestaff`, `followup_estatedate`, `followup_estatefrequency`, `followup_otherpic`, `followup_otherdate`, `followup_otherfrequency`, `followup_training`, `followup_issuemcar`, `evaluation_date`, `evaluation_realization`, `evaluation_feedbackestatestars`, `evaluation_feedbackestatecomments`, `evaluation_feedbacksmartri`, `verification_status`, `verification_emdate`, `verification_smartridate`, `verificationsmartri_remark`, `verification_closing`, `verification_closingdate`, `tahun`, `status_final`, `forward_status`, `responsedone_status`, `fieldvisitdone_status`, `diagnostic_status`, `actionplan_status`, `readiness_status`, `followup_status`, `evaluation_status`, `evaluationsmartri_status`, `verificationem_status`, `verificationsmartri_status`, `verificationclosing_status`, `distribution_status`) VALUES
(26, '21DJKA', '2022-06-05', 'Crop Protection', '', 'Dwi Anugroho Adhy', 'MGR PLPE ', 'Palapa', 'mgr@gmaiL.com', '088245327796', '088244865323', '2021-01-05', 'Sesuai kunjungan bersama SMARTRI, Mgr, Askep Asst melakukan koordinasi dan melakukan cross check, ke areal serangan ulat kantong PLPE pada generasi ini. Serangan ulat kantong areal Div 1&2 sudah stadia ulat dengan ukuran dominan kecil', '', '', 'Admin', '2021-01-05', 'Plant Breeding Dept', 1, '2021-01-06', 'Pest & Entomology Section', 'Yendra Pratama Setiawan', '2021-01-06', NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-05', 'Areal TM/TBM PLPE', 'Assisten, Askep dan Mgr PLPE', NULL, '- Blok I33 s/d I149, H33 s/d H49 dan J01 s/d J10 pada saat ini serangan ulat. Dominan ukuran stadia kecil (<1cm) dengan kriteria seragan ringan 0 berat   -  Populasi yang menyerang ini adalah populasi serangan baru, karena ukurannya relative sama  - Lakukan pengendalian dengan insektisida Asefat, merk BM Promax 75 SP untuk injeksi dan insektisida untuk pengendalian semprot', 'Bila serangan sampai daun melidi, berdampak pada penurunan produksi jika tidak cepat dilakukan pegendalian', 'Apabla tidak dilakukan pengendalian maka potensi produksi akan berkurang hingga 20% pada tahun pertama', 'Lakukan tindakan preventive untuk mengetahui populasi ulat kantong Clania Tertia dengan langkah sbb : 1 Lakukan sensus pada blok2 yang bersebelahan dengan blok yang dari hasil sensus menunjukkan semakin seangan tinggi clania tertia. Hal ini dimaksudkan agar kehadiran ulat bisa sejak dini diketahui dan bila perlu pengendalian maka bisa segera dikendalikan.', 'Lakukan pengendalian secara kimia menggunakan insektisida dengan uraian sbb. Pada blok-blok yang rerata populasi >= 3 ekor/pelepah 1. Pengendalianbersifat menyeluruh atau seluruh tanaman dalam 1 blok 2. Insektisida yang disarankan adalah asefat (Merk dagang BM Promax 75 SP) dengan konsentrasi 15g/pokok + 22,5 ml air (1:1,5) (setelah dilarutkan menjadi 30 ml larutan) Injeksi jadikan 2 lb pada posisi yang berlawanan (satu lubang sisi injeksi :15ml larutan)', 'Hatono', '2021-01-05', NULL, NULL, NULL, NULL, 'PLPE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Semua permintaan telah dilaksanakan dan telah sesuai', NULL, NULL, NULL, NULL, '0', '', NULL, 2022, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_listdept`
--

CREATE TABLE `tbl_listdept` (
  `id` int(3) NOT NULL,
  `id_dept` int(3) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_listdept`
--

INSERT INTO `tbl_listdept` (`id`, `id_dept`, `dept_name`, `nama`, `hp`) VALUES
(1, 1, 'Agronomy Dept', 'Dept 1', ''),
(2, 2, 'Crop Protection Dept', 'Dept 2', ''),
(3, 3, 'Data Intelligence and Analytics Dept', 'Dept 3', ''),
(4, 4, 'Field Operational and Extension Services Dept', 'Dept 4', ''),
(5, 5, 'Plant Breeding Dept', 'Dept 5', ''),
(6, 6, 'Sustainability Research Dept', 'Dept 6', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_listpic`
--

CREATE TABLE `tbl_listpic` (
  `id_pic` int(3) NOT NULL,
  `pic_name` varchar(50) NOT NULL,
  `id_sect` int(3) NOT NULL,
  `sect_name` varchar(70) NOT NULL,
  `id_dept` int(3) NOT NULL,
  `dept_name` varchar(70) NOT NULL,
  `hp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_listpic`
--

INSERT INTO `tbl_listpic` (`id_pic`, `pic_name`, `id_sect`, `sect_name`, `id_dept`, `dept_name`, `hp`, `email`) VALUES
(1, 'PIC 1', 1, 'Agronomy', 1, 'Agronomy', '123', 'sa'),
(2, 'PIC 2', 1, 'Agronomy', 1, 'Agronomy', '123', 'sa'),
(3, 'PIC 3', 2, 'Agrophysiology', 1, 'Agronomy', '123', 'sa'),
(7, 'PIC 4', 3, 'Mineral Nutrition and Management', 1, 'Agronomy', '123', 'sa'),
(9, 'PIC 5', 4, 'Soil Fertility', 1, 'Agronomy', '123', 'sa'),
(11, 'PIC 6', 5, 'Libo Laboratory', 2, 'Analytical Laboratory', '123', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_listsection`
--

CREATE TABLE `tbl_listsection` (
  `id` int(3) NOT NULL,
  `id_dept` int(3) NOT NULL,
  `id_sect` int(3) NOT NULL,
  `section_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_listsection`
--

INSERT INTO `tbl_listsection` (`id`, `id_dept`, `id_sect`, `section_name`) VALUES
(1, 1, 1, 'Agronomy'),
(2, 1, 2, 'Agrophysiology'),
(3, 1, 3, 'Mineral Nutrition and Management'),
(4, 1, 4, 'Soil Fertility'),
(5, 2, 5, 'Libo Laboratory'),
(6, 2, 6, 'RnD Laboratory'),
(7, 2, 7, 'Sub Station Laboratory'),
(8, 3, 8, 'Crop Protection'),
(9, 3, 9, 'Pest and Entomology'),
(10, 3, 10, 'Phytopathology section'),
(11, 3, 11, 'Weed Control'),
(12, 4, 12, 'Big Data, AI, and Digitalization'),
(13, 4, 13, 'Biometry and Database'),
(14, 4, 14, 'Climatology'),
(15, 4, 15, 'Data Intelligence and Analytics'),
(16, 11, 16, 'Division Head'),
(17, 5, 17, 'Field Coordinator'),
(18, 5, 18, 'Field Operation and Extension Services'),
(19, 5, 19, 'Research Field Coordinator'),
(20, 6, 20, 'Accounting and Administration'),
(21, 7, 21, 'Breeding and Selection'),
(22, 7, 22, 'Clonal Selection and Evaluation'),
(23, 7, 23, 'Molecular Assisted Breeding'),
(24, 7, 24, 'Plant Breeding'),
(25, 8, 25, 'Quality Control ISO Certification'),
(26, 9, 26, 'Secretary'),
(27, 10, 27, 'Biodiversity Section'),
(28, 10, 28, 'Carbon and Water Accounting'),
(29, 10, 29, 'Ecological Services'),
(31, 10, 30, 'Pollution Risk Control'),
(32, 10, 31, 'Sustainability Research'),
(33, 11, 32, 'Task Force');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `urutan` bigint(11) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT 'Y',
  `parent` enum('Y') DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `nama_menu`, `link`, `icon`, `urutan`, `is_active`, `parent`) VALUES
(1, 'Dashboard', 'dashboard', 'fas fa-tachometer-alt', 1, 'Y', 'Y'),
(2, 'System', '#', 'fas fa-cogs', 2, 'Y', 'Y'),
(3, 'System', '#', 'fas fa-cogs', 3, 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_submenu`
--

CREATE TABLE `tbl_submenu` (
  `id_submenu` int(11) UNSIGNED NOT NULL,
  `nama_submenu` varchar(50) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_submenu`
--

INSERT INTO `tbl_submenu` (`id_submenu`, `nama_submenu`, `link`, `icon`, `id_menu`, `is_active`) VALUES
(1, 'Menu', 'menu', 'far fa-circle', 2, 'Y'),
(2, 'SubMenu', 'submenu', 'far fa-circle', 2, 'Y'),
(7, 'Aplikasi', 'aplikasi', 'far fa-circle', 2, 'Y'),
(8, 'User', 'user', 'far fa-circle', 2, 'Y'),
(10, 'User Level', 'userlevel', 'far fa-circle', 2, 'Y'),
(15, 'Barang', 'barang', 'far fa-circle', 32, 'Y'),
(17, 'Kategori', 'kategori', 'far fa-circle', 32, 'Y'),
(18, 'Satuan', 'satuan', 'far fa-circle', 32, 'Y'),
(19, 'Pembelian', 'pembelian', 'far fa-circle', 41, 'Y'),
(20, 'Penjualan', 'penjualan', 'far fa-circle', 41, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `full_name`, `password`, `id_level`, `image`, `is_active`) VALUES
(1, 'admin', 'Administrator', '$2y$05$74rR8MotFPqMTg.EXVqo7OKrKemYliEArov49Q2u4QS0LE90uopt.', 1, 'admin1.jpg', 'Y'),
(6, 'user', 'user', '$2y$05$0gvX6ELuEZmeu1KjPhvCGONu3GofYmZ/xa/42a9sYTcc5OlMHWy42', 4, 'user.jpg', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userlevel`
--

CREATE TABLE `tbl_userlevel` (
  `id_level` int(11) UNSIGNED NOT NULL,
  `nama_level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_userlevel`
--

INSERT INTO `tbl_userlevel` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(4, 'kasir'),
(5, 'amanah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_data`
--

CREATE TABLE `tbl_user_data` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_data`
--

INSERT INTO `tbl_user_data` (`id_user`, `full_name`, `email`, `hp`, `username`, `password`, `id_level`, `image`, `is_active`) VALUES
(1, 'Assistant / Askep', '', '', 'Askep', '', 1, '', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aplikasi`
--
ALTER TABLE `aplikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_akses_menu`
--
ALTER TABLE `tbl_akses_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_akses_submenu`
--
ALTER TABLE `tbl_akses_submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_listdept`
--
ALTER TABLE `tbl_listdept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_listpic`
--
ALTER TABLE `tbl_listpic`
  ADD PRIMARY KEY (`id_pic`);

--
-- Indexes for table `tbl_listsection`
--
ALTER TABLE `tbl_listsection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tbl_submenu`
--
ALTER TABLE `tbl_submenu`
  ADD PRIMARY KEY (`id_submenu`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_userlevel`
--
ALTER TABLE `tbl_userlevel`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tbl_user_data`
--
ALTER TABLE `tbl_user_data`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aplikasi`
--
ALTER TABLE `aplikasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_akses_menu`
--
ALTER TABLE `tbl_akses_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_akses_submenu`
--
ALTER TABLE `tbl_akses_submenu`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tbl_data`
--
ALTER TABLE `tbl_data`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_listdept`
--
ALTER TABLE `tbl_listdept`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_listpic`
--
ALTER TABLE `tbl_listpic`
  MODIFY `id_pic` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tbl_listsection`
--
ALTER TABLE `tbl_listsection`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_submenu`
--
ALTER TABLE `tbl_submenu`
  MODIFY `id_submenu` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_userlevel`
--
ALTER TABLE `tbl_userlevel`
  MODIFY `id_level` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user_data`
--
ALTER TABLE `tbl_user_data`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
