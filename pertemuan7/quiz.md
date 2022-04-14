<h2 b >Quiz </h2>

1. Berikan contoh pemanfaatan data historis
2. Rancang ERD untuk penyimpanan data karyawan dari sebuah perusahaan, lengkap dengan data historis gaji, data historis tempat tinggal, dan data historis jabatan. Selanjutnya, implementasikan ERD tersebut pada basis data relasional (MySQL / PostgreSQL / SQL Server / dll) menggunakan perintah


Jawab : 

1. contoh pemanfaatan data historis :
- data historis jumlah subscribe, like, dan komentar youtube.
- data historis jumlah pembeli saham dalam suatu aplikasi
- data historis jumlah pembelian produk dalam suatu aplikasi dll.



2. penyimpanan data karyawan

<h1 b >ENTITAS DAN ATRIBUT</h1>

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

