-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2024 at 06:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `statif_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota_pengukur`
--

CREATE TABLE `tb_anggota_pengukur` (
  `kd_anggota_pengukur` varchar(255) NOT NULL,
  `nama_anggota_pengukur` varchar(255) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_anggota_pengukur`
--

INSERT INTO `tb_anggota_pengukur` (`kd_anggota_pengukur`, `nama_anggota_pengukur`, `nomor_telepon`) VALUES
('5fb5hPo3a9NVc07Z8tVFfGmQPBQwUVzJqzJT5JBWXA5APDM3rmmITMPo3CTqa5Ulh1iLQwROfOttux9KGwGySm997C3NVBu8BK63WH2uuV3aZxN2IVja02HA', 'Rezky F. Mopangga', '6285240390490'),
('ihEXVBYvmAr5rM04frPUxjDVbpijvQ02OLCSrRgITBfIw5kBL4xEwadC5A2rmTnflvgS9MvAJRDzh8cm1chsIcQS8rYZPpNDwRNn2CGdJXaimwZ2QylLFCra', 'Ainun D. W.', '6281232260972'),
('kHFR68zbeTrJWVqYShbPuOs2vFrjn7cTJq37aX89uOtxMZY8W0OpRCuNMteWasT31xwIoZ2ZH1Y8fWewYeC4xYpZa4cQJyGfq0FMlvX2B9dLjiZTp0n98Apz', 'Satria Perdana Amiwaha', '6285229206830'),
('LEbXH02v4X9oHDfvyQMuDk1YUp0T37yH0yp75oCUh5op4hODGt5ltdKpV4GdyrDaJRacQqRbYJfk1ts1vYgQ2NTSJWu5DMEiHOA5hHbHxxi5XzuxmrFKhEJX', 'Fahmid Igirisa', '6285757735069'),
('mxc63KbZj1hK6M5NLAvfCeVPq5kw51BaTpMPNP8IiVWVGY5NHsdbjm2U2v9u4sPZ0sIW9q9zXZ8qHu8qouLMbAXw6XJ0lpWa4oRXMvsUgdDw23JeqIEZPyZ2', 'Nurfika Larasati', '6289624009877'),
('tweIh6xHJpI7hE18SnznnaGPaKoJRhJ4e5q6swbnGz9YhHLprf5kpFGIQbrWUANVguC06xu8NIZQhI2onF3B9WCSdC1Sv7EDgKC4ecQqEUrTkVur8aJgRTG4', 'M. Zulkifli Madina', '6282193528853'),
('VJfEOdFExeH7qa5y36bX1MCwqPil9fU1QX4b9tVmcE34GdYrkzde6T8LU4etcqXe42RFuKFxOCCkdR01VqVHzkZhkbR6SGCgkUOFoCFCll8YX8UvBACbkUJp', 'Arga Fondra Oksaping', '6283145761265'),
('ZqqK7cFhFp74JGvJAYT3pEQBP3vWQLaL2SmKXyKBiCPicMNu42SJBHR5ipHgrRVsfXcrm4NYV2HIiCkO2jt3L06FdanRK2R14jHGUN1sFzV3mOHvXiHNvQZQ', 'Mirza Rasyid Arifin', '629673331546');

-- --------------------------------------------------------

--
-- Table structure for table `tb_broadcast`
--

CREATE TABLE `tb_broadcast` (
  `kd_broadcast` varchar(255) NOT NULL,
  `nomor` varchar(30) NOT NULL,
  `pesan` text NOT NULL,
  `type` enum('text','file') NOT NULL DEFAULT 'text',
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_broadcast`
--

INSERT INTO `tb_broadcast` (`kd_broadcast`, `nomor`, `pesan`, `type`, `status`, `datetime`) VALUES
('1hXBC5ncdCmLYcdS9a6wUfcEFZA1PhcPlDh0g1NaDdgVPgUHHOWiW4t8xZ9RQq26WjYfVFTbfQiR8vU1DRT1OaJhWxK7gSSsFPsLdCoTmZX2u9hyAG0piHn214241ken_kxomvVArj', '6289624009877', '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*\r\nterimakasih telah berkerja sama dalam proses pengukuran tanah, tahap selanjutnya proses pembuatan *peta bidang tanah* sesuai dengan hasil pengukuran untuk nomor berkas *3537/2023*.', 'text', '1', '2023-10-09 03:21:42'),
('1hXBC5ncdCmLYcdS9a6wUfcEFZA1PhcPlDh0g1NaDdgVPgUHHOWiW4t8xZ9RQq26WjYfVFTbfQiR8vU1DRT1OaJhWxK7gSSsFPsLdCoTmZX2u9hyAG0piHn255773', '6289624009877', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P6762n*.', 'text', '1', '2023-10-09 03:16:49'),
('1R5q85PlHb0f1MtPMpKvrrl0FASsa53kUmg1MDrxRfFlObVnbKw5kTFDpeGQ912hoOJCPniDVuCaMtfgcRRH3y9qjqh9OIUav6esgXU8lmmYtVVUkoHb0woH33290', '6283145761265', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P1152n*.', 'text', '1', '2024-01-09 02:06:11'),
('55ZBEPkGMVE2zpdVx6coy9vt3nU4ntnSIN0oRwSY1Sa0EF2L1CLm44MUxTfo39lwHCZMPEJQYflyBixj04ZzL4fXbkflsKSqP9ckbnS78ksUPf1FHOAoqeQm77127', '083145761265', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P8946n*.', 'text', '0', '2024-10-30 09:29:29'),
('7WfAY2EHpgbgCdZS6kuMZANtTujRrQh21T7eXp9tKY30GpiFAmZB5WgLyZfwzvxFI09XDxICbpZQOgN033U2Dsmya5iSphnZZuQuDjQDRe5qJqLeOHpdL0pL20340', '083145761265', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P7919n*.', 'text', '0', '2024-10-30 09:37:19'),
('8aWwhAVO8zO1yt7pru19D9HcmA8BcO8elqtW4rVrStEbCbTUeIbmbsfO0WroA1tvXgSltI5Zg4nY2Exj6nz4WGtzeIoFPfPCLfUvpaCK7fQEfMe2D7N2el2C66975', '083145761265', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P7919n*.', 'text', '0', '2024-10-30 09:36:02'),
('b9rGOMeB01QWiEtSAnOfog56Eg6nUEt1U6ilU9d2DU68tY8qfrH0X1qMY0Km4GviKSTT1aam5bkYmTvuCHO0g4A8kZuBYNWJQ7vwlucCwxFFqm4aWJ9I2rnc12186', '6282349180081', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P7633n*.', 'text', '1', '2024-01-10 07:02:13'),
('bBKaVxVesVlj52AReRopN5i4ipuEQgyWRhGNvqp4IAfWa7UsShe2vex2tMx9HuqCUyNrspiXojz4cbrwjRZRgvKdIZ54VB4vwxWO7C78pvU5sPog2em59u6a79655', '6281341697010', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P5686n*.', 'text', '1', '2024-01-09 01:59:23'),
('cNvAke7gckxTs5j7DnhzOnUsigr6pWUuI6zEV2vYzkWQ0hgurRGCUrGa6Q1OoWAMYnNoGX07Dv2V9fBEd9AlDw595qa91Q5fAuOoOZRp3BXeUYwVSCdodWTP36320', '6281341697010', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P5686n*.', 'text', '1', '2024-01-09 01:59:20'),
('FPxmXVwtZgsviypIguEyos7lSYkDxMGF1MyYzAs0Z80dVagpxFfLPODl68b1I1oAbFYQrr54K0Ed4pj3lv8krEaJY48jatV6g1Zq5KCqTZ5UrY783D22pTO675065', '6283145761265', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P7919n*.', 'text', '0', '2024-10-30 09:37:34'),
('HoEr8CkyXeVIof2f3JR9HwN30RCpw4JTtt3bTnwZ8vC9GLCJz1yIwo07jiX2HiNeLJ86tQoC5WJW33M6qe2wvCx7Picb7fbn60Rdg416MTkHT43iFSHnkvu886336', '083145761265', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P7919n*.', 'text', '0', '2024-10-30 09:35:52'),
('iJVP0jAILHebbl5ceWSnfn0KZ9lgD9AbplxHs9EKl8KmzbtrU9zPlAJyMUkF2amO1wJryDNaK08pZ1gaoYvFiSyidKrJ3kNZf4AhITRblvCwBBFKVSpWX5xR23996', '6281232260972', '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*\r\nPermohonan : Pengukuran Pemisahan Bidang \r\nPemohon : Aminah I. Sou\r\nNomor Telp pemohon : 6282349180081\r\nNo. Berkas : 9426', 'text', '1', '2024-01-10 07:04:33'),
('iJVP0jAILHebbl5ceWSnfn0KZ9lgD9AbplxHs9EKl8KmzbtrU9zPlAJyMUkF2amO1wJryDNaK08pZ1gaoYvFiSyidKrJ3kNZf4AhITRblvCwBBFKVSpWX5xR49886', '6282349180081', '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*\r\nPermohonan : Pengukuran Pemisahan Bidang \r\nPemohon : Aminah I. Sou\r\nNo. Berkas : 9426\r\nNama Petugas Ukur : Ainun D. W.\r\nNomor Telp Petugas : 6281232260972\r\ntoken : *ken_v5u78ceMr*\r\nSilahkan saudara segera mengkonfirmasi kepada pemohon melalui Telp/SMS/WhatsApp\r\n                \r\n                \r\nCatatan :\r\n- Jika tidak ada konfirmasi dari pemohon mengenai jadwal pengukuran agar segera berkoordinasi dengan Koordinator Sub Seksi Pengukuran\r\n- Petugas ukur bertanggung jawab penuh atas jangka waktu pelayanan pengukuran sesuai tugas.', 'text', '1', '2024-01-10 07:04:33'),
('iJVP0jAILHebbl5ceWSnfn0KZ9lgD9AbplxHs9EKl8KmzbtrU9zPlAJyMUkF2amO1wJryDNaK08pZ1gaoYvFiSyidKrJ3kNZf4AhITRblvCwBBFKVSpWX5xR66311', '6281232260972', 'https://bf1a-36-85-174-14.ngrok-free.app/statif/upload/d3c7d5cbce9ad6cf024f458ea25f2aab.pdf', 'file', '1', '2024-01-10 07:04:33'),
('iJVP0jAILHebbl5ceWSnfn0KZ9lgD9AbplxHs9EKl8KmzbtrU9zPlAJyMUkF2amO1wJryDNaK08pZ1gaoYvFiSyidKrJ3kNZf4AhITRblvCwBBFKVSpWX5xR68586', '6282349180081', 'https://bf1a-36-85-174-14.ngrok-free.app/statif/upload/d3c7d5cbce9ad6cf024f458ea25f2aab.pdf', 'file', '1', '2024-01-10 07:04:33'),
('JGh85ZFpq8Q7W9AduVu3lA3Xs8b9DU06zaM5zqHdn1O7XO38dact9tg2YeWbwk2krpjIao4M9TLJEX7iwfHTqJbjGHQwSnXQS6vwDoXTSxn36fUU1PKypyUp28918', '6285240390490', 'https://0641-36-85-223-52.ngrok-free.app/statif/upload/6485957793d6a270de2086a22124c73d.pdf', 'file', '1', '2023-12-14 09:36:40'),
('JGh85ZFpq8Q7W9AduVu3lA3Xs8b9DU06zaM5zqHdn1O7XO38dact9tg2YeWbwk2krpjIao4M9TLJEX7iwfHTqJbjGHQwSnXQS6vwDoXTSxn36fUU1PKypyUp68887', '6282292497288', 'https://0641-36-85-223-52.ngrok-free.app/statif/upload/6485957793d6a270de2086a22124c73d.pdf', 'file', '1', '2023-12-14 09:36:40'),
('JGh85ZFpq8Q7W9AduVu3lA3Xs8b9DU06zaM5zqHdn1O7XO38dact9tg2YeWbwk2krpjIao4M9TLJEX7iwfHTqJbjGHQwSnXQS6vwDoXTSxn36fUU1PKypyUp72110', '6282292497288', '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*\r\nPermohonan : Pengukuran Pemisahan Bidang \r\nPemohon : AHMAD MUDJITO\r\nNo. Berkas : 9099\r\nNama Petugas Ukur : Rezky F. Mopangga\r\nNomor Telp Petugas : 6285240390490\r\ntoken : *ken_4LqSLkzkv*\r\nSilahkan saudara segera mengkonfirmasi kepada pemohon melalui Telp/SMS/WhatsApp\r\n                \r\n                \r\nCatatan :\r\n- Jika tidak ada konfirmasi dari pemohon mengenai jadwal pengukuran agar segera berkoordinasi dengan Koordinator Sub Seksi Pengukuran\r\n- Petugas ukur bertanggung jawab penuh atas jangka waktu pelayanan pengukuran sesuai tugas.', 'text', '1', '2023-12-14 09:36:40'),
('JGh85ZFpq8Q7W9AduVu3lA3Xs8b9DU06zaM5zqHdn1O7XO38dact9tg2YeWbwk2krpjIao4M9TLJEX7iwfHTqJbjGHQwSnXQS6vwDoXTSxn36fUU1PKypyUp79650', '6285240390490', '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*\r\nPermohonan : Pengukuran Pemisahan Bidang \r\nPemohon : AHMAD MUDJITO\r\nNomor Telp pemohon : 6282292497288\r\nNo. Berkas : 9099', 'text', '1', '2023-12-14 09:36:40'),
('ky57xtmK4q4ORpoYIInPyGVfkIBgCfvkoRmuLdKlHWZoFWm9OjsyP9K0NbcbirR6ofHQvkEdYx8aIWwzWtSu1zCQhZJ8I3brPdlIeSiFZczmMp6ltV3rs0q315324', '6282193528853', 'https://8492-36-85-222-86.ngrok-free.app/statif/upload/0f86fd02e8e997f79d7dab568149d433.pdf', 'file', '1', '2024-01-11 08:01:37'),
('ky57xtmK4q4ORpoYIInPyGVfkIBgCfvkoRmuLdKlHWZoFWm9OjsyP9K0NbcbirR6ofHQvkEdYx8aIWwzWtSu1zCQhZJ8I3brPdlIeSiFZczmMp6ltV3rs0q324385', '628114320702', 'https://8492-36-85-222-86.ngrok-free.app/statif/upload/0f86fd02e8e997f79d7dab568149d433.pdf', 'file', '1', '2024-01-11 08:01:37'),
('ky57xtmK4q4ORpoYIInPyGVfkIBgCfvkoRmuLdKlHWZoFWm9OjsyP9K0NbcbirR6ofHQvkEdYx8aIWwzWtSu1zCQhZJ8I3brPdlIeSiFZczmMp6ltV3rs0q376290', '6282193528853', '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*\r\nPermohonan : Pengukuran Pemisahan Bidang \r\nPemohon : RULIANI M. KADJI\r\nNomor Telp pemohon : 628114320702\r\nNo. Berkas : 240/2024', 'text', '1', '2024-01-11 08:01:37'),
('ky57xtmK4q4ORpoYIInPyGVfkIBgCfvkoRmuLdKlHWZoFWm9OjsyP9K0NbcbirR6ofHQvkEdYx8aIWwzWtSu1zCQhZJ8I3brPdlIeSiFZczmMp6ltV3rs0q399010', '628114320702', '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*\r\nPermohonan : Pengukuran Pemisahan Bidang \r\nPemohon : RULIANI M. KADJI\r\nNo. Berkas : 240/2024\r\nNama Petugas Ukur : M. Zulkifli Madina\r\nNomor Telp Petugas : 6282193528853\r\ntoken : *ken_FrvPYVHnO*\r\nSilahkan saudara segera mengkonfirmasi kepada pemohon melalui Telp/SMS/WhatsApp\r\n                \r\n                \r\nCatatan :\r\n- Jika tidak ada konfirmasi dari pemohon mengenai jadwal pengukuran agar segera berkoordinasi dengan Koordinator Sub Seksi Pengukuran\r\n- Petugas ukur bertanggung jawab penuh atas jangka waktu pelayanan pengukuran sesuai tugas.', 'text', '1', '2024-01-11 08:01:37'),
('Lgaq9lGaQjxh3HszAKm0E4PjVWu7EujUNWkU8nPJmK8LlIKBywSLqJdi09DPvtO9PFZWfp3XNvJenquJV7sDtq3PtHKs3WhqlDH6Uc6ztOPT5o96VFFH8Gio65989', '085241618861', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P9717n*.', 'text', '0', '2024-10-30 09:28:14'),
('lu03SlzcRHdHzEBWwgfIPnBtncLtXOmmzF25Gz0rnyhsIfVvCdmjiu49JMD6MuoOrdNQDoRuSRDZmYAedLyUCm8WkuPXlXOrLwDVK9h5Qqw5rXkt2ZLUEww321860', '083145761265', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P8946n*.', 'text', '0', '2024-10-30 09:29:09'),
('mLdQxnhMUoQCJRvfhtx3LsQXo1QBwWldnJuEFDEYa4EulGBVYOvmYV90W7b3BsFkUKoUTKPt6aSUTEVZ0FJICBKvnXuFEHbrQCzMLjR5LzQjHwaaM4aEFPsD11277', '6281232260972', '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*\r\nPermohonan : Pengukuran Mengetahui Luas \r\nPemohon : afif\r\nNomor Telp pemohon : 6285801496223\r\nNo. Berkas : 123/2023', 'text', '1', '2023-10-09 04:42:58'),
('mLdQxnhMUoQCJRvfhtx3LsQXo1QBwWldnJuEFDEYa4EulGBVYOvmYV90W7b3BsFkUKoUTKPt6aSUTEVZ0FJICBKvnXuFEHbrQCzMLjR5LzQjHwaaM4aEFPsD49064', '6281232260972', 'https://26a2-2001-448a-706c-38e8-a967-4c67-ff3d-de0b.ngrok-free.app/statif/upload/addbeff89e86cc6353cbbbe1f2643541.pdf', 'file', '1', '2023-10-09 04:42:58'),
('mLdQxnhMUoQCJRvfhtx3LsQXo1QBwWldnJuEFDEYa4EulGBVYOvmYV90W7b3BsFkUKoUTKPt6aSUTEVZ0FJICBKvnXuFEHbrQCzMLjR5LzQjHwaaM4aEFPsD51321', '6285801496223', '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*\r\nPermohonan : Pengukuran Mengetahui Luas \r\nPemohon : afif\r\nNo. Berkas : 123/2023\r\nNama Petugas Ukur : Ainun D. W.\r\nNomor Telp Petugas : 6281232260972\r\ntoken : *ken_xTo1gtDkC*\r\nSilahkan saudara segera mengkonfirmasi kepada pemohon melalui Telp/SMS/WhatsApp\r\n                \r\n                \r\nCatatan :\r\n- Jika tidak ada konfirmasi dari pemohon mengenai jadwal pengukuran agar segera berkoordinasi dengan Koordinator Sub Seksi Pengukuran\r\n- Petugas ukur bertanggung jawab penuh atas jangka waktu pelayanan pengukuran sesuai tugas.', 'text', '1', '2023-10-09 04:42:58'),
('mLdQxnhMUoQCJRvfhtx3LsQXo1QBwWldnJuEFDEYa4EulGBVYOvmYV90W7b3BsFkUKoUTKPt6aSUTEVZ0FJICBKvnXuFEHbrQCzMLjR5LzQjHwaaM4aEFPsD75973', '6285801496223', 'https://26a2-2001-448a-706c-38e8-a967-4c67-ff3d-de0b.ngrok-free.app/statif/upload/addbeff89e86cc6353cbbbe1f2643541.pdf', 'file', '1', '2023-10-09 04:42:58'),
('OkvPcGZXQwR36GFA74mlzMceo82dLN9Pi5fkkp2Xx7VdE0O4RydBC0HiSOSXkfikiQO1Ey5028cMcwkSTZCjgJmiVac7ZWReIGBVpVvRLuKXkdiSvv8Ikq9W12140', '6285801496223', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P4886n*.', 'text', '1', '2023-10-09 04:41:27'),
('OkvPcGZXQwR36GFA74mlzMceo82dLN9Pi5fkkp2Xx7VdE0O4RydBC0HiSOSXkfikiQO1Ey5028cMcwkSTZCjgJmiVac7ZWReIGBVpVvRLuKXkdiSvv8Ikq9W44001ken_xTo1gtDkC', '6285801496223', '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*\r\nterimakasih telah berkerja sama dalam proses pengukuran tanah, tahap selanjutnya proses pembuatan *peta bidang tanah* sesuai dengan hasil pengukuran untuk nomor berkas *123/2023*.', 'text', '1', '2023-10-09 04:45:33'),
('OX1bFeDWmzfJ7gDCLhsA8aEb4tOhQEhwjrrciCft7yOHuHlwF7n09emh02ntpiZZ5jiMfJfB6JncRtD4HjslNeH9oO5LGJZwDZt8BDIsOB9LpKq0OV5H1syZ13883', '6283145761265', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P7919n*.', 'text', '0', '2024-10-30 09:37:44'),
('p6iFKDgyNOelOdveCKLZLtL8xJYE3rpFUkCY0rQrHX0HyiwnyKXGqaFZ6hNQPYvBJp6eH1XSl25FfIwES5L15qno7LCvegxMcUaEhbI4bXvzG5lWIx6CDelS11734', '+6283145761265', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P7919n*.', 'text', '0', '2024-10-30 09:37:57'),
('pqNtWJjTltlxIWdY1mJv7Lujo2fLoeDYkpQ9ck4hyF7srt7MqmmnvsOnJeGwIvNHbUeY95TCp4ykbZXAKMoKb7Zos6QjlNZ2XZVXM9YWDHiDQprVf5PQjbAX50608', '083145761265', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P7919n*.', 'text', '0', '2024-10-30 09:35:41'),
('PUHfCH9RWrOzlD5tvSsrlt7ZYhRKznUMXT5kkNn6Hhp10A6q4DiUE0qMpxqpYSINuPxcRMPYyJ2KFRkLdLGhEiuF4ln9EyM4muqTZrfH9q5qQ4ei0CeZyBL866502', '628114320702', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P6354n*.', 'text', '1', '2024-01-11 07:45:09'),
('pVvRDIea5kEfPleDhLRFYG4BKB5YIsHWInCGR7CoNTOqDK7Cxj2XmZpGWkmGc4G5WDXeJDcLEtXVsMIO3i9vlWA2Hkv4xsfIULgkhi2p02FK7eIWBQlYlz3e29861', '085241618861', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P9717n*.', 'text', '0', '2024-10-30 09:28:27'),
('QAdUoZgRqoy6qe778MOn0tKI4TWSSDDWlRaqX3gX2vSxuzehjldK0eBkTALbI4SnFbobiaKSnm7BpP4dd9XpoZQafQibkKX9gG8zRmC8Z5oonyUrG4ZnsVhC92683', '6283145761265', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P7919n*.', 'text', '0', '2024-10-30 09:38:07'),
('selesai_1hXBC5ncdCmLYcdS9a6wUfcEFZA1PhcPlDh0g1NaDdgVPgUHHOWiW4t8xZ9RQq26WjYfVFTbfQiR8vU1DRT1OaJhWxK7gSSsFPsLdCoTmZX2u9hyAG0piHn218871', '6289624009877', 'https://26a2-2001-448a-706c-38e8-a967-4c67-ff3d-de0b.ngrok-free.app/statif/upload/d18cae42c0ffd8c39bc51259582c5c28.pdf', 'file', '1', '2023-10-09 03:22:09'),
('selesai_1hXBC5ncdCmLYcdS9a6wUfcEFZA1PhcPlDh0g1NaDdgVPgUHHOWiW4t8xZ9RQq26WjYfVFTbfQiR8vU1DRT1OaJhWxK7gSSsFPsLdCoTmZX2u9hyAG0piHn237974', '6289624009877', 'Hasil permohonan pengukuran telah selesai, sesuai dengan file pdf yang kami kirimkan. terimakasih atas kerjasamanya salam *skala kantor dinas pertanahan kota gorontalo*.', 'text', '1', '2023-10-09 03:22:09'),
('selesai_OkvPcGZXQwR36GFA74mlzMceo82dLN9Pi5fkkp2Xx7VdE0O4RydBC0HiSOSXkfikiQO1Ey5028cMcwkSTZCjgJmiVac7ZWReIGBVpVvRLuKXkdiSvv8Ikq9W11020', '6285801496223', 'https://26a2-2001-448a-706c-38e8-a967-4c67-ff3d-de0b.ngrok-free.app/statif/upload/e44a4d1549f3d23d5e1fb7f8854fea56.pdf', 'file', '1', '2023-10-09 04:46:47'),
('selesai_OkvPcGZXQwR36GFA74mlzMceo82dLN9Pi5fkkp2Xx7VdE0O4RydBC0HiSOSXkfikiQO1Ey5028cMcwkSTZCjgJmiVac7ZWReIGBVpVvRLuKXkdiSvv8Ikq9W77424', '6285801496223', 'Hasil permohonan pengukuran telah selesai, sesuai dengan file pdf yang kami kirimkan. terimakasih atas kerjasamanya salam *skala kantor dinas pertanahan kota gorontalo*.', 'text', '1', '2023-10-09 04:46:47'),
('selesai_TdWzLFIEZbd37GbSNszZ4nYlMP70sjLAQFb30dcF1ISvrnEJN4jmebUoaC3WkalUWweZb3adXqmBYx4632K0kfE0vJ5mF2LpvjHSvwrlX4nTITi0uD9ZoSf148515', '6281330329987', 'Hasil permohonan pengukuran telah selesai, sesuai dengan file pdf yang kami kirimkan. terimakasih atas kerjasamanya salam *skala kantor dinas pertanahan kota gorontalo*.', 'text', '1', '2023-10-09 05:03:45'),
('selesai_TdWzLFIEZbd37GbSNszZ4nYlMP70sjLAQFb30dcF1ISvrnEJN4jmebUoaC3WkalUWweZb3adXqmBYx4632K0kfE0vJ5mF2LpvjHSvwrlX4nTITi0uD9ZoSf199970', '6281330329987', 'https://26a2-2001-448a-706c-38e8-a967-4c67-ff3d-de0b.ngrok-free.app/statif/upload/4eafc0555cc6c800cc80af2326a8c424.pdf', 'file', '1', '2023-10-09 05:03:45'),
('selesai_zOExtLRSRDecIns4zk11TtqQHRnBcjHr2QwmKV41wpSTgzQpeVwjP2S6nF4W97MSZbLP3gHRl9bgV1WR07o2ua3SGDbfboiq7tDzA6G6y1OcLCEBMHhrygA546023', '6282292497288', 'Hasil permohonan pengukuran telah selesai, sesuai dengan file pdf yang kami kirimkan. terimakasih atas kerjasamanya salam *skala kantor dinas pertanahan kota gorontalo*.', 'text', '1', '2023-12-14 09:38:15'),
('selesai_zOExtLRSRDecIns4zk11TtqQHRnBcjHr2QwmKV41wpSTgzQpeVwjP2S6nF4W97MSZbLP3gHRl9bgV1WR07o2ua3SGDbfboiq7tDzA6G6y1OcLCEBMHhrygA592488', '6282292497288', 'https://0641-36-85-223-52.ngrok-free.app/statif/upload/5d0d22ca2db6c193ccfb51398b011b85.pdf', 'file', '1', '2023-12-14 09:38:15'),
('t6J8gUdvrsQlc2aO3VvlG8McOs4GtXIVtSMi1T6c4uCedOnOgVcXojpM3sL19gQxGfRRjTteVoQCXXsl3HMHtP5ge74OCrjXV7ZbvzoqZ8mf6y05OGE3Byz834047', '6289624009877', 'https://26a2-2001-448a-706c-38e8-a967-4c67-ff3d-de0b.ngrok-free.app/statif/upload/b1635de69c7c9a1e0a6dfa99f933db4e.pdf', 'file', '1', '2023-10-09 03:18:57'),
('t6J8gUdvrsQlc2aO3VvlG8McOs4GtXIVtSMi1T6c4uCedOnOgVcXojpM3sL19gQxGfRRjTteVoQCXXsl3HMHtP5ge74OCrjXV7ZbvzoqZ8mf6y05OGE3Byz848814', '6285240390490', '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*\r\nPermohonan : Pengukuran dan Pemetaan Kadastra \r\nPemohon : ABDURAHMAN K. LAIYA\r\nNomor Telp pemohon : 6289624009877\r\nNo. Berkas : 3537/2023', 'text', '1', '2023-10-09 03:18:57'),
('t6J8gUdvrsQlc2aO3VvlG8McOs4GtXIVtSMi1T6c4uCedOnOgVcXojpM3sL19gQxGfRRjTteVoQCXXsl3HMHtP5ge74OCrjXV7ZbvzoqZ8mf6y05OGE3Byz854918', '6289624009877', '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*\r\nPermohonan : Pengukuran dan Pemetaan Kadastra \r\nPemohon : ABDURAHMAN K. LAIYA\r\nNo. Berkas : 3537/2023\r\nNama Petugas Ukur : Rezky F. Mopangga\r\nNomor Telp Petugas : 6285240390490\r\ntoken : *ken_kxomvVArj*\r\nSilahkan saudara segera mengkonfirmasi kepada pemohon melalui Telp/SMS/WhatsApp\r\n                \r\n                \r\nCatatan :\r\n- Jika tidak ada konfirmasi dari pemohon mengenai jadwal pengukuran agar segera berkoordinasi dengan Koordinator Sub Seksi Pengukuran\r\n- Petugas ukur bertanggung jawab penuh atas jangka waktu pelayanan pengukuran sesuai tugas.', 'text', '1', '2023-10-09 03:18:57'),
('t6J8gUdvrsQlc2aO3VvlG8McOs4GtXIVtSMi1T6c4uCedOnOgVcXojpM3sL19gQxGfRRjTteVoQCXXsl3HMHtP5ge74OCrjXV7ZbvzoqZ8mf6y05OGE3Byz895386', '6285240390490', 'https://26a2-2001-448a-706c-38e8-a967-4c67-ff3d-de0b.ngrok-free.app/statif/upload/b1635de69c7c9a1e0a6dfa99f933db4e.pdf', 'file', '1', '2023-10-09 03:18:57'),
('TdWzLFIEZbd37GbSNszZ4nYlMP70sjLAQFb30dcF1ISvrnEJN4jmebUoaC3WkalUWweZb3adXqmBYx4632K0kfE0vJ5mF2LpvjHSvwrlX4nTITi0uD9ZoSf141403', '6281330329987', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P6082n*.', 'text', '1', '2023-10-09 04:54:39'),
('TdWzLFIEZbd37GbSNszZ4nYlMP70sjLAQFb30dcF1ISvrnEJN4jmebUoaC3WkalUWweZb3adXqmBYx4632K0kfE0vJ5mF2LpvjHSvwrlX4nTITi0uD9ZoSf151824ken_ZutPKkHxR', '6281330329987', '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*\r\nterimakasih telah berkerja sama dalam proses pengukuran tanah, tahap selanjutnya proses pembuatan *peta bidang tanah* sesuai dengan hasil pengukuran untuk nomor berkas *236/2023*.', 'text', '1', '2023-10-09 05:03:00'),
('XiUOPNfTzUzTzUF1BY15l3ZWoPd8McnNxzby1zkHp0jyREkYwm12HCRVxEz2xKvRR0s91liN1m4zG9F2NZchQKkcnADYxUYlIcHbg7CnMTLtR6KdE6ZKr01H23216', '6285229206830', '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*\r\nPermohonan : Pengukuran dan Pemetaan Kadastra \r\nPemohon : pak kabid\r\nNomor Telp pemohon : 6281330329987\r\nNo. Berkas : 236/2023', 'text', '1', '2023-10-09 04:55:49'),
('XiUOPNfTzUzTzUF1BY15l3ZWoPd8McnNxzby1zkHp0jyREkYwm12HCRVxEz2xKvRR0s91liN1m4zG9F2NZchQKkcnADYxUYlIcHbg7CnMTLtR6KdE6ZKr01H25361', '6281330329987', '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*\r\nPermohonan : Pengukuran dan Pemetaan Kadastra \r\nPemohon : pak kabid\r\nNo. Berkas : 236/2023\r\nNama Petugas Ukur : Satria Perdana Amiwaha\r\nNomor Telp Petugas : 6285229206830\r\ntoken : *ken_ZutPKkHxR*\r\nSilahkan saudara segera mengkonfirmasi kepada pemohon melalui Telp/SMS/WhatsApp\r\n                \r\n                \r\nCatatan :\r\n- Jika tidak ada konfirmasi dari pemohon mengenai jadwal pengukuran agar segera berkoordinasi dengan Koordinator Sub Seksi Pengukuran\r\n- Petugas ukur bertanggung jawab penuh atas jangka waktu pelayanan pengukuran sesuai tugas.', 'text', '1', '2023-10-09 04:55:49'),
('XiUOPNfTzUzTzUF1BY15l3ZWoPd8McnNxzby1zkHp0jyREkYwm12HCRVxEz2xKvRR0s91liN1m4zG9F2NZchQKkcnADYxUYlIcHbg7CnMTLtR6KdE6ZKr01H38335', '6285229206830', 'https://26a2-2001-448a-706c-38e8-a967-4c67-ff3d-de0b.ngrok-free.app/statif/upload/059409b6a821f84c72d5ca7caaeceec0.pdf', 'file', '1', '2023-10-09 04:55:49'),
('XiUOPNfTzUzTzUF1BY15l3ZWoPd8McnNxzby1zkHp0jyREkYwm12HCRVxEz2xKvRR0s91liN1m4zG9F2NZchQKkcnADYxUYlIcHbg7CnMTLtR6KdE6ZKr01H48797', '6281330329987', 'https://26a2-2001-448a-706c-38e8-a967-4c67-ff3d-de0b.ngrok-free.app/statif/upload/059409b6a821f84c72d5ca7caaeceec0.pdf', 'file', '1', '2023-10-09 04:55:49'),
('zOExtLRSRDecIns4zk11TtqQHRnBcjHr2QwmKV41wpSTgzQpeVwjP2S6nF4W97MSZbLP3gHRl9bgV1WR07o2ua3SGDbfboiq7tDzA6G6y1OcLCEBMHhrygA562285', '6282292497288', 'terimakasih telah mengajukan permohonan pengukuran bidang tanah di kantor pertanahan kota gorontalo , e_tiket *P8884n*.', 'text', '1', '2023-12-14 09:30:06'),
('zOExtLRSRDecIns4zk11TtqQHRnBcjHr2QwmKV41wpSTgzQpeVwjP2S6nF4W97MSZbLP3gHRl9bgV1WR07o2ua3SGDbfboiq7tDzA6G6y1OcLCEBMHhrygA585387ken_4LqSLkzkv', '6282292497288', '*Hotline BPN Kota Gtlo: Surat Tugas Pengukuran*\r\nterimakasih telah berkerja sama dalam proses pengukuran tanah, tahap selanjutnya proses pembuatan *peta bidang tanah* sesuai dengan hasil pengukuran untuk nomor berkas *9099*.', 'text', '1', '2023-12-14 09:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemohon`
--

CREATE TABLE `tb_pemohon` (
  `kd_pemohon` varchar(255) NOT NULL,
  `no_mohon_ukur` varchar(255) NOT NULL,
  `nama_lengkap_pemohon` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `id_status_permohonan` int(11) NOT NULL,
  `tanggal_pemohon` timestamp NOT NULL DEFAULT current_timestamp(),
  `e_tiket` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pemohon`
--

INSERT INTO `tb_pemohon` (`kd_pemohon`, `no_mohon_ukur`, `nama_lengkap_pemohon`, `nomor_telepon`, `id_status_permohonan`, `tanggal_pemohon`, `e_tiket`, `token`, `keterangan`) VALUES
('1hXBC5ncdCmLYcdS9a6wUfcEFZA1PhcPlDh0g1NaDdgVPgUHHOWiW4t8xZ9RQq26WjYfVFTbfQiR8vU1DRT1OaJhWxK7gSSsFPsLdCoTmZX2u9hyAG0piHn2', '3537/2023', 'ABDURAHMAN K. LAIYA', '6289624009877', 1, '2023-10-09 03:16:49', 'P6762n', 'ken_kxomvVArj', '  '),
('1R5q85PlHb0f1MtPMpKvrrl0FASsa53kUmg1MDrxRfFlObVnbKw5kTFDpeGQ912hoOJCPniDVuCaMtfgcRRH3y9qjqh9OIUav6esgXU8lmmYtVVUkoHb0woH', '113/2024', 'Sri Dewi Handayani Rauf', '6283145761265', 1, '2024-01-09 02:06:11', 'P1152n', 'ken_tSjEycSjx', ' '),
('55ZBEPkGMVE2zpdVx6coy9vt3nU4ntnSIN0oRwSY1Sa0EF2L1CLm44MUxTfo39lwHCZMPEJQYflyBixj04ZzL4fXbkflsKSqP9ckbnS78ksUPf1FHOAoqeQm', 'ft', 'ff', '083145761265', 2, '2024-10-30 09:29:29', 'P8946n', 'ken_l1aMx304N', 'vbjhg'),
('7WfAY2EHpgbgCdZS6kuMZANtTujRrQh21T7eXp9tKY30GpiFAmZB5WgLyZfwzvxFI09XDxICbpZQOgN033U2Dsmya5iSphnZZuQuDjQDRe5qJqLeOHpdL0pL', '0-', '98', '083145761265', 5, '2024-10-30 09:37:19', 'P7919n', 'ken_Ao97CrEML', 'fff'),
('8aWwhAVO8zO1yt7pru19D9HcmA8BcO8elqtW4rVrStEbCbTUeIbmbsfO0WroA1tvXgSltI5Zg4nY2Exj6nz4WGtzeIoFPfPCLfUvpaCK7fQEfMe2D7N2el2C', '0-', '98', '083145761265', 5, '2024-10-30 09:36:02', 'P7919n', 'ken_7qr4HVnpn', 'fff'),
('b9rGOMeB01QWiEtSAnOfog56Eg6nUEt1U6ilU9d2DU68tY8qfrH0X1qMY0Km4GviKSTT1aam5bkYmTvuCHO0g4A8kZuBYNWJQ7vwlucCwxFFqm4aWJ9I2rnc', '9426', 'Aminah I. Sou', '6282349180081', 2, '2024-01-10 07:02:13', 'P7633n', 'ken_v5u78ceMr', '.'),
('bBKaVxVesVlj52AReRopN5i4ipuEQgyWRhGNvqp4IAfWa7UsShe2vex2tMx9HuqCUyNrspiXojz4cbrwjRZRgvKdIZ54VB4vwxWO7C78pvU5sPog2em59u6a', '113/2024', 'SRI DEWI HADAYANI RAUF', '081341697010', 1, '2024-01-09 01:59:23', 'P5686n', 'ken_anAqq4DCI', '.'),
('cNvAke7gckxTs5j7DnhzOnUsigr6pWUuI6zEV2vYzkWQ0hgurRGCUrGa6Q1OoWAMYnNoGX07Dv2V9fBEd9AlDw595qa91Q5fAuOoOZRp3BXeUYwVSCdodWTP', '113/2024', 'SRI DEWI HADAYANI RAUF', '081341697010', 1, '2024-01-09 01:59:20', 'P5686n', 'ken_DZY0gfJaz', '.'),
('FPxmXVwtZgsviypIguEyos7lSYkDxMGF1MyYzAs0Z80dVagpxFfLPODl68b1I1oAbFYQrr54K0Ed4pj3lv8krEaJY48jatV6g1Zq5KCqTZ5UrY783D22pTO6', '0-', '98', '6283145761265', 5, '2024-10-30 09:37:34', 'P7919n', 'ken_CcAactINr', 'fff'),
('HoEr8CkyXeVIof2f3JR9HwN30RCpw4JTtt3bTnwZ8vC9GLCJz1yIwo07jiX2HiNeLJ86tQoC5WJW33M6qe2wvCx7Picb7fbn60Rdg416MTkHT43iFSHnkvu8', '0-', '98', '083145761265', 5, '2024-10-30 09:35:52', 'P7919n', 'ken_jSI1JBTfw', 'fff'),
('Lgaq9lGaQjxh3HszAKm0E4PjVWu7EujUNWkU8nPJmK8LlIKBywSLqJdi09DPvtO9PFZWfp3XNvJenquJV7sDtq3PtHKs3WhqlDH6Uc6ztOPT5o96VFFH8Gio', '123', 'arga', '085241618861', 1, '2024-10-30 09:28:14', 'P9717n', 'ken_pE0CcQc90', 'ooo'),
('lu03SlzcRHdHzEBWwgfIPnBtncLtXOmmzF25Gz0rnyhsIfVvCdmjiu49JMD6MuoOrdNQDoRuSRDZmYAedLyUCm8WkuPXlXOrLwDVK9h5Qqw5rXkt2ZLUEww3', 'ft', 'ff', '083145761265', 2, '2024-10-30 09:29:09', 'P8946n', 'ken_k4qUbNOEO', 'vbjhg'),
('OkvPcGZXQwR36GFA74mlzMceo82dLN9Pi5fkkp2Xx7VdE0O4RydBC0HiSOSXkfikiQO1Ey5028cMcwkSTZCjgJmiVac7ZWReIGBVpVvRLuKXkdiSvv8Ikq9W', '123/2023', 'afif', '6285801496223', 6, '2023-10-09 04:41:27', 'P4886n', 'ken_xTo1gtDkC', '  '),
('OX1bFeDWmzfJ7gDCLhsA8aEb4tOhQEhwjrrciCft7yOHuHlwF7n09emh02ntpiZZ5jiMfJfB6JncRtD4HjslNeH9oO5LGJZwDZt8BDIsOB9LpKq0OV5H1syZ', '0-', '98', '6283145761265', 5, '2024-10-30 09:37:44', 'P7919n', 'ken_r9xhYTQdh', 'fff'),
('p6iFKDgyNOelOdveCKLZLtL8xJYE3rpFUkCY0rQrHX0HyiwnyKXGqaFZ6hNQPYvBJp6eH1XSl25FfIwES5L15qno7LCvegxMcUaEhbI4bXvzG5lWIx6CDelS', '0-', '98', '+6283145761265', 5, '2024-10-30 09:37:57', 'P7919n', 'ken_kRlKPoHxZ', 'fff'),
('pqNtWJjTltlxIWdY1mJv7Lujo2fLoeDYkpQ9ck4hyF7srt7MqmmnvsOnJeGwIvNHbUeY95TCp4ykbZXAKMoKb7Zos6QjlNZ2XZVXM9YWDHiDQprVf5PQjbAX', '0-', '98', '083145761265', 5, '2024-10-30 09:35:41', 'P7919n', 'ken_bQgRGmOok', 'fff'),
('PUHfCH9RWrOzlD5tvSsrlt7ZYhRKznUMXT5kkNn6Hhp10A6q4DiUE0qMpxqpYSINuPxcRMPYyJ2KFRkLdLGhEiuF4ln9EyM4muqTZrfH9q5qQ4ei0CeZyBL8', '240/2024', 'RULIANI M. KADJI', '628114320702', 2, '2024-01-11 07:45:09', 'P6354n', 'ken_FrvPYVHnO', '.'),
('pVvRDIea5kEfPleDhLRFYG4BKB5YIsHWInCGR7CoNTOqDK7Cxj2XmZpGWkmGc4G5WDXeJDcLEtXVsMIO3i9vlWA2Hkv4xsfIULgkhi2p02FK7eIWBQlYlz3e', '123', 'arga', '085241618861', 1, '2024-10-30 09:28:27', 'P9717n', 'ken_9XJWyXtW7', 'ooo'),
('QAdUoZgRqoy6qe778MOn0tKI4TWSSDDWlRaqX3gX2vSxuzehjldK0eBkTALbI4SnFbobiaKSnm7BpP4dd9XpoZQafQibkKX9gG8zRmC8Z5oonyUrG4ZnsVhC', '0-', '98', '6283145761265', 5, '2024-10-30 09:38:07', 'P7919n', 'ken_djo1twtgq', 'fff'),
('TdWzLFIEZbd37GbSNszZ4nYlMP70sjLAQFb30dcF1ISvrnEJN4jmebUoaC3WkalUWweZb3adXqmBYx4632K0kfE0vJ5mF2LpvjHSvwrlX4nTITi0uD9ZoSf1', '236/2023', 'pak kabid', '6281330329987', 1, '2023-10-09 04:54:39', 'P6082n', 'ken_ZutPKkHxR', '  '),
('zOExtLRSRDecIns4zk11TtqQHRnBcjHr2QwmKV41wpSTgzQpeVwjP2S6nF4W97MSZbLP3gHRl9bgV1WR07o2ua3SGDbfboiq7tDzA6G6y1OcLCEBMHhrygA5', '9099', 'AHMAD MUDJITO', '6282292497288', 2, '2023-12-14 09:30:06', 'P8884n', 'ken_4LqSLkzkv', 'XX');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengukuran`
--

CREATE TABLE `tb_pengukuran` (
  `kd_pengukuran` varchar(255) NOT NULL,
  `kd_pemohon` varchar(255) NOT NULL,
  `kd_anggota_pengukur` varchar(255) NOT NULL,
  `tanggal_pengukuran` date NOT NULL,
  `waktu_pengukuran` time NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengukuran`
--

INSERT INTO `tb_pengukuran` (`kd_pengukuran`, `kd_pemohon`, `kd_anggota_pengukur`, `tanggal_pengukuran`, `waktu_pengukuran`, `file`) VALUES
('iJVP0jAILHebbl5ceWSnfn0KZ9lgD9AbplxHs9EKl8KmzbtrU9zPlAJyMUkF2amO1wJryDNaK08pZ1gaoYvFiSyidKrJ3kNZf4AhITRblvCwBBFKVSpWX5xR', 'b9rGOMeB01QWiEtSAnOfog56Eg6nUEt1U6ilU9d2DU68tY8qfrH0X1qMY0Km4GviKSTT1aam5bkYmTvuCHO0g4A8kZuBYNWJQ7vwlucCwxFFqm4aWJ9I2rnc', 'ihEXVBYvmAr5rM04frPUxjDVbpijvQ02OLCSrRgITBfIw5kBL4xEwadC5A2rmTnflvgS9MvAJRDzh8cm1chsIcQS8rYZPpNDwRNn2CGdJXaimwZ2QylLFCra', '2024-01-11', '10:04:00', 'd3c7d5cbce9ad6cf024f458ea25f2aab.pdf'),
('JGh85ZFpq8Q7W9AduVu3lA3Xs8b9DU06zaM5zqHdn1O7XO38dact9tg2YeWbwk2krpjIao4M9TLJEX7iwfHTqJbjGHQwSnXQS6vwDoXTSxn36fUU1PKypyUp', 'zOExtLRSRDecIns4zk11TtqQHRnBcjHr2QwmKV41wpSTgzQpeVwjP2S6nF4W97MSZbLP3gHRl9bgV1WR07o2ua3SGDbfboiq7tDzA6G6y1OcLCEBMHhrygA5', '5fb5hPo3a9NVc07Z8tVFfGmQPBQwUVzJqzJT5JBWXA5APDM3rmmITMPo3CTqa5Ulh1iLQwROfOttux9KGwGySm997C3NVBu8BK63WH2uuV3aZxN2IVja02HA', '2023-12-14', '17:36:00', '6485957793d6a270de2086a22124c73d.pdf'),
('ky57xtmK4q4ORpoYIInPyGVfkIBgCfvkoRmuLdKlHWZoFWm9OjsyP9K0NbcbirR6ofHQvkEdYx8aIWwzWtSu1zCQhZJ8I3brPdlIeSiFZczmMp6ltV3rs0q3', 'PUHfCH9RWrOzlD5tvSsrlt7ZYhRKznUMXT5kkNn6Hhp10A6q4DiUE0qMpxqpYSINuPxcRMPYyJ2KFRkLdLGhEiuF4ln9EyM4muqTZrfH9q5qQ4ei0CeZyBL8', 'tweIh6xHJpI7hE18SnznnaGPaKoJRhJ4e5q6swbnGz9YhHLprf5kpFGIQbrWUANVguC06xu8NIZQhI2onF3B9WCSdC1Sv7EDgKC4ecQqEUrTkVur8aJgRTG4', '2024-01-12', '10:00:00', '0f86fd02e8e997f79d7dab568149d433.pdf'),
('mLdQxnhMUoQCJRvfhtx3LsQXo1QBwWldnJuEFDEYa4EulGBVYOvmYV90W7b3BsFkUKoUTKPt6aSUTEVZ0FJICBKvnXuFEHbrQCzMLjR5LzQjHwaaM4aEFPsD', 'OkvPcGZXQwR36GFA74mlzMceo82dLN9Pi5fkkp2Xx7VdE0O4RydBC0HiSOSXkfikiQO1Ey5028cMcwkSTZCjgJmiVac7ZWReIGBVpVvRLuKXkdiSvv8Ikq9W', 'ihEXVBYvmAr5rM04frPUxjDVbpijvQ02OLCSrRgITBfIw5kBL4xEwadC5A2rmTnflvgS9MvAJRDzh8cm1chsIcQS8rYZPpNDwRNn2CGdJXaimwZ2QylLFCra', '2023-10-16', '12:42:00', 'addbeff89e86cc6353cbbbe1f2643541.pdf'),
('t6J8gUdvrsQlc2aO3VvlG8McOs4GtXIVtSMi1T6c4uCedOnOgVcXojpM3sL19gQxGfRRjTteVoQCXXsl3HMHtP5ge74OCrjXV7ZbvzoqZ8mf6y05OGE3Byz8', '1hXBC5ncdCmLYcdS9a6wUfcEFZA1PhcPlDh0g1NaDdgVPgUHHOWiW4t8xZ9RQq26WjYfVFTbfQiR8vU1DRT1OaJhWxK7gSSsFPsLdCoTmZX2u9hyAG0piHn2', '5fb5hPo3a9NVc07Z8tVFfGmQPBQwUVzJqzJT5JBWXA5APDM3rmmITMPo3CTqa5Ulh1iLQwROfOttux9KGwGySm997C3NVBu8BK63WH2uuV3aZxN2IVja02HA', '2023-06-07', '13:18:00', 'b1635de69c7c9a1e0a6dfa99f933db4e.pdf'),
('XiUOPNfTzUzTzUF1BY15l3ZWoPd8McnNxzby1zkHp0jyREkYwm12HCRVxEz2xKvRR0s91liN1m4zG9F2NZchQKkcnADYxUYlIcHbg7CnMTLtR6KdE6ZKr01H', 'TdWzLFIEZbd37GbSNszZ4nYlMP70sjLAQFb30dcF1ISvrnEJN4jmebUoaC3WkalUWweZb3adXqmBYx4632K0kfE0vJ5mF2LpvjHSvwrlX4nTITi0uD9ZoSf1', 'kHFR68zbeTrJWVqYShbPuOs2vFrjn7cTJq37aX89uOtxMZY8W0OpRCuNMteWasT31xwIoZ2ZH1Y8fWewYeC4xYpZa4cQJyGfq0FMlvX2B9dLjiZTp0n98Apz', '2023-10-17', '12:55:00', '059409b6a821f84c72d5ca7caaeceec0.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peta`
--

CREATE TABLE `tb_peta` (
  `kd_peta` varchar(255) NOT NULL,
  `kd_pemohon` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp(),
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_peta`
--

INSERT INTO `tb_peta` (`kd_peta`, `kd_pemohon`, `waktu`, `file`) VALUES
('t1S35rRAYonSWZaJbziI1YJjppraoWA7mAXCilN4bc5qNsoXs9jPUd86vLTDz8if49I8J118GMelaKrmdBMiCUYnJjbP1BegHSpOSQwiZuyG9naz3s7zBikM', '1hXBC5ncdCmLYcdS9a6wUfcEFZA1PhcPlDh0g1NaDdgVPgUHHOWiW4t8xZ9RQq26WjYfVFTbfQiR8vU1DRT1OaJhWxK7gSSsFPsLdCoTmZX2u9hyAG0piHn2', '2023-10-09 03:22:09', 'd18cae42c0ffd8c39bc51259582c5c28.pdf'),
('bc7l4PJfCwoel5siutl0Q5mE3RgPrOgai3iTwGbqaOKyqWA3jvaHYRZuJfQpspE9TRFuMTEyZ8yUykAIbtuGOEFgrD8BHA4pYWXVIaPcNiuuPjh7jhLELStz', 'OkvPcGZXQwR36GFA74mlzMceo82dLN9Pi5fkkp2Xx7VdE0O4RydBC0HiSOSXkfikiQO1Ey5028cMcwkSTZCjgJmiVac7ZWReIGBVpVvRLuKXkdiSvv8Ikq9W', '2023-10-09 04:46:47', 'e44a4d1549f3d23d5e1fb7f8854fea56.pdf'),
('PhyZ28JcmLH5K66YVR4n5fKYKALQOEN1hkTwkMIheZn4Z5vtRmUhq5g6MKMsDn5LDhvITJG9JREXjBOf9V6FOCVogTl6GCnihpmjgn88KDeB9RkqulV6i2Gj', 'TdWzLFIEZbd37GbSNszZ4nYlMP70sjLAQFb30dcF1ISvrnEJN4jmebUoaC3WkalUWweZb3adXqmBYx4632K0kfE0vJ5mF2LpvjHSvwrlX4nTITi0uD9ZoSf1', '2023-10-09 05:03:45', '4eafc0555cc6c800cc80af2326a8c424.pdf'),
('SXUd6l0s9ssvKH5bYR3zUMbjjtBUNUr33gUPPmVEgb8WTbghEfOWOL7xgEhhRIZLb9NXspX3LpupQIOF6hX07h4mu2CzvZNzhOEuqQyAdA0nszc3hsowk9GB', 'zOExtLRSRDecIns4zk11TtqQHRnBcjHr2QwmKV41wpSTgzQpeVwjP2S6nF4W97MSZbLP3gHRl9bgV1WR07o2ua3SGDbfboiq7tDzA6G6y1OcLCEBMHhrygA5', '2023-12-14 09:38:15', '5d0d22ca2db6c193ccfb51398b011b85.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_proses`
--

CREATE TABLE `tb_proses` (
  `kd_proses` varchar(255) NOT NULL,
  `kd_pemohon` varchar(255) NOT NULL,
  `status` enum('permohonan','pengukuran','proses','selesai') NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_proses`
--

INSERT INTO `tb_proses` (`kd_proses`, `kd_pemohon`, `status`, `waktu`) VALUES
('proses_10448_permohonan_7WfAY2EHpgbgCdZS6kuMZANtTujRrQh21T7eXp9tKY30GpiFAmZB5WgLyZfwzvxFI09XDxICbpZQOgN033U2Dsmya5iSphnZZuQuDjQDRe5qJqLeOHpdL0pL', '7WfAY2EHpgbgCdZS6kuMZANtTujRrQh21T7eXp9tKY30GpiFAmZB5WgLyZfwzvxFI09XDxICbpZQOgN033U2Dsmya5iSphnZZuQuDjQDRe5qJqLeOHpdL0pL', 'permohonan', '2024-10-30 09:37:19'),
('proses_10593_permohonan_OkvPcGZXQwR36GFA74mlzMceo82dLN9Pi5fkkp2Xx7VdE0O4RydBC0HiSOSXkfikiQO1Ey5028cMcwkSTZCjgJmiVac7ZWReIGBVpVvRLuKXkdiSvv8Ikq9W', 'OkvPcGZXQwR36GFA74mlzMceo82dLN9Pi5fkkp2Xx7VdE0O4RydBC0HiSOSXkfikiQO1Ey5028cMcwkSTZCjgJmiVac7ZWReIGBVpVvRLuKXkdiSvv8Ikq9W', 'selesai', '2023-10-09 04:41:27'),
('proses_12631_permohonan_pVvRDIea5kEfPleDhLRFYG4BKB5YIsHWInCGR7CoNTOqDK7Cxj2XmZpGWkmGc4G5WDXeJDcLEtXVsMIO3i9vlWA2Hkv4xsfIULgkhi2p02FK7eIWBQlYlz3e', 'pVvRDIea5kEfPleDhLRFYG4BKB5YIsHWInCGR7CoNTOqDK7Cxj2XmZpGWkmGc4G5WDXeJDcLEtXVsMIO3i9vlWA2Hkv4xsfIULgkhi2p02FK7eIWBQlYlz3e', 'permohonan', '2024-10-30 09:28:27'),
('proses_21931_permohonan_FPxmXVwtZgsviypIguEyos7lSYkDxMGF1MyYzAs0Z80dVagpxFfLPODl68b1I1oAbFYQrr54K0Ed4pj3lv8krEaJY48jatV6g1Zq5KCqTZ5UrY783D22pTO6', 'FPxmXVwtZgsviypIguEyos7lSYkDxMGF1MyYzAs0Z80dVagpxFfLPODl68b1I1oAbFYQrr54K0Ed4pj3lv8krEaJY48jatV6g1Zq5KCqTZ5UrY783D22pTO6', 'permohonan', '2024-10-30 09:37:34'),
('proses_21971_permohonan_HoEr8CkyXeVIof2f3JR9HwN30RCpw4JTtt3bTnwZ8vC9GLCJz1yIwo07jiX2HiNeLJ86tQoC5WJW33M6qe2wvCx7Picb7fbn60Rdg416MTkHT43iFSHnkvu8', 'HoEr8CkyXeVIof2f3JR9HwN30RCpw4JTtt3bTnwZ8vC9GLCJz1yIwo07jiX2HiNeLJ86tQoC5WJW33M6qe2wvCx7Picb7fbn60Rdg416MTkHT43iFSHnkvu8', 'permohonan', '2024-10-30 09:35:52'),
('proses_25511_permohonan_8aWwhAVO8zO1yt7pru19D9HcmA8BcO8elqtW4rVrStEbCbTUeIbmbsfO0WroA1tvXgSltI5Zg4nY2Exj6nz4WGtzeIoFPfPCLfUvpaCK7fQEfMe2D7N2el2C', '8aWwhAVO8zO1yt7pru19D9HcmA8BcO8elqtW4rVrStEbCbTUeIbmbsfO0WroA1tvXgSltI5Zg4nY2Exj6nz4WGtzeIoFPfPCLfUvpaCK7fQEfMe2D7N2el2C', 'permohonan', '2024-10-30 09:36:02'),
('proses_31177_permohonan_p6iFKDgyNOelOdveCKLZLtL8xJYE3rpFUkCY0rQrHX0HyiwnyKXGqaFZ6hNQPYvBJp6eH1XSl25FfIwES5L15qno7LCvegxMcUaEhbI4bXvzG5lWIx6CDelS', 'p6iFKDgyNOelOdveCKLZLtL8xJYE3rpFUkCY0rQrHX0HyiwnyKXGqaFZ6hNQPYvBJp6eH1XSl25FfIwES5L15qno7LCvegxMcUaEhbI4bXvzG5lWIx6CDelS', 'permohonan', '2024-10-30 09:37:57'),
('proses_34119_permohonan_cNvAke7gckxTs5j7DnhzOnUsigr6pWUuI6zEV2vYzkWQ0hgurRGCUrGa6Q1OoWAMYnNoGX07Dv2V9fBEd9AlDw595qa91Q5fAuOoOZRp3BXeUYwVSCdodWTP', 'cNvAke7gckxTs5j7DnhzOnUsigr6pWUuI6zEV2vYzkWQ0hgurRGCUrGa6Q1OoWAMYnNoGX07Dv2V9fBEd9AlDw595qa91Q5fAuOoOZRp3BXeUYwVSCdodWTP', 'permohonan', '2024-01-09 01:59:20'),
('proses_35714_permohonan_PUHfCH9RWrOzlD5tvSsrlt7ZYhRKznUMXT5kkNn6Hhp10A6q4DiUE0qMpxqpYSINuPxcRMPYyJ2KFRkLdLGhEiuF4ln9EyM4muqTZrfH9q5qQ4ei0CeZyBL8', 'PUHfCH9RWrOzlD5tvSsrlt7ZYhRKznUMXT5kkNn6Hhp10A6q4DiUE0qMpxqpYSINuPxcRMPYyJ2KFRkLdLGhEiuF4ln9EyM4muqTZrfH9q5qQ4ei0CeZyBL8', 'pengukuran', '2024-01-11 07:45:09'),
('proses_39451_permohonan_lu03SlzcRHdHzEBWwgfIPnBtncLtXOmmzF25Gz0rnyhsIfVvCdmjiu49JMD6MuoOrdNQDoRuSRDZmYAedLyUCm8WkuPXlXOrLwDVK9h5Qqw5rXkt2ZLUEww3', 'lu03SlzcRHdHzEBWwgfIPnBtncLtXOmmzF25Gz0rnyhsIfVvCdmjiu49JMD6MuoOrdNQDoRuSRDZmYAedLyUCm8WkuPXlXOrLwDVK9h5Qqw5rXkt2ZLUEww3', 'permohonan', '2024-10-30 09:29:09'),
('proses_41393_permohonan_1hXBC5ncdCmLYcdS9a6wUfcEFZA1PhcPlDh0g1NaDdgVPgUHHOWiW4t8xZ9RQq26WjYfVFTbfQiR8vU1DRT1OaJhWxK7gSSsFPsLdCoTmZX2u9hyAG0piHn2', '1hXBC5ncdCmLYcdS9a6wUfcEFZA1PhcPlDh0g1NaDdgVPgUHHOWiW4t8xZ9RQq26WjYfVFTbfQiR8vU1DRT1OaJhWxK7gSSsFPsLdCoTmZX2u9hyAG0piHn2', 'selesai', '2023-10-09 03:16:49'),
('proses_49210_permohonan_55ZBEPkGMVE2zpdVx6coy9vt3nU4ntnSIN0oRwSY1Sa0EF2L1CLm44MUxTfo39lwHCZMPEJQYflyBixj04ZzL4fXbkflsKSqP9ckbnS78ksUPf1FHOAoqeQm', '55ZBEPkGMVE2zpdVx6coy9vt3nU4ntnSIN0oRwSY1Sa0EF2L1CLm44MUxTfo39lwHCZMPEJQYflyBixj04ZzL4fXbkflsKSqP9ckbnS78ksUPf1FHOAoqeQm', 'permohonan', '2024-10-30 09:29:29'),
('proses_59328_permohonan_b9rGOMeB01QWiEtSAnOfog56Eg6nUEt1U6ilU9d2DU68tY8qfrH0X1qMY0Km4GviKSTT1aam5bkYmTvuCHO0g4A8kZuBYNWJQ7vwlucCwxFFqm4aWJ9I2rnc', 'b9rGOMeB01QWiEtSAnOfog56Eg6nUEt1U6ilU9d2DU68tY8qfrH0X1qMY0Km4GviKSTT1aam5bkYmTvuCHO0g4A8kZuBYNWJQ7vwlucCwxFFqm4aWJ9I2rnc', 'pengukuran', '2024-01-10 07:02:13'),
('proses_59908_permohonan_TdWzLFIEZbd37GbSNszZ4nYlMP70sjLAQFb30dcF1ISvrnEJN4jmebUoaC3WkalUWweZb3adXqmBYx4632K0kfE0vJ5mF2LpvjHSvwrlX4nTITi0uD9ZoSf1', 'TdWzLFIEZbd37GbSNszZ4nYlMP70sjLAQFb30dcF1ISvrnEJN4jmebUoaC3WkalUWweZb3adXqmBYx4632K0kfE0vJ5mF2LpvjHSvwrlX4nTITi0uD9ZoSf1', 'selesai', '2023-10-09 04:54:39'),
('proses_60126_permohonan_zOExtLRSRDecIns4zk11TtqQHRnBcjHr2QwmKV41wpSTgzQpeVwjP2S6nF4W97MSZbLP3gHRl9bgV1WR07o2ua3SGDbfboiq7tDzA6G6y1OcLCEBMHhrygA5', 'zOExtLRSRDecIns4zk11TtqQHRnBcjHr2QwmKV41wpSTgzQpeVwjP2S6nF4W97MSZbLP3gHRl9bgV1WR07o2ua3SGDbfboiq7tDzA6G6y1OcLCEBMHhrygA5', 'selesai', '2023-12-14 09:30:06'),
('proses_61927_permohonan_OX1bFeDWmzfJ7gDCLhsA8aEb4tOhQEhwjrrciCft7yOHuHlwF7n09emh02ntpiZZ5jiMfJfB6JncRtD4HjslNeH9oO5LGJZwDZt8BDIsOB9LpKq0OV5H1syZ', 'OX1bFeDWmzfJ7gDCLhsA8aEb4tOhQEhwjrrciCft7yOHuHlwF7n09emh02ntpiZZ5jiMfJfB6JncRtD4HjslNeH9oO5LGJZwDZt8BDIsOB9LpKq0OV5H1syZ', 'permohonan', '2024-10-30 09:37:44'),
('proses_66478_permohonan_1R5q85PlHb0f1MtPMpKvrrl0FASsa53kUmg1MDrxRfFlObVnbKw5kTFDpeGQ912hoOJCPniDVuCaMtfgcRRH3y9qjqh9OIUav6esgXU8lmmYtVVUkoHb0woH', '1R5q85PlHb0f1MtPMpKvrrl0FASsa53kUmg1MDrxRfFlObVnbKw5kTFDpeGQ912hoOJCPniDVuCaMtfgcRRH3y9qjqh9OIUav6esgXU8lmmYtVVUkoHb0woH', 'permohonan', '2024-01-09 02:06:11'),
('proses_68843_permohonan_Lgaq9lGaQjxh3HszAKm0E4PjVWu7EujUNWkU8nPJmK8LlIKBywSLqJdi09DPvtO9PFZWfp3XNvJenquJV7sDtq3PtHKs3WhqlDH6Uc6ztOPT5o96VFFH8Gio', 'Lgaq9lGaQjxh3HszAKm0E4PjVWu7EujUNWkU8nPJmK8LlIKBywSLqJdi09DPvtO9PFZWfp3XNvJenquJV7sDtq3PtHKs3WhqlDH6Uc6ztOPT5o96VFFH8Gio', 'permohonan', '2024-10-30 09:28:14'),
('proses_69808_permohonan_QAdUoZgRqoy6qe778MOn0tKI4TWSSDDWlRaqX3gX2vSxuzehjldK0eBkTALbI4SnFbobiaKSnm7BpP4dd9XpoZQafQibkKX9gG8zRmC8Z5oonyUrG4ZnsVhC', 'QAdUoZgRqoy6qe778MOn0tKI4TWSSDDWlRaqX3gX2vSxuzehjldK0eBkTALbI4SnFbobiaKSnm7BpP4dd9XpoZQafQibkKX9gG8zRmC8Z5oonyUrG4ZnsVhC', 'permohonan', '2024-10-30 09:38:07'),
('proses_72963_permohonan_pqNtWJjTltlxIWdY1mJv7Lujo2fLoeDYkpQ9ck4hyF7srt7MqmmnvsOnJeGwIvNHbUeY95TCp4ykbZXAKMoKb7Zos6QjlNZ2XZVXM9YWDHiDQprVf5PQjbAX', 'pqNtWJjTltlxIWdY1mJv7Lujo2fLoeDYkpQ9ck4hyF7srt7MqmmnvsOnJeGwIvNHbUeY95TCp4ykbZXAKMoKb7Zos6QjlNZ2XZVXM9YWDHiDQprVf5PQjbAX', 'permohonan', '2024-10-30 09:35:41'),
('proses_88347_permohonan_bBKaVxVesVlj52AReRopN5i4ipuEQgyWRhGNvqp4IAfWa7UsShe2vex2tMx9HuqCUyNrspiXojz4cbrwjRZRgvKdIZ54VB4vwxWO7C78pvU5sPog2em59u6a', 'bBKaVxVesVlj52AReRopN5i4ipuEQgyWRhGNvqp4IAfWa7UsShe2vex2tMx9HuqCUyNrspiXojz4cbrwjRZRgvKdIZ54VB4vwxWO7C78pvU5sPog2em59u6a', 'permohonan', '2024-01-09 01:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_permohonan`
--

CREATE TABLE `tb_status_permohonan` (
  `id_status_permohonan` int(11) NOT NULL,
  `status_permohonan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_status_permohonan`
--

INSERT INTO `tb_status_permohonan` (`id_status_permohonan`, `status_permohonan`) VALUES
(0, 'NONE'),
(1, 'Pengukuran dan Pemetaan Kadastra'),
(6, 'Pengukuran Mengetahui Luas'),
(3, 'Pengukuran Pemecahan Bidang'),
(2, 'Pengukuran Pemisahan Bidang'),
(5, 'Pengukuran Pengembalian Batas'),
(4, 'Pengukuran Penggabungan Bidang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_token`
--

CREATE TABLE `tb_token` (
  `kd_pemohon` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_token`
--

INSERT INTO `tb_token` (`kd_pemohon`, `waktu`) VALUES
('1hXBC5ncdCmLYcdS9a6wUfcEFZA1PhcPlDh0g1NaDdgVPgUHHOWiW4t8xZ9RQq26WjYfVFTbfQiR8vU1DRT1OaJhWxK7gSSsFPsLdCoTmZX2u9hyAG0piHn2', '2023-10-09 03:22:09'),
('OkvPcGZXQwR36GFA74mlzMceo82dLN9Pi5fkkp2Xx7VdE0O4RydBC0HiSOSXkfikiQO1Ey5028cMcwkSTZCjgJmiVac7ZWReIGBVpVvRLuKXkdiSvv8Ikq9W', '2023-10-09 04:46:47'),
('TdWzLFIEZbd37GbSNszZ4nYlMP70sjLAQFb30dcF1ISvrnEJN4jmebUoaC3WkalUWweZb3adXqmBYx4632K0kfE0vJ5mF2LpvjHSvwrlX4nTITi0uD9ZoSf1', '2023-10-09 05:03:45'),
('zOExtLRSRDecIns4zk11TtqQHRnBcjHr2QwmKV41wpSTgzQpeVwjP2S6nF4W97MSZbLP3gHRl9bgV1WR07o2ua3SGDbfboiq7tDzA6G6y1OcLCEBMHhrygA5', '2023-12-14 09:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `kd_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_list_permohonan`
-- (See below for the actual view)
--
CREATE TABLE `v_list_permohonan` (
`kd_pemohon` varchar(255)
,`no_mohon_ukur` varchar(255)
,`nama_lengkap_pemohon` varchar(255)
,`nomor_telepon` varchar(255)
,`id_status_permohonan` int(11)
,`tanggal_pemohon` timestamp
,`e_tiket` varchar(255)
,`token` varchar(255)
,`keterangan` text
,`status_permohonan` varchar(255)
,`nama_anggota_pengukur` varchar(255)
,`no_hp_anggota` varchar(20)
,`lvl` int(1)
,`sts_waktu` varchar(19)
,`status` enum('permohonan','pengukuran','proses','selesai')
);

-- --------------------------------------------------------

--
-- Structure for view `v_list_permohonan`
--
DROP TABLE IF EXISTS `v_list_permohonan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_list_permohonan`  AS SELECT `ph`.`kd_pemohon` AS `kd_pemohon`, `ph`.`no_mohon_ukur` AS `no_mohon_ukur`, `ph`.`nama_lengkap_pemohon` AS `nama_lengkap_pemohon`, `ph`.`nomor_telepon` AS `nomor_telepon`, `ph`.`id_status_permohonan` AS `id_status_permohonan`, `ph`.`tanggal_pemohon` AS `tanggal_pemohon`, `ph`.`e_tiket` AS `e_tiket`, `ph`.`token` AS `token`, `ph`.`keterangan` AS `keterangan`, `sp`.`status_permohonan` AS `status_permohonan`, `ap`.`nama_anggota_pengukur` AS `nama_anggota_pengukur`, `ap`.`nomor_telepon` AS `no_hp_anggota`, if(lcase(`ps`.`status`) = 'selesai' and `pt`.`kd_pemohon` is not null,4,if(lcase(`ps`.`status`) = 'proses' and `tk`.`kd_pemohon` is not null,3,if(lcase(`ps`.`status`) = 'pengukuran' and `pk`.`kd_pemohon` is not null,2,if(lcase(`ps`.`status`) = 'permohonan',1,0)))) AS `lvl`, if(lcase(`ps`.`status`) = 'selesai' and `pt`.`kd_pemohon` is not null,`ps`.`waktu`,if(lcase(`ps`.`status`) = 'proses' and `tk`.`kd_pemohon` is not null,`pt`.`waktu`,if(lcase(`ps`.`status`) = 'pengukuran' and `pk`.`kd_pemohon` is not null,`tk`.`waktu`,if(lcase(`ps`.`status`) = 'permohonan',`ph`.`tanggal_pemohon`,0)))) AS `sts_waktu`, `ps`.`status` AS `status` FROM ((((((`tb_pemohon` `ph` left join `tb_status_permohonan` `sp` on(`ph`.`id_status_permohonan` = `sp`.`id_status_permohonan`)) left join `tb_pengukuran` `pk` on(`pk`.`kd_pemohon` = `ph`.`kd_pemohon`)) left join `tb_anggota_pengukur` `ap` on(`ap`.`kd_anggota_pengukur` = `pk`.`kd_anggota_pengukur`)) left join `tb_token` `tk` on(`tk`.`kd_pemohon` = `ph`.`kd_pemohon`)) left join `tb_peta` `pt` on(`pt`.`kd_pemohon` = `ph`.`kd_pemohon`)) left join `tb_proses` `ps` on(`ps`.`kd_pemohon` = `ph`.`kd_pemohon`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota_pengukur`
--
ALTER TABLE `tb_anggota_pengukur`
  ADD PRIMARY KEY (`kd_anggota_pengukur`);

--
-- Indexes for table `tb_broadcast`
--
ALTER TABLE `tb_broadcast`
  ADD PRIMARY KEY (`kd_broadcast`);

--
-- Indexes for table `tb_pemohon`
--
ALTER TABLE `tb_pemohon`
  ADD PRIMARY KEY (`kd_pemohon`),
  ADD KEY `id_status_permohonan` (`id_status_permohonan`);

--
-- Indexes for table `tb_pengukuran`
--
ALTER TABLE `tb_pengukuran`
  ADD PRIMARY KEY (`kd_pengukuran`),
  ADD KEY `kd_anggota_pengukur` (`kd_anggota_pengukur`),
  ADD KEY `kd_pemohon` (`kd_pemohon`);

--
-- Indexes for table `tb_peta`
--
ALTER TABLE `tb_peta`
  ADD KEY `kd_pemohon` (`kd_pemohon`);

--
-- Indexes for table `tb_proses`
--
ALTER TABLE `tb_proses`
  ADD PRIMARY KEY (`kd_proses`),
  ADD KEY `kd_pemohon` (`kd_pemohon`);

--
-- Indexes for table `tb_status_permohonan`
--
ALTER TABLE `tb_status_permohonan`
  ADD PRIMARY KEY (`id_status_permohonan`),
  ADD UNIQUE KEY `status_permohonan` (`status_permohonan`);

--
-- Indexes for table `tb_token`
--
ALTER TABLE `tb_token`
  ADD KEY `kd_pemohon` (`kd_pemohon`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`kd_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pemohon`
--
ALTER TABLE `tb_pemohon`
  ADD CONSTRAINT `tb_pemohon_ibfk_1` FOREIGN KEY (`id_status_permohonan`) REFERENCES `tb_status_permohonan` (`id_status_permohonan`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_pengukuran`
--
ALTER TABLE `tb_pengukuran`
  ADD CONSTRAINT `tb_pengukuran_ibfk_1` FOREIGN KEY (`kd_anggota_pengukur`) REFERENCES `tb_anggota_pengukur` (`kd_anggota_pengukur`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pengukuran_ibfk_2` FOREIGN KEY (`kd_pemohon`) REFERENCES `tb_pemohon` (`kd_pemohon`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_peta`
--
ALTER TABLE `tb_peta`
  ADD CONSTRAINT `tb_peta_ibfk_1` FOREIGN KEY (`kd_pemohon`) REFERENCES `tb_pemohon` (`kd_pemohon`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_proses`
--
ALTER TABLE `tb_proses`
  ADD CONSTRAINT `tb_proses_ibfk_1` FOREIGN KEY (`kd_pemohon`) REFERENCES `tb_pemohon` (`kd_pemohon`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_token`
--
ALTER TABLE `tb_token`
  ADD CONSTRAINT `tb_token_ibfk_1` FOREIGN KEY (`kd_pemohon`) REFERENCES `tb_pemohon` (`kd_pemohon`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
