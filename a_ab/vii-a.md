   ============ KELAS 7A ==========
    
    CREATE TABLE `rkpp`.`data_7a1` (`id` INT(5) NOT NULL AUTO_INCREMENT , `kelas` VARCHAR(20) NOT NULL ,
    `semester` VARCHAR(20) NOT NULL , `pekan` VARCHAR(20) NOT NULL , `periode` VARCHAR(20) NOT NULL ,
    `tanggal` VARCHAR(50) NOT NULL , `nama_waka` VARCHAR(30) NOT NULL , `nama_walas` VARCHAR(30) NOT NULL ,
    `ttd_waka` VARCHAR(20) NOT NULL , `ttd_walas` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
    
    CREATE TABLE `rkpp`.`data_7a2` (`id` INT(5) NOT NULL AUTO_INCREMENT , `kelas` VARCHAR(20) NOT NULL ,
    `semester` VARCHAR(20) NOT NULL , `pekan` VARCHAR(20) NOT NULL , `periode` VARCHAR(20) NOT NULL ,
    `tanggal` VARCHAR(50) NOT NULL , `nama_waka` VARCHAR(30) NOT NULL , `nama_walas` VARCHAR(30) NOT NULL ,
    `ttd_waka` VARCHAR(20) NOT NULL , `ttd_walas` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
    
    CREATE TABLE `rkpp`.`data_7a3` (`id` INT(5) NOT NULL AUTO_INCREMENT , `kelas` VARCHAR(20) NOT NULL ,
    `semester` VARCHAR(20) NOT NULL , `pekan` VARCHAR(20) NOT NULL , `periode` VARCHAR(20) NOT NULL ,
    `tanggal` VARCHAR(50) NOT NULL , `nama_waka` VARCHAR(30) NOT NULL , `nama_walas` VARCHAR(30) NOT NULL ,
    `ttd_waka` VARCHAR(20) NOT NULL , `ttd_walas` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
    
    CREATE TABLE `rkpp`.`data_7a4` (`id` INT(5) NOT NULL AUTO_INCREMENT , `kelas` VARCHAR(20) NOT NULL ,
    `semester` VARCHAR(20) NOT NULL , `pekan` VARCHAR(20) NOT NULL , `periode` VARCHAR(20) NOT NULL ,
    `tanggal` VARCHAR(50) NOT NULL , `nama_waka` VARCHAR(30) NOT NULL , `nama_walas` VARCHAR(30) NOT NULL ,
    `ttd_waka` VARCHAR(20) NOT NULL , `ttd_walas` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

        INSERT INTO `data_7a1` (`id`, `kelas`, `semester`, `pekan`, `periode`, `tanggal`, `nama_waka`, `nama_walas`, `ttd_waka`, `ttd_walas`) VALUES (NULL, '', '', '', '', '', 'Siti Rohul Isnaini, S.Pd', 'zakaria', 'isna.jpg', 'zakaria.jpg');

        INSERT INTO `data_7a2` (`id`, `kelas`, `semester`, `pekan`, `periode`, `tanggal`, `nama_waka`, `nama_walas`, `ttd_waka`, `ttd_walas`) VALUES (NULL, '', '', '', '', '', 'Siti Rohul Isnaini, S.Pd', 'zakaria', 'isna.jpg', 'zakaria.jpg');

        INSERT INTO `data_7a3` (`id`, `kelas`, `semester`, `pekan`, `periode`, `tanggal`, `nama_waka`, `nama_walas`, `ttd_waka`, `ttd_walas`) VALUES (NULL, '', '', '', '', '', 'Siti Rohul Isnaini, S.Pd', 'zakaria', 'isna.jpg', 'zakaria.jpg');

        INSERT INTO `data_7a4` (`id`, `kelas`, `semester`, `pekan`, `periode`, `tanggal`, `nama_waka`, `nama_walas`, `ttd_waka`, `ttd_walas`) VALUES (NULL, '', '', '', '', '', 'Siti Rohul Isnaini, S.Pd', 'zakaria', 'isna.jpg', 'zakaria.jpg');

        CREATE TABLE `rkpp`.`rkpp_7a1` (`id` INT(5) NOT NULL AUTO_INCREMENT , 
`hari` VARCHAR(20) NOT NULL , `mapel` VARCHAR(30) NOT NULL , `rp` VARCHAR(100) NOT NULL , 
`ts` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

        CREATE TABLE `rkpp`.`rkpp_7a2` (`id` INT(5) NOT NULL AUTO_INCREMENT , 
`hari` VARCHAR(20) NOT NULL , `mapel` VARCHAR(30) NOT NULL , `rp` VARCHAR(100) NOT NULL , 
`ts` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

        CREATE TABLE `rkpp`.`rkpp_7a3` (`id` INT(5) NOT NULL AUTO_INCREMENT , 
`hari` VARCHAR(20) NOT NULL , `mapel` VARCHAR(30) NOT NULL , `rp` VARCHAR(100) NOT NULL , 
`ts` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

        CREATE TABLE `rkpp`.`rkpp_7a4` (`id` INT(5) NOT NULL AUTO_INCREMENT , 
`hari` VARCHAR(20) NOT NULL , `mapel` VARCHAR(30) NOT NULL , `rp` VARCHAR(100) NOT NULL , 
`ts` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

    
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Senin', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Senin', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Senin', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Senin', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Senin', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Senin', 'Mapel', '', '');
    
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Selasa', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Selasa', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Selasa', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Selasa', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Selasa', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Selasa', 'Mapel', '', '');
    
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Rabu', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Rabu', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Rabu', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Rabu', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Rabu', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Rabu', 'Mapel', '', '');
    
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Kamis', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Kamis', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Kamis', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Kamis', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Kamis', 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, 'Kamis', 'Mapel', '', ''); 
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, "Jum'at", 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, "Jum'at", 'Mapel', '', '');
INSERT INTO `rkpp_7a1` (`id`, `hari`, `mapel`, `rp`, `ts`) VALUES (NULL, "Jum'at", 'Mapel', '', '');

    
    