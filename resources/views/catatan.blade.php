0.  Tambah tabel users
1.  table usr_additional add id int 11 auto increment
2.  Penambahan dt_additional
    type = COMPANY	
    seq = 1		
    desc = AREA_WEST
    info = 12345
    info2 = CPB
    info3 = FISH FEED
    info4 = PT. Central Pertiwi Bahari
    parent = ?
    display = ?
    info5 = Pertiwi Cikampek

    type = IDCOMPANY	
    seq = 1		
    desc = AREA_WEST
    info = 12345
    info2 = CKP
    info3 = FISH FEED
    info4 = ?
    parent = ?
    display = ?
    info5 = ?

3.  update tbluser set company = '12345'  (tergantung user ada di area mana)
    change structure company dari 5 menjadi 20
4.  tbl_userimage add field zimage type blob
    Penamambaan record user_id = -123 zimage = image kosong
5.  add tabel baru (untuk latihan)
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
6.  add tabel baru
    CREATE TABLE `tbl_userphoto_add` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `user_id` varchar(50) NOT NULL,
    `zimage` blob,
    `seq` int(2) DEFAULT NULL,
    `flag` char(1) DEFAULT NULL,
    PRIMARY KEY (`id`)
    )
    Penamambaan record user_id = -123 zimage = image kosong
7.  add tabel baru  (untuk latihan)
    CREATE TABLE `export_profile` (
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
