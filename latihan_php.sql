CREATE DATABASE `latihan_php` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `latihan_php`;

CREATE TABLE IF NOT EXISTS `buku_telp` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;