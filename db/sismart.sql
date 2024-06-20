-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 05:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sismart`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_akun`
--

CREATE TABLE `data_akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL,
  `level` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_akun`
--

INSERT INTO `data_akun` (`id`, `nama`, `nis`, `username`, `password`, `level`) VALUES
(1, 'Zaenal Abidin', '087846954057', '087846954057', '$2y$10$XOvLojo9BfFVzrw.GJGb9ebjLRrxXHbnC9mUXn4hnucgiqt2Wkx5C', '3'),
(8, 'Ahmad Faisal', '000312', '0102569409', '$2y$10$xPPaLriNqfmkoDL6uwhgF.Tvr1wc95CNY6TWGzJvBnfZbHBtFh7Ua', '1'),
(9, 'Ahmad Tsania Mukhtar', '000322', '0101459158', '$2y$10$Wlmloy/nwinPANx30SAE7OM6zccEo8Kw6kXuc6Hu0MGV6RZoRXvaC', '1'),
(10, 'Ayadi Rayyan Alkindy', '000277', '0114875412', '$2y$10$vnLMFoRe9E39oZQd7OTvI.l4m/ha9D0/UC0vMm.SmRmXuYr6jEvcO', '1'),
(11, 'Azka Helmi Widodo', '000287', '0115250991', '$2y$10$d1H9PNMe6G9Fpjpuw3kt8.9EaVwdMFtLGinYryMs9fsblN0B54tcm', '1'),
(12, 'Dimas Ferry Anggara', '000307', '0111846926', '$2y$10$7WulbQZNIVa8eX4g7aC3N.uWkksowu9h0YT1yBrtgjAIYE729bkIi', '1'),
(13, 'Diya Arka Ararya', '000305', '0104670808', '$2y$10$P4QBP4c93xiicN8edfeWx.WFxPwH1Ezs/V9sts.u7KFZMq0p9UWUq', '1'),
(14, 'Dzakiy Darmabakti', '000279', '0104249007', '$2y$10$6UtxhA5Q.e6mTKEvnMST0.heGaNGL.6rGhLBIW7bF.Nee1KHVpl2e', '1'),
(15, 'Fadhil Surya Permana', '000288', '0101882707', '$2y$10$c7UGtLVqQ3YrFkIM3aJBh.p29T0Vv/hP99c/zEHUgpl0wwPEHU7f6', '1'),
(16, 'Farraz Abbiyyu Saputra', '000284', '0115765545', '$2y$10$CpFrjyDph3ap1bOXc9yg1u55svAP5vaHBOtyL7n46b0zqY/p2XTYq', '1'),
(17, 'Fawaz Maulana ', '000319', '0105168216', '$2y$10$KiuV/nGD281u46O7O/q25.OdQQU/2DMwAleAqXhdQblalSnYPfwSu', '1'),
(18, 'Lalu Abid Muafa', '000303', '0103725237', '$2y$10$0suWHJ4zZyX/zXpkJWhaIO.GwPp21lENfDT4BKOMtZTy6fhjIqD86', '1'),
(19, 'Lalu Adri Adinata Kesuma', '000302', '0107396924', '$2y$10$PauL9XNJEAPeBMf6CADPgO9IePUSr08zcW5nI8O1S/0zV/uslsRAO', '1'),
(20, 'Lalu Muhammad Asyam Burhan', '000290', '0115679840', '$2y$10$R9IvuWoe9yHBklQCu/HCsuV5tzc6mG4eFP2nDXsrRorg39zto8kca', '1'),
(21, 'Lalu Muhammad Azhfar Rozin', '000310', '0116075375', '$2y$10$M0ueBg5V6xsTSN5OYyNR7.OZ8qApoS5c0kl8CSC8RT19YjTSUbh4C', '1'),
(22, 'M. Nabil Masajid', '000313', '0096853440', '$2y$10$JwxKJP1Ozlg.Bt2lAgqaduiKlQbXeu2Vn0dOXxT6wcV6BkIAziZF2', '1'),
(23, 'M. Rafi Pratama Juman', '000300', '0105042732', '$2y$10$WPLBoLMHdO3ecS/Q6v2mC.i9Kkm0DwG0DUijdxe5jqhitGdsvzgjW', '1'),
(24, 'Moch.Reski Ardiansyah', '000280', '0114533639', '$2y$10$K/E9QkdiotQ7I7wNlXDdgeyvYgMy41gIHHxWaI7.oPvHRD.FcoN/u', '1'),
(25, 'Muhammad Fadhil Kusuma Pradana', '000276', '0118858296', '$2y$10$C6.ZESu0QMLf/6raWRUnEOmXfD6D.1w9GkkOzOqvxYlcP5/0M5QPK', '1'),
(26, 'Muhammad Syaddaad Safaroz', '000304', '0116087760', '$2y$10$z3rvmKSiPHYX2N60ra8DUO4m2HRHaMA/dkpqN.2Ys9qB7g1cItE1a', '1'),
(27, 'Nur Wahyu Hafiz Ananto', '000285', '0108079010', '$2y$10$/GdslopgeAfJOBHVS027Du3fVE9rxYHnxs9Y7tMkPPYOgWEwrnK1C', '1'),
(28, 'Raissa Arick Pratama', '000286', '3119487989', '$2y$10$y58ZTRXOQMtwAE/KQ2TSreuic5OJ/kbMig8rpCJcfplX9YLKlQGoi', '1'),
(29, 'Rizky Adiwa Fadhlurrahman', '000289', '0118636436', '$2y$10$D9tsOQSHPoS5Fh9jA230Du6zgK3.jJH/7TFjo7SLy/vO54oti7Gti', '1'),
(30, 'Rizky Riyan Adi Saputra', '000296', '0113675759', '$2y$10$mXz5NlUIGwQJzzKfTggu0eYMvPMLOmdzJyqXsBrAGKWUxU0v9NA6y', '1'),
(31, 'Royyan Sardar Rabbani', '000309', '0113614543', '$2y$10$hr.tKOM0IMwtTw5crFRd8OPOLoD5DSkYVD3tplELkVS2IRXrFgdzm', '1'),
(32, 'Sayyid Arkana Safaras', '000306', '0103219725', '$2y$10$qfY7EhA5c6Ba/oexI5YE4.D3yNy4ZF8irAZ4fgFgcMKXxQ0pWcXeG', '1'),
(33, 'Yazid Ghaisan', '000283', '3117922112', '$2y$10$utV8XRY/rBxvNK2l/S6Gw.ld2CoFyO0532dxIQmTjdgipKqbCmmq.', '1'),
(34, 'Ziyad Novian Kamil', '000301', '3100441420', '$2y$10$tsmGE2YHGULs0/f0oC.Ud.bZSrU/DHT.fjUJEYKNxCQu5cVgpYxnm', '1'),
(35, 'Alief Khoirullah Syawfar ', '000325', '0114369296', '$2y$10$w6s8A7T/2V0Y5oJVMM..R.IvS9hDkZDm/1ZTG5AgSlfpHkass1MBC', '1'),
(36, 'Aimee Aulia Hatta', '000293', '0104325884', '$2y$10$yAC2WmYtuXTaFxFqyK62Ium94SkKjAmDOomDCo93YVYItO5dbDQ0a', '1'),
(37, 'Ainun Nur Inayah Ashar', '000315', '0118136949', '$2y$10$TRkq3RhY99V/HXO/ilmYPuKyyrM/wShXYTvb9XqVU87QMtxTVjd82', '1'),
(38, 'Aisyah Fataniya Ilmi', '000281', '0106622599', '$2y$10$CindAfFEoTDhL5GjFfeUb.lrjuUdmNl5zFAsx3IgMB5BlZC/GKvdm', '1'),
(39, 'Annisa Alviena', '000314', '0105966712', '$2y$10$c36h7iKLeNkGNzv1.hQCEevb.oiT67gKx2lDKqRIztoz4aQUM6a6O', '1'),
(40, 'Baiq Aquilaria Rahmanina', '000297', '0104324646', '$2y$10$dAN4fUPHsT6hlwlCZF.rseCPeoH6MYKTomIoZXRVVUmd2h8cpe7C.', '1'),
(41, 'Banyu Bening Hayu Laras Kinasih', '000320', '0104618326', '$2y$10$NmNkThFwgTwvbua0PxMJRuSmh94SUS.5yu.YcvsB.3R6EvViZlMyW', '1'),
(42, 'Dina Melina', '000318', '0114884048', '$2y$10$f8KPZM4N6k9j0E10Z3x9yuOlFSjuR3P2XdNm2pv/43i9apZr3JXjm', '1'),
(43, 'Keisha Afifa Anwar', '000311', '0116702002', '$2y$10$bzfUg876YN9aXycyWANZNu56rRVmG2YhZylNrx/0tQQJrIHgWSYYy', '1'),
(44, 'Khairunnisa Wihdatul Ummah', '000308', '0108717491', '$2y$10$4EN/SUuGhnacnFnHaVVlL.WQEUs0oWVFbJoBwl/1zPCgoUg64nNne', '1'),
(45, 'Lisaana Shidqin', '000292', '3107548580', '$2y$10$ZIXPn5saVDIC7qfY9KqYmuEX8H7a6wYNYJpW1b1KcC6r054l72B3W', '1'),
(46, 'Mutiara', '000282', '0101248182', '$2y$10$3qBNrIL0rTc5LqUIsjto1u8.j2TQODbq.hJDAZX/5Z7j3iIP0/bny', '1'),
(47, 'Nafa Humairatul Zahra', '000295', '0106012915', '$2y$10$KOBFQoxjOA/8mdfi6yCL5Oqy4/oV1Apa6CtGF/vfWTlwcwJCU1Dzy', '1'),
(48, 'Nashira Abidah Widyasmara', '000278', '0108885800', '$2y$10$hO1DaUjEIqzrFXyB.0Ifhe5ctOZeCklTgJ04IDDtBgB3qzdQj5G/i', '1'),
(49, 'Natasya Putri Heryawan', '000291', '0103774724', '$2y$10$2k5U0.V9GjLnzn2rV674.OxoDkZc0zCNpx08eS/TfTCag5mcdLV4G', '1'),
(50, 'Sri Wahyu Handayani', '000275', '3118450959', '$2y$10$HYw1Hw8HnZ4qRiTBoqQsL.uhgX1CfItiRhASa2fODOFmA7.IODT4y', '1'),
(51, 'Trya Anindita Putri Zahra', '000298', '0107946274', '$2y$10$Iq/X25PwREd82Fj9kI09vehMsf/xYDRbXhMty5PXuCDPxv002WK26', '1'),
(52, 'Zahrania Atika Widodo', '000299', '0113801768', '$2y$10$aGg0y.BbVgc63Zf1upBYge4tLHaheGYYypi1tqpeaqRX9yjdkqOp.', '1'),
(53, 'Afhta Amsyda', '000253', '0098104711', '$2y$10$EHMiy5GwM/D3RKDHDDfvCu76iD8N86EPjLBXPXS1gUrvoda70k.im', '1'),
(54, 'Ahmad Abiyyu Syakieb', '000233', '0098203376', '$2y$10$UTGA/0CLjdz3mzCvcY9neezCxFIvK2kR16aWUjinVw/ES0A1eb4D.', '1'),
(55, 'Daffa Noor Fayyadh', '000199', '0102539371', '$2y$10$AyhyzOnKZpHP/QJoWV3OU./9qYfwgh0KltclCm8u99AaAE484gt32', '1'),
(56, 'Fabian putra setiawan', '000229', '0101569587', '$2y$10$buXtQ6Qz7MKo13WUeICbwuq1XCGIRT2AhFyV5ksCxQVbf5YUmB46G', '1'),
(57, 'Hisyam Athaya Ramadhan', '000262', '0106696413', '$2y$10$ZgOevG1zdcO4HbSGbeNOL.Yk15xkfLQLsm9er2tLazvnFrCW5ErYu', '1'),
(58, 'Lalu Azza Monalvino Rahman', '000208', '0103074756', '$2y$10$f0gB5ZWqUgi1brs/WiPmSOA7g0nxB.RkaZRbmyNR8fm7BzR/1Mrbi', '1'),
(59, 'Lalu Muhammad Faris Akbar', '000236', '0094284759', '$2y$10$.wec4eDAQjWlHlb.AxCnyu/MUZybiudmgWymh.hQwHezX85HLtR72', '1'),
(60, 'M. Athaya Arsandi', '000237', '3109075446', '$2y$10$g5xDr/A8eqSZC.qLIPktT.LJRdMor.8rk6Qvc6vVY3cizUdlXQGuO', '1'),
(61, 'M. F. Alimul Alam', '000246', '0101599109', '$2y$10$/zbDn4bi5FOopc5Vyv2e8ujwRbjuZPELj0VLnMmlc.iZKaC.7cGjC', '1'),
(62, 'Muhammad Fatih Zakwan', '000242', '3093031206', '$2y$10$CUbeloMwrXn3QXtLmroNROABYvxHJcDro0FKqA3Hy//YvqFpWsnqG', '1'),
(63, 'Muhammad Haidhar Firjatullah', '000231', '3094485018', '$2y$10$hMYMYXxb755JBiQLzOQfAutd0B7tUN14y0h/FGrmPBq2AJfWW.2sO', '1'),
(64, 'Muhammad Jagad Ar Rayyan', '000205', '0093791624', '$2y$10$AH/4t02XDIhkmGsgEV2LhugUckLzYEA8NQZYko.Mvg2nRda0o1zLu', '1'),
(65, 'Muhammad Nabil', '000259', '0091650072', '$2y$10$SK1IJkSk5mSwKf2tCpLFbeanv1ZACO/yWZUVN8L54EEIm7QiyX55G', '1'),
(66, 'Muhammad Rean Kimiko Perdana', '000195', '3092382571', '$2y$10$kRM9dFOWEaO1zAfxx0v1C.uGIfqUvEis67f4JBYd/5uHWv4ME7yIS', '1'),
(67, 'Muhammad Sultan Nabil', '000207', '0103169189', '$2y$10$Eai./8oTtRhrWdR4jwU3NeklfWbXokblXRXumIykC2tzPgppXDWgy', '1'),
(68, 'Muhammad Syauqi Rabbani', '000217', '3107151248', '$2y$10$rYGZMZheeydffgVBIf7vQu6eNAIzwvnqHJJc4lZ8Q2DHBDqkAsW2y', '1'),
(69, 'Muhammad Thoriq Al Fath', '000274', '3104386872', '$2y$10$u6cicMDxabSPfR9RGNFWZuPF1waTk5wXD4Lj4GSSoQoQ21sr8evdi', '1'),
(70, 'Rafka Qaisar Pratama', '000209', '0098430006', '$2y$10$MT.jZafxOb9NCvAOm/Nam.iGpGsWZvYExzXJEFg3E8r3CiJfPO7hy', '1'),
(71, 'Salim Rahmatulloh Rauhun', '000251', '0102492321', '$2y$10$jZvhtanMRIUkuz7WPvtCCu7ZyRvy85au69IXYum6f1UgMnSLyrFKG', '1'),
(72, 'L. M. Abid Anwar', '000324', '0103078315', '$2y$10$3UbjVtBldrOUUo2CaIP.M.7XVA0PRW7MDqV6.9eRwRecE08/PjIIW', '1'),
(73, 'Abdul Aziz', '000317', '3099875352', '$2y$10$LBULbgBTgelUViuSGgEE0ObOI05sickH3PCHGZMkRYQcVcB88UZC2', '1'),
(74, 'Afif Ghaisan', '000267', '0096951428', '$2y$10$8JV9PmJljP1DMPSaM3sRreIBh/Wn8g05GXeOxdooLg9afikaLIHSy', '1'),
(75, 'Ahmad Hafiz', '000250', '0082705556', '$2y$10$tdVBgM4TPs0dsOC9D4jlouk9AzPF7.LGAxkxh5MoFbpHmxReHyIFK', '1'),
(76, 'Ahmad Rifqi Al Falah', '000247', '0103151802', '$2y$10$XRU/Zezy9bwyIRL6F/GQButpDO5XVRaoR3gn7lQRdao9lSRjjbmaK', '1'),
(77, 'Akhmad Wahyu Suhartono', '000201', '3103151992', '$2y$10$XC1sEQ51mNjnFxPEv8TNkOboRGJgeZW1hK59V56Oc.Q45.AwJFOUW', '1'),
(78, 'Fath Fathir Ridhollah', '000268', '0094374701', '$2y$10$leG6j04uCYIjcOzqwcqqCOalKisRHwWeHlFprcpejMk/gTk3M5LRq', '1'),
(79, 'Helmi Radithya Saguno', '000258', '0107046114', '$2y$10$.aPsIpQoekhEeIuN56d68.QQa61yY5KHuB1LQEWaCnbKfNqYFPlKy', '1'),
(80, 'Lalu Ghazi Patria Mahardika', '000212', '0105901993', '$2y$10$FnCoyzgZHY7L2VANVIJUa.20rzvwVyC9.bguP/41qXGZPPT461rZy', '1'),
(81, 'Muhammad Abid Farras Satria', '000221', '0108133078', '$2y$10$cxI/KU7uBI0Ony1s9tZj3.Nw4PUJaEcQBDKSbNSahAkU3mjr6KrEW', '1'),
(82, 'Muhammad Athalarik Rassyad Gibran', '000240', '0091918572', '$2y$10$s184qELeMzJbigHePxeGH.H/J6vl7dyd3zi.YfVKQYXB7NwddCEsy', '1'),
(83, 'Muhammad Dimas Prasetyo', '000203', '0106499587', '$2y$10$NccvoaGbcg/cujxGn94/R.EvSONYdl4QLoAeIyl6j/8QUMgWzrSYC', '1'),
(84, 'Muhammad Fadly Parsa', '000211', '3106812871', '$2y$10$CHazJXwAgsrA6zPnqrABie1sVfepmhk3zQCJImkDzrEo.3kLl1Dky', '1'),
(85, 'Muhammad Haya Rasyid Al Khalifa', '000206', '0098067707', '$2y$10$FIHh0/89xtx75R76tnDnkOx4DYX8./PeqBhJEgJlF/VFd/K1gQr86', '1'),
(86, 'Muhammad Raffay Abrar Efendi', '000232', '3108578179', '$2y$10$PiP1BNehtDtDinmyzB3Sw.SSpW.D6XiJ8c5.ehuQLNl7h90P6KlLy', '1'),
(87, 'Muhammad Ragil Trivisar', '000204', '3108190430', '$2y$10$M0ScH9w1M4nLpKZOdllrDOEXY2DqjNFISFYdOiwZSgbVPN9o/Uh0G', '1'),
(88, 'Muhammad Rapi&#039;i', '000252', '0114511292', '$2y$10$ltD3YRnk8DmlevDNC3gjVuvv2e5pFAh4ba5wXk5uGCEKl.I4SCCmW', '1'),
(89, 'Nazril Khairan Windya Putra', '000216', '0098555728', '$2y$10$98U9EbZ.jjcfwIjvLhuKmuBzKUQ0HPB9tpsphfR2r3k7q0CFiWzue', '1'),
(90, 'Rafi Nando Desbrian', '000256', '0099966151', '$2y$10$0ZBEn.5D0ogXd09crsGfpei4v8vGNNEeqTl7q1G6/ZmlNo8ihFoKO', '1'),
(91, 'Rafiq Aditya Mulyakusuma', '000254', '0105834954', '$2y$10$pnD9RBvMhSi1ozIQ.M8ZrOWQnm6z/UDeGE.sqm04NXt94j.GTcH4a', '1'),
(92, 'Riffat Adli', '000200', '3082956139', '$2y$10$/tiaaQ8nMAIFgYPWAnpi7epHmPrHl0P1Gd/vDO.hfHjos23Nn5HJi', '1'),
(93, 'Rizqi Akbar', '000228', '0108335917', '$2y$10$4gFts9Z62i88FOUnRZX3QOckRONzP2B48/JelsK5NjHWUU/d3qqDK', '1'),
(94, 'Shafwan Alim Zuhdi', '000321', '0104779365', '$2y$10$nZL3j6zf5yoP8TWik2Gt/Ou7NjwkGKg/kMWghr//xGkI1zpWb36qW', '1'),
(95, 'Syafiq Satya Mulyakusuma', '000255', '0105732772', '$2y$10$GTSvov0E1jEsqU4RUq3X.eyh/Rc0f3Q.TQWjIS06rytvaEC9JTlaC', '1'),
(96, 'Almalikaa Yudhiyanto Putri', '000244', '0107730117', '$2y$10$AgJnM9EtgeZ6IRMHfXnsuO569l.fPU1Pn9NWAqjmqU0eLVtWy8jlW', '1'),
(97, 'Amira Kultsum Hanifa', '000226', '0101009262', '$2y$10$BGWQ/mM8LgUSZP6WR4ccnu.qnRH5ZN3mLXF4UaZu8UpGulsZMgVR6', '1'),
(98, 'Athaya Queena Yonata', '000248', '0105932182', '$2y$10$NSYgxLVAWOgwL41hqYmMPO8EpXk85EhuRIq3cSvIetd4zls4xXoUy', '1'),
(99, 'Faisyah Namirah Alhabsyi', '000257', '0105728483', '$2y$10$G6HxmAVowv0nFrbK3ay5iuVR6rhnNZsiknpTWg2qXKRLegi3rW6cK', '1'),
(100, 'Hanien Ahmad Muharis', '000264', '0101584070', '$2y$10$yTtdG4aiVvLq9sJjb6FxFuVbEHgYOvj/zi3ODQSTUuO57ECaETb6a', '1'),
(101, 'Kaela Arista Nawfa', '000230', '0096848755', '$2y$10$8CTup7RXCzBgtJ6VHRlgsOjXSOgrvdEveSsRPneZlUyu.AOIl908G', '1'),
(102, 'keysha Etika Islami', '000269', '0091315789', '$2y$10$.EvFE0V54x8P.up4rvBKCuMVMz5i/O2nqL7uOy113SeVLM/7vtP86', '1'),
(103, 'Mutiara Salsabila Khairani', '000198', '0103787577', '$2y$10$DCrbFXP9EaXBzru0ZBEy4eyJnAYlxPyt1sIsJpcLuahAqeP.dX09.', '1'),
(104, 'Nasywa Raihana Barik', '000239', '3102799457', '$2y$10$dwRlqgFXtdP.OJv3cGtjXu79A15u8ggresIGrW.UJVVIPnKcudK26', '1'),
(105, 'Nazilla Afifa', '000220', '3107605887', '$2y$10$grFUbA04ZWe3vBXyHTuDHOQARAR1NaGocIiY/se3Xq8WfjA.FLmBq', '1'),
(106, 'Qoriza Nursabrina Putriadi', '000223', '0093700516', '$2y$10$AwMrHs/v79ieloQ7nKIRs.okE7F6aHRq.j77z4n/icGfh/N9GvZFu', '1'),
(107, 'Raihana Shafiyyah', '000249', '0109975188', '$2y$10$gywxUbU9l/C7gEZldpg1b..cYAUUPNbfTs3UtMYF6kPdlQnhufSJq', '1'),
(108, 'Shafa Khairunnisa Putri', '000224', '0091634286', '$2y$10$8CQ6YC2Ax87XgyuBq947LuinLnzSwKin.gEdAeVG8D2hw814TDUoy', '1'),
(109, 'Tara Lubna Surya Arundati', '000227', '0105935704', '$2y$10$j9JtabmkHAv3Ey.xaq.nL.M/XiVbV3fW/2pINyAuSmMiR6imRdDNi', '1'),
(110, 'Wiyana Aprilia Putri', '000225', '0107999450', '$2y$10$e2hRtlzGlUNf/PcQ9Oj0kOoCGhGiuj1EIenEJ/5eEc7EyxzBplms2', '1'),
(111, 'Zafiira Alvin', '000241', '0103692068', '$2y$10$6jADIYJWxJhRjDdBDzm4MeTiJAKzMC1d/FMOKkDj1k0YPOONIZq7a', '1'),
(112, 'Zakiah Salsabila', '000234', '0105636377', '$2y$10$2vScju0Z9jZd6CrwuoIS9./xtosORywvRXWjsqsdr4mQ3pyJGRwt6', '1'),
(113, 'Annisa Sausan Rahmadinda ', '000323', '0109132153', '$2y$10$1AkB.8DI1DsezRPge8X7PORyP7uGFef2rKnLpcR4VwaBZ/cvV4Wwq', '1'),
(114, 'Aqila Rizki Khairunnisa', '000202', '0097903850', '$2y$10$hw08PZEalg7wWwLFVgTvfeubgEMtc3Uvzo0OPaL.R.FvwFdsji4Dq', '1'),
(115, 'Baiq Keisya Lukita Ausi Salim', '000235', '0106345420', '$2y$10$TNVo5j8OActFrIrcJEHEDecsCpNECRtSVG4PjUkbiUkK6nku0x1Bq', '1'),
(116, 'Baiq Safira Ghaisani Algifary', '000219', '0097953011', '$2y$10$31lTi9ufV2kk3ps4/rRDbuQzxzgjWSopk38dQ3ULmxNMJMwsErWma', '1'),
(117, 'Dafina Nayla Qanita', '000238', '0103949903', '$2y$10$.4qxtJsivSogZMHQ2.MKWuGph6x5f8DS0BDYBEnGdwcEmDb2O8C4u', '1'),
(118, 'Farah Ghaniya Ramadhani', '000316', '0099702650', '$2y$10$s8NPblvg4YTS9evhtbya4umM9Yr2YDCkg2I0G6NnpcFFrxhbxOp46', '1'),
(119, 'Kayyisah Alida Zahrani', '000210', '0106968301', '$2y$10$RGU6s4fEyDCdZFO1IVolZ.G3qgsol6VUaZKjMLYsv4wl3y37lwyw6', '1'),
(120, 'Naura Qatrunnada Zahira', '000271', '0093610249', '$2y$10$haKmsYBzhMJMGYlTy0blIeMA89XoSQhC7.jyI08JubOtytqlXOCK2', '1'),
(121, 'Nur Afiya Hidayat', '000218', '0101642815', '$2y$10$V3JVA2mqY.M0db3u20DAluowxbu1xmOCcMl27UJ53LcKXtX49r4Ne', '1'),
(122, 'Nusaibah Wulan Salsabila', '000222', '0107619211', '$2y$10$iTEuzLHbOkOWZU7VlbPgoOcc6B0mofS5d.SykQCioERPurhmaq.wm', '1'),
(123, 'Permata Sefia Rahmadani', '000245', '3095695301', '$2y$10$DJQSS/NSbyCBx5xQY60pr.r5dqw5SF7mpdWGkOQnmu5ZRhPSDbZqy', '1'),
(124, 'Qonita Fadiya Karima', '000197', '0107322560', '$2y$10$ifA5xj7Dp6CB4YE2yfJbyOvowacxxqlyhCGd8SS6566YyoiRhfxfW', '1'),
(125, 'Rameyza Alya', '000215', '0102411918', '$2y$10$JfUQztEPy/39217faJH3y.6RTrMzSD56J3cOQsSI2Sv5Koam/rJY2', '1'),
(126, 'Rumilan Rahma Ninggrum', '000213', '3101459034', '$2y$10$UgOFomKbVkuFv2IGehZ.COCr7UQibsLy6OwNNJTqKw1Nr5Swo1mv2', '1'),
(127, 'Salwa Salsabila', '000243', '3106623028', '$2y$10$OH7B2RiOdwh8HZL6LXcb4uf./OWFHeevRhmkdEBBlCXgP/QtriQAG', '1'),
(128, 'Sylia Aqila Ramadhani', '000214', '3102530644', '$2y$10$4dHK4lzdaegybH/up2LVUOK4CaeYmnC.w4S45WpygdhCKT/loYSd.', '1'),
(129, 'Tabina Hafidhatul Amanah', '000260', '0109086796', '$2y$10$cFPNYDhbdAKXXJdYgKiP2e6XTf/xziaSuQt0sx4Rn/nN8qSdbQAaK', '1'),
(130, 'Sabrina Kayla Halwasifa', '000326', '3096179425', '$2y$10$9/oHwShEJCKT/IvQF442NuTOI1njv0IdTpE1Gyf06bAagxoRprGO.', '1'),
(131, 'H. Mas&#039;ud, S.Pd', '087777309245', '087777309245', '$2y$10$2c/2xJ1djI4KapVb0Fhcr.2VWWv/c6xgRwoEjJGgaaEkT7bHsqV/W', '2'),
(132, 'Hariani, S.P', '087716414235', '087716414235', '$2y$10$wuwhDc9HGQDJNnG5oTy3PeRLwnjtpmNDaW5E1gNyMwtcCdCCTIwJ.', '2'),
(133, 'Ammar Shobari Roshid, S.Sos', '085236229815', '085236229815', '$2y$10$xOO.ePRljbixL0A94lgx8e8EGuGWlQwl2cBJJI2C63A4co9Nik/HO', '2'),
(134, 'Sony Hidayat, S.Pd', '087858566523', '087858566523', '$2y$10$OnLBgl5oeHOB0lYCSOytruYmzdG4le1hOzOCUVsuUT46PTFpOQODG', '2'),
(135, 'Azkya Maulidina, S.Pd', '087864214485', '087864214485', '$2y$10$dKQDvooHPoychlaCVmivUeQwbAZMzig06CT8CQM8KFCfW15NBv94a', '2'),
(136, 'Lina Herawati', '085339433026', '085339433026', '$2y$10$vPlHYcGXXfLAd0s6KQQW0.gy8q3RiHvQPEN0AhzObe7n8dxndQuea', '2'),
(137, 'Muzanni, S.Sos', '081703123112', '081703123112', '$2y$10$78UAglLKxhnkqlksV2SvXuStF6Y5VfXTn4tGwQFDCE7SPShNrRmIK', '3'),
(138, 'Hurman Hairi, S.Pd', '087716607630', '087716607630', '$2y$10$Im9AEqqkQolaJapNEWUTTOFPlY44vOnqOP7Yvz/BBA2Q1WaSWqCXK', '2'),
(139, 'Adi Irwansyah, S.Pd, M.Pd', '081933140160', '081933140160', '$2y$10$FvnLVQkqgwgPNivzdw3gd.vGJjdDwY4jtBR6bR1ZFvTEleUzcyJC.', '3');

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `level` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Muzanni', 'muzanni', '$2y$10$KxBiAOXoJ6EnGmtEof6qqOOTvfSE6oceqpJFITfM17HuSkBe25k/m', '2');

-- --------------------------------------------------------

--
-- Table structure for table `data_juz`
--

CREATE TABLE `data_juz` (
  `id` int(10) NOT NULL,
  `juz` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_juz`
--

INSERT INTO `data_juz` (`id`, `juz`) VALUES
(1, 'Juz 1'),
(2, 'Juz 2'),
(3, 'Juz 3'),
(4, 'Juz 4'),
(5, 'Juz 5'),
(6, 'Juz 6'),
(7, 'Juz 7'),
(8, 'Juz 8'),
(9, 'Juz 9'),
(10, 'Juz 10'),
(11, 'Juz 11'),
(12, 'Juz 12'),
(13, 'Juz 13'),
(14, 'Juz 14'),
(15, 'Juz 15'),
(16, 'Juz 16'),
(17, 'Juz 17'),
(18, 'Juz 18'),
(19, 'Juz 19'),
(20, 'Juz 20'),
(21, 'Juz 21'),
(22, 'Juz 22'),
(23, 'Juz 23'),
(24, 'Juz 24'),
(25, 'Juz 25'),
(26, 'Juz 26'),
(27, 'Juz 27'),
(28, 'Juz 28'),
(29, 'Juz 29'),
(30, 'Juz 30');

-- --------------------------------------------------------

--
-- Table structure for table `data_kelas`
--

CREATE TABLE `data_kelas` (
  `id` int(10) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_kelas`
--

INSERT INTO `data_kelas` (`id`, `kelas`) VALUES
(1, 'VII-A'),
(2, 'VII-B'),
(3, 'VIII-A'),
(4, 'VIII-B'),
(5, 'VIII-C'),
(6, 'VIII-D'),
(7, 'IX-A'),
(8, 'IX-B'),
(9, 'IX-C');

-- --------------------------------------------------------

--
-- Table structure for table `data_pentasmi`
--

CREATE TABLE `data_pentasmi` (
  `id` int(11) NOT NULL,
  `pentasmi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pentasmi`
--

INSERT INTO `data_pentasmi` (`id`, `pentasmi`) VALUES
(1, 'Muzanni, S.Sos'),
(2, 'Hurman Hairi, S.Pd'),
(3, 'Rakmah Humairoh, S.Pd'),
(4, 'Lina Herawati'),
(5, 'Azkya Maulidina, S.Pd'),
(6, 'Sony Hidayat, S.Pd'),
(7, 'Ammar Shobari Roshid, S.Sos'),
(8, 'Hariani, S.P'),
(9, 'H. Mas\'ud, S.Pd');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(10) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nama`, `nis`) VALUES
(10, 'Ahmad Faisal', '000312'),
(11, 'Ahmad Tsania Mukhtar', '000322'),
(12, 'Ayadi Rayyan Alkindy', '000277'),
(13, 'Azka Helmi Widodo', '000287'),
(14, 'Dimas Ferry Anggara', '000307'),
(15, 'Diya Arka Ararya', '000305'),
(16, 'Dzakiy Darmabakti', '000279'),
(17, 'Fadhil Surya Permana', '000288'),
(18, 'Farraz Abbiyyu Saputra', '000284'),
(19, 'Fawaz Maulana ', '000319'),
(20, 'Lalu Abid Muafa', '000303'),
(21, 'Lalu Adri Adinata Kesuma', '000302'),
(22, 'Lalu Muhammad Asyam Burhan', '000290'),
(23, 'Lalu Muhammad Azhfar Rozin', '000310'),
(24, 'M. Nabil Masajid', '000313'),
(25, 'M. Rafi Pratama Juman', '000300'),
(26, 'Moch.Reski Ardiansyah', '000280'),
(27, 'Muhammad Fadhil Kusuma Pradana', '000276'),
(28, 'Muhammad Syaddaad Safaroz', '000304'),
(29, 'Nur Wahyu Hafiz Ananto', '000285'),
(30, 'Raissa Arick Pratama', '000286'),
(31, 'Rizky Adiwa Fadhlurrahman', '000289'),
(32, 'Rizky Riyan Adi Saputra', '000296'),
(33, 'Royyan Sardar Rabbani', '000309'),
(34, 'Sayyid Arkana Safaras', '000306'),
(35, 'Yazid Ghaisan', '000283'),
(36, 'Ziyad Novian Kamil', '000301'),
(37, 'Alief Khoirullah Syawfar ', '000325'),
(38, 'Aimee Aulia Hatta', '000293'),
(39, 'Ainun Nur Inayah Ashar', '000315'),
(40, 'Aisyah Fataniya Ilmi', '000281'),
(41, 'Annisa Alviena', '000314'),
(42, 'Baiq Aquilaria Rahmanina', '000297'),
(43, 'Banyu Bening Hayu Laras Kinasih', '000320'),
(44, 'Dina Melina', '000318'),
(45, 'Keisha Afifa Anwar', '000311'),
(46, 'Khairunnisa Wihdatul Ummah', '000308'),
(47, 'Lisaana Shidqin', '000292'),
(48, 'Mutiara', '000282'),
(49, 'Nafa Humairatul Zahra', '000295'),
(50, 'Nashira Abidah Widyasmara', '000278'),
(51, 'Natasya Putri Heryawan', '000291'),
(52, 'Sri Wahyu Handayani', '000275'),
(53, 'Trya Anindita Putri Zahra', '000298'),
(54, 'Zahrania Atika Widodo', '000299'),
(55, 'Afhta Amsyda', '000253'),
(56, 'Ahmad Abiyyu Syakieb', '000233'),
(57, 'Daffa Noor Fayyadh', '000199'),
(58, 'Fabian putra setiawan', '000229'),
(59, 'Hisyam Athaya Ramadhan', '000262'),
(60, 'Lalu Azza Monalvino Rahman', '000208'),
(61, 'Lalu Muhammad Faris Akbar', '000236'),
(62, 'M. Athaya Arsandi', '000237'),
(63, 'M. F. Alimul Alam', '000246'),
(64, 'Muhammad Fatih Zakwan', '000242'),
(65, 'Muhammad Haidhar Firjatullah', '000231'),
(66, 'Muhammad Jagad Ar Rayyan', '000205'),
(67, 'Muhammad Nabil', '000259'),
(68, 'Muhammad Rean Kimiko Perdana', '000195'),
(69, 'Muhammad Sultan Nabil', '000207'),
(70, 'Muhammad Syauqi Rabbani', '000217'),
(71, 'Muhammad Thoriq Al Fath', '000274'),
(72, 'Rafka Qaisar Pratama', '000209'),
(73, 'Salim Rahmatulloh Rauhun', '000251'),
(74, 'L. M. Abid Anwar', '000324'),
(75, 'Abdul Aziz', '000317'),
(76, 'Afif Ghaisan', '000267'),
(77, 'Ahmad Hafiz', '000250'),
(78, 'Ahmad Rifqi Al Falah', '000247'),
(79, 'Akhmad Wahyu Suhartono', '000201'),
(80, 'Fath Fathir Ridhollah', '000268'),
(81, 'Helmi Radithya Saguno', '000258'),
(82, 'Lalu Ghazi Patria Mahardika', '000212'),
(83, 'Muhammad Abid Farras Satria', '000221'),
(84, 'Muhammad Athalarik Rassyad Gibran', '000240'),
(85, 'Muhammad Dimas Prasetyo', '000203'),
(86, 'Muhammad Fadly Parsa', '000211'),
(87, 'Muhammad Haya Rasyid Al Khalifa', '000206'),
(88, 'Muhammad Raffay Abrar Efendi', '000232'),
(89, 'Muhammad Ragil Trivisar', '000204'),
(90, 'Muhammad Rapi\'i', '000252'),
(91, 'Nazril Khairan Windya Putra', '000216'),
(92, 'Rafi Nando Desbrian', '000256'),
(93, 'Rafiq Aditya Mulyakusuma', '000254'),
(94, 'Riffat Adli', '000200'),
(95, 'Rizqi Akbar', '000228'),
(96, 'Shafwan Alim Zuhdi', '000321'),
(97, 'Syafiq Satya Mulyakusuma', '000255'),
(98, 'Almalikaa Yudhiyanto Putri', '000244'),
(99, 'Amira Kultsum Hanifa', '000226'),
(100, 'Athaya Queena Yonata', '000248'),
(101, 'Faisyah Namirah Alhabsyi', '000257'),
(102, 'Hanien Ahmad Muharis', '000264'),
(103, 'Kaela Arista Nawfa', '000230'),
(104, 'keysha Etika Islami', '000269'),
(105, 'Mutiara Salsabila Khairani', '000198'),
(106, 'Nasywa Raihana Barik', '000239'),
(107, 'Nazilla Afifa', '000220'),
(108, 'Qoriza Nursabrina Putriadi', '000223'),
(109, 'Raihana Shafiyyah', '000249'),
(110, 'Shafa Khairunnisa Putri', '000224'),
(111, 'Tara Lubna Surya Arundati', '000227'),
(112, 'Wiyana Aprilia Putri', '000225'),
(113, 'Zafiira Alvin', '000241'),
(114, 'Zakiah Salsabila', '000234'),
(115, 'Annisa Sausan Rahmadinda ', '000323'),
(116, 'Aqila Rizki Khairunnisa', '000202'),
(117, 'Baiq Keisya Lukita Ausi Salim', '000235'),
(118, 'Baiq Safira Ghaisani Algifary', '000219'),
(119, 'Dafina Nayla Qanita', '000238'),
(120, 'Farah Ghaniya Ramadhani', '000316'),
(121, 'Kayyisah Alida Zahrani', '000210'),
(122, 'Naura Qatrunnada Zahira', '000271'),
(123, 'Nur Afiya Hidayat', '000218'),
(124, 'Nusaibah Wulan Salsabila', '000222'),
(125, 'Permata Sefia Rahmadani', '000245'),
(126, 'Qonita Fadiya Karima', '000197'),
(127, 'Rameyza Alya', '000215'),
(128, 'Rumilan Rahma Ninggrum', '000213'),
(129, 'Salwa Salsabila', '000243'),
(130, 'Sylia Aqila Ramadhani', '000214'),
(131, 'Tabina Hafidhatul Amanah', '000260'),
(132, 'Sabrina Kayla Halwasifa', '000326');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat`
--

CREATE TABLE `data_surat` (
  `id` int(3) NOT NULL,
  `surat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_surat`
--

INSERT INTO `data_surat` (`id`, `surat`) VALUES
(1, '1. Al-Fatihah'),
(2, '2. Al-Baqarah'),
(3, '3. Ali-Imran'),
(4, '4. An-Nisa'),
(5, '5. Al-Maidah'),
(6, '6. Al-An\'am'),
(7, '7. Al-A\'raf'),
(8, '8. Al-Anfal'),
(9, '9. At-Taubah'),
(10, '10. Yunus'),
(11, '11. Hud'),
(12, '12. Yusuf'),
(13, '13. Ar-Rad'),
(14, '14. Ibrahim'),
(15, '15. Al-Hijr'),
(16, '16. An-Nahl'),
(17, '17. Al-Isra'),
(18, '18. Al-Kahf'),
(19, '19. Maryam'),
(20, '20. Thaha'),
(21, '21. Al-Anbiyaa'),
(22, '22. Al-Hajj'),
(23, '23. Al-Mu\'minun'),
(24, '24. An-Nur'),
(25, '25. Al-Furqon'),
(26, '26. Asy-Syu\'ara'),
(27, '27. An-Naml'),
(28, '28. Al-Qasas'),
(29, '29. Al-\'Ankabut'),
(30, '30. Ar-Rum'),
(31, '31. Luqman'),
(32, '32. As-Sajdah'),
(33, '33. Al-Ahzab'),
(34, '34. Saba'),
(35, '35. Fatir'),
(36, '36. Yasin'),
(37, '37. As-Saffat'),
(38, '38. Sad'),
(39, '39. Az-Zumar'),
(40, '40. Al-Mu\'min'),
(41, '41. Fussilat'),
(42, '42. Asy-Syura'),
(43, '43. Az-Zukhruf'),
(44, '44. Ad-Dukhan'),
(45, '45. Al-Jasiyah'),
(46, '46. Al-Ahqaf'),
(47, '47. Muhammad'),
(48, '48. Al-Fath'),
(49, '49. Al-Hujaraat'),
(50, '50. Qaf'),
(51, '51. Az-Zariyat'),
(52, '52. At-Tur'),
(53, '53. An-Najm'),
(54, '54. Al-Qamar'),
(55, '55. Ar-Rahman'),
(56, '56. Al-Waqi\'ah'),
(57, '57. Al-Hadid'),
(58, '58. Al-Mujadilah'),
(59, '59. Al-Hasyr'),
(60, '60. Al-Mumtahanah'),
(61, '61. As-Shaff'),
(62, '62. Al-Jumu\'ah'),
(63, '63. Al-Munafiqun'),
(64, '64. At-Taghabun'),
(65, '65. At-Talaq'),
(66, '66. At-Tahrim'),
(67, '67. Al-Mulk'),
(68, '68. Al-Qalam'),
(69, '69. Al-Haqqah'),
(70, '70. Al-Ma\'arij'),
(71, '71. Nuh'),
(72, '72. Al-Jin'),
(73, '73. Al-Muzammil'),
(74, '74. Al-Muddassir'),
(75, '75. Al-Qiyamah'),
(76, '76. Al-Insan'),
(77, '77. Al-Mursalat'),
(78, '78. An-Naba'),
(79, '79. An-Nazi\'at'),
(80, '80. Abasa'),
(81, '81. At-Takwir'),
(82, '82. Al-Infitar'),
(83, '83. Al-Mutaffifin'),
(84, '84. Al-Insyiqaq'),
(85, '85. Al-Buruj'),
(86, '86. At-Tariq'),
(87, '87. Al-A\'la'),
(88, '88. Al-Ghasyiyah'),
(89, '89. Al-Fajr'),
(90, '90. Al-Balad'),
(91, '91. Asy-Syams'),
(92, '92. Al-Lail'),
(93, '93. Ad-Dhuha'),
(94, '94. Al-Insyirah'),
(95, '95. At-Tin'),
(96, '96. Al-Alaq'),
(97, '97. Al-Qadr'),
(98, '98. Al-Bayyinah'),
(99, '99. Al-Zalzalah'),
(100, '100. Al-Adiyat'),
(101, '101. Al-Qoriah'),
(102, '102. At-Takatsur'),
(103, '103. Al-Ashr'),
(104, '104. Al-Humazah'),
(105, '105. Al-Fil'),
(106, '106. Al-Quraisy'),
(107, '107. Al-Maun'),
(108, '108. Al-Kautsar'),
(109, '109. Al-Kafirun'),
(110, '110. An-Nasr'),
(111, '111. Al-Lahab'),
(112, '112. Al-Ikhlas'),
(113, '113. Al-Falaq'),
(114, '114. An-Naas');

-- --------------------------------------------------------

--
-- Table structure for table `data_tahsin`
--

CREATE TABLE `data_tahsin` (
  `id` int(10) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `catatan` varchar(300) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_tahsin`
--

INSERT INTO `data_tahsin` (`id`, `tanggal`, `nama`, `kelas`, `catatan`, `keterangan`) VALUES
(9, '2024-06-20 02:52:11', 'Ahmad Faisal', 'VIII-A', 'tes', 'Setor'),
(10, '2024-06-20 02:52:59', 'Ahmad Tsania Mukhtar', 'VII-B', 'tes', 'Setor');

-- --------------------------------------------------------

--
-- Table structure for table `data_tasmi`
--

CREATE TABLE `data_tasmi` (
  `id` int(10) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nama` varchar(150) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `juz` varchar(20) NOT NULL,
  `predikat` varchar(40) NOT NULL,
  `pentasmi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_tasmi`
--

INSERT INTO `data_tasmi` (`id`, `tanggal`, `nama`, `kelas`, `juz`, `predikat`, `pentasmi`) VALUES
(5, '2024-06-20 02:56:12', 'Ahmad Faisal', 'VII-A', 'Juz 11', 'Jayyid Jiddan', 'Hurman Hairi, S.Pd');

-- --------------------------------------------------------

--
-- Table structure for table `data_ziyadah`
--

CREATE TABLE `data_ziyadah` (
  `id` int(10) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nama` varchar(100) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `surat` varchar(20) DEFAULT NULL,
  `ayat` varchar(10) DEFAULT NULL,
  `catatan` varchar(100) DEFAULT NULL,
  `keterangan` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_ziyadah`
--

INSERT INTO `data_ziyadah` (`id`, `tanggal`, `nama`, `kelas`, `surat`, `ayat`, `catatan`, `keterangan`) VALUES
(8, '2024-06-20 02:54:51', 'Ahmad Faisal', 'VII-A', '13. Ar-Rad', '1', 'tes', 'Setor'),
(9, '2024-06-20 02:55:19', 'Ahmad Tsania Mukhtar', 'VIII-A', '13. Ar-Rad', '2', 'tes', 'Setor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_akun`
--
ALTER TABLE `data_akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_juz`
--
ALTER TABLE `data_juz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kelas`
--
ALTER TABLE `data_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pentasmi`
--
ALTER TABLE `data_pentasmi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_surat`
--
ALTER TABLE `data_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_tahsin`
--
ALTER TABLE `data_tahsin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_tasmi`
--
ALTER TABLE `data_tasmi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_ziyadah`
--
ALTER TABLE `data_ziyadah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_akun`
--
ALTER TABLE `data_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_juz`
--
ALTER TABLE `data_juz`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `data_kelas`
--
ALTER TABLE `data_kelas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_pentasmi`
--
ALTER TABLE `data_pentasmi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `data_surat`
--
ALTER TABLE `data_surat`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `data_tahsin`
--
ALTER TABLE `data_tahsin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_tasmi`
--
ALTER TABLE `data_tasmi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_ziyadah`
--
ALTER TABLE `data_ziyadah`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
