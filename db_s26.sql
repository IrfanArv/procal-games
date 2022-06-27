-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 27 Jun 2022 pada 17.23
-- Versi server: 10.1.46-MariaDB
-- Versi PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_s26`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_phone` varchar(255) NOT NULL,
  `account_token` varchar(255) NOT NULL,
  `account_ip` varchar(255) NOT NULL,
  `account_score` int(11) NOT NULL,
  `account_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`account_id`, `account_name`, `account_phone`, `account_token`, `account_ip`, `account_score`, `account_date`) VALUES
(332, 'Amel', '082163872227', '9i0CnBus', '114.122.40.13', 50, '2021-11-13 10:09:50'),
(333, 'Elvinahara', '081375005530', 'CJMiVvAF', '114.122.14.24', 132, '2021-11-13 12:39:40'),
(334, 'Rospijar', '081362107015', '8JgWt9UK', '114.122.11.64', 2, '2021-11-13 12:42:49'),
(335, 'Dora', '081265378889', 'c0qsH2E9', '114.122.39.183', 3, '2021-11-13 12:44:05'),
(336, 'Titin ', '085669043811', 'q4EtDgdH', '114.5.144.95', 0, '2021-11-13 12:46:31'),
(337, 'Leni supriati', '085261075865', 'SDHb3WxQ', '114.122.12.32', 1, '2021-11-13 12:49:34'),
(338, 'Leni supriati', '085261075865', 'ocKpvlj6', '114.122.12.32', 8, '2021-11-13 12:51:42'),
(339, 'Rosna harahap', '081373177541', 'TmKdVluv', '112.215.230.49', 10, '2021-11-13 12:51:50'),
(340, 'Derita Juliana', '085261469602', 'GAi5gzE8', '114.122.13.158', 11, '2021-11-13 12:51:59'),
(341, 'Ulfah Indra', '081265877458', 'ivcSZOhA', '182.3.8.206', 18, '2021-11-13 12:52:50'),
(342, 'Khairunisa', '082363074800', 'PXBLljJf', '114.122.15.247', 27, '2021-11-13 12:53:34'),
(343, 'Leni supriati', '085261075865', 'L8tkpFPM', '114.122.12.32', 10, '2021-11-13 12:53:37'),
(344, 'Junita Rizka', '081260177856', 'tqLkiyhT', '116.206.31.74', 26, '2021-11-13 12:54:40'),
(345, 'Leni supriati', '085261075865', 'hUOkvAf0', '114.122.12.32', 6, '2021-11-13 12:55:58'),
(346, 'Leni supriati', '085261075865', 'anOpc1fA', '114.122.12.32', 9, '2021-11-13 12:57:59'),
(347, 'Reza Octavia', '085207149562', '5ABeYRHK', '116.206.31.72', 3, '2021-11-13 13:04:04'),
(348, 'Junita gohiana siahaan', '088261485051', '5lGRtJYH', '140.213.228.137', 16, '2021-11-13 13:06:16'),
(349, 'Reza Octavia', '085207149562', 'CTV58nYf', '116.206.31.72', 10, '2021-11-13 13:06:31'),
(350, 'Hotmian hilaria', '082360764255', 'pYIZBuox', '114.122.15.118', 5, '2021-11-13 13:08:05'),
(351, 'Reza Octavia', '085207149562', '9rgoASEa', '116.206.31.72', 19, '2021-11-13 13:08:13'),
(352, 'Junita gohiana siahaan', '088261485051', '7wP3WIJo', '140.213.228.137', 21, '2021-11-13 13:08:57'),
(353, 'Hotmian', '082360764255', 'iLBzvtPN', '114.122.15.118', 9, '2021-11-13 13:10:23'),
(354, 'Reza Octavia', '085207149562', 'lPME4KSB', '116.206.31.72', 9, '2021-11-13 13:10:24'),
(355, 'T. Helfi syahfitri olivia', '081345127187', 'KRhSEDy5', '114.5.145.215', 18, '2021-11-13 13:11:22'),
(356, 'Sri Wijayanti', '085380477317', '56MLbzHe', '114.122.10.61', 6, '2021-11-13 13:11:27'),
(357, 'Maya ferbina', '085277170521', 'vdymMsGI', '116.206.31.80', 11, '2021-11-13 13:11:28'),
(358, 'Reza Octavia', '085207149562', '96XHFnhY', '116.206.31.72', 33, '2021-11-13 13:12:09'),
(359, 'Junita gohiana siahaan', '088261485051', 'NVY6bou7', '140.213.228.137', 12, '2021-11-13 13:12:18'),
(360, 'Hotmian', '082360764255', 'gydpXqks', '114.122.15.118', 11, '2021-11-13 13:12:47'),
(361, 'Sri arihta sebayang', '085270805669', '0uecF5p3', '140.213.154.93', 26, '2021-11-13 13:14:16'),
(362, 'Kastuti purba', '085358054793', 'LxK8Bw1r', '114.122.41.170', 19, '2021-11-13 13:14:32'),
(363, 'Dormauli manurung', '082164551327', 'ew5nrOy7', '140.213.229.19', 2, '2021-11-13 13:14:42'),
(364, 'Hotmian', '082360764255', 'qSXmHGNR', '114.122.15.118', 4, '2021-11-13 13:15:58'),
(365, 'Reza Octavia', '085207149562', '5BO3lYn2', '116.206.31.72', 24, '2021-11-13 13:16:13'),
(366, 'Nisma sari', '082277762022', 'TSgLitcz', '114.122.21.179', 0, '2021-11-13 13:16:43'),
(367, 'Poppy Siagian', '081211781024', 'moDNSlJe', '110.232.78.69', 25, '2021-11-13 13:18:30'),
(368, 'Dora Togatorop', '081262478950', 'MoTYJI6P', '110.232.78.69', 25, '2021-11-13 13:18:51'),
(369, 'Imelda', '085261910502', 'cwziQWnM', '110.232.78.69', 34, '2021-11-13 13:19:04'),
(370, 'Reza Octavia', '085207149562', '0ZCm1fkV', '116.206.31.72', 24, '2021-11-13 13:21:35'),
(371, 'Reza Octavia', '085207149562', 'jZpMhdBs', '116.206.31.72', 9, '2021-11-13 13:24:28'),
(372, 'Reza Octavia', '085207149562', 'rZIne0VM', '116.206.31.72', 35, '2021-11-13 13:26:20'),
(373, 'Kurniawati', '082216917289', 'quax24NO', '114.122.15.247', 37, '2021-11-13 13:27:42'),
(374, 'Junita Rizka', '081260177856', 'TmAG5fog', '116.206.31.84', 22, '2021-11-13 13:31:39'),
(375, 'Junita Rizka', '081260177856', '056inkpF', '116.206.31.84', 34, '2021-11-13 14:50:53'),
(376, 'Junita Rizka', '081260177856', 'JhR8KVjP', '116.206.31.84', 0, '2021-11-13 14:54:13'),
(377, 'Junita Rizka', '081260177856', 'tVbDMXZp', '116.206.31.84', 28, '2021-11-13 14:55:47'),
(378, 'Junita Rizka', '081260177856', 'SpZyDz2F', '116.206.31.84', 17, '2021-11-13 14:58:24'),
(379, 'Junita Rizka', '081260177856', '5ziARkQv', '116.206.31.84', 25, '2021-11-13 15:00:43'),
(380, 'Junita Rizka', '081260177856', 'Wh1XYwxD', '116.206.31.84', 0, '2021-11-13 15:03:57'),
(381, 'Siapa', '082163872227', 'r61UYKoX', '110.232.78.69', 25, '2021-11-13 15:58:04'),
(382, 'Ahai', '082165400640', '0wHD29yA', '114.122.11.149', 0, '2021-11-13 16:01:09'),
(383, 'Masyarakat Sehat', '085296959813', 'HU9EijY3', '114.122.9.22', 17, '2021-11-13 16:13:49'),
(384, 'Amel cantik', '082163872227', 'cXYvoqfG', '110.232.78.69', 26, '2021-11-13 16:13:54'),
(385, 'Junita Rizka', '081260177856', 'jql6e2u9', '116.206.31.38', 38, '2021-11-13 16:15:55'),
(386, 'Amel cantik', '082163872227', '7N0RGgUQ', '110.232.78.69', 10, '2021-11-13 16:16:28'),
(387, 'Masyarakat Sehat', '085396959813', 'xEs7I5Xq', '114.122.9.22', 20, '2021-11-13 16:16:32'),
(388, 'Amel menawan', '082163872227', '7BXdELjU', '110.232.78.69', 19, '2021-11-13 16:18:24'),
(389, 'Agil ', '082165400640', 'qDQjWRzK', '114.122.11.149', 16, '2021-11-13 16:19:20'),
(390, 'Amel cantik', '082163872227', 'SzNVPLfZ', '110.232.78.69', 0, '2021-11-13 16:20:41'),
(391, 'Siapa', '082163872227', 'Ie0rj1S3', '110.232.78.69', 17, '2021-11-13 16:25:43'),
(392, 'Agil', '082165400640', 'UqVBCXJS', '114.122.11.149', 11, '2021-11-13 16:25:55'),
(393, 'Toni', '08116363885', 'blzAaGyM', '114.122.40.156', 0, '2021-11-13 16:33:37'),
(394, 'Surya', '08116363885', 'zwdDl4Z1', '114.122.40.156', 2, '2021-11-13 16:34:43'),
(395, 'Ralmaida Harahap', '085270815261', 'FYCBqZO1', '182.3.7.106', 19, '2021-11-13 16:51:48'),
(396, 'Ira puspita', '082360261613', 'cAZ7ewvN', '110.232.78.69', 11, '2021-11-13 16:53:35'),
(397, 'Ralmaida Harahap', '085270815261', 'fhEMBbng', '182.3.7.106', 3, '2021-11-13 16:54:19'),
(398, 'Titin', '085669043811', 'fCE8xaXV', '114.5.144.95', 27, '2021-11-14 08:52:12'),
(399, 'Cut Tia', '085277596681', 'XOYFlLux', '110.232.78.69', 20, '2021-11-14 09:41:55'),
(400, 'Nur Putri Perdani P', '081263615104', 'WbxEZMou', '114.122.43.44', 29, '2021-11-14 09:42:44'),
(401, 'Dwi lestari', '085361964710', 'iwmPlcrV', '110.232.78.69', 26, '2021-11-14 09:43:20'),
(402, 'Dwi masari siregar', '082176470034', 'rN8lxBYH', '114.122.9.166', 14, '2021-11-14 09:46:12'),
(403, 'Dedi Erizal', '085233004494', 'Uo2HyfSJ', '114.122.38.154', 18, '2021-11-14 09:46:55'),
(404, 'Khairunisa', '082363074800', 'LI9iYalD', '114.122.43.44', 28, '2021-11-14 09:48:09'),
(405, 'Rita ramayanti', '085362552256', 'gBJlREoK', '114.122.36.201', 12, '2021-11-14 09:48:11'),
(406, 'Dwi masari siregar', '082176470034', 'l2DkRsX0', '114.122.9.166', 27, '2021-11-14 09:48:32'),
(407, 'Dewi', '081396021217', '1lQdBkqY', '114.122.11.79', 9, '2021-11-14 09:48:36'),
(408, 'Dwi masari siregar', '082176370034', 'tsu7IdKo', '114.122.9.166', 23, '2021-11-14 09:51:11'),
(409, 'Dwi lestari', '085361964710', 'Wedwvzr4', '110.232.78.69', 27, '2021-11-14 09:52:28'),
(410, 'Cut tia', '085277596681', 'b2AK0vGT', '110.232.78.69', 20, '2021-11-14 09:52:54'),
(411, 'Khairunisa', '082363074800', 'Jqt6ln34', '114.122.43.44', 0, '2021-11-14 09:54:49'),
(412, 'Dwi lestari', '085361964710', 'F7CDEgKh', '110.232.78.69', 28, '2021-11-14 09:55:11'),
(413, 'Titin', '085669043811', 'MYW9vOT8', '114.5.144.95', 42, '2021-11-14 09:56:44'),
(414, 'Adzanna Fradella', '087784206957', 'UQ07tFbp', '114.5.144.95', 27, '2021-11-14 11:18:00'),
(415, 'Adzanna Fradella', '087784206957', '1vz8F9lj', '114.5.144.95', 34, '2021-11-14 11:20:46'),
(416, 'Amel ajah', '08216382227', 'fd13zL5p', '114.122.37.191', 19, '2021-11-14 12:24:45'),
(417, 'Sri arihta', '085270805669', 'gMRF2AL7', '140.213.155.187', 27, '2021-11-14 13:05:17'),
(418, 'Aidil syaputra', '082362586900', 'qIHbzUlB', '110.232.78.69', 17, '2021-11-14 13:07:31'),
(419, 'Reza Octavia', '085207149562', 'KylpQ4TE', '116.206.31.42', 0, '2021-11-14 13:12:16'),
(420, 'Sri arihta', '085270805669', 'uA5IVreS', '110.232.78.69', 18, '2021-11-14 13:30:29'),
(421, 'dendy', '081399501501', 'ACo0kfaZ', '103.159.221.243', 0, '2021-11-17 11:39:29'),
(422, 'Natasha', '087862248281', 'YyE1OqH6', '140.213.151.40', 11, '2021-11-25 20:31:14'),
(423, 'f', '081335431188', 'de9IY2D3', '114.125.76.253', 17, '2021-11-26 08:18:41'),
(424, 'Adriyanto', '081367654276', '8PsHRtjL', '203.78.114.24', 13, '2021-11-26 09:00:19'),
(425, 'Arik', '081338479995', 'lahOdsHQ', '103.23.202.146', 16, '2021-11-26 10:36:24'),
(426, 'MEGA RATIH', '083114088835', 'qudz9g3K', '103.23.202.146', 21, '2021-11-26 10:37:56'),
(427, 'Ni Nyoman Darmini', '082236816695', 'QVTopEti', '223.255.228.89', 9, '2021-11-26 10:42:57'),
(428, 'Dina sugirahayu', '081220311499', 'gvd7hODr', '182.1.106.215', 18, '2021-11-26 10:43:14'),
(429, 'Haine Meysi Paat', '081340850959', 'Xb9ElaIZ', '103.23.202.146', 2, '2021-11-26 10:44:15'),
(430, 'Irfan', '123', '3DWHKlXy', '110.138.62.39', 7000, '2021-11-26 10:49:28'),
(431, 'ImTa', '00', 'IHhC4Ojv', '182.1.75.8', 18, '2021-11-26 13:19:39'),
(432, 'Irfan', '2727', 'elnX5pTQ', '110.138.62.39', 8, '2021-11-26 14:01:27'),
(433, 'Eka murti', '085398551113', 'qopbyu40', '103.23.202.146', 36, '2021-11-26 14:36:16'),
(434, 'Ni Kadek Sani Parwasih', '085337134711', 'HopDPXTM', '114.122.138.98', 9, '2021-11-26 14:37:42'),
(435, 'Yuni herlina', '085237890701', '9YTJ1yDF', '103.23.202.146', 8, '2021-11-26 14:38:14'),
(436, 'Ni Made Murniasih', '082252115051', 'sA4MXDmB', '103.23.202.146', 19, '2021-11-26 14:38:40'),
(437, 'Ni made desi rosani', '085213487532', 'WYpgAKjq', '114.125.88.160', 1, '2021-11-26 14:40:55'),
(438, 'Anak Agung Septiantari', '082147114102', '1u6ZJ9Mb', '182.1.69.150', 20, '2021-11-26 14:41:28'),
(439, 'Ni made desi rosani', '085213487532', 'z9dwRTMC', '114.125.88.160', 19, '2021-11-26 14:42:30'),
(440, 'Amalia', '081348401116', 'CieTZPYx', '103.23.202.146', 20, '2021-11-26 14:54:23'),
(441, 'Endah', '085229754356', 'YfN8gK6L', '103.23.202.146', 24, '2021-11-26 14:55:00'),
(442, 'Yuli nur andhika', '081355985095', 'rizlKT2q', '103.23.202.146', 12, '2021-11-26 14:57:42'),
(443, 'Gita', '082347660037', 'IYzxtP7h', '103.23.202.146', 40, '2021-11-26 14:58:16'),
(444, 'Ni Nengah Farida keriani', '081805574242', 'U7D6Q3yR', '103.23.202.146', 17, '2021-11-26 15:07:28'),
(445, 'Ni putu Sinta Dewi Ganetri', '08563934389', 'vkr9FDt7', '103.23.202.146', 21, '2021-11-26 15:07:42'),
(446, 'Anak agung septiantari', '082147114102', 'kfi6Fmd3', '182.1.84.102', 29, '2021-11-26 16:22:55'),
(447, 'AA Septiantari', '082147114102', 'OmLxBKY5', '182.1.85.46', 37, '2021-11-26 19:07:23'),
(448, 'AA Septiantari', '082147114102', 'oKSIXOjk', '182.1.85.46', 0, '2021-11-26 19:11:25'),
(449, 'Tari', '081339847237', 'ZdOjHam7', '103.23.202.146', 20, '2021-11-27 09:00:43'),
(450, 'Hj.sunniati', '082290216827', 'zZnyEA0N', '114.125.120.72', 1, '2021-11-27 09:01:13'),
(451, 'Jouke junita', '081354728211', 'aiDF0kjK', '103.23.202.146', 0, '2021-11-27 09:03:28'),
(452, 'Wirsetya indriani', '081245160024', 'aDS0ZC1G', '103.23.202.146', 24, '2021-11-27 09:04:21'),
(453, 'Lisrawati', '081298074678', 'zyWVxQa7', '114.125.117.132', 5, '2021-11-27 09:06:55'),
(454, 'Ratna', '085333374552', 'ClfQnEj2', '103.23.202.146', 8, '2021-11-27 09:11:56'),
(455, 'Nurfadilah ', '085256620161', '6XOmDPvd', '114.125.117.63', 21, '2021-11-27 09:12:35'),
(456, 'Ni Kadek Sulasih', '082339695153', 'LWNdFsgO', '103.23.202.146', 3, '2021-11-27 09:12:50'),
(457, 'Rismayanti', '085399467339', 'k8TxWP1A', '103.23.202.146', 10, '2021-11-27 09:16:20'),
(458, 'AN MIRAWATI', '081805684599', 'rsXGdpLq', '103.23.202.146', 27, '2021-11-27 09:16:35'),
(459, 'Nur Ani', '082394263632', 'QpJ5Itw3', '223.255.228.87', 8, '2021-11-27 09:17:31'),
(460, 'FIFI MARHAMA', '085242967875', '7NkBfMr8', '182.1.107.63', 27, '2021-11-27 09:18:43'),
(461, 'Ari Kumarawati', '081246064454', '1Ebml6vx', '114.125.103.249', 18, '2021-11-27 09:35:35'),
(462, 'Lilik', '087761411011', 'dQa7C6We', '203.78.121.233', 30, '2021-11-27 09:35:58'),
(463, 'A.A Dwi Handayani', '082236227481', '8UjeQFgf', '114.122.136.109', 17, '2021-11-27 10:09:16'),
(464, 'Ida Ayu Putu Citraningsih', '081237918225', 'W97y4ecR', '103.23.202.146', 12, '2021-11-27 10:09:33'),
(465, 'Yude', '085337888868', 'cfUETl87', '114.122.134.44', 19, '2021-11-27 10:09:49'),
(466, 'Kadir', '085242800580', 'Nng7hISE', '103.23.202.146', 27, '2021-11-27 10:11:29'),
(467, 'Kurniasih', '081328779774', 'WmkeRvb0', '103.23.202.146', 17, '2021-11-27 10:11:56'),
(468, '123123', '123123', 'x9MOkJyY', '139.194.205.158', 0, '2022-02-15 11:47:32'),
(469, 'weqweqwe', '123123', '0L5xAYcu', '139.194.205.158', 0, '2022-02-15 15:50:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `player_id` varchar(255) NOT NULL,
  `fb_1` varchar(255) NOT NULL,
  `fb_2` varchar(255) NOT NULL,
  `fb_3` varchar(255) NOT NULL,
  `fb_4` text,
  `player_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `player_id`, `fb_1`, `fb_2`, `fb_3`, `fb_4`, `player_date`) VALUES
(132, '8JgWt9UK', '1', '1', '1', 'Tingkatkan diskon nya\r\n', '2021-11-13 12:45:56'),
(133, 'SDHb3WxQ', '1', '1', '1', '', '2021-11-13 12:51:10'),
(134, 'ocKpvlj6', '1', '1', '1', '', '2021-11-13 12:53:11'),
(135, 'L8tkpFPM', '1', '1', '1', '', '2021-11-13 12:55:31'),
(136, 'hUOkvAf0', '1', '1', '1', '', '2021-11-13 12:57:28'),
(137, 'tqLkiyhT', '1', '1', '1', 'Mantappp', '2021-11-13 12:57:45'),
(138, '5lGRtJYH', '1', '1', '1', '', '2021-11-13 13:08:12'),
(139, '7wP3WIJo', '1', '1', '1', '', '2021-11-13 13:11:16'),
(140, '56MLbzHe', '1', '1', '1', 'Bagus', '2021-11-13 13:12:52'),
(141, 'vdymMsGI', '1', '1', '1', 'Keren', '2021-11-13 13:13:21'),
(142, 'KRhSEDy5', '1', '1', '1', 'Bagus', '2021-11-13 13:13:42'),
(143, 'ew5nrOy7', '1', '1', '1', 'Mantap', '2021-11-13 13:16:10'),
(144, '0uecF5p3', '1', '1', '1', '', '2021-11-13 13:17:29'),
(145, '', '1', '1', '1', '', '2021-11-13 13:18:41'),
(146, 'FYCBqZO1', '1', '1', '1', '', '2021-11-13 16:53:51'),
(147, 'fCE8xaXV', '1', '1', '1', 'Ganti games', '2021-11-14 08:54:33'),
(148, 'iwmPlcrV', '1', '1', '1', '', '2021-11-14 09:45:43'),
(149, 'rN8lxBYH', '1', '1', '1', '', '2021-11-14 09:48:09'),
(150, 'l2DkRsX0', '1', '1', '1', '', '2021-11-14 09:50:51'),
(151, 'XOYFlLux', '2', '1', '1', '', '2021-11-14 09:51:15'),
(152, 'LI9iYalD', '1', '1', '1', '', '2021-11-14 09:54:29'),
(153, 'b2AK0vGT', '1', '1', '1', '', '2021-11-14 09:56:04'),
(154, 'MYW9vOT8', '1', '1', '1', '', '2021-11-14 09:59:29'),
(155, 'MYW9vOT8', '1', '1', '1', '', '2021-11-14 11:20:23'),
(156, '1vz8F9lj', '1', '1', '1', '', '2021-11-14 11:23:06'),
(157, '1vz8F9lj', '1', '1', '1', '', '2021-11-14 11:50:09'),
(158, 'gMRF2AL7', '1', '1', '1', '', '2021-11-14 13:07:40'),
(159, 'YyE1OqH6', '1', '1', '1', '', '2021-11-25 20:32:53'),
(160, '8PsHRtjL', '1', '1', '1', '', '2021-11-26 09:01:56'),
(161, 'lahOdsHQ', '1', '1', '1', 'Untk produk s26 umur 1 bln anak saya konstipasi dan beberapa ibu seperti it..mohon di perhatikan', '2021-11-26 10:39:31'),
(162, 'qudz9g3K', '1', '1', '1', 'Sudah bagus dan tetap dipertahankan', '2021-11-26 10:40:12'),
(163, 'QVTopEti', '1', '1', '1', 'Bagus untuk melatih daya ingat...dan tetap semangat', '2021-11-26 10:44:55'),
(164, 'gvd7hODr', '1', '1', '1', '', '2021-11-26 10:45:06'),
(165, 'Xb9ElaIZ', '1', '1', '1', 'Sangat bagus menarik', '2021-11-26 10:46:21'),
(166, '3DWHKlXy', '1', '1', '1', 'fadgasgasgsa', '2021-11-26 10:49:52'),
(167, 'elnX5pTQ', '2', '1', '1', 'Ff', '2021-11-26 14:04:06'),
(168, 'elnX5pTQ', '2', '1', '1', 'Ff', '2021-11-26 14:04:06'),
(169, 'qopbyu40', '1', '1', '1', 'Oke', '2021-11-26 14:38:58'),
(170, 'HopDPXTM', '1', '1', '1', 'mungkin bisa disediakan untuk produk susu kebutuhan khuusus seperti untuk bnlr, hipoalergenic', '2021-11-26 14:40:07'),
(171, '9YTJ1yDF', '1', '1', '1', 'Sudah cukup bagus, mohon efisiensi waktu', '2021-11-26 14:40:32'),
(172, 'sA4MXDmB', '1', '1', '1', 'Sangat bagus, ', '2021-11-26 14:41:10'),
(173, '1u6ZJ9Mb', '1', '1', '1', 'Sudah sangat  bagus', '2021-11-26 14:43:33'),
(174, 'z9dwRTMC', '1', '1', '1', 'Semoga makin menyehatkn', '2021-11-26 14:44:47'),
(175, 'YfN8gK6L', '1', '1', '1', 'Good job', '2021-11-26 14:57:33'),
(176, 'rizlKT2q', '1', '1', '1', 'S26 sangat bagus dalam perkembangan kognitif dan daya tahan tubuh', '2021-11-26 15:00:25'),
(177, 'IYzxtP7h', '1', '1', '1', 'Menarik', '2021-11-26 15:01:16'),
(178, 'U7D6Q3yR', '1', '1', '1', 'Bagus', '2021-11-26 15:09:59'),
(179, 'vkr9FDt7', '1', '1', '1', 'Diharapkan seminar nya bisa dilakukan berkelanjutan', '2021-11-26 15:10:02'),
(180, 'kfi6Fmd3', '1', '1', '1', 'Baik', '2021-11-26 16:25:22'),
(181, 'OmLxBKY5', '1', '1', '1', 'Baik', '2021-11-26 19:10:04'),
(182, 'ZdOjHam7', '1', '1', '1', 'Yang sudah bagus lebih ditingkatkan lagi ', '2021-11-27 09:02:58'),
(183, 'aiDF0kjK', '1', '1', '1', 'Baik ', '2021-11-27 09:05:07'),
(184, 'zZnyEA0N', '1', '1', '1', 'Pelatihan ini sangat memuskan', '2021-11-27 09:05:10'),
(185, 'zyWVxQa7', '1', '1', '1', 'Webinatnya ditingkatkan', '2021-11-27 09:09:09'),
(186, 'ClfQnEj2', '1', '1', '1', 'Sangat bagus..untk daya ingat', '2021-11-27 09:14:21'),
(187, 'LWNdFsgO', '1', '1', '1', 'Smoga sdminar ini kerkelanjutan', '2021-11-27 09:14:21'),
(188, '6XOmDPvd', '1', '1', '1', ' Sllu mengadakan seminar dan pelatihan', '2021-11-27 09:15:01'),
(189, 'k8TxWP1A', '1', '1', '1', 'Bagus', '2021-11-27 09:18:09'),
(190, 'rsXGdpLq', '1', '1', '1', 'Tantangan yang memerlukan ketepatan dan kecepatan,, bagus', '2021-11-27 09:19:11'),
(191, 'QpJ5Itw3', '1', '1', '1', 'Sf s26 lebih sering lagi mengadakan seminar dgn materi yang berbeda', '2021-11-27 09:20:17'),
(192, '7NkBfMr8', '1', '1', '1', 'Semoga bisa mengadakan kembali seminar utk perawat neonatus', '2021-11-27 09:21:07'),
(193, '1Ebml6vx', '1', '1', '1', 'Produknya oke...sangat bagus susu formula untuk tumbuh kembang si kecil', '2021-11-27 09:38:06'),
(194, 'dQa7C6We', '1', '1', '1', 'Wah menatik nih gamenya cocok buat anak2...', '2021-11-27 09:38:41'),
(195, '8UjeQFgf', '1', '1', '1', 'Adakan pelatihan untuk nakes lebih sering', '2021-11-27 10:11:52'),
(196, 'W97y4ecR', '1', '1', '1', 'Sudah bagus dan ditingkatkan lagi ', '2021-11-27 10:11:58'),
(197, 'cfUETl87', '1', '1', '1', 'Semoga varian rasa lebih banyak', '2021-11-27 10:12:15'),
(198, 'Nng7hISE', '1', '1', '1', 'Keren', '2021-11-27 10:13:44'),
(199, 'WmkeRvb0', '1', '1', '1', 'Keren', '2021-11-27 10:13:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Procal Games', 'procal_games@webly.id', '8cb2237d0679ca88db6464eac60da96345513964');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=470;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
