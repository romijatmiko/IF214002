CREATE TABLE `user` (
  `id_user` INT (10) PRIMARY KEY,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tanggal_lahir` DATE  ,
  `no_hp` INT (10)
);

CREATE TABLE `admin` (
  `id_admin` INT (10) PRIMARY KEY,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
);

CREATE TABLE `menu` (
  `id_menu` INT (10) PRIMARY KEY,
  `nama_menu` varchar(30) NOT NULL,
  `harga_menu` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `deskripsi` Text NOT NULL
);

CREATE TABLE `menu_favorit` (
  `id_favorit` INT (10) PRIMARY KEY,
  `id_user` INT(10) NOT NULL,
  `id_menu` INT(10) NOT NULL,
FOREIGN KEY (id_user)
       REFERENCES user (id_user), 
FOREIGN KEY (id_menu)
       REFERENCES menu (id_menu) 

);

CREATE TABLE `kategori_menu` (
  `id_kategori` INT (10) PRIMARY KEY,
  `id_menu` INT(10) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
FOREIGN KEY (id_menu)
       REFERENCES menu (id_menu) 

);

CREATE TABLE `keranjang` (
  `id_keranjang` INT (10) PRIMARY KEY,
  `id_menu` INT(10) NOT NULL,
  `id_user` INT(10) NOT NULL,
  `banyaknya_pesanan` INT(15) NOT NULL,
  FOREIGN KEY (id_user)
       REFERENCES user (id_user), 
FOREIGN KEY (id_menu)
       REFERENCES menu (id_menu) 


);

CREATE TABLE `bayar` (
  `id_bayar` INT (10) PRIMARY KEY,
  `id_keranjang` INT(10) NOT NULL,
  `id_user` INT(10) NOT NULL,
  `banyaknya_pesanan` INT(15) NOT NULL,
  `tanggal_bayar` timestamp,
  `kode_bayar` INT(15) NOT NULL,
  `total_tagihan` INT(30) NOT NULL,
  FOREIGN KEY (id_user)
       REFERENCES user (id_user), 
FOREIGN KEY (id_keranjang)
       REFERENCES keranjang (id_keranjang) 

);

CREATE TABLE `konfirmasi_order` (
  `id_status` INT (10) PRIMARY KEY,
  `id_bayar` INT(10) NOT NULL,
  `id_user` INT(10) NOT NULL,
  `id_admin` INT(10) NOT NULL,
  `status_order` INT(15) NOT NULL,
  `tanggal_konfirmasi` timestamp,
  FOREIGN KEY (id_user)
       REFERENCES user (id_user), 
FOREIGN KEY (id_admin)
       REFERENCES admin (id_admin),
FOREIGN KEY (id_bayar)
       REFERENCES bayar (id_bayar) 

);
.
