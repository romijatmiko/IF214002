<h2 b >Quiz </h2>

1. Berikan contoh pemanfaatan data historis
2. Rancang ERD untuk penyimpanan data karyawan dari sebuah perusahaan, lengkap dengan data historis gaji, data historis tempat tinggal, dan data historis jabatan. Selanjutnya, implementasikan ERD tersebut pada basis data relasional (MySQL / PostgreSQL / SQL Server / dll) menggunakan perintah


Jawab : 

1. contoh pemanfaatan data historis :
- data historis jumlah subscribe, like, dan komentar youtube.
- data historis jumlah pembeli saham dalam suatu aplikasi
- data historis jumlah pembelian produk dalam suatu aplikasi dll.



2. penyimpanan data karyawan

<h3 b >ENTITAS DAN ATRIBUT</h3>

karyawan
- *id_karyawan
- nama  
- tanggal lahir 
- no hp 
- email  


historis_jabatan
- *id_jabatan
- nama_jabatan
- id_karyawan
- tanggal_memperoleh_jabatan

historis_gaji
- *id_gaji
- id_karyawan
- id_jabatan
- tanggal_gajian
- total_gaji

historis_tempat_tinggal
- *id_tempat_tinggal
- id_karyawan
- Alamat
- Kecamatan
- Kabupaten
- Provinsi

<h3 b >DIAGRAM ERD</h3> 

![diagram_karyawan](https://user-images.githubusercontent.com/71611488/163298544-440c3ee4-ec8c-44d1-883c-3170955b00c8.jpg)

<h3 b >CREATE TABLE</h3> 


```
CREATE TABLE `karyawan` (
  `id_karyawan` VARCHAR (10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` DATE  ,
  `no_hp` INT (10)  ,
  PRIMARY KEY (`id_karyawan`)
);
```
```
CREATE TABLE `historis_jabatan` (
  `id_jabatan` VARCHAR (10) NOT NULL,
  `id_karyawan` VARCHAR (10) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL,
  `tanggal_memperoleh_jabatan` DATE  ,
  PRIMARY KEY (`id_jabatan`),
  FOREIGN KEY (`id_karyawan`)
);
```

```
CREATE TABLE `historis_gaji` (
  `id_gaji` VARCHAR (10) NOT NULL,
  `id_jabatan` VARCHAR (10) NOT NULL,
  `id_karyawan` VARCHAR (10) NOT NULL,
  `tanggal_gajian` DATE  ,
   `total_gaji` INT  ,
  PRIMARY KEY (`id_gaji`),
  FOREIGN KEY (`id_karyawan`),
   FOREIGN KEY (`id_jabatan`)
);
```
```
CREATE TABLE `historis_tempat_tinggal` (
  `id_tempat_tinggal` VARCHAR (10) NOT NULL,
  `id_karyawan` VARCHAR (10) NOT NULL,
  `alamat` VARCHAR (30) NOT NULL  ,
  `kecamatan` VARCHAR (30) NOT NULL  ,
  `kabupaten` VARCHAR (30) NOT NULL  ,
  `provinsi` VARCHAR (30) NOT NULL  ,
  PRIMARY KEY (`id_tempat_tinggal`),
  FOREIGN KEY (`id_karyawan`),
);
```



