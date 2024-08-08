   ============ KELAS 7c ==========
    
    CREATE TABLE `sismart`.`data_7c1` (`id` INT(5) NOT NULL AUTO_INCREMENT , `kelas` VARCHAR(20) NOT NULL ,
    `semester` VARCHAR(20) NOT NULL , `pekan` VARCHAR(20) NOT NULL , `periode` VARCHAR(20) NOT NULL ,
    `tanggal` VARCHAR(50) NOT NULL , `nama_waka` VARCHAR(30) NOT NULL , `nama_walas` VARCHAR(30) NOT NULL ,
    `ttd_waka` VARCHAR(20) NOT NULL , `ttd_walas` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
    
    CREATE TABLE `sismart`.`data_7c2` (`id` INT(5) NOT NULL AUTO_INCREMENT , `kelas` VARCHAR(20) NOT NULL ,
    `semester` VARCHAR(20) NOT NULL , `pekan` VARCHAR(20) NOT NULL , `periode` VARCHAR(20) NOT NULL ,
    `tanggal` VARCHAR(50) NOT NULL , `nama_waka` VARCHAR(30) NOT NULL , `nama_walas` VARCHAR(30) NOT NULL ,
    `ttd_waka` VARCHAR(20) NOT NULL , `ttd_walas` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
    
    CREATE TABLE `sismart`.`data_7c3` (`id` INT(5) NOT NULL AUTO_INCREMENT , `kelas` VARCHAR(20) NOT NULL ,
    `semester` VARCHAR(20) NOT NULL , `pekan` VARCHAR(20) NOT NULL , `periode` VARCHAR(20) NOT NULL ,
    `tanggal` VARCHAR(50) NOT NULL , `nama_waka` VARCHAR(30) NOT NULL , `nama_walas` VARCHAR(30) NOT NULL ,
    `ttd_waka` VARCHAR(20) NOT NULL , `ttd_walas` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
    
    CREATE TABLE `sismart`.`data_7c4` (`id` INT(5) NOT NULL AUTO_INCREMENT , `kelas` VARCHAR(20) NOT NULL ,
    `semester` VARCHAR(20) NOT NULL , `pekan` VARCHAR(20) NOT NULL , `periode` VARCHAR(20) NOT NULL ,
    `tanggal` VARCHAR(50) NOT NULL , `nama_waka` VARCHAR(30) NOT NULL , `nama_walas` VARCHAR(30) NOT NULL ,
    `ttd_waka` VARCHAR(20) NOT NULL , `ttd_walas` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

        INSERT INTO `data_7c1` (`id`, `kelas`, `semester`, `pekan`, `periode`, `tanggal`, `nama_waka`, `nama_walas`, `ttd_waka`, `ttd_walas`) VALUES (NULL, '', '', '', '', '', 'Siti Rohul Isnaini, S.Pd', 'lina', 'isna.jpg', 'lina.jpg');

        INSERT INTO `data_7c2` (`id`, `kelas`, `semester`, `pekan`, `periode`, `tanggal`, `nama_waka`, `nama_walas`, `ttd_waka`, `ttd_walas`) VALUES (NULL, '', '', '', '', '', 'Siti Rohul Isnaini, S.Pd', 'lina', 'isna.jpg', 'lina.jpg');

        INSERT INTO `data_7c3` (`id`, `kelas`, `semester`, `pekan`, `periode`, `tanggal`, `nama_waka`, `nama_walas`, `ttd_waka`, `ttd_walas`) VALUES (NULL, '', '', '', '', '', 'Siti Rohul Isnaini, S.Pd', 'lina', 'isna.jpg', 'lina.jpg');

        INSERT INTO `data_7c4` (`id`, `kelas`, `semester`, `pekan`, `periode`, `tanggal`, `nama_waka`, `nama_walas`, `ttd_waka`, `ttd_walas`) VALUES (NULL, '', '', '', '', '', 'Siti Rohul Isnaini, S.Pd', 'lina', 'isna.jpg', 'lina.jpg');

        CREATE TABLE `sismart`.`rkpp_7c1` (`id` INT(5) NOT NULL AUTO_INCREMENT , 
`hari` VARCHAR(20) NOT NULL , `mapel` VARCHAR(30) NOT NULL , `rp` VARCHAR(100) NOT NULL , 
`ts` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

        CREATE TABLE `sismart`.`rkpp_7c2` (`id` INT(5) NOT NULL AUTO_INCREMENT , 
`hari` VARCHAR(20) NOT NULL , `mapel` VARCHAR(30) NOT NULL , `rp` VARCHAR(100) NOT NULL , 
`ts` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

        CREATE TABLE `sismart`.`rkpp_7c3` (`id` INT(5) NOT NULL AUTO_INCREMENT , 
`hari` VARCHAR(20) NOT NULL , `mapel` VARCHAR(30) NOT NULL , `rp` VARCHAR(100) NOT NULL , 
`ts` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

        CREATE TABLE `sismart`.`rkpp_7c4` (`id` INT(5) NOT NULL AUTO_INCREMENT , 
`hari` VARCHAR(20) NOT NULL , `mapel` VARCHAR(30) NOT NULL , `rp` VARCHAR(100) NOT NULL , 
`ts` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;



    
    