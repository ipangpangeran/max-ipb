-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2015 at 08:31 AM
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
  PRIMARY KEY (`username_anggota`),
  UNIQUE KEY `nim` (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nama`, `username_anggota`, `password`, `jabatan`, `alamat_dikampus`, `alamat_asal`, `tanggal_lahir`, `divisi`, `nama_band`, `foto`, `nim`) VALUES
('Muammar Haikal Perdana', 'haikal', '€¾xñ\rÄxå/¥! ¼ÇÙn', 'Sekretaris Umum', 'Dramaga Indah Balebak No.8', 'Jakarta Selatan', '1994-11-29', 'Musik', 'G-Major Regeneration', NULL, 'G64120104');

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
  PRIMARY KEY (`kode_produk`),
  UNIQUE KEY `nama_band` (`nama_band`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`username`),
  UNIQUE KEY `nim` (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`kode_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`kode_produk`, `nama_properti`, `deskripsi`, `spesifikasi`, `harga_sewa`, `kuantitas`, `keterangan`, `foto`) VALUES
('L0001', 'Kain Hitam', 'Kain ini dapat digunakan sebagai backdrop,  membuat acara anda terlihat sederhana namun tetap elegan.', '8 x 6 meter', 80000, 2, 'Harga sewa per 24 jam peminjaman.', ''),
('M0001', 'Amplifier Gitar Belcat V25RG', 'Ampli mungil yang satu ini merupakan salah satu ampli gitar yang cukup menarik. Suara vintage yang khas mampu menciptakan distorsi yang otentik bagi para gitaris. Channel clean yang terdapat dalam ampli ini juga cukup berkarakter. Cukup untuk venue indoor dengan ukuran ruang kelas sekalipun.', 'Merk : Belcat\r\nTipe : V25RG\r\nDaya keluaran :	25W (RMS)\r\nSpeaker : 8 Inch, 8 Ohm\r\nUkuran : 35.5cm (tinggi), 38.8cm (lebar), 22.1cm (panjang)\r\nKonsumsi daya :	28W', 35000, 1, 'Harga sewa per 24 jam peminjaman.', ''),
('M0002', 'Amplifier/Speaker 70 Watt', 'Speaker ini merupakan speaker yang dapat digunakan untuk berbagai macam instrumen seperti gitar (tanpa distorsi), bass, dan mikrofon. Mampu memenuhi kebutuhan dalam ruangan seperti ruangan kelas.', 'Merk : Peavey\r\nSpeaker : 12 Inch\r\nDaya keluaran :	70 Watt\r\nUkuran : ..cm (tinggi), ..cm (lebar), ..cm (panjang)\r\nKonsumsi daya :	..W', 50000, 1, 'Harga sewa per 24 jam peminjaman.', ''),
('M0003', 'Amplifier/Speaker 120 Watt', 'Speaker ini merupakan speaker yang dapat digunakan untuk berbagai macam instrumen seperti gitar (tanpa distorsi), bass, dan mikrofon. Mampu memenuhi kebutuhan dalam ruangan seperti ruangan kelas.', 'Merk : Peavey\r\nSpeaker : 12 Inch\r\nDaya keluaran :	120 Watt\r\nUkuran : ..cm (tinggi), ..cm (lebar), ..cm (panjang)\r\nKonsumsi daya :	..W', 50000, 1, 'Harga sewa per 24 jam peminjaman.', ''),
('M0004', 'Mikrofon SAMSON R21S', 'Mic dengan keluaran yang tinggi, mampu mendukung performa para vokalis. Memiliki desain yang cukup rigid dengan bentuk yang nyaman untuk digunakan. Mic ini cocok untuk mendukung vokal panggung dan presentasi. Tidak cocok untuk digunakan dalam vocal group atau paduan suara. ', 'Shock mounted mic element.\r\nCardioid pickup pattern.\r\nHigh gain output, low impedance design.\r\n80Hz–12kHz frequency response.\r\nOn/Off switch.\r\nXLR to 1/4" mic cable.\r\nMic clip included.', 30000, 2, 'Harga sewa per 24 jam peminjaman.\r\nSudah termasuk kabel.', ''),
('M0005', 'Mikrofon JTS TM-989', 'Mic dengan daya tangkap yang cukup baik untuk olah vokal. Mic ini dirancang khusus untuk mendukung performa dalam bernyanyi ataupun presentasi. Mic ini memiliki daya tangkap lurus sehingga lebih cocok untuk olah vokal individu. Mic ini bukan mic yang dirancang untuk vocal group ataupun paduan suara.', 'Tipe : Moving Coil Dynamic\r\nFrequency Response : 80~12000 Hz\r\nPolar Pattern : Cardioid,rotationally symmetrical about microphone axis, uniform with frequency.\r\nSensitivity (at 1,000Hz) : -75dB*(0.18mV)*0dB=1V/?bar \r\nImpedance : 600?\r\n', 30000, 1, 'Harga sewa per 24 jam peminjaman.\r\nSudah termasuk kabel.', ''),
('M0006', 'Paket Acoustic Sound System', 'Paket sound system ini cocok acara akustik yang menggunakan venue seperti ruang kelas, koridor-koridor dan node di IPB.\r\n\r\nPaket sound system ini telah digunakan pada acara Music Corener (MAX!!), Forester Cup 2015, dan Logcoustic 2014.\r\n', 'Terdiri dari :\r\n2 Active Loudspeaker SAMSON 400 Watt\r\n1 Mixer Behringer X1222USB\r\n1 set Audio Cable\r\n3 Mikrofon\r\n', 1000000, 1, 'Termasuk 3 orang operator.', ''),
('M0007', 'Cajon', '', 'Merk : Custom\r\nUkuran : ... ... ...\r\n', 30000, 1, '', ''),
('M0008', 'Stand Mikrofon', '', '', 20000, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` varchar(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `kode_produk` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
