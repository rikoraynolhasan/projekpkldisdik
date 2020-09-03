-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 05:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gtk`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `id_gtk` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `karyawan` enum('pns','ptth','pkl','lainnya') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `id_gtk`, `nama`, `jabatan`, `nip`, `foto`, `karyawan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Surya', 'Administrasi', '19750612 200801 1 038', NULL, 'pns', '2020-04-27 03:30:35', '2020-04-27 03:30:35'),
(2, 1, 'Maimunah', 'Administrasi', '-', NULL, 'pns', '2020-04-27 03:30:37', '2020-04-27 03:30:37'),
(3, 1, 'Chusnul Chotimah', 'Analisis', '-', NULL, 'pns', '2020-04-26 16:06:44', '2020-04-26 16:06:44'),
(4, 1, 'Zaki', 'Administrasi', '-', NULL, 'ptth', '2020-04-26 16:06:46', '2020-04-26 16:06:46'),
(5, 3, 'Erwin Alfiannur', 'Administrasi', '-', NULL, 'ptth', '2020-05-01 17:50:44', '2020-05-01 17:50:44'),
(6, 3, 'Rina', 'Administrasi', '19651128 199002 2 003', NULL, 'pns', '2020-04-26 16:45:26', '2020-04-26 16:45:26'),
(7, 3, 'Suparti', 'Analisis', '19750517 201001 2 002', NULL, 'pns', '2020-04-26 16:45:33', '2020-04-26 16:45:33'),
(8, 3, 'Amel', 'Administrasi', '-', NULL, 'pns', '2020-04-26 16:45:37', '2020-04-26 16:45:37'),
(9, 1, 'Riko Raynol Hasan', 'Magang', '-', NULL, 'pkl', '2020-04-26 16:34:53', '2020-04-26 16:34:53'),
(10, 3, 'Amel', 'Magang', '-', NULL, 'pkl', '2020-04-26 08:51:51', '2020-04-26 08:51:51'),
(12, 2, 'Roni', 'Administrasi', '197002162002121005', NULL, 'pns', '2020-04-26 20:28:14', '2020-04-26 20:28:14'),
(13, 2, 'Suiyantara,SE', 'Administrasi', '196808131991031011', NULL, 'pns', '2020-04-26 20:29:06', '2020-04-26 20:29:06'),
(14, 2, 'Winda Astuti, A.Md', 'Administrasi', '1976082007012020', NULL, 'pns', '2020-04-26 20:29:55', '2020-04-26 20:29:55'),
(15, 2, 'Aswan', 'Administrasi', '196811082008011014', NULL, 'pns', '2020-04-26 20:30:57', '2020-04-26 20:30:57'),
(16, 2, 'Armian', 'Administrasi', '1969112220012121001', NULL, 'pns', '2020-04-26 20:31:29', '2020-04-26 20:31:29'),
(17, 2, 'Aldi Ramadhani, SE', 'Administrasi', '-', NULL, 'ptth', '2020-04-26 20:31:59', '2020-04-26 20:31:59'),
(18, 2, 'Febrianti Eka Pratiwi', 'Administrasi', '-', NULL, 'ptth', '2020-04-26 20:33:45', '2020-04-26 20:33:45'),
(19, 2, 'Irdi Heriyadi', 'Staff', '198306242014081001', NULL, 'pns', '2020-04-26 20:35:18', '2020-04-26 20:35:18'),
(20, 2, 'Hamsin Kamariah', 'Staff', '19770403 201408 2 001', NULL, 'pns', '2020-04-26 20:45:16', '2020-04-26 20:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` int(11) NOT NULL,
  `foto_url` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `foto_url`, `nama`, `created_at`, `updated_at`) VALUES
(13, 'img/galeri/5ea6421144dcf.jpeg', '1', '2020-04-26 18:23:14', '2020-04-26 18:23:14'),
(14, 'img/galeri/5ea64262854a3.jpeg', '2', '2020-04-26 18:24:34', '2020-04-26 18:24:34'),
(15, 'img/galeri/5ea6429fc34a0.jpeg', NULL, '2020-04-26 18:25:35', '2020-04-26 18:25:35'),
(16, 'img/galeri/5ea6433cb91d1.jpeg', NULL, '2020-04-26 18:28:12', '2020-04-26 18:28:12'),
(17, 'img/galeri/5ea6434eb3e2f.jpeg', '5', '2020-04-26 18:28:30', '2020-04-26 18:28:30'),
(18, 'img/galeri/5ea6437196254.jpeg', NULL, '2020-04-26 18:29:05', '2020-04-26 18:29:05'),
(19, 'img/galeri/5ea6439127f63.jpeg', NULL, '2020-04-26 18:29:37', '2020-04-26 18:29:37'),
(20, 'img/galeri/5ea643b1c9a4c.jpeg', NULL, '2020-04-26 18:30:09', '2020-04-26 18:30:09'),
(21, 'img/galeri/5ea643d41b08d.jpeg', NULL, '2020-04-26 18:30:44', '2020-04-26 18:30:44'),
(23, 'img/galeri/5ea644074bf8a.jpeg', NULL, '2020-04-26 18:31:35', '2020-04-26 18:31:35'),
(24, 'img/galeri/5ea644204c630.jpeg', NULL, '2020-04-26 18:32:00', '2020-04-26 18:32:00'),
(25, 'img/galeri/5ea6463eeac7d.jpeg', NULL, '2020-04-26 18:41:03', '2020-04-26 18:41:03'),
(26, 'img/galeri/5ea646ba5344d.jpeg', NULL, '2020-04-26 18:43:06', '2020-04-26 18:43:06'),
(27, 'img/galeri/5ea646c2c0bf3.jpeg', NULL, '2020-04-26 18:43:14', '2020-04-26 18:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `gtks`
--

CREATE TABLE `gtks` (
  `id` int(11) NOT NULL,
  `gtk` varchar(255) DEFAULT NULL,
  `visi` text,
  `misi` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gtks`
--

INSERT INTO `gtks` (`id`, `gtk`, `visi`, `misi`, `created_at`, `updated_at`) VALUES
(1, 'SD', NULL, NULL, NULL, NULL),
(2, 'SMP', NULL, NULL, NULL, NULL),
(3, 'PAUD', NULL, NULL, NULL, NULL),
(4, 'Other', '-', '-', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `heads`
--

CREATE TABLE `heads` (
  `id` int(11) NOT NULL,
  `id_gtk` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heads`
--

INSERT INTO `heads` (`id`, `id_gtk`, `nama`, `jabatan`, `nip`, `foto`, `created_at`, `updated_at`) VALUES
(2, 1, 'Hj. Iswardati Hudzaifah, M.Pd', 'Kepala Seksi GTK SD', '19660925 199104 2 001', NULL, '2020-04-24 22:21:53', '2020-04-24 22:21:53'),
(3, 2, 'Drs. Mohammad Bajuri, M.Pd', 'Kepala Seksi GTK SMP', '19660202 199001 1 001', NULL, '2020-05-01 18:29:39', '2020-05-01 18:29:39'),
(4, 4, 'Heriadi, S.Pd., M.Pd', 'Kepala Bidang GTK', '19621224 198611 1 002', NULL, '2020-05-01 10:28:58', '2020-05-01 10:28:58'),
(5, 3, 'Murdiana, S.Pd., M.Pd', 'Kepala Seksi GTK PAUD', '19650706 198502 2 001', NULL, '2020-05-01 10:31:12', '2020-05-01 10:31:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newses`
--

CREATE TABLE `newses` (
  `id` int(11) NOT NULL,
  `judul_artikel` varchar(50) DEFAULT NULL,
  `artikel` longtext,
  `tanggal` date DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `kategori` enum('Berita','Pengumuman','Kegiatan') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newses`
--

INSERT INTO `newses` (`id`, `judul_artikel`, `artikel`, `tanggal`, `gambar`, `kategori`, `created_at`, `updated_at`) VALUES
(10, 'Pemilihan Kepala Sekolah Dan Guru Berprestasi', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente odit dolor voluptatibus molestias omnis fugiat repudiandae perspiciatis quia sed ea! Ea quae sequi atque, fuga laborum numquam. Voluptas alias adipisci labore voluptatem quasi consectetur officiis eligendi at. Magni eligendi laborum accusamus quae.\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Porro ex fugiat tenetur error fugit at nostrum aliquam, corrupti qui, neque, quos perferendis nulla modi pariatur culpa mollitia a dolorum inventore! Laboriosam amet repellat fugit explicabo maiores quasi nulla illum voluptatum, aut dolorum id delectus sunt cum ullam tempore ipsum itaque quas. Sequi veritatis eaque facere itaque laboriosam sed recusandae omnis quia? Quisquam est ipsum, dicta adipisci, minus nesciunt sed doloribus aspernatur a odit, earum id voluptate natus quae laboriosam quibusdam!\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Iure commodi, dolore, est id sequi excepturi optio labore eos, cum neque vel enim reprehenderit distinctio necessitatibus expedita explicabo. Voluptas, quam porro?\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur temporibus nostrum fugit sapiente aperiam atque, doloremque enim maiores reiciendis tempora, corporis sed cum quae. Sed consectetur cupiditate asperiores qui dolorem labore molestiae id nihil dignissimos aliquid impedit laborum suscipit, quos ullam consequatur voluptatibus porro vitae? Repellat reiciendis sapiente placeat culpa totam, facilis dolores magnam ipsa ipsam! Modi expedita corrupti excepturi in atque sit corporis eos, dolore assumenda quod et autem fuga repellat delectus. Et necessitatibus, illo reiciendis sit corrupti deserunt soluta quo impedit vel sunt commodi pariatur facilis, at dolor iusto molestias itaque nobis excepturi enim veritatis quas?', '2019-07-27', 'img/news/5ea6495e02cd2.jpeg', 'Berita', '2020-06-09 13:51:38', '2020-06-09 13:51:38'),
(11, 'Perubahan tampilan disdik kota Samarinda', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente odit dolor voluptatibus molestias omnis fugiat repudiandae perspiciatis quia sed ea! Ea quae sequi atque, fuga laborum numquam. Voluptas alias adipisci labore voluptatem quasi consectetur officiis eligendi at. Magni eligendi laborum accusamus quae.\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Porro ex fugiat tenetur error fugit at nostrum aliquam, corrupti qui, neque, quos perferendis nulla modi pariatur culpa mollitia a dolorum inventore! Laboriosam amet repellat fugit explicabo maiores quasi nulla illum voluptatum, aut dolorum id delectus sunt cum ullam tempore ipsum itaque quas. Sequi veritatis eaque facere itaque laboriosam sed recusandae omnis quia? Quisquam est ipsum, dicta adipisci, minus nesciunt sed doloribus aspernatur a odit, earum id voluptate natus quae laboriosam quibusdam!\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Iure commodi, dolore, est id sequi excepturi optio labore eos, cum neque vel enim reprehenderit distinctio necessitatibus expedita explicabo. Voluptas, quam porro?\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur temporibus nostrum fugit sapiente aperiam atque, doloremque enim maiores reiciendis tempora, corporis sed cum quae. Sed consectetur cupiditate asperiores qui dolorem labore molestiae id nihil dignissimos aliquid impedit laborum suscipit, quos ullam consequatur voluptatibus porro vitae? Repellat reiciendis sapiente placeat culpa totam, facilis dolores magnam ipsa ipsam! Modi expedita corrupti excepturi in atque sit corporis eos, dolore assumenda quod et autem fuga repellat delectus. Et necessitatibus, illo reiciendis sit corrupti deserunt soluta quo impedit vel sunt commodi pariatur facilis, at dolor iusto molestias itaque nobis excepturi enim veritatis quas?', '2020-05-01', 'img/news/5eac52ec234c5.jpeg', 'Pengumuman', '2020-06-09 13:51:43', '2020-06-09 13:51:43'),
(13, 'Acara pembukaan penerimaan guru di SDN 009', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate quas dolor commodi magni quasi, aliquid a eaque voluptatibus sapiente magnam quam autem officiis nesciunt et odio libero enim eius reiciendis molestiae possimus natus. A, necessitatibus. Laborum itaque inventore placeat deleniti veritatis doloribus consequuntur? Repellendus, possimus.\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Iure fuga maxime ea tenetur laudantium quas facilis inventore nisi modi a minima, laboriosam sit.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus at rerum minus natus. Nam harum atque voluptate, at perferendis explicabo iusto provident, totam ab, laborum dolore consequatur voluptatem! Velit, eligendi. Sapiente neque optio eum. Dignissimos sapiente itaque porro sequi sit repellendus, modi consectetur asperiores autem ratione necessitatibus soluta, incidunt nobis eos molestias animi voluptates debitis. Officia quia reiciendis impedit expedita atque neque cupiditate iusto odio! Eius deleniti est aut obcaecati! Delectus exercitationem fuga sit porro eos vero sapiente nulla vitae quaerat, fugiat, architecto, consequatur enim aut voluptatibus aliquam natus officia autem asperiores fugit saepe dolorum praesentium atque illum dolor. Modi quo velit hic ipsam consequatur, vel blanditiis harum repellat sapiente, eius et dolore ad provident culpa maxime impedit amet animi voluptate quia, perferendis aperiam perspiciatis? Accusantium error vitae praesentium, mollitia rerum enim alias, voluptatum reprehenderit voluptates et totam voluptate voluptatibus. In fugiat dicta totam hic nihil. Nemo repellendus maiores quisquam tempora quasi, sapiente ab quibusdam, iste, non numquam ipsa asperiores necessitatibus error natus repellat modi est facilis quod quaerat architecto. Beatae iure dolor repellat, quis tenetur sint delectus animi sed tempora! Consectetur, deleniti fugit, ratione maxime nam reiciendis nobis dolorum sunt distinctio, eveniet laudantium! Accusamus atque maxime ipsam nesciunt magnam eligendi aliquid numquam exercitationem, assumenda veniam possimus molestiae quae iste labore quod omnis? Eligendi quibusdam fuga saepe provident commodi fugiat libero at nobis, ratione tempora magni, suscipit nulla? Eaque enim possimus excepturi? Repudiandae impedit et dicta. Repellendus excepturi vel consequatur adipisci animi placeat ducimus, tenetur, impedit consectetur temporibus cumque! Voluptatibus, autem cumque eius cum inventore quae corrupti, pariatur, error quidem ipsum possimus quibusdam adipisci repellat excepturi hic sapiente laudantium facilis ipsa numquam temporibus delectus repudiandae explicabo nam aliquam! Vel odit nemo, aliquam amet accusamus velit! Voluptates atque illum voluptatum iste, distinctio nisi obcaecati excepturi eaque reiciendis vero sed porro quia provident eum a id eligendi quis architecto. Accusamus alias, hic, itaque debitis distinctio sunt doloremque et quidem vero nesciunt in eligendi sint assumenda vel repellat, facere ducimus consequatur repudiandae optio corporis perferendis laboriosam. Corporis, illum? Perferendis nostrum vitae quis alias nulla, consequuntur optio autem modi eos dolores, ratione quisquam vero. A fugiat laborum dolor. Possimus facilis hic aspernatur fugiat labore corporis impedit voluptatibus deleniti autem, illum ea molestias? Voluptatibus impedit error maxime asperiores quam quasi commodi facere eum, perspiciatis ullam distinctio porro fugit ipsa sint at molestiae reprehenderit quibusdam excepturi dolore tempore itaque culpa quas. Magnam fugiat vel tempore distinctio.', '2020-05-12', 'img/news/5eac53651faee.jpeg', 'Pengumuman', '2020-06-09 13:51:44', '2020-06-09 13:51:44'),
(14, 'Maulid nabi bersama guru-guru SD', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate quas dolor commodi magni quasi, aliquid a eaque voluptatibus sapiente magnam quam autem officiis nesciunt et odio libero enim eius reiciendis molestiae possimus natus. A, necessitatibus. Laborum itaque inventore placeat deleniti veritatis doloribus consequuntur? Repellendus, possimus.\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Iure fuga maxime ea tenetur laudantium quas facilis inventore nisi modi a minima, laboriosam sit.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus at rerum minus natus. Nam harum atque voluptate, at perferendis explicabo iusto provident, totam ab, laborum dolore consequatur voluptatem! Velit, eligendi. Sapiente neque optio eum. Dignissimos sapiente itaque porro sequi sit repellendus, modi consectetur asperiores autem ratione necessitatibus soluta, incidunt nobis eos molestias animi voluptates debitis. Officia quia reiciendis impedit expedita atque neque cupiditate iusto odio! Eius deleniti est aut obcaecati! Delectus exercitationem fuga sit porro eos vero sapiente nulla vitae quaerat, fugiat, architecto, consequatur enim aut voluptatibus aliquam natus officia autem asperiores fugit saepe dolorum praesentium atque illum dolor. Modi quo velit hic ipsam consequatur, vel blanditiis harum repellat sapiente, eius et dolore ad provident culpa maxime impedit amet animi voluptate quia, perferendis aperiam perspiciatis? Accusantium error vitae praesentium, mollitia rerum enim alias, voluptatum reprehenderit voluptates et totam voluptate voluptatibus. In fugiat dicta totam hic nihil. Nemo repellendus maiores quisquam tempora quasi, sapiente ab quibusdam, iste, non numquam ipsa asperiores necessitatibus error natus repellat modi est facilis quod quaerat architecto. Beatae iure dolor repellat, quis tenetur sint delectus animi sed tempora! Consectetur, deleniti fugit, ratione maxime nam reiciendis nobis dolorum sunt distinctio, eveniet laudantium! Accusamus atque maxime ipsam nesciunt magnam eligendi aliquid numquam exercitationem, assumenda veniam possimus molestiae quae iste labore quod omnis? Eligendi quibusdam fuga saepe provident commodi fugiat libero at nobis, ratione tempora magni, suscipit nulla? Eaque enim possimus excepturi? Repudiandae impedit et dicta. Repellendus excepturi vel consequatur adipisci animi placeat ducimus, tenetur, impedit consectetur temporibus cumque! Voluptatibus, autem cumque eius cum inventore quae corrupti, pariatur, error quidem ipsum possimus quibusdam adipisci repellat excepturi hic sapiente laudantium facilis ipsa numquam temporibus delectus repudiandae explicabo nam aliquam! Vel odit nemo, aliquam amet accusamus velit! Voluptates atque illum voluptatum iste, distinctio nisi obcaecati excepturi eaque reiciendis vero sed porro quia provident eum a id eligendi quis architecto. Accusamus alias, hic, itaque debitis distinctio sunt doloremque et quidem vero nesciunt in eligendi sint assumenda vel repellat, facere ducimus consequatur repudiandae optio corporis perferendis laboriosam. Corporis, illum? Perferendis nostrum vitae quis alias nulla, consequuntur optio autem modi eos dolores, ratione quisquam vero. A fugiat laborum dolor. Possimus facilis hic aspernatur fugiat labore corporis impedit voluptatibus deleniti autem, illum ea molestias? Voluptatibus impedit error maxime asperiores quam quasi commodi facere eum, perspiciatis ullam distinctio porro fugit ipsa sint at molestiae reprehenderit quibusdam excepturi dolore tempore itaque culpa quas. Magnam fugiat vel tempore distinctio.', '2020-05-13', 'img/news/5eac53867636b.jpeg', 'Kegiatan', '2020-06-09 13:51:48', '2020-06-09 13:51:48'),
(15, 'Belajar bareng bersam murid SD 002', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate quas dolor commodi magni quasi, aliquid a eaque voluptatibus sapiente magnam quam autem officiis nesciunt et odio libero enim eius reiciendis molestiae possimus natus. A, necessitatibus. Laborum itaque inventore placeat deleniti veritatis doloribus consequuntur? Repellendus, possimus.\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Iure fuga maxime ea tenetur laudantium quas facilis inventore nisi modi a minima, laboriosam sit.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus at rerum minus natus. Nam harum atque voluptate, at perferendis explicabo iusto provident, totam ab, laborum dolore consequatur voluptatem! Velit, eligendi. Sapiente neque optio eum. Dignissimos sapiente itaque porro sequi sit repellendus, modi consectetur asperiores autem ratione necessitatibus soluta, incidunt nobis eos molestias animi voluptates debitis. Officia quia reiciendis impedit expedita atque neque cupiditate iusto odio! Eius deleniti est aut obcaecati! Delectus exercitationem fuga sit porro eos vero sapiente nulla vitae quaerat, fugiat, architecto, consequatur enim aut voluptatibus aliquam natus officia autem asperiores fugit saepe dolorum praesentium atque illum dolor. Modi quo velit hic ipsam consequatur, vel blanditiis harum repellat sapiente, eius et dolore ad provident culpa maxime impedit amet animi voluptate quia, perferendis aperiam perspiciatis? Accusantium error vitae praesentium, mollitia rerum enim alias, voluptatum reprehenderit voluptates et totam voluptate voluptatibus. In fugiat dicta totam hic nihil. Nemo repellendus maiores quisquam tempora quasi, sapiente ab quibusdam, iste, non numquam ipsa asperiores necessitatibus error natus repellat modi est facilis quod quaerat architecto. Beatae iure dolor repellat, quis tenetur sint delectus animi sed tempora! Consectetur, deleniti fugit, ratione maxime nam reiciendis nobis dolorum sunt distinctio, eveniet laudantium! Accusamus atque maxime ipsam nesciunt magnam eligendi aliquid numquam exercitationem, assumenda veniam possimus molestiae quae iste labore quod omnis? Eligendi quibusdam fuga saepe provident commodi fugiat libero at nobis, ratione tempora magni, suscipit nulla? Eaque enim possimus excepturi? Repudiandae impedit et dicta. Repellendus excepturi vel consequatur adipisci animi placeat ducimus, tenetur, impedit consectetur temporibus cumque! Voluptatibus, autem cumque eius cum inventore quae corrupti, pariatur, error quidem ipsum possimus quibusdam adipisci repellat excepturi hic sapiente laudantium facilis ipsa numquam temporibus delectus repudiandae explicabo nam aliquam! Vel odit nemo, aliquam amet accusamus velit! Voluptates atque illum voluptatum iste, distinctio nisi obcaecati excepturi eaque reiciendis vero sed porro quia provident eum a id eligendi quis architecto. Accusamus alias, hic, itaque debitis distinctio sunt doloremque et quidem vero nesciunt in eligendi sint assumenda vel repellat, facere ducimus consequatur repudiandae optio corporis perferendis laboriosam. Corporis, illum? Perferendis nostrum vitae quis alias nulla, consequuntur optio autem modi eos dolores, ratione quisquam vero. A fugiat laborum dolor. Possimus facilis hic aspernatur fugiat labore corporis impedit voluptatibus deleniti autem, illum ea molestias? Voluptatibus impedit error maxime asperiores quam quasi commodi facere eum, perspiciatis ullam distinctio porro fugit ipsa sint at molestiae reprehenderit quibusdam excepturi dolore tempore itaque culpa quas. Magnam fugiat vel tempore distinctio.', '2020-05-13', 'img/news/5eac53ff431dc.jpeg', 'Berita', '2020-06-09 13:51:51', '2020-06-09 13:51:51'),
(16, 'Rapat bersama kepala dinas pendidikan', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate quas dolor commodi magni quasi, aliquid a eaque voluptatibus sapiente magnam quam autem officiis nesciunt et odio libero enim eius reiciendis molestiae possimus natus. A, necessitatibus. Laborum itaque inventore placeat deleniti veritatis doloribus consequuntur? Repellendus, possimus.\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Iure fuga maxime ea tenetur laudantium quas facilis inventore nisi modi a minima, laboriosam sit.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus at rerum minus natus. Nam harum atque voluptate, at perferendis explicabo iusto provident, totam ab, laborum dolore consequatur voluptatem! Velit, eligendi. Sapiente neque optio eum. Dignissimos sapiente itaque porro sequi sit repellendus, modi consectetur asperiores autem ratione necessitatibus soluta, incidunt nobis eos molestias animi voluptates debitis. Officia quia reiciendis impedit expedita atque neque cupiditate iusto odio! Eius deleniti est aut obcaecati! Delectus exercitationem fuga sit porro eos vero sapiente nulla vitae quaerat, fugiat, architecto, consequatur enim aut voluptatibus aliquam natus officia autem asperiores fugit saepe dolorum praesentium atque illum dolor. Modi quo velit hic ipsam consequatur, vel blanditiis harum repellat sapiente, eius et dolore ad provident culpa maxime impedit amet animi voluptate quia, perferendis aperiam perspiciatis? Accusantium error vitae praesentium, mollitia rerum enim alias, voluptatum reprehenderit voluptates et totam voluptate voluptatibus. In fugiat dicta totam hic nihil. Nemo repellendus maiores quisquam tempora quasi, sapiente ab quibusdam, iste, non numquam ipsa asperiores necessitatibus error natus repellat modi est facilis quod quaerat architecto. Beatae iure dolor repellat, quis tenetur sint delectus animi sed tempora! Consectetur, deleniti fugit, ratione maxime nam reiciendis nobis dolorum sunt distinctio, eveniet laudantium! Accusamus atque maxime ipsam nesciunt magnam eligendi aliquid numquam exercitationem, assumenda veniam possimus molestiae quae iste labore quod omnis? Eligendi quibusdam fuga saepe provident commodi fugiat libero at nobis, ratione tempora magni, suscipit nulla? Eaque enim possimus excepturi? Repudiandae impedit et dicta. Repellendus excepturi vel consequatur adipisci animi placeat ducimus, tenetur, impedit consectetur temporibus cumque! Voluptatibus, autem cumque eius cum inventore quae corrupti, pariatur, error quidem ipsum possimus quibusdam adipisci repellat excepturi hic sapiente laudantium facilis ipsa numquam temporibus delectus repudiandae explicabo nam aliquam! Vel odit nemo, aliquam amet accusamus velit! Voluptates atque illum voluptatum iste, distinctio nisi obcaecati excepturi eaque reiciendis vero sed porro quia provident eum a id eligendi quis architecto. Accusamus alias, hic, itaque debitis distinctio sunt doloremque et quidem vero nesciunt in eligendi sint assumenda vel repellat, facere ducimus consequatur repudiandae optio corporis perferendis laboriosam. Corporis, illum? Perferendis nostrum vitae quis alias nulla, consequuntur optio autem modi eos dolores, ratione quisquam vero. A fugiat laborum dolor. Possimus facilis hic aspernatur fugiat labore corporis impedit voluptatibus deleniti autem, illum ea molestias? Voluptatibus impedit error maxime asperiores quam quasi commodi facere eum, perspiciatis ullam distinctio porro fugit ipsa sint at molestiae reprehenderit quibusdam excepturi dolore tempore itaque culpa quas. Magnam fugiat vel tempore distinctio.', '2020-05-20', 'img/news/5eac5421aa3b5.jpeg', 'Berita', '2020-06-09 13:51:53', '2020-06-09 13:51:53'),
(17, 'Apakah ini berita', 'dksaldksajhhdsk saskdjlsakj d sjalkdjsldkjsaljjd  jsdjlsa kj sljkl s lsdk jsladk jsal kjslkjlkjls kj sdlkjs lk ldkjdlk jlsa kjlsakjsalksj lkjlskjslkdksaldksajhhdsk saskdjlsakj d sjalkdjsldkjsaljjd  jsdjlsa kj sljkl s lsdk jsladk jsal kjslkjlkjls kj sdlkjs lk ldkjdlk jlsa kjlsakjsalksj lkjlskjslkdksaldksajhhdsk saskdjlsakj d sjalkdjsldkjsaljjd  jsdjlsa kj sljkl s lsdk jsladk jsal kjslkjlkjls kj sdlkjs lk ldkjdlk jlsa kjlsakjsalksj lkjlskjslkdksaldksajhhdsk saskdjlsakj d sjalkdjsldkjsaljjd  jsdjlsa kj sljkl s lsdk jsladk jsal kjslkjlkjls kj sdlkjs lk ldkjdlk jlsa kjlsakjsalksj lkjlskjslkdksaldksajhhdsk saskdjlsakj d sjalkdjsldkjsaljjd  jsdjlsa kj sljkl s lsdk jsladk jsal kjslkjlkjls kj sdlkjs lk ldkjdlk jlsa kjlsakjsalksj lkjlskjslkdksaldksajhhdsk saskdjlsakj d sjalkdjsldkjsaljjd  jsdjlsa kj sljkl s lsdk jsladk jsal kjslkjlkjls kj sdlkjs lk ldkjdlk jlsa kjlsakjsalksj lkjlskjslk', '2020-05-05', 'img/news/5eb4da0f7f228.jpeg', 'Berita', '2020-06-09 13:51:56', '2020-06-09 13:51:56'),
(18, 'tes', 'fdffd', '2020-06-09', 'img/news/5ef5a482664d6.jpg', 'Kegiatan', '2020-06-25 23:32:19', '2020-06-25 23:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rikoraynol12345@gmail.com', '$2y$10$BIG0OHPee7etIYnlwmhmQ.t7f/yzoWfPaDSv4l/pRfjD2dGdbXr0y', '2020-05-31 04:19:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Riko Raynol Hasan', 'rikoraynol12345@gmail.com', NULL, '$2y$10$wDouq2YD59EM.uOzWD5Sv.EvIqQuTirFk.u3j8PkF0.UxuCfJuKzW', NULL, '2020-04-22 13:22:19', '2020-04-22 13:22:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `karyawan_ibfk_1` (`id_gtk`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gtks`
--
ALTER TABLE `gtks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heads`
--
ALTER TABLE `heads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kepsek_ibfk_1` (`id_gtk`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newses`
--
ALTER TABLE `newses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `gtks`
--
ALTER TABLE `gtks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `heads`
--
ALTER TABLE `heads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newses`
--
ALTER TABLE `newses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`id_gtk`) REFERENCES `gtks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `heads`
--
ALTER TABLE `heads`
  ADD CONSTRAINT `heads_ibfk_1` FOREIGN KEY (`id_gtk`) REFERENCES `gtks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
