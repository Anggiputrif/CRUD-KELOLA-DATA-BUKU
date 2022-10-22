-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2022 pada 12.29
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(50) NOT NULL,
  `judul_buku` varchar(200) NOT NULL,
  `id_pengarang` varchar(20) NOT NULL,
  `id_penerbit` varchar(20) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `berat` float NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `id_pengarang`, `id_penerbit`, `id_kategori`, `stok`, `berat`, `harga`, `deskripsi`, `gambar`, `deleted`) VALUES
('BU-1', 'Sifat Shalat Nabi', 'PG-1', 'PN-2', 'K-4', 0, 1, 45000, 'Shalat adalah ibadah yang agung dalam Islam, menempati urutan kedua dalam rukun Islam. Namun amat disayangkan, masih didapati banyak kekeliruan yang dilakukan sebagian kaum Muslimin dalam tata cara shalat. Di antara penyebabnya adalah karena manhaj (cara) beragama umat Islam yang masih ikut-ikutan. Faktor ini harus menyadarkan setiap Muslim, untuk segera mengoreksi shalatnya, agar diterima oleh Allah. Dan jalan untuk kembali kepada tata cara shalat yang benar sebagaimana yang diajarkan oleh Nabi, adalah dengan mengkaji hadits-hadits beliau; baik sabda, keteladanan dari perbuatan beliau, maupun persetujuan beliau pada perbuatan para sahabat.', 'airseloparang.jpg', 0),
('BU-119', 'ddsdsaaa', 'PG-2', 'PN-1', 'K-3', 2, 2, 2, '2', 'FLmu8vCUUAES0uQ.jpg', 0),
('BU-156', 'Kalkulus Lanjut 1', 'PG-3', 'PN-4', 'K-3', 50, 4, 5000, 'Hayy', 'mh2.jpg', 0),
('BU-22', 'Kalkulus Lanjut 1', 'PG-1', 'PN-1', 'K-1', 44, 4, 40000, 'BISAAAA', 'Serum1.JPG', 0),
('BU-3', 'Dunia Lebih Jelek Daripada Bangkai Kambing', 'PG-3', 'PN-3', 'K-3', 50, 1, 50000, 'Kehidupan dunia adalah kehidupan sementara, fana, dan akan hancur. Kehidupan dunia ini hanyalah permainan, senda gurau, kesenangan yang memukau, mempesona dan menipu manusia.\r\n\r\nRasulullah shalallahuâ€™alaihi wa sallam membuat perumpamaan bahwa dunia ini lebih jelek dan lebih hina daripada bangkai kambing. Dunia tidak ada harganya meskipun hanya seberat sayap nyamuk. Kesenangan dunia itu hanya sedikit dan sebentar, sedangkan akhirat itulah yang kekal Abadi.', 'seloparang-3.jpg', 0),
('BU-4', 'Sebaik Baik Amal Adalah Shalat', 'PG-3', 'PN-3', 'K-3', 50, 1, 32000, 'Shalat adalah tiang agama, tidak akan tegak agama ini kecuali dengannya. Shalat adalah ibadah yang pertama kali diwajibkan dan termasuk amal perbuatan yang pertama kali akan dihisab pada hari Kiamat.', 'ft.JPG', 0),
('BU-5', 'Dzikir Pagi Petang dan Sesudah Shalat Fardhu', 'PG-3', 'PN-1', 'K-4', 50, 1, 16000, 'Dzikir pagi berikut patut diamalkan karena akan membuat kita lebih semangat di pagi hari dan dimudahkan Allah dalam segala urusan. Untuk waktunya, yang utama dibaca saat masuk waktu Shubuh hingga matahari terbit. Namun boleh juga dibaca sampai matahari akan bergeser ke barat (mendekati waktu Zhuhur). Dzikir kali ini pun kami bantu dengan transliterasi untuk setiap bacaan selain bacaan Al Qurâ€™an, moga bermanfaat bagi yang sulit membaca dzikir yang ada huruf demi huruf. ( rumaysho )', 'bukit-cinta.jpg', 0),
('BU-6', 'Amalan Sunnah Setahun', 'PG-3', 'PN-4', 'K-3', 50, 1, 175000, 'Buku ini terdiri dari 27 bab dan terbit dengan tampilan desain yang elegan dan layout yang menarik, serta penyajian isi buku yang sistematis, ringkas dan lengkap. In syaa Allah buku ini dapat menjadi buku panduan amalan bagi setiap Muslim dan Muslimah, dalam menetapkan keutamaan (Fadhail) atau pun melaksanakan amalan-amalan tertentu dalam beribadah kepada Allah Taâ€™ala, maka ini adalah mutlak hak Allah â€˜Azza Wa Jalla. Dan hendaknya setiap Muslim dan Muslimah berkeyakinan dengan ketetapan Allah Taâ€™ala saja yang bersumber dari Al-Quran dan Sunnah Nabi-Nya.', 'Serum1.JPG', 0),
('BU-7', 'Tuntunan Doa Harian', 'PG-4', 'PN-5', 'K-1', 50, 1, 15000, 'Tuntunan Doa Sesuai Sunnah', 'fww.JPG', 0),
('BU-8', 'Tuntunan Hafalan Juz Amma jilid 1', 'PG-4', 'PN-5', 'K-1', 50, 1, 15000, 'Supaya Anak-Anak Cepat Hafal Juz Amma', 'blog-1.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(20) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `deleted`) VALUES
('K-1', 'Anak', 0),
('K-3', 'Aqidah', 0),
('K-4', 'Shalat', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` varchar(20) NOT NULL,
  `nama_penerbit` varchar(100) NOT NULL,
  `alamat_penerbit` varchar(100) NOT NULL,
  `email_penerbit` varchar(50) NOT NULL,
  `telp_penerbit` varchar(20) NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `alamat_penerbit`, `email_penerbit`, `telp_penerbit`, `deleted`) VALUES
('PN-1', 'Pustaka Imam Asy-Syafi\'i', 'Jakarta', 'pustaka@indonesia.com', '0000', 0),
('PN-2', 'Darul Haq', 'Jakarta', 'darulhaq@gmail.com', '0811', 0),
('PN-3', 'Pustaka At Taqwa', 'Jakarta', 'order@pustakaattaqwa.com', '081511117015', 0),
('PN-4', 'Khazanah Fawaid', 'Indonesia', 'tunasfawaid@gmail.com', '0821100039689', 0),
('PN-5', 'Pustaka Ibnu Umar', 'Bogor', 'marketing.pust.ibnuumar@gmail.com', '082118379889', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengarang`
--

CREATE TABLE `pengarang` (
  `id_pengarang` varchar(20) NOT NULL,
  `nama_pengarang` varchar(100) NOT NULL,
  `alamat_pengarang` varchar(200) NOT NULL,
  `email_pengarang` varchar(50) NOT NULL,
  `telp_pengarang` varchar(20) NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengarang`
--

INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`, `alamat_pengarang`, `email_pengarang`, `telp_pengarang`, `deleted`) VALUES
('PG-1', 'Syaikh Muhammad Nashiruddin al-Albani', 'Jakarta', 'darulhaq@gmail.com', '02184999585', 0),
('PG-2', 'Muhammad Abduh Tuasikal', 'Pesantren Darush Sholihin, Dusun Warak, RT. 08, RW. 02', 'rumaysho@gmail.com', '085200171222', 0),
('PG-3', 'Yazid bin Abdul Qadir Jawas', 'Bogor', 'xxx@xxx.com', '0000', 0),
('PG-4', 'Pustaka Ibnu Umar', 'Bogor', 'marketing.pust.ibnuumar@gmail.com', '082118379889', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `FK_buku_pengarang` (`id_pengarang`),
  ADD KEY `FK_buku_penerbit` (`id_penerbit`),
  ADD KEY `FK_buku_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indeks untuk tabel `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`id_pengarang`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `FK_buku_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `FK_buku_penerbit` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id_penerbit`),
  ADD CONSTRAINT `FK_buku_pengarang` FOREIGN KEY (`id_pengarang`) REFERENCES `pengarang` (`id_pengarang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
