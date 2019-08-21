-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jan 2019 pada 18.12
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tobatrans`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `gambar`, `deskripsi`, `tanggal`) VALUES
(3, 'Huta Siallagan', 'Huta Siallagan.jpg', 'Huta Siallagan ( Kampung Siallagan ) terletak di Desa Ambarita, Kecamatan Simanindo , Pulau Samosir. 150 m dari pinggiran Danau Toba, Pulau Samosir bagian Timur, berjarak 3 km dari Tuktuksiadong (pusat perhotelan) atau 5 km dari huta/kampung Tomok (dermaga Ferry) sementara melalui danau berjarak 12 km dari kota Parapat. Terdapat Objek Wisata Budaya Batu Kursi Raja Siallagan \"Stone Chair Of King Siallagan\" disini. Huta Siallagan memiliki luas sekitar 2.400 mÂ² dan dikelilingi tembok batu tersusun rapi setinggi 1,5 hingga 2 meter. Perkampungan ini dibangun pada masa raja huta pertama yaitu Raja Laga Siallagan. Kemudian diwariskan kepada Raja Hendrik Siallagan dan seterusnya hingga keturunan Raja Ompu Batu Ginjang Siallagan. Huta Siallagan sejak dahulu dihuni marga Siallagan, yaitu turunan Raja Naiambaton garis keturunan dari Raja Isumbaon anak kedua Raja Batak. Keturunan Raja Siallagan sekarang masih berdiam di seputaran Desa Ambarita dan beberapa makam keturunannya pun bisa ditemukan di tempat ini.', '2018-12-13 03:17:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `subjek` varchar(200) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `tanggapan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama_user`, `subjek`, `isi`, `tanggapan`) VALUES
(2, 'Ronaldo Sitanggang', 'Pelayanan', 'Supirnya ngantuk. Bagaimana ini ?', 'Kasi aja kopi ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lamaran_supir`
--

CREATE TABLE `lamaran_supir` (
  `id_lamaran` int(11) NOT NULL,
  `nama_supir` varchar(45) DEFAULT NULL,
  `punya_kendaraan` varchar(45) DEFAULT NULL,
  `pengalaman` varchar(200) DEFAULT NULL,
  `alamat_email` varchar(100) DEFAULT NULL,
  `nomor_telepon` varchar(45) DEFAULT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  `status_supir` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `lamaran_supir`
--

INSERT INTO `lamaran_supir` (`id_lamaran`, `nama_supir`, `punya_kendaraan`, `pengalaman`, `alamat_email`, `nomor_telepon`, `deskripsi`, `status_supir`) VALUES
(2, 'Andi Pratama Sitanggang', 'punya', 'kerja jadi kurir j&t', 'andi@gmail.com', '081314567869', 'nfwnwei', 'Di terima'),
(3, 'Anggiat', 'tidak', 'kurir di sempurna cargo medan', 'fjewfjewb@gmail.com', '09876545678', 'ena-ena', 'Di terima'),
(4, 'Orlando', 'punya', 'pernah jadi supir grab di medan', 'Orlando@gmail.com', '081309980988', 'saya dulunya pernah jadi supir grab di medan sekitar 2 tahun\r\n				', ''),
(5, 'Lorennia', 'punya', 'belum pernah', 'loren@gmail.com', '0988977787', 'belum pernah sama sekali\r\n				', ''),
(6, 'wqdqw', 'punya', 'dqwqw', 'nsjfwne@gmail.com', '2342', 'df2ew fw3fe rfee\r\n				', 'Di terima'),
(7, 'dqqw', 'dqwqw', 'dwqq', 'wqd', '3322423', 'kfernerm wf njnr ', '3'),
(8, '7fh', 'rer', 'rere', 'frrwge', '56787', 'gree', '3'),
(9, 'asdas', 'punya', 'sadas', 'sadas@gmail', '123', 'sadasdas\r\n				', 'Di terima'),
(10, '', 'Tidak Punya', '3', 'loren@gmail.com', '097797788777', 'pernah jadi supir grab\r\n				', 'Di terima'),
(12, 'dqdqwqqw ', 'Punya', '4', 'ronaldo@gmai.com', '344554645645', 'efregegreeeg  t rgree\r\n				', 'Di proses'),
(13, 'dqdqwqqw ', 'Punya', '4', 'ronaldo@gmai.com', '344554645645', 'efregegreeeg  t rgree\r\n				', 'Di proses'),
(14, 'f3fre', 'Tidak Punya', '4', 'feww@gmail.com', '234353', 'efwfre g\r\n				', 'Di proses'),
(15, 'r2323', 'Tidak Punya', '4', '324233@gmail.com', '3435433', 'gregerg  egt tr t het e e\r\n				', 'Di proses'),
(16, 'r2323', 'Tidak Punya', '4', '324233@gmail.com', '3435433', 'gregerg  egt tr t het e e\r\n				', 'Di proses'),
(17, '31e322', 'Tidak Punya', '7', 'Orlando@gmail.com', '4532242', '3vr gt trrt trh rt r\r\n				', 'Di proses'),
(18, 'ewfwfw', 'Tidak Punya', '6', 'nsjfwne@gmail.com', '3432445355333', 'pejgje gergje jg ege \r\n				', 'Di proses'),
(19, 'fwefwe', 'Tidak Punya', '6', 'qdew@gmail.com', '344554564645564', 'ewfwfwfwewwf w we fw w ew fwwe fw\r\n				', 'Di proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `foto_mobil` varchar(45) DEFAULT NULL,
  `nama_mobil` varchar(45) DEFAULT NULL,
  `plat_nomor` varchar(45) DEFAULT NULL,
  `jenis` int(11) DEFAULT NULL,
  `kapasitas_penumpang` int(11) DEFAULT NULL,
  `fasilitas` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `foto_mobil`, `nama_mobil`, `plat_nomor`, `jenis`, `kapasitas_penumpang`, `fasilitas`, `status`) VALUES
(1, 'Pajero Sport.jpg', 'Pajero Sport', 'BB 1456 AB', 1, 6, 'ac, audio, TV', 'Tidak tersedia'),
(2, 'Daihatsu Xenia.jpg', 'Daihatsu Xenia', 'BB 1567 AX', 1, 5, 'ac, audio, p3k', 'Tersedia'),
(3, 'Isuzu ELF.jpg', 'Isuzu ELF', 'BB 1456 YX', 2, 11, 'ac, wifi, TV', 'Tersedia'),
(4, 'Toyota Agya.jpg', 'Toyota Agya', 'B 1789 AZK', 1, 4, 'AC, TAPE, P3K', 'Tidak tersedia'),
(5, 'Toyota Innova.jpg', 'Toyota Innova', 'BK 1236 JX', 1, 7, 'AC, TV, P3K', 'Tersedia'),
(6, 'Toyota Fortuner.jpg', 'Toyota Fortuner', 'B 2346 XYZ', 1, 6, 'AC, TV, WIFI', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil_rental`
--

CREATE TABLE `mobil_rental` (
  `id_mobil` int(11) NOT NULL,
  `merk_mobil` varchar(1000) NOT NULL,
  `foto_mobil` varchar(1000) NOT NULL,
  `harga_per_hari` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mobil_rental`
--

INSERT INTO `mobil_rental` (`id_mobil`, `merk_mobil`, `foto_mobil`, `harga_per_hari`) VALUES
(1, 'fewew', 'fewewf', 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `id_paket` int(11) NOT NULL,
  `tujuan` varchar(45) DEFAULT NULL,
  `harga` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `paket_wisata`
--

INSERT INTO `paket_wisata` (`id_paket`, `tujuan`, `harga`) VALUES
(1, 'pangururan', 80000),
(2, 'siallagan', 60000),
(3, 'keliling danau toba', 200000),
(4, 'lumban julu', 90000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_mobil`
--

CREATE TABLE `pesan_mobil` (
  `id_pesan` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `tujuan` varchar(60) DEFAULT NULL,
  `jumlah_penumpang` varchar(40) NOT NULL,
  `total_harga` double DEFAULT NULL,
  `keterangan_penumpang` varchar(500) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `pas_photo_supir` varchar(200) NOT NULL,
  `nama_supir` varchar(60) DEFAULT NULL,
  `no_telp_supir` varchar(20) NOT NULL,
  `nama_mobil` varchar(45) DEFAULT NULL,
  `plat_nomor` varchar(45) DEFAULT NULL,
  `keterangan_supir` varchar(45) DEFAULT NULL,
  `komentar_penumpang` varchar(45) DEFAULT NULL,
  `id_supir` varchar(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pesan_mobil`
--

INSERT INTO `pesan_mobil` (`id_pesan`, `nama_pelanggan`, `tujuan`, `jumlah_penumpang`, `total_harga`, `keterangan_penumpang`, `tanggal`, `pas_photo_supir`, `nama_supir`, `no_telp_supir`, `nama_mobil`, `plat_nomor`, `keterangan_supir`, `komentar_penumpang`, `id_supir`, `id_user`, `id_mobil`) VALUES
(15, 'Ronaldo Sitanggang', 'Dolok Sanggul', '4', 200000, 'jangan ngebut ya bang. ada anak kecil', '2018-12-10 07:12:00', 'Antonius Silalahi.jpg', 'Antonius Silalahi', '081345678987', 'Mitsubishi Pajero Sport', 'BB 1456 QZ', 'Selesai', 'Buruk', '19', 2, 1),
(16, 'Kornelius Sipayung', 'Dolok Sanggul', '4', 200000, 'JANGAN NGEBUT. BAWA OPUNG\"', '2018-12-10 07:18:00', 'ronaldo.jpg', 'Agusman Marpaung', '082345678765', 'Toyota Innova', 'BK 1236 JX', 'Selesai', 'Sangat Baik', '10', 12, 5),
(17, 'Kornelius Sipayung', 'Porsea', '4', 240000, 'bawanya pelan ya mas', '2018-12-10 07:21:00', 'Antonius Silalahi.jpg', 'Antonius Silalahi', '081345678987', 'Toyota Fortuner', 'B 2346 XYZ', 'Selesai', 'Sangat Baik', '19', 12, 6),
(18, 'Layla Hutasuhut', 'Siborong-borong', '4', 120000, 'JANGAN NGEBUT', '2018-12-10 07:26:00', '', 'Marthin Tampubolon', '082356789876', 'Toyota Agya', 'B 1789 AZK', 'Di proses', '', '13', 4, 4),
(19, 'Ruben Manurung', 'Dolok Sanggul', '4', 200000, 'SAYA BAWA PRESIDEN. DIHARAPKAN PELAN-PELAN', '2018-12-10 07:30:00', 'Antonius Silalahi.jpg', 'Antonius Silalahi', '081345678987', 'Toyota Avanza', 'BB 1567 AX', 'Selesai', '', '19', 8, 2),
(20, 'Ruben Manurung', 'Dolok Sanggul', '4', 200000, 'JAN HVDHEWKEW', '2018-12-10 07:38:00', 'Antonius Silalahi.jpg', 'Antonius Silalahi', '081345678987', 'Toyota Avanza', 'BB 1567 AX', 'Selesai', '', '19', 8, 2),
(21, 'Ruben Manurung', 'Porsea', '5', 300000, 'SDHWJDS\r\n', '2018-12-10 07:43:00', 'ronaldo.jpg', 'Agusman Marpaung', '082345678765', 'Toyota Innova', 'BK 1236 JX', 'Di proses', '', '10', 8, 5),
(22, 'jhon mejer', 'Dolok Sanggul', '11', 550000, 'JANGAN BALAP', '2018-12-10 07:56:00', '', 'Obrian Rao', '081256789876', 'Isuzu ELF', 'BB 1456 YX', 'Selesai', 'Sangat Baik', '11', 6, 3),
(23, 'syl', 'Tarutung', '2', 40000, 'besar', '2018-12-10 03:23:00', 'Antonius Silalahi.jpg', 'Antonius Silalahi', '081345678987', 'Mitsubishi Pajero Sport', 'BB 1456 QZ', 'Selesai', 'Sangat Baik', '19', 20, 1),
(24, 'jhon mejer', 'Siborong-borong', '6', 180000, 'JANGAN NGEBUT BANG', '2018-12-10 05:35:00', 'si anu.jpg', 'si anu', '081345678909', 'Toyota Innova', 'BK 1236 JX', 'Selesai', 'Sangat Baik', '21', 6, 5),
(26, 'Ronaldo Sitanggang', 'Porsea', '2', 120000, 'few f ewf we', '2018-12-13 07:28:00', 'Antonius Silalahi.jpg', 'Antonius Silalahi', '081345678987', 'Toyota Agya', 'B 1789 AZK', 'Selesai', 'Sangat Baik', '19', 2, 4),
(27, 'Ronaldo Sitanggang', 'Porsea', '2', 120000, 'dwe fewfw w fw', '2018-12-13 07:44:00', 'Antonius Silalahi.jpg', 'Antonius Silalahi', '081345678987', 'Toyota Innova', 'BK 1236 JX', 'Selesai', 'Sangat Baik', '19', 2, 5),
(28, 'Julio', 'Dolok Sanggul', '3', 150000, 'jangan ngebut ya tulang', '2018-12-13 11:31:00', 'Antonius Silalahi.jpg', 'Antonius Silalahi', '081345678987', 'Toyota Avanza', 'BB 1567 AX', 'Selesai', '', '19', 22, 2),
(29, 'Julio', 'Porsea', '2', 120000, 'jangan balap', '2018-12-13 11:32:00', 'Antonius Silalahi.jpg', 'Antonius Silalahi', '081345678987', 'Toyota Agya', 'B 1789 AZK', 'Selesai', 'Sangat Baik', '19', 22, 4),
(30, 'Julio', 'Porsea', '1', 60000, '', '2018-12-13 11:33:00', 'Antonius Silalahi.jpg', 'Antonius Silalahi', '081345678987', 'Toyota Avanza', 'BB 1567 AX', 'Selesai', '', '19', 22, 2),
(32, 'syl', 'Dolok Sanggul', '3', 150000, 'jangan ngebut', '2018-12-13 04:51:00', 'si anu.jpg', 'si anu', '081345678909', 'Toyota Avanza', 'BB 1567 AX', 'Selesai', 'Sangat Baik', '21', 20, 2),
(33, 'syl', 'Balige', '3', 120000, 'asdasd', '2018-12-13 05:11:00', 'si anu.jpg', 'si anu', '081345678909', 'Toyota Avanza', 'BB 1567 AX', 'Selesai', 'Sangat Baik', '21', 20, 2),
(34, 'syl', 'Siborong-borong', '3', 90000, 'Jwenwei owrwrn w', '2018-12-14 02:01:00', 'si anu.jpg', 'si anu', '081345678909', 'Mitsubishi Pajero Sport', 'BB 1456 QZ', 'Selesai', 'Sangat Baik', '21', 20, 1),
(36, 'Ronaldo Sitanggang', 'Porsea', '3', 180000, 'janajnss', '2018-12-16 03:09:00', 'Antonius Silalahi.jpg', 'Antonius Silalahi', '081345678987', 'Toyota Avanza', 'BB 1567 AX', 'Selesai', 'Sangat Baik', '19', 2, 2),
(37, 'togi', 'Porsea', '3', 180000, 'dqqcv', '2018-12-16 06:40:00', '', 'Andi Satria Lumban Raja', '081345678909', 'Toyota Avanza', 'BB 1567 AX', 'Selesai', 'Sangat Baik', '9', 5, 2),
(38, 'Ronaldo Sitanggang', 'Balige', '2', 80000, 'dwqdq', '2018-12-16 07:28:00', 'Antonius Silalahi.jpg', 'Antonius Silalahi', '081345678987', 'Daihatsu Xenia', 'BB 1567 AX', 'Selesai', 'Sangat Baik', '19', 2, 2),
(39, 'Ronaldo Sitanggang', 'Porsea', '4', 240000, 'cidjicds', '2018-12-17 05:20:00', 'Antonius Silalahi.jpg', 'Antonius Silalahi', '081345678987', 'Daihatsu Xenia', 'BB 1567 AX', 'Selesai', 'Sangat Baik', '19', 2, 2),
(40, 'amsal', 'Balige', '4', 160000, 'jangan ngebut', '2019-01-10 04:20:00', 'Antonius Silalahi.jpg', 'Antonius Silalahi', '081345678987', 'Toyota Innova', 'BK 1236 JX', 'Selesai', 'Sangat Baik', '19', 24, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rental_mobil`
--

CREATE TABLE `rental_mobil` (
  `id_rental` int(11) NOT NULL,
  `nama_penyewa` varchar(1000) NOT NULL,
  `merk_mobil` varchar(1000) NOT NULL,
  `tanggal_diambil` varchar(1000) NOT NULL,
  `tanggal_kembali` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `status_konfirmasi` varchar(1000) NOT NULL,
  `total_hari` int(11) NOT NULL,
  `total_harga` double NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `rental_mobil`
--

INSERT INTO `rental_mobil` (`id_rental`, `nama_penyewa`, `merk_mobil`, `tanggal_diambil`, `tanggal_kembali`, `keterangan`, `status_konfirmasi`, `total_hari`, `total_harga`, `id_user`) VALUES
(1, 'Ronaldo Sitanggang', '', '2019-01-10', '2019-01-12', '', 'Di proses', 2, 500000, 2),
(2, 'Ronaldo Sitanggang', '', '2019-01-10', '2019-01-18', 'Lepas Kunci', 'Di proses', 8, 2000000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `judul` varchar(45) DEFAULT NULL,
  `nama_foto` varchar(45) DEFAULT NULL,
  `keterangan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_persetujuan_supir`
--

CREATE TABLE `status_persetujuan_supir` (
  `id_status_persetujuan` int(11) NOT NULL,
  `keterangan_persetujuan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `toba_wisata`
--

CREATE TABLE `toba_wisata` (
  `id_toba_wisata` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `tujuan` varchar(45) DEFAULT NULL,
  `jumlah_pengunjung` int(11) NOT NULL,
  `total_harga` double DEFAULT NULL,
  `keterangan_pengunjung` varchar(1000) DEFAULT NULL,
  `metode_bayar` varchar(100) NOT NULL,
  `bukti_bayar` varchar(100) NOT NULL,
  `status_transaksi` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `toba_wisata`
--

INSERT INTO `toba_wisata` (`id_toba_wisata`, `nama`, `tujuan`, `jumlah_pengunjung`, `total_harga`, `keterangan_pengunjung`, `metode_bayar`, `bukti_bayar`, `status_transaksi`, `tanggal`, `id_user`) VALUES
(10, 'syl', 'pangururan', 4, 320000, ' ref ref efe', 'Bayar di tempat', '', 'Lunas', '2018-12-11 05:38:00', 20),
(11, 'syl', 'keliling danau toba', 5, 1000000, 'g rfre ege', 'Transfer ATM', '11.jpg', 'Lunas', '2018-12-11 05:42:00', 20),
(12, 'togi', 'siallagan', 5, 300000, 'Bawakan aku ke balige lae', 'Transfer ATM', '12.jpg', 'Lunas', '2018-12-11 06:53:00', 5),
(13, 'togi', 'keliling danau toba', 10, 2000000, 'jan ngebut lae', 'Bayar di tempat', '', 'Lunas', '2018-12-11 06:55:00', 5),
(14, 'syl', 'siallagan', 15, 900000, 'jangan bawa kemana-mana', 'Transfer ATM', 'endless_days_1080p.jpg', 'Lunas', '2018-12-11 07:52:00', 20),
(15, 'Ronaldo Sitanggang', 'keliling danau toba', 12, 2400000, 'Jangan larikan kami', 'Bayar di tempat', '', 'Lunas', '2018-12-12 02:38:00', 2),
(17, 'togi', 'siallagan', 5, 300000, 'jbjvwo vfjv jfd', 'Transfer ATM', '17.jpg', 'Lunas', '2018-12-12 03:19:00', 5),
(18, 'Ruben Manurung', 'keliling danau toba', 20, 4000000, 'Jnanhb xjnjas', 'Transfer ATM', 'belum dikirim', 'di proses', '2018-12-12 03:28:00', 8),
(19, 'togi', 'pangururan', 4, 320000, 'gwuvbiubw fvfsf ', 'Transfer ATM', '19.jpg', 'Lunas', '2018-12-12 01:31:00', 5),
(20, 'david sitorus', 'pangururan', 5, 400000, 'jcjnjdsnjds', 'Transfer ATM', '20.jpg', 'Lunas', '2018-12-12 02:27:00', 7),
(21, 'david sitorus', 'siallagan', 7, 420000, 'jcjdcj wd s', 'Bayar di tempat', '', 'Lunas', '2018-12-12 02:38:00', 7),
(22, 'Ronaldo Sitanggang', 'siallagan', 5, 300000, 'f wfeev ere', 'Transfer ATM', '22.jpg', 'Lunas', '2018-12-13 05:19:00', 2),
(23, 'Ronaldo Sitanggang', 'pangururan', 4, 320000, ' fwewe wewef ', 'Transfer ATM', '23.jpg', 'Lunas', '2018-12-13 05:34:00', 2),
(24, 'Ronaldo Sitanggang', 'keliling danau toba', 4, 800000, 'defwe wfew ew', 'Bayar di tempat', '', 'Lunas', '2018-12-13 07:01:00', 2),
(25, 'Ronaldo Sitanggang', 'pangururan', 2, 160000, 'f3 fe r', 'Bayar di tempat', '', 'Lunas', '2018-12-13 07:06:00', 2),
(26, 'Ronaldo Sitanggang', 'keliling danau toba', 6, 1200000, 'b35tbtt rth rth', 'Transfer ATM', '26.jpg', 'Lunas', '2018-12-13 07:16:00', 2),
(27, 'Ronaldo Sitanggang', 'siallagan', 6, 360000, 'g5t4 4gt 4t ', 'Bayar di tempat', '', 'Lunas', '2018-12-13 07:19:00', 2),
(28, 'Ronaldo Sitanggang', 'siallagan', 5, 300000, 'dw e wef w', 'Transfer ATM', '28.jpg', 'Lunas', '2018-12-13 08:04:00', 2),
(29, 'Ronaldo Sitanggang', 'keliling danau toba', 7, 1400000, '2rv2r22v ', 'Bayar di tempat', '', 'Lunas', '2018-12-13 08:05:00', 2),
(30, 'Julio', 'keliling danau toba', 5, 1000000, 'bebas mau ke mana ', 'Bayar di tempat', 'bayar tunai', 'Lunas', '2018-12-13 11:44:00', 22),
(31, 'Julio', 'keliling danau toba', 6, 1200000, 'ke mana aja pun', 'Transfer ATM', '31.jpg', 'Lunas', '2018-12-13 11:46:00', 22),
(32, 'Julio', 'keliling danau toba', 4, 800000, 'jangan macam macam', 'Transfer ATM', '32.jpg', 'Lunas', '2018-12-13 11:48:00', 22),
(33, 'Loren', 'keliling danau toba', 5, 1000000, 'bebas ke mana pun', 'Transfer ATM', 'daniel.jpg', 'Lunas', '2018-12-13 11:50:00', 23),
(34, 'Loren', 'keliling danau toba', 4, 800000, 'jangan ke mana-mana', 'Transfer ATM', '34.jpg', 'Lunas', '2018-12-13 11:55:00', 23),
(35, 'Julio', 'pangururan', 5, 400000, 'JAN NGEBUT ', 'Transfer ATM', '35.jpg', 'Lunas', '2018-12-13 02:45:00', 22),
(36, 'Julio', 'keliling danau toba', 2, 400000, 'Tujuan honeymoon tuk tuk sama muffin', 'Transfer ATM', '36.jpg', 'Lunas', '2018-12-13 02:54:00', 22),
(37, 'syl', 'keliling danau toba', 6, 1200000, 'bjbn  j', 'Transfer ATM', '37.jpg', 'Lunas', '2018-12-13 04:56:00', 20),
(38, 'syl', 'keliling danau toba', 2, 400000, 'ww', 'Transfer ATM', '38.jpg', 'Lunas', '2018-12-13 05:12:00', 20),
(39, 'Ronaldo Sitanggang', 'keliling danau toba', 5, 1000000, 'WEFEWEWF ', 'Transfer ATM', '39.jpg', 'Lunas', '2018-12-16 03:14:00', 2),
(40, 'Ronaldo Sitanggang', 'siallagan', 5, 300000, 'rrtrttbr', 'Transfer ATM', '40.jpg', 'Lunas', '2018-12-16 03:31:00', 2),
(41, 'Ronaldo Sitanggang', 'siallagan', 10, 600000, 'ke sigumpar, bang', 'Transfer ATM', '41.jpg', 'Lunas', '2018-12-24 05:49:00', 2),
(42, 'Ronaldo Sitanggang', 'keliling danau toba', 3, 600000, '', 'Transfer ATM', '42.jpg', 'Lunas', '2019-01-01 05:48:00', 2),
(53, 'Ronaldo Sitanggang', 'Pemandian Air Panas Tarutung', 5, 150000, 'rrfwf fer ref e', 'Bayar di tempat', '', 'di proses', '2019-01-17 04:53:00', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tujuan`
--

CREATE TABLE `tujuan` (
  `id_tujuan` int(11) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tujuan`
--

INSERT INTO `tujuan` (`id_tujuan`, `kecamatan`, `harga`) VALUES
(3, 'Sipahutar', 40000),
(4, 'Balige', 40000),
(5, 'Porsea', 60000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tujuan_toba_wisata`
--

CREATE TABLE `tujuan_toba_wisata` (
  `id_tujuan` int(11) NOT NULL,
  `tempat_wisata` varchar(1000) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tujuan_toba_wisata`
--

INSERT INTO `tujuan_toba_wisata` (`id_tujuan`, `tempat_wisata`, `harga`) VALUES
(1, 'Pemandian Air Panas Tarutung', 30000),
(2, 'Huta Siallagan', 40000),
(6, 'Makam Sidabutar', 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `namalengkap` varchar(45) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `nomortelepon` varchar(45) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `pas_photo` varchar(45) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `namalengkap`, `tanggallahir`, `jenis_kelamin`, `alamat`, `nomortelepon`, `email`, `pas_photo`, `username`, `password`, `role`) VALUES
(1, 'admin', '2018-12-27', 'L', 'tarutung', '082361789987', 'admin@tobatrans.com', 'admin.jpg', 'admin', 'admin', 1),
(2, 'Ronaldo Sitanggang', '2018-12-29', 'L', 'medan', '082360057298', 'ronaldo@gmail.com', 'ronaldostg.jpg', 'ronaldo', 'ronaldo', 2),
(4, 'Layla Hutasuhut', '2018-12-26', 'P', 'Silimbat', '082144567683', 'layla@ymail.com', '', 'layla', 'layla', 2),
(5, 'togi', '1999-10-10', 'L', 'Medan', '081356789890', 'togi@gmail.com', '', 'togi', 'togi', 2),
(6, 'jhon mejer', '1999-01-22', 'L', 'Sipoholon', '089567899987', 'jhon@gmail.com', '', 'jhon', 'jhon', 2),
(7, 'david sitorus', '2018-12-29', 'L', 'Siantar Narumonda', '081345678690', 'david@yahoo.com', '', 'david', 'david', 2),
(8, 'Ruben Manurung', '2018-12-28', 'L', 'Tanjung Balai', '086756789876', 'ruben@gmail.com', '', 'ruben', 'ruben', 2),
(12, 'Kornelius Sipayung', '2018-12-06', 'L', 'Medan Baru', '0976123456677', 'kornelius@gmail.com', '', 'kornelius', 'kornelius', 2),
(19, 'Antonius Silalahi', '2018-12-29', 'L', 'Jalan SM. Raja Tarutung', '081345678987', 'antonius@gmail.com', 'Antonius Silalahi.jpg', 'anto', 'anto', 3),
(20, 'syl', '2018-12-11', 'P', 'tarutung', '123', 'syl', '', 'syl', 'syl', 2),
(22, 'Julio', '1999-12-03', 'L', 'Jalan S.M. Raja Sitoluama', '082134568765', 'julio@gmail.com', 'image/profil/Julio.jpg', 'julio', 'julio', 2),
(23, 'Loren', '1999-12-03', 'L', 'Jalan S.M. Raja Tarutung', '081235670987', 'loren@gmail.com', '', 'lorenia', 'lorenia', 2),
(24, 'amsal', '2019-01-18', 'L', 'jalan gereja, Balige', '0829377373', 'amsal@gmail.com', '', 'amsal', 'amsal', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `lamaran_supir`
--
ALTER TABLE `lamaran_supir`
  ADD PRIMARY KEY (`id_lamaran`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `mobil_rental`
--
ALTER TABLE `mobil_rental`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`id_paket`),
  ADD UNIQUE KEY `idtransaksi_UNIQUE` (`id_paket`);

--
-- Indexes for table `pesan_mobil`
--
ALTER TABLE `pesan_mobil`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `fk_pesan_mobil_user2_idx` (`id_user`),
  ADD KEY `fk_pesan_mobil_mobil2_idx` (`id_mobil`);

--
-- Indexes for table `rental_mobil`
--
ALTER TABLE `rental_mobil`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `status_persetujuan_supir`
--
ALTER TABLE `status_persetujuan_supir`
  ADD PRIMARY KEY (`id_status_persetujuan`);

--
-- Indexes for table `toba_wisata`
--
ALTER TABLE `toba_wisata`
  ADD PRIMARY KEY (`id_toba_wisata`),
  ADD KEY `fk_toba_wisata_user1_idx` (`id_user`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- Indexes for table `tujuan_toba_wisata`
--
ALTER TABLE `tujuan_toba_wisata`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lamaran_supir`
--
ALTER TABLE `lamaran_supir`
  MODIFY `id_lamaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mobil_rental`
--
ALTER TABLE `mobil_rental`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesan_mobil`
--
ALTER TABLE `pesan_mobil`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `rental_mobil`
--
ALTER TABLE `rental_mobil`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `toba_wisata`
--
ALTER TABLE `toba_wisata`
  MODIFY `id_toba_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tujuan_toba_wisata`
--
ALTER TABLE `tujuan_toba_wisata`
  MODIFY `id_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesan_mobil`
--
ALTER TABLE `pesan_mobil`
  ADD CONSTRAINT `fk_pesan_mobil_mobil2` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesan_mobil_user2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `toba_wisata`
--
ALTER TABLE `toba_wisata`
  ADD CONSTRAINT `fk_toba_wisata_user1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
