-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2025 pada 03.32
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id_banner` varchar(36) NOT NULL,
  `file_banner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id_banner`, `file_banner`) VALUES
('f05a414e-bb16-11ee-afe5-c454445434d3', '746ff0e555849317542cd79512501d3a.png'),
('f485baf3-bb16-11ee-afe5-c454445434d3', '7eae96d71214440d2c09e10efdac559a.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` varchar(36) NOT NULL,
  `nama_event` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `tgl_event` date NOT NULL,
  `tgl_input` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `ket`, `tgl_event`, `tgl_input`) VALUES
('9dea17b5-b793-11ee-bd5d-f7de7099ab91', 'Pameran', 'as', '2024-01-20', '2024-01-20 20:58:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus`
--

CREATE TABLE `kasus` (
  `id_kasus` varchar(36) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `id_pelanggan` varchar(36) NOT NULL,
  `deskripsi` text NOT NULL,
  `balasan` text NOT NULL,
  `tgl_kasus` datetime NOT NULL DEFAULT current_timestamp(),
  `id_pegawai` varchar(36) NOT NULL,
  `status` int(1) NOT NULL,
  `penilaian` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kasus`
--

INSERT INTO `kasus` (`id_kasus`, `subject`, `id_pelanggan`, `deskripsi`, `balasan`, `tgl_kasus`, `id_pegawai`, `status`, `penilaian`) VALUES
('8ed5d9b0-4679-11ef-877d-2cd05a302ee2', 'oke', '5d91cb75-45d8-11ef-90ba-2cd05a302ee2', 'adsd', '', '2024-07-20 17:22:13', 'a90bb5df-4682-11ef-877d-2cd05a302ee2', 0, 4),
('f049b9ad-4681-11ef-877d-2cd05a302ee2', 'tes', '5d91cb75-45d8-11ef-90ba-2cd05a302ee2', 'xxxxs', 'xsds', '2024-07-20 18:22:12', 'a90bb5df-4682-11ef-877d-2cd05a302ee2', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` varchar(36) NOT NULL,
  `id_pelanggan` varchar(36) NOT NULL,
  `isi_konsultasi` text NOT NULL,
  `tgl_konsultasi` datetime NOT NULL DEFAULT current_timestamp(),
  `balasan` text DEFAULT NULL,
  `penilaian` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `id_pelanggan`, `isi_konsultasi`, `tgl_konsultasi`, `balasan`, `penilaian`) VALUES
('8d97d2a1-fc2d-11ef-8e8c-f8fe5ef7d437', '5d91cb75-45d8-11ef-90ba-2cd05a302ee2', 'halo', '2025-03-08 22:56:45', 'iqfnpafa', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` varchar(36) NOT NULL,
  `nama_mobil` varchar(50) NOT NULL,
  `transmisi` varchar(10) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `cc` int(5) NOT NULL,
  `kapasitas` int(5) NOT NULL,
  `ac` varchar(5) NOT NULL,
  `ac_double_blower` varchar(5) NOT NULL,
  `lampu_kabut` varchar(5) NOT NULL,
  `penggerak` varchar(10) NOT NULL,
  `foto_mobil` varchar(36) NOT NULL,
  `harga_otr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `nama_mobil`, `transmisi`, `warna`, `cc`, `kapasitas`, `ac`, `ac_double_blower`, `lampu_kabut`, `penggerak`, `foto_mobil`, `harga_otr`) VALUES
('2972f0f7-bb1a-11ee-afe5-c454445434d3', 'Sigra', 'Manual', 'Silver', 1200, 7, 'Ya', 'Ya', 'Ya', 'FWD', '54d1d6ad871ade10af146ecff1c3ad0d.png', 170000000),
('4261d470-bb1a-11ee-afe5-c454445434d3', 'Rocky', 'Manual', 'Merah', 1200, 5, 'Ya', 'Ya', 'Ya', 'FWD', '36d42f593b2bf4a2364b9588414ea535.jpg', 175000000),
('7073bf09-bb1a-11ee-afe5-c454445434d3', 'Ayla', 'Manual', 'Merah', 1200, 5, 'Ya', 'Ya', 'Ya', 'FWD', '93b3e7eac43ecf3d314a4f14ef6adda8.jpg', 150000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_mobil`
--

CREATE TABLE `model_mobil` (
  `id_model_mobil` varchar(36) NOT NULL,
  `nama_model_mobil` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `model_mobil`
--

INSERT INTO `model_mobil` (`id_model_mobil`, `nama_model_mobil`) VALUES
('9b174c7b-ba60-11ee-867f-c454445434d3', 'All New Ayla 1.'),
('a4533548-ba60-11ee-867f-c454445434d3', 'All New Ayla 1.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(36) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_wa` varchar(12) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(1) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `tgl_lahir`, `jk`, `email`, `no_wa`, `username`, `password`, `level`) VALUES
('5d91cb75-45d8-11ef-90ba-2cd05a302ee2', 'Syarif Firdaus', 'handil bakti', '2024-07-19', 'L', 'syarif@gmail.com', '081348286276', 'udin', '$2y$10$xdrhH0KdJoctkRXy95wk2.Iag.KZW9KJmp6L7b2UTYAu0Hf.J/7s6', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penawaran`
--

CREATE TABLE `penawaran` (
  `id_penawaran` varchar(36) NOT NULL,
  `id_mobil` varchar(36) NOT NULL,
  `id_pelanggan` varchar(36) NOT NULL,
  `id_sales` varchar(36) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_penawaran` datetime NOT NULL DEFAULT current_timestamp(),
  `harga_deal` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `file` varchar(100) NOT NULL,
  `penilaian` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penawaran`
--

INSERT INTO `penawaran` (`id_penawaran`, `id_mobil`, `id_pelanggan`, `id_sales`, `keterangan`, `tgl_penawaran`, `harga_deal`, `status`, `file`, `penilaian`) VALUES
('f53433ff-4679-11ef-877d-2cd05a302ee2', '2972f0f7-bb1a-11ee-afe5-c454445434d3', '5d91cb75-45d8-11ef-90ba-2cd05a302ee2', '89b91284-4682-11ef-877d-2cd05a302ee2', 'oke', '2024-07-20 17:25:04', 0, 2, '', 0),
('f54f797e-46a9-11ef-877d-2cd05a302ee2', '2972f0f7-bb1a-11ee-afe5-c454445434d3', '5d91cb75-45d8-11ef-90ba-2cd05a302ee2', '', 'ookk', '2024-07-20 23:08:40', 100000000, 3, '7bc22e3e1d32ce5620a2a2c36d58c8f1.pdf', 2),
('fb278b3b-4681-11ef-877d-2cd05a302ee2', '4261d470-bb1a-11ee-afe5-c454445434d3', '5d91cb75-45d8-11ef-90ba-2cd05a302ee2', '81b5a1b4-4682-11ef-877d-2cd05a302ee2', 'llk', '2024-07-20 18:22:30', 100000000, 3, '', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` varchar(36) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`, `level`) VALUES
('815ad709-4666-11ef-877d-2cd05a302ee2', 'Lisa', 'lisa', '$2y$10$Xc/gEEiNjRkn8un/0C6U6eZLsLMO9PFd6gPEMihPtwILd2nYZshnO', 2),
('81b5a1b4-4682-11ef-877d-2cd05a302ee2', 'Ahmad', 'sales1', '$2y$10$C6LwwCXsKMlTWq.DV33sPeRxlO5Unq8l.DfUP7/7FS2E.SorA.Bdq', 3),
('89b91284-4682-11ef-877d-2cd05a302ee2', 'Budi', 'sales2', '$2y$10$PxlKbs/crb/.nwsBmPTwvOGSHqPeTcM6C3a8Fd5klDu/qgWHzZNZu', 3),
('91201351-45e1-11ef-90ba-2cd05a302ee2', 'Syarif Firdaus', 'admin', '$2y$10$xdrhH0KdJoctkRXy95wk2.Iag.KZW9KJmp6L7b2UTYAu0Hf.J/7s6', 1),
('a90bb5df-4682-11ef-877d-2cd05a302ee2', 'Mujib', 'mujib', '$2y$10$kDYs.w1PaQv1NiUMPQ9riuGkxIXiqBaltf5eboPmflEKy7XT/T7tW', 4),
('b8300eab-4682-11ef-877d-2cd05a302ee2', 'Deni', 'deni', '$2y$10$4IrQN8wpuhpRnZLqLDoFo.Nsh4tTj/HXhPt.ZXH2KYsIo.Sbc971S', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` varchar(36) NOT NULL,
  `id_mobil` varchar(36) NOT NULL,
  `id_pelanggan` varchar(36) NOT NULL,
  `id_sales` varchar(36) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_pesanan` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL,
  `file` varchar(100) NOT NULL,
  `penilaian` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_mobil`, `id_pelanggan`, `id_sales`, `keterangan`, `tgl_pesanan`, `status`, `file`, `penilaian`) VALUES
('0f32592f-467a-11ef-877d-2cd05a302ee2', '7073bf09-bb1a-11ee-afe5-c454445434d3', '5d91cb75-45d8-11ef-90ba-2cd05a302ee2', '89b91284-4682-11ef-877d-2cd05a302ee2', 'ada', '2024-07-20 17:25:48', 3, '', 0),
('52342efd-46aa-11ef-877d-2cd05a302ee2', '4261d470-bb1a-11ee-afe5-c454445434d3', '5d91cb75-45d8-11ef-90ba-2cd05a302ee2', '', 'jj', '2024-07-20 23:11:16', 3, 'f8bf95c353a9c1e40a86a3fc4575ce13.pdf', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE `promo` (
  `id_promo` varchar(36) NOT NULL,
  `nama_promo` varchar(50) NOT NULL,
  `tgl_promo` date NOT NULL,
  `detail_promo` text NOT NULL,
  `file_promo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `promo`
--

INSERT INTO `promo` (`id_promo`, `nama_promo`, `tgl_promo`, `detail_promo`, `file_promo`) VALUES
('adb2b256-b905-11ee-922e-c454445434d3', 'aas', '2024-01-22', 'bbs', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `id_service` varchar(36) NOT NULL,
  `nama_service` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `estimasi_harga` varchar(50) NOT NULL,
  `id_model_mobil` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id_service`, `nama_service`, `deskripsi`, `estimasi_harga`, `id_model_mobil`) VALUES
('1cc16e3b-ba61-11ee-867f-c454445434d3', 'Service 3', 'MTK', '200000', '9b174c7b-ba60-11ee-867f-c454445434d3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `solusi`
--

CREATE TABLE `solusi` (
  `id_solusi` varchar(36) NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` text NOT NULL,
  `tgl_solusi` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `kasus`
--
ALTER TABLE `kasus`
  ADD PRIMARY KEY (`id_kasus`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `model_mobil`
--
ALTER TABLE `model_mobil`
  ADD PRIMARY KEY (`id_model_mobil`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `penawaran`
--
ALTER TABLE `penawaran`
  ADD PRIMARY KEY (`id_penawaran`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indeks untuk tabel `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indeks untuk tabel `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id_solusi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
