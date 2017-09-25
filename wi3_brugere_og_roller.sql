-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 25. 09 2017 kl. 12:24:55
-- Serverversion: 10.1.26-MariaDB
-- PHP-version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wi3_brugere_og_roller`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `permissions`
--

CREATE TABLE `permissions` (
  `permission_id` int(11) NOT NULL,
  `permission_name` varchar(45) DEFAULT NULL,
  `permission_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `permissions`
--

INSERT INTO `permissions` (`permission_id`, `permission_name`, `permission_code`) VALUES
(1, 'Administration: Opret brugere', 'admin_opret_brugere'),
(2, 'Administration: Rediger brugere', 'admin_rediger_brugere'),
(3, 'Administration: Slet brugere', 'admin_slet_brugere'),
(4, 'Administration: Deaktiver brugere', 'admin_deaktiver_brugere'),
(5, 'Administration: Skift medlemmers brugernavn', 'admin_skift_medlemmers_username'),
(6, 'Administration: Skift moderatorers brugernavn', 'admin_skift_moderators_username'),
(7, 'Administration: Rediger spil', 'admin_rediger_spil'),
(8, 'Administration: Slet spil', 'admin_slet_spil'),
(9, 'Administration: Deaktiver spil', 'admin_deaktiver_spil'),
(10, 'Administration: Deaktiver specifikke download', 'admin_deaktiver_specifikke_downloads'),
(11, 'Administration: Rediger medlemmers kommentare', 'admin_rediger_medlemmers_kommentarer'),
(12, 'Administration: Slet medlemmers kommentarer', 'admin_slet_medlemmers_kommentarer'),
(13, 'Administration: Rediger moderatorers kommenta', 'admin_rediger_moderatorers_kommentarer'),
(14, 'Administration: Slet moderatorers kommentarer', 'admin_slet_moderatorers_kommentarer'),
(15, 'Registrer profil', 'registrer_profil'),
(16, 'Upload spil', 'upload_spil'),
(17, 'Rediger egne spil', 'rediger_egne_spil'),
(18, 'Slet egne spil', 'slet_egne_spil'),
(19, 'Rate spil', 'rate_spil'),
(20, 'Download spil', 'download_spil'),
(21, 'Læs kommentarer', 'laes_kommentarer'),
(22, 'Skriv kommentarer', 'skriv_kommentarer'),
(23, 'Tilmeld og frameld nyhedsbrev', 'tilmeld_og_frameld_nyhedsbrev'),
(24, 'Spil online', 'spil_online');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `userroles`
--

CREATE TABLE `userroles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `userroles`
--

INSERT INTO `userroles` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Moderator'),
(3, 'Medlem'),
(4, 'Gæst');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `userroles_and_permissions`
--

CREATE TABLE `userroles_and_permissions` (
  `fk_userrole_id` int(11) NOT NULL,
  `fk_permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `userroles_and_permissions`
--

INSERT INTO `userroles_and_permissions` (`fk_userrole_id`, `fk_permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 14),
(1, 13),
(1, 12),
(1, 11),
(1, 10),
(1, 9),
(1, 8),
(1, 7),
(1, 6),
(1, 5),
(1, 4),
(1, 20),
(1, 21),
(1, 22),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 7),
(2, 9),
(2, 10),
(2, 11),
(2, 20),
(2, 21),
(2, 22),
(3, 16),
(3, 17),
(3, 20),
(3, 21),
(3, 22),
(4, 15),
(4, 19),
(1, 24),
(4, 23),
(3, 23),
(2, 24),
(3, 24),
(2, 12),
(2, 8),
(3, 18),
(3, 19),
(4, 24);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(45) DEFAULT NULL,
  `user_password` varchar(45) DEFAULT NULL,
  `user_name` varchar(45) DEFAULT NULL,
  `fk_role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `user_name`, `fk_role_id`) VALUES
(1, 'chuck_norris', '1234', 'Chuck Norris', 1),
(2, 'kermit', '1234', 'Kermit', 2),
(3, 'cookie_monster', '1234', 'Cookie Monster', 2),
(4, 'big_bird', '1234', 'Big Bird', 2),
(5, 'elmo', '1234', 'Elmo', 3),
(6, 'miss_piggy', '1234', 'Miss Piggy', 3);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indeks for tabel `userroles`
--
ALTER TABLE `userroles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indeks for tabel `userroles_and_permissions`
--
ALTER TABLE `userroles_and_permissions`
  ADD KEY `fk_userrole_id_idx` (`fk_userrole_id`),
  ADD KEY `fk_permission_id_idx` (`fk_permission_id`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_user_userrole_idx` (`fk_role_id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Tilføj AUTO_INCREMENT i tabel `userroles`
--
ALTER TABLE `userroles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Begrænsninger for dumpede tabeller
--

--
-- Begrænsninger for tabel `userroles_and_permissions`
--
ALTER TABLE `userroles_and_permissions`
  ADD CONSTRAINT `fk_permission_id` FOREIGN KEY (`fk_permission_id`) REFERENCES `permissions` (`permission_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_userrole_id` FOREIGN KEY (`fk_userrole_id`) REFERENCES `userroles` (`role_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Begrænsninger for tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_user_userrole` FOREIGN KEY (`fk_role_id`) REFERENCES `userroles` (`role_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
