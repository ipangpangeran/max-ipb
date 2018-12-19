-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2015 at 05:48 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `max`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nim` varchar(9) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nim`) VALUES
('admin', 'admin', 'G64120079'),
('ipang', 'admin', 'G64120041');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `nama` varchar(35) NOT NULL,
  `username_anggota` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jabatan` varchar(35) NOT NULL,
  `alamat_dikampus` text NOT NULL COMMENT 'alamat di bogor',
  `alamat_asal` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `divisi` varchar(35) NOT NULL,
  `nama_band` varchar(30) DEFAULT NULL,
  `foto` varchar(60) DEFAULT NULL,
  `nim` varchar(9) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`username_anggota`),
  UNIQUE KEY `nim` (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nama`, `username_anggota`, `password`, `jabatan`, `alamat_dikampus`, `alamat_asal`, `tanggal_lahir`, `divisi`, `nama_band`, `foto`, `nim`, `phone`, `email`) VALUES
('Ahmad Hafizh', 'ahmadhafizh', 'fullswing', 'Ketua Divisi', 'Bara 3', 'Jalan Enggano No.14 Bandar Lampung', '1994-01-11', 'Internal', NULL, 'pop art.jpg', 'G64120079', '085768253175', 'hafizhipb49@gmail.com'),
('Akmarana Lazuardi', 'akma', 'akma', '', '', '', '0000-00-00', '', NULL, NULL, 'G64120055', '', ''),
('Percobaan', 'anggota', 'anggota', '', '', '', '0000-00-00', '', NULL, '0.jpg', 'G64120200', '', ''),
('Muammar Haikal Perdana', 'haikal', 'haikal', 'Sekretaris Umum', 'Dramaga Indah Balebak No.8', 'Jakarta Selatan', '1994-11-29', 'Musik', 'G-Major Regeneration', 'taeyeon-valkyrie-concert-1.jpg', 'G64120104', '', ''),
('Jhontea', 'jhontea', 'fullswing', 'Anggota', 'Bateng', 'Bogor', '1996-02-11', 'Musik', NULL, 'pevita_pearce_8_by_dekiriau-d6bbexv.jpg', 'G64120190', '', ''),
('vroyo', 'vro', 'brobro', '', '', '', '0000-00-00', '', NULL, 'Carey-Mulligan-4-374x560.jpg', 'G99200100', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `band`
--

CREATE TABLE IF NOT EXISTS `band` (
  `kode_produk` varchar(5) NOT NULL,
  `nama_band` varchar(30) NOT NULL,
  `genre` text NOT NULL,
  `foto` varchar(60) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(10) NOT NULL,
  PRIMARY KEY (`kode_produk`),
  UNIQUE KEY `nama_band` (`nama_band`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `band`
--

INSERT INTO `band` (`kode_produk`, `nama_band`, `genre`, `foto`, `deskripsi`, `harga`) VALUES
('B001', 'Kambing', 'Jazz', 'a.png', 'buset', 150000),
('K3011', 'Keju', 'Pop', 'b.png', 'Cheeesss', 250000),
('S3MUT', 'Semut', 'Funk', 'e.png', 'Yoyoiii', 200000),
('S4P1', 'Sapi', 'Blues', 'd.png', 'Mouuu', 275000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `username` varchar(25) NOT NULL,
  `nama_customer` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `organisasi` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `phone` varchar(25) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `nim` (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `nama_customer`, `password`, `nim`, `organisasi`, `alamat`, `phone`) VALUES
('bhanu', 'BH', 'bhanu', 'G738294', 'BEM KM', 'Jalan jalan', '7821477'),
('coba', 'cobacoba', 'coba', 'g61209021', '', '', ''),
('hai', 'haikal', 'hai', 'g772234', '', '', ''),
('haikal', 'Muammar Haikal Perdana', 'haikal', 'G64120104', '', '', ''),
('ipang', 'Ipang', 'ipang', 'g64120037', '', '', ''),
('lagi', 'cobalagi', 'coba', 'g89127483', 'blabalbalal', 'kasih tau gak yaaa', '089000'),
('member', 'Ahmad Hafizh', 'member', 'G64120079', 'HIMALKOM', 'Jalan Bara 3 No 58 C', '085768253175'),
('wuah', 'wuahwuah', 'wuah', 'G64120000', 'HIMALKOM', 'Bara 3', '0899912387981');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE IF NOT EXISTS `divisi` (
  `divisi` varchar(30) NOT NULL,
  `manager` varchar(35) NOT NULL,
  `vice_manager` varchar(35) NOT NULL,
  `bendahara` varchar(35) NOT NULL,
  `sekretaris` varchar(35) NOT NULL,
  PRIMARY KEY (`divisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gabung`
--

CREATE TABLE IF NOT EXISTS `gabung` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(25) NOT NULL,
  `username_anggota` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `gabung`
--

INSERT INTO `gabung` (`id`, `kode_produk`, `username_anggota`) VALUES
(2, 'B0001', 'anggota'),
(23, 'B0001', 'ahmadhafizh'),
(24, 'B0002', 'ahmadhafizh'),
(25, 'B0003', 'anggota'),
(28, 'B0004', 'jhontea'),
(29, 'B0002', 'jhontea'),
(31, 'B0003', 'vro'),
(32, 'B0001', 'vro'),
(37, 'B0004', 'vro'),
(38, 'B0001', 'haikal');

-- --------------------------------------------------------

--
-- Table structure for table `juri`
--

CREATE TABLE IF NOT EXISTS `juri` (
  `kode_produk` varchar(5) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`kode_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE IF NOT EXISTS `modul` (
  `sewa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`sewa`) VALUES
('<p><strong>Cara Penyewaan Produk MAX!!:</strong></p>\r\n\r\n<p><strong>1. &nbsp;Cari Produk MAX!! pada Store</strong></p>\r\n\r\n<p><strong>2. Pilih Produk yang ingin disewa</strong></p>\r\n\r\n<p><strong>3. Pilih tanggal penyewaan</strong></p>\r\n\r\n<p><strong>4. Tunggu konfirmasi dari pihak MAX!!</strong></p>\r\n\r\n<p><strong>5. Saat pengambilan barang, diwajibkan membawa Kartu Tanda Mahasiswa seusai dengan identitas yang dicantumkan pada situs ini</strong></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `ordertemp`
--

CREATE TABLE IF NOT EXISTS `ordertemp` (
  `id` varchar(50) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `kode_produk` varchar(25) NOT NULL,
  `u` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`u`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE IF NOT EXISTS `prestasi` (
  `kode_prestasi` varchar(5) NOT NULL,
  `nama_prestasi` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(60) NOT NULL,
  PRIMARY KEY (`kode_prestasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(5) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(100) NOT NULL,
  `stok_produk` int(5) NOT NULL,
  `harga_produk` int(20) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `gambar_produk` varchar(100) NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok_produk`, `harga_produk`, `deskripsi_produk`, `gambar_produk`) VALUES
(1, 'sound', 0, 0, '', '66Album_Musik_Pop.jpg'),
(2, 'sound', 1, 10000, 'asdas', '79Album_Musik_Pop.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `kode_produk` varchar(5) NOT NULL,
  `nama_properti` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL,
  `spesifikasi` text NOT NULL,
  `harga_sewa` int(8) NOT NULL COMMENT 'harga sewa setiap alat',
  `kuantitas` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(60) NOT NULL,
  `genre` varchar(25) NOT NULL,
  PRIMARY KEY (`kode_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`kode_produk`, `nama_properti`, `deskripsi`, `spesifikasi`, `harga_sewa`, `kuantitas`, `keterangan`, `foto`, `genre`) VALUES
('B0001', 'Kambing', 'buset dah', '', 150000, 1, '', 'a.png', 'jazz'),
('B0002', 'Keju', 'chessss', '', 250000, 1, '', 'b.png', 'Pop'),
('B0003', 'Semut', 'Yoyoiii', '', 200000, 1, '', 'e.png', 'Blues'),
('B0004', 'Sapi', 'Moooouuuu', '', 275000, 1, '', 'd.png', 'Pop'),
('P0001', 'Kain Hitam', 'Kain ini dapat digunakan sebagai backdrop,  membuat acara anda terlihat sederhana namun tetap elegan.', '8 x 6 meter', 80000, 2, 'Harga sewa per 24 jam peminjaman.', '81kain.jpg', ''),
('P0002', 'Amplifier/Speaker 70 Watt', 'Speaker ini merupakan speaker yang dapat digunakan untuk berbagai macam instrumen seperti gitar (tanpa distorsi), bass, dan mikrofon. Mampu memenuhi kebutuhan dalam ruangan seperti ruangan kelas.', 'Merk : Peavey\r\nSpeaker : 12 Inch\r\nDaya keluaran :	70 Watt\r\nUkuran : ..cm (tinggi), ..cm (lebar), ..cm (panjang)\r\nKonsumsi daya :	..W', 50000, 1, 'Harga sewa per 24 jam peminjaman.', '5.jpg', ''),
('P0003', 'Amplifier Gitar Belcat V25RG', 'Ampli mungil yang satu ini merupakan salah satu ampli gitar yang cukup menarik. Suara vintage yang khas mampu menciptakan distorsi yang otentik bagi para gitaris. Channel clean yang terdapat dalam ampli ini juga cukup berkarakter. Cukup untuk venue indoor dengan ukuran ruang kelas sekalipun.', 'Merk : Belcat\r\nTipe : V25RG\r\nDaya keluaran :	25W (RMS)\r\nSpeaker : 8 Inch, 8 Ohm\r\nUkuran : 35.5cm (tinggi), 38.8cm (lebar), 22.1cm (panjang)\r\nKonsumsi daya :	28W', 35000, 1, 'Harga sewa per 24 jam peminjaman.', '86belcat.jpg', ''),
('P0004', 'Amplifier/Speaker 120 Watt', 'Speaker ini merupakan speaker yang dapat digunakan untuk berbagai macam instrumen seperti gitar (tanpa distorsi), bass, dan mikrofon. Mampu memenuhi kebutuhan dalam ruangan seperti ruangan kelas.', 'Merk : Peavey\r\nSpeaker : 12 Inch\r\nDaya keluaran :	120 Watt\r\nUkuran : ..cm (tinggi), ..cm (lebar), ..cm (panjang)\r\nKonsumsi daya :	..W', 50000, 1, 'Harga sewa per 24 jam peminjaman.', '4.jpg', ''),
('P0005', 'Mikrofon SAMSON R21S', 'Mic dengan keluaran yang tinggi, mampu mendukung performa para vokalis. Memiliki desain yang cukup rigid dengan bentuk yang nyaman untuk digunakan. Mic ini cocok untuk mendukung vokal panggung dan presentasi. Tidak cocok untuk digunakan dalam vocal group atau paduan suara. ', 'Shock mounted mic element.\r\nCardioid pickup pattern.\r\nHigh gain output, low impedance design.\r\n80Hzï¿½12kHz frequency response.\r\nOn/Off switch.\r\nXLR to 1/4" mic cable.\r\nMic clip included.', 30000, 2, 'Harga sewa per 24 jam peminjaman.\r\nSudah termasuk kabel.', '94samson mic.jpg', ''),
('P0006', 'Mikrofon JTS TM-989', 'Mic dengan daya tangkap yang cukup baik untuk olah vokal. Mic ini dirancang khusus untuk mendukung performa dalam bernyanyi ataupun presentasi. Mic ini memiliki daya tangkap lurus sehingga lebih cocok untuk olah vokal individu. Mic ini bukan mic yang dirancang untuk vocal group ataupun paduan suara.', 'Tipe : Moving Coil Dynamic\r\nFrequency Response : 80~12000 Hz\r\nPolar Pattern : Cardioid,rotationally symmetrical about microphone axis, uniform with frequency.\r\nSensitivity (at 1,000Hz) : -75dB*(0.18mV)*0dB=1V/?bar \r\nImpedance : 600?\r\n', 30000, 1, 'Harga sewa per 24 jam peminjaman.\r\nSudah termasuk kabel.', '16JTS.jpg', ''),
('P0007', 'Paket Acoustic Sound System', 'Paket sound system ini cocok acara akustik yang menggunakan venue seperti ruang kelas, koridor-koridor dan node di IPB.\r\n\r\nPaket sound system ini telah digunakan pada acara Music Corener (MAX!!), Forester Cup 2015, dan Logcoustic 2014.\r\n', 'Terdiri dari :\r\n2 Active Loudspeaker SAMSON 400 Watt\r\n1 Mixer Behringer X1222USB\r\n1 set Audio Cable\r\n3 Mikrofon\r\n', 1000000, 1, 'Termasuk 3 orang operator.', '9.jpg', ''),
('P0008', 'Cajon', 'Perkusi akustik. Suara lembut yang asik untuk musik jenis akustik', 'Merk : Custom\r\nUkuran : ... ... ...\r\n', 30000, 1, '', '17cajon.jpg', ''),
('P0009', 'Stand Mikrofon', '', '', 20000, 1, '', '27stand.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `kode_produk` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `username`, `kode_produk`, `tanggal`, `status`) VALUES
(15, 'lagi', 'P0009', '2015-05-29', 'denied'),
(16, 'lagi', 'P0005', '2015-05-28', 'denied'),
(17, 'coba', 'P0006', '2015-05-21', 'denied'),
(18, 'member', 'P0008', '2015-05-27', 'accept'),
(21, 'member', 'B0003', '2015-05-29', 'proses'),
(22, 'member', 'P0001', '2015-05-07', 'denied'),
(23, 'member', 'P0005', '2015-05-29', 'denied'),
(24, 'bhanu', 'P0006', '2015-06-27', 'proses'),
(25, 'bhanu', 'P0001', '2015-06-28', 'proses');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
