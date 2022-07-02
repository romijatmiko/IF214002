
Nama : Romi Jatmiko

Kelas : IF E

NIM : 1207050146


DESKRIPSI : OBurger adalah aplikasi restoran cepat saji yang berisi makanan cepat saji, seperti burger, ayam goreng, berbagai macam minuman soda, dll . fitur aplikasi ini adalah :

-Memesan makanan
-Kategori Makanan
-Menu favorit makanan
-Menu Keranjang makanan
- Edit Profile
- Admin Tambah Produk

<h2 b >1. Jelaskan contoh-contoh perintah SQL beserta kegunannya !</h2>


Jawab :


<h2 b >Data Definition Language (DDL)</h2>



Data Definition Languange (DDL) adalah perintah yang digunakan untuk mendefinisikan data seperti membuat tabel database baru, mengubah dataset, dan menghapus data.




•	Perintah Create: perintah untuk membuat tabel baru di dalam sebuah database adalah create. Tak cuma untuk tabel baru, tapi juga database maupun kolom baru. Kamu bisa membuat sebuah query dengan contoh ‘CREATE DATABASE nama_database.



•	Perintah Alter: biasa digunakan ketika seseorang ingin mengubah struktur tabel yang sebelumnya sudah ada. Bisa jadi dalam hal ini adalah seperti nama tabel, penambahan kolom, mengubah, maupun menghapus kolom serta menambahkan atribut lainnya.



•	Perintah Rename: dapat kamu gunakan untuk mengubah sebuah nama di sebuah tabel ataupun kolom yang ada. Bila kamu menggunakan perintah ini maka query-nya menjadi ‘RENAME TABLE nama_tabel_lama TO nama_tabel_baru”



•	Perintah Drop: Bisa kamu gunakan dalam menghapus baik itu berupa database, table maupun kolom hingga index.



•	Perintah Show: perintah DDL ini digunakan untuk menampilkan sebuah tabel yang ada.





<h2 b >Data Manipulation Language (DML)</h2>




Pada database SQL, perintah yang digunakan untuk memanipulasi data adalah Data Manipulation Language atau DML.



•	Perintah Insert: Kamu bisa menggunakan perintah ini untuk memasukkan sebuah record baru di dalam sebuah tabel database.



•	Perintah Select: Select digunakan untuk memanipulasi data dengan tujuan menampilkan maupun mengambil sebuah data pada tabel. Data yang diambil pun tidak hanya terbatas pada satu jenis saja melainkan lebih dari satu tabel dengan memakai relasi.



•	Perintah update: Ini dapat kamu gunakan ketika ingin melakukan pembaruan data di sebuah tabel. Contohnya saja jika ada kesalahan ketika memasukkan sebuah record. Kamu tidak perlu menghapusnya dan bisa diperbaiki menggunakan perintah ini.



•	Perintah Delete: Perintah DML ini dapat digunakan ketika kamu ingin menghapus sebuah record yang ada dalam sebuah tabel.



========================================================================================================================================================================================



<h2 b >2. Rancang solusi digital dari satu permasalahan yang ada di sekitar Anda.</h2>



A. Berdasarkan ERD yang telah dibuat, buatlah implementasi basis data dari ERD tersebut dalam bentuk tabel basis data lengkap dengan Primary Key, Foreign Key dengan menggunakan perintah CREATE TABLE bahasa SQL. Anda dapat menggunakan vendor basis data yang Anda sukai (MySQL / PostgreSQL / SQL Server / dsb.). Jika belum sempat install basis data di laptop, bisa menggunakan sqliteonline.com untuk mengecek keberhasilan pembuatan tabelnya.
Dikerjakan di repository Github /uts-praktikum/README.md. Kode SQL dapat ditulis menggunakan md 


Jawab :


```sql
CREATE TABLE `user` (
  `id_user` INT (10) PRIMARY KEY,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
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

```



