0.  Tambah tabel users
1.  table usr_additional add id int 11 auto increment
2.  Penambahan dt_additional
    type = COMPANY	
    seq = 1		
    desc = ?
    info = 12345
    info2 = CPB
    info3 = PT. Central Pertiwi Bahari
    info4 = FISH FEED
    parent = ?
    display = ?
    info5 = Pertiwi Cikampek
3.  update tbluser set company = '12345'  (tergantung user ada di area mana)
4.  tbl_userimage add field zimage type blob
5.  add tabel baru
    CREATE TABLE `import_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(30) NOT NULL,
  `kodesap` varchar(20) DEFAULT NULL,
  `noktp` varchar(40) DEFAULT NULL,
  `almtktp` text,
  `kelktp` varchar(50) DEFAULT NULL,
  `kecktp` varchar(50) DEFAULT NULL,
  `kotaktp` varchar(50) DEFAULT NULL,
  `propktp` varchar(50) DEFAULT NULL,
  `kdposktp` varchar(50) DEFAULT NULL,
  `almtrmh` text,
  `kelrmh` varchar(50) DEFAULT NULL,
  `kecrmh` varchar(50) DEFAULT NULL,
  `kotarmh` varchar(50) DEFAULT NULL,
  `proprmh` varchar(50) DEFAULT NULL,
  `kdposrmh` varchar(50) DEFAULT NULL,
  `tlppri` varchar(50) DEFAULT NULL,
  `faxpri` varchar(50) DEFAULT NULL,
  `hppri` varchar(50) DEFAULT NULL,
  `emailpri` varchar(50) DEFAULT NULL,
  `hobby` text,
  `namapsgn` varchar(50) DEFAULT NULL,
  `tmptlhrpsgn` varchar(50) DEFAULT NULL,
  `tgllhrpsgn` date DEFAULT NULL,
  `btkush` varchar(50) DEFAULT NULL,
  `tipeush` varchar(10) DEFAULT NULL,
  `npwp` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `almtush` text,
  `kelush` varchar(50) DEFAULT NULL,
  `kecush` varchar(50) DEFAULT NULL,
  `kotaush` varchar(50) DEFAULT NULL,
  `propush` varchar(50) DEFAULT NULL,
  `kdposush` varchar(50) DEFAULT NULL,
  `tlpush` varchar(50) DEFAULT NULL,
  `faxush` varchar(50) DEFAULT NULL,
  `hpush` varchar(50) DEFAULT NULL,
  `emailush` varchar(50) DEFAULT NULL,
  `lmusaha` decimal(4,1) DEFAULT NULL,
  `karakteristik` text,
  `namausaha` varchar(30) DEFAULT NULL,
  `namaalias` varchar(40) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `goldarah` varchar(2) DEFAULT NULL,
  `headgrp` varchar(20) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
)
