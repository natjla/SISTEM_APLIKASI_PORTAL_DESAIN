-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 02:00 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webporto`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `status`, `created_at`) VALUES
(1, 'admin', 'admin', 0, '2023-06-02 04:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tentang` varchar(550) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id`, `nama`, `foto`, `tentang`, `status`, `created_at`) VALUES
(1, 'natjla pebrianti', '1685945454_39d7d8b51abc2535120c.png', 'natjlampebrianti', 0, '2023-06-05 06:10:54'),
(2, 'Alan herva ikhsan saputra ', '1685947384_c8b194f8c385942d92aa.png', 'alan  herva', 0, '2023-06-05 06:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_desain`
--

CREATE TABLE `tbl_desain` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kunci` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_desain`
--

INSERT INTO `tbl_desain` (`id`, `gambar`, `nama`, `kunci`, `status`, `created_at`) VALUES
(1, '1685953966_10099f3485f2e1a82147.jpg', 'Desain Sertifikat', 'desain-sertifikat', 0, '2023-05-30 15:18:31'),
(3, '1685492930_0039838d6f1c06cc344c.jpg', 'Desain Sertifikat', 'desain-sertifikat', 1, '2023-05-30 15:59:32'),
(4, '1685954044_60599c1e745de2dae4ba.jpg', 'Desain Logo', 'desain-logo', 0, '2023-06-05 08:34:04'),
(5, '1685954084_ed12d835d6f9a6d6b571.jpg', 'Desain Ilustrasi', 'desain-ilustrasi', 0, '2023-06-05 08:34:45'),
(6, '1685954129_40247920cbc1e3f74780.jpg', 'Desain Id Card', 'desain-id-card', 0, '2023-06-05 08:35:29'),
(7, '1685954185_53d66389006fb7c6441e.jpg', 'Desain UI KIT', 'desain-ui-kit', 0, '2023-06-05 08:36:25'),
(8, '1685954228_8af77e97a2324b4e9a42.jpg', 'Desain Poster', 'desain-poster', 0, '2023-06-05 08:37:08'),
(9, '1685954688_e80f08d4f32d680e3598.jpg', 'UI & UX Desain', 'ui-&-ux-desain', 0, '2023-06-05 08:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_desain_data`
--

CREATE TABLE `tbl_desain_data` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `kunci` varchar(225) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_desain_data`
--

INSERT INTO `tbl_desain_data` (`id`, `nama`, `gambar`, `tentang`, `kunci`, `status`, `created_at`) VALUES
(1, 'Desain Sertifikat ', '1685494213_9e3880f3650230e7d003.jpg', 'sertifikat', 'desain-logo', 1, '2023-05-31 00:50:13'),
(2, 'Desain Sertifikat', '1685706129_7d6190062793baa85b27.png', 'data sertifikat', 'desain-logo', 1, '2023-06-02 11:42:09'),
(3, 'Sertifikat 1', '1685954392_7e0510a654191e8b5ee3.jpg', 'Sertifikat ', 'desain-sertifikat', 0, '2023-06-05 08:39:52'),
(4, 'Sertifikat 2', '1685954412_dc04eb18ef372fcfc7fc.jpg', 'Sertifikat', 'desain-sertifikat', 0, '2023-06-05 08:40:12'),
(5, 'Sertifikat 3', '1685954434_d5f778feb2318a8af82b.jpg', 'Sertifikat', 'desain-sertifikat', 0, '2023-06-05 08:40:34'),
(6, 'Sertifikat 4', '1685954455_975b4e058c2fa92f892c.jpg', 'Sertifikat', 'desain-sertifikat', 0, '2023-06-05 08:40:55'),
(7, 'Sertifikat 5', '1685954472_34a3a7dba809e6f8d764.jpg', 'Sertifikat', 'desain-sertifikat', 0, '2023-06-05 08:41:12'),
(8, 'Sertifikat 6', '1685954848_2b58b5722c906f5a3846.jpg', 'Sertifikat', 'desain-sertifikat', 0, '2023-06-05 08:47:28'),
(9, 'Sertifikat 7', '1685954884_468664b2a85e61ecfcc2.jpg', 'Sertifikat', 'desain-sertifikat', 0, '2023-06-05 08:48:04'),
(10, 'Sertifikat 8', '1685954900_2f2282e1a3ea93f69765.jpg', 'Sertifikat', 'desain-sertifikat', 0, '2023-06-05 08:48:20'),
(11, 'Sertifikat 9', '1685954920_ee4807adfbbd5227470b.jpg', 'Sertifikat ', 'desain-sertifikat', 0, '2023-06-05 08:48:40'),
(12, 'Sertifikat 10', '1685954938_36595a358e31a2fa8e79.jpg', 'Sertifikat', 'desain-sertifikat', 0, '2023-06-05 08:48:58'),
(13, 'Logo 1', '1685955021_b7bbfac5cca8b3826ede.jpg', 'Logo Street Waffle', 'desain-logo', 0, '2023-06-05 08:50:21'),
(14, 'Logo 2', '1685955048_81ab3220e629932bd6ff.jpg', 'Logo Company', 'desain-logo', 0, '2023-06-05 08:50:48'),
(15, 'Logo 3', '1685955085_a3eedda071449ab30f3d.jpg', 'Logo Company', 'desain-logo', 0, '2023-06-05 08:51:25'),
(16, 'Logo 4', '1685955123_95b23b06d11a2ed06f1a.jpg', 'Logo Company', 'desain-logo', 0, '2023-06-05 08:52:03'),
(17, 'Logo 5', '1685955142_11b0ee1f171da85c43a9.jpg', 'Logo Company', 'desain-logo', 0, '2023-06-05 08:52:22'),
(18, 'Logo 6', '1685955210_932f13b3f09c8c334d23.jpg', 'Logo Company', 'desain-logo', 0, '2023-06-05 08:53:30'),
(19, 'Logo 7', '1685955238_76a49b11539ec193b392.jpg', 'Logo Company', 'desain-logo', 0, '2023-06-05 08:53:58'),
(20, 'Logo 8', '1685955265_437fe77983e3479d6a64.jpg', 'Logo Company', 'desain-logo', 0, '2023-06-05 08:54:25'),
(21, 'Logo 9', '1685955294_4f267f03fa79671d9a94.jpg', 'Logo Company', 'desain-logo', 0, '2023-06-05 08:54:55'),
(22, 'Logo 10', '1685955321_d7c5a9aa7912d26a5b98.jpg', 'Logo Company', 'desain-logo', 0, '2023-06-05 08:55:21'),
(23, 'Logo 11', '1685955418_b08fc2194c48e2eab35a.jpg', 'Logo company', 'desain-logo', 0, '2023-06-05 08:56:59'),
(24, 'Logo 12', '1685955477_7b441f0989b7886ee036.jpg', 'Logo Company', 'desain-logo', 0, '2023-06-05 08:57:57'),
(25, 'Logo 13', '1685955515_224ac1b975e9a746d4e8.jpg', 'Logo Company', 'desain-logo', 0, '2023-06-05 08:58:35'),
(26, 'Logo 14', '1685955551_3cd03c62fe8b8e3a6e52.jpg', 'Logo Company', 'desain-logo', 0, '2023-06-05 08:59:11'),
(27, 'Logo 15', '1685955586_496c52ee10ede67e25ce.jpg', 'Logo Company', 'desain-logo', 0, '2023-06-05 08:59:46'),
(28, 'Logo 16', '1685955630_7d461373acf778bbaf44.jpg', 'Logo Company', 'desain-logo', 0, '2023-06-05 09:00:30'),
(29, 'Logo 17', '1685955662_75cac028e40b7a142bc6.jpg', 'Logo Company', 'desain-logo', 0, '2023-06-05 09:01:02'),
(30, 'Logo 18', '1685955693_97e9f65b591467d61639.jpg', 'Logo Company', 'desain-logo', 0, '2023-06-05 09:01:33'),
(31, 'Logo 19', '1685955722_8026b564528a4b2fbd10.png', 'Logo Company', 'desain-logo', 0, '2023-06-05 09:02:02'),
(32, 'Logo 20', '1685955751_7dbcd18709719ad305f6.jpg', 'Logo Company', 'desain-logo', 0, '2023-06-05 09:02:31'),
(33, 'Ilustrasi 1', '1685956596_2245484ad32bff5b44ed.jpg', 'Ilustasi Burung Kakatua', 'desain-ilustrasi', 1, '2023-06-05 09:16:36'),
(34, 'Ilustrasi 1', '1685956661_69e8f5aeb1b2e71b66b9.jpg', 'Ilustrasi', 'desain-ilustrasi', 0, '2023-06-05 09:17:41'),
(35, 'Ilustrasi 2', '1685956709_b27d94d2d035ac7fb384.jpg', 'Ilustrasi', 'desain-ilustrasi', 0, '2023-06-05 09:18:29'),
(36, 'Ilustrasi 3', '1685956732_f0b5da96bd98df23d78b.jpg', 'Ilustrasi', 'desain-ilustrasi', 0, '2023-06-05 09:18:52'),
(37, 'Ilustrasi 4', '1685956754_2ecafa1d0f178835581e.jpg', 'Ilustrasi 4', 'desain-ilustrasi', 0, '2023-06-05 09:19:14'),
(38, 'Ilustrasi 5', '1685956790_e9296835f476675160df.jpg', 'Ilustrasi', 'desain-ilustrasi', 0, '2023-06-05 09:19:50'),
(39, 'Ilustrasi 6', '1685956811_2393e6864151b11385be.jpg', 'Ilustrasi', 'desain-ilustrasi', 0, '2023-06-05 09:20:12'),
(40, 'Ilustrasi 7', '1685956830_ff184835968e2649ec1a.jpg', 'Ilustrasi', 'desain-ilustrasi', 0, '2023-06-05 09:20:30'),
(41, 'Ilustrasi 8', '1685956852_90e855c913825a42e873.jpg', 'Ilustrasi hewan', 'desain-ilustrasi', 0, '2023-06-05 09:20:52'),
(42, 'Ilustrasi 9', '1685956921_0d3e896cb39948ad6433.jpg', 'Ilustrasi ', 'desain-ilustrasi', 0, '2023-06-05 09:22:01'),
(43, 'Ilustrasi 10', '1685956947_5a9e244e7f99c4519c62.jpg', 'Ilustrasi Gedung', 'desain-ilustrasi', 0, '2023-06-05 09:22:27'),
(44, 'Ilustrasi 11', '1685956973_437878d4ed5508e71958.jpg', 'Ilustrasi Kalender', 'desain-ilustrasi', 0, '2023-06-05 09:22:53'),
(45, 'Ilustrasi 11', '1685957005_dedb9300de16ff1d4e00.jpg', 'Ilustrasi Lampu', 'desain-ilustrasi', 0, '2023-06-05 09:23:25'),
(46, 'Ilustrasi 12', '1685957035_81629e577f53b37da9c7.jpg', 'Ilustrasi Pemandangan Alam', 'desain-ilustrasi', 0, '2023-06-05 09:23:55'),
(47, 'Ilustrasi 13', '1685957062_f71e952e269659c43830.jpg', 'Ilustrasi Alam', 'desain-ilustrasi', 0, '2023-06-05 09:24:22'),
(48, 'Ilustrasi 14', '1685957089_5746717030eac89f395b.jpg', 'Ilustrasi Pemandangan Alam', 'desain-ilustrasi', 0, '2023-06-05 09:24:49'),
(49, 'Ilustrasi 15', '1685957131_2ae45cd94d95fa0a73ee.jpg', 'Ilustrasi Pulau', 'desain-ilustrasi', 0, '2023-06-05 09:25:32'),
(50, 'Ilustrasi 16', '1685957172_1b245127857c60375f90.jpg', 'Ilustrasi Pencil', 'desain-ilustrasi', 0, '2023-06-05 09:26:12'),
(51, 'Ilustrasi 17', '1685957209_304e41ce72e2a56b0844.jpg', 'Ilustrasi Ruangan', 'desain-ilustrasi', 0, '2023-06-05 09:26:49'),
(52, 'Sertifikat 11 ', '1685957264_f3c3275c9827e1fc133b.jpg', 'Sertifikat ', 'desain-sertifikat', 0, '2023-06-05 09:27:44'),
(53, 'Sertifikat 12', '1685957295_39798c74bea55511e3c6.jpg', 'Sertifikat ', 'desain-sertifikat', 0, '2023-06-05 09:28:15'),
(54, 'Sertifikat 13', '1685957329_9d8d2768c9fef91a1ee9.jpg', 'Sertifikat ', 'desain-sertifikat', 0, '2023-06-05 09:28:49'),
(55, 'Sertifikat 14', '1685957351_858049ac6b96d4174839.jpg', 'Sertifikat ', 'desain-sertifikat', 0, '2023-06-05 09:29:11'),
(56, 'Sertifikat 15', '1685957375_48732fdc300fb5ae1163.jpg', 'Sertifikat ', 'desain-sertifikat', 0, '2023-06-05 09:29:35'),
(57, 'Sertifikat 16', '1685957414_5842ae29c8512dee58e8.jpg', 'Sertifikat ', 'desain-sertifikat', 0, '2023-06-05 09:30:14'),
(58, 'Sertifikat 17', '1685957444_4550ca6292a045628a71.jpg', 'Sertifikat ', 'desain-sertifikat', 0, '2023-06-05 09:30:44'),
(59, 'Sertifikat 18', '1685957477_fae8e5fb444ce6436da2.jpg', 'Sertifikat ', 'desain-sertifikat', 0, '2023-06-05 09:31:17'),
(60, 'Sertifikat 19', '1685957509_eb884b71a90ee9d2ef2c.jpg', 'Sertifikat ', 'desain-sertifikat', 0, '2023-06-05 09:31:49'),
(61, 'Sertifikat 20', '1685957536_4e211940f88215deea68.jpg', 'Sertifikat ', 'desain-sertifikat', 0, '2023-06-05 09:32:16'),
(62, 'ID CARD 1', '1685957796_e12212d19810f59f19f8.jpg', 'ID CARD COMPANY', 'desain-id-card', 0, '2023-06-05 09:34:52'),
(63, 'ID CARD 2', '1685957730_0fa9cdfa26c09aaeaa6c.jpg', 'ID CARD COMPANY', 'desain-id-card', 0, '2023-06-05 09:35:30'),
(64, 'ID CARD 3', '1685957760_010f9241f41eac3a7edb.jpg', 'ID CARD COMPANY', 'desain-id-card', 0, '2023-06-05 09:36:00'),
(65, 'ID CARD 4', '1685957869_f6f627d8453c5f17837c.jpg', 'ID CARD COMPANY', 'desain-id-card', 0, '2023-06-05 09:37:49'),
(66, 'ID CARD 5', '1685957895_744ee61f67a297204292.jpg', 'ID CARD COMPANY', 'desain-id-card', 0, '2023-06-05 09:38:15'),
(67, 'NAME CARD', '1685957941_d612e73a8c8babf8cccb.jpg', 'BUSSINES CARD ', 'desain-id-card', 0, '2023-06-05 09:39:01'),
(68, 'NAME CARD', '1685957969_c5f9b9cfba0eb151184d.jpg', 'BUSSINES CARD', 'desain-id-card', 0, '2023-06-05 09:39:29'),
(69, 'NAME CARD', '1685957988_e54263c1c65739157b84.jpg', 'BUSSINES CARD', 'desain-id-card', 0, '2023-06-05 09:39:48'),
(70, 'NAME CARD', '1685958008_02073e0d40194dd59955.jpg', 'BUSSINES CARD', 'desain-id-card', 0, '2023-06-05 09:40:08'),
(71, 'NAME CARD', '1685958040_2f2bbd7c1277bcaff4c4.jpg', 'BUSSINES CARD', 'desain-id-card', 0, '2023-06-05 09:40:40'),
(72, 'NAME CARD', '1685958104_3ad9182ba2a8e6dbfc46.jpg', 'BUSSINES CARD', 'desain-id-card', 0, '2023-06-05 09:41:44'),
(73, 'NAME CARD', '1685958123_ed1f574d546878617939.jpg', 'BUSSINES CARD', 'desain-id-card', 0, '2023-06-05 09:42:03'),
(74, 'NAME CARD', '1685958145_72465f056c683b9eb90a.jpg', 'BUSSINES CARD', 'desain-id-card', 0, '2023-06-05 09:42:25'),
(75, 'NAME CARD', '1685958170_56974788ceb02ee5356b.jpg', 'BUSSINES CARD', 'desain-id-card', 0, '2023-06-05 09:42:51'),
(76, 'NAME CARD', '1685958193_574196fa562c643dd475.jpg', 'BUSSINES CARD', 'desain-id-card', 0, '2023-06-05 09:43:13'),
(77, 'NAME CARD', '1685958217_a01642d8b02908d05960.jpg', 'BUSSINES CARD', 'desain-id-card', 0, '2023-06-05 09:43:37'),
(78, 'NAME CARD', '1685958236_f3d23f919f1d5f0a24c0.jpg', 'BUSSINES CARD', 'desain-id-card', 0, '2023-06-05 09:43:56'),
(79, 'NAME CARD', '1685958236_8707a21f86cabf312f1e.jpg', 'BUSSINES CARD', 'desain-id-card', 0, '2023-06-05 09:43:56'),
(80, 'NAME CARD', '1685958256_b9c8d2fc3218dc9e43e5.jpg', 'BUSSINES CARD', 'desain-id-card', 0, '2023-06-05 09:44:16'),
(81, 'NAME CARD', '1685958276_a3b5c49e306470b2f245.jpg', 'BUSSINES CARD', 'desain-id-card', 0, '2023-06-05 09:44:36'),
(82, 'Wireframe 1', '1685958373_417d48f7cf28be48fde0.jpg', 'Content Wiframe', 'desain-ui-kit', 0, '2023-06-05 09:46:13'),
(83, 'Wireframe ', '1685958524_be76c5c5c5cc64ff658f.jpg', 'Footer Wireframe ', 'desain-ui-kit', 0, '2023-06-05 09:48:44'),
(84, 'Wireframe ', '1685958550_f210af9345cf403342d9.jpg', 'Header Wireframe ', 'desain-ui-kit', 0, '2023-06-05 09:49:10'),
(85, 'Wireframe ', '1685958572_8e17f8a8fcf4d9be30be.jpg', 'Pricing Wireframe ', 'desain-ui-kit', 0, '2023-06-05 09:49:32'),
(86, 'Wireframe ', '1685958596_5003e142fd426737e9c9.jpg', 'Testimonial Wireframe ', 'desain-ui-kit', 0, '2023-06-05 09:49:56'),
(87, 'Wireframe ', '1685958623_fc7d56bc72fdf76ceff2.jpg', 'Home Wireframe ', 'desain-ui-kit', 0, '2023-06-05 09:50:23'),
(88, 'Wireframe ', '1685958642_f367b8f7fedcaa3e18c4.jpg', 'Search Wireframe ', 'desain-ui-kit', 0, '2023-06-05 09:50:42'),
(89, 'Wireframe ', '1685958668_8d0acda640902a02deaa.jpg', 'Landing Page Wireframe ', 'desain-ui-kit', 0, '2023-06-05 09:51:08'),
(90, 'Wireframe ', '1685958693_29646e52ec7d0d5f7743.jpg', 'Account Wireframe ', 'desain-ui-kit', 0, '2023-06-05 09:51:33'),
(91, 'NAME CARD', '1685958721_3382b4419bb2356ac8bf.jpg', 'Ecommerce Wireframe ', 'desain-ui-kit', 0, '2023-06-05 09:52:01'),
(92, 'Poster', '1685958809_7c53f0e54cd1245d1973.jpg', 'Poster', 'desain-poster', 0, '2023-06-05 09:53:29'),
(93, 'Poster', '1685958810_f54a45ba433e35a35ec8.jpg', 'Poster', 'desain-poster', 0, '2023-06-05 09:53:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_desain`
--
ALTER TABLE `tbl_desain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_desain_data`
--
ALTER TABLE `tbl_desain_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_desain`
--
ALTER TABLE `tbl_desain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_desain_data`
--
ALTER TABLE `tbl_desain_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
