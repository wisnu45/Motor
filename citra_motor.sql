-- phpMyAdmin SQL Dump
-- version 2.8.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Waktu pembuatan: 21. Februari 2013 jam 01:30
-- Versi Server: 5.0.21
-- Versi PHP: 5.1.4
-- 
-- Database: `citra_motor`
-- 

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `admin`
-- 

CREATE TABLE `admin` (
  `id_admin` varchar(20) collate latin1_general_ci NOT NULL,
  `user_name` varchar(20) collate latin1_general_ci NOT NULL,
  `password` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data untuk tabel `admin`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `faktur`
-- 

CREATE TABLE `faktur` (
  `no_faktur` varchar(5) collate latin1_general_ci NOT NULL,
  `_faktur` date NOT NULL,
  `jml_uang` varchar(20) collate latin1_general_ci NOT NULL,
  `terbilang` varchar(50) collate latin1_general_ci NOT NULL,
  `id_konsumen` varchar(20) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data untuk tabel `faktur`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `konsumen`
-- 

CREATE TABLE `konsumen` (
  `id_konsumen` int(3) NOT NULL auto_increment,
  `user_name` varchar(25) collate latin1_general_ci NOT NULL,
  `pass` varchar(20) collate latin1_general_ci NOT NULL,
  `nama` varchar(25) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_konsumen`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `konsumen`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `motor`
-- 

CREATE TABLE `motor` (
  `kode_motor` varchar(10) collate latin1_general_ci NOT NULL,
  `nma_motor` varchar(20) collate latin1_general_ci NOT NULL,
  `type` varchar(15) collate latin1_general_ci NOT NULL,
  `merk` varchar(10) collate latin1_general_ci NOT NULL,
  `thn_buat` varchar(4) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`kode_motor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data untuk tabel `motor`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `pemesanan`
-- 

CREATE TABLE `pemesanan` (
  `kd_pemesanan` varchar(5) collate latin1_general_ci NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `id_konsumen` varchar(30) collate latin1_general_ci NOT NULL,
  `kode_motor` varchar(10) collate latin1_general_ci NOT NULL,
  `kode_status` int(1) NOT NULL,
  `batas_akhir` date NOT NULL,
  PRIMARY KEY  (`kd_pemesanan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data untuk tabel `pemesanan`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `pengiriman`
-- 

CREATE TABLE `pengiriman` (
  `kd_pengiriman` varchar(5) collate latin1_general_ci NOT NULL,
  `tgl_pengiriman` date NOT NULL,
  `jasa_pengiriman` varchar(20) collate latin1_general_ci NOT NULL,
  `no_faktur` varchar(5) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`kd_pengiriman`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data untuk tabel `pengiriman`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `penjualan`
-- 

CREATE TABLE `penjualan` (
  `id` int(3) NOT NULL,
  `nama` varchar(30) collate latin1_general_ci NOT NULL,
  `alamat` varchar(50) collate latin1_general_ci NOT NULL,
  `telp` varchar(15) collate latin1_general_ci NOT NULL,
  `pekerjaan` varchar(25) collate latin1_general_ci NOT NULL,
  `kode_motor` varchar(10) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data untuk tabel `penjualan`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `status`
-- 

CREATE TABLE `status` (
  `kd_status` int(1) NOT NULL,
  `status` varchar(10) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`kd_status`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data untuk tabel `status`
-- 

