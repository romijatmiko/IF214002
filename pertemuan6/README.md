<h1 b >NORMALISASI DIAGRAM OBURGER </h1>

![new_diagram_OBurger (1)](https://user-images.githubusercontent.com/71611488/162273818-e03585d8-f80a-47ae-b30c-f8425c64a86d.jpg)


1. Tabel User

|🔑 id_user| username     | password     |  email                 |  nama           | alamat        | no_hp         | tanggal_lahir     |             
| -------   | ------------ | ------------ |------------------------|---------------- | --------------|---------------| ------------------|
| 1         | romijatmiko  | haha12345    | romijatmiko@gmail.com  | romi jatmiko    | Jatibarang    | 082312481258  | 2002-02-13        |
| 2         | zidan033     | ayam123      | zidan@gmail.com        | zidan anwar     | Jatisawit     | 082147577127  | 2003-09-16        |
| 3         | jean099      | burung123    | jean@gmail.com         | jean            | Jatitujuh     | 0873218884885 | 2001-10-12        |



2. Tabel Menu favorit

|🔑 id_favorit| id_user | id_menu |  
| -------      | ------- | -----  |
| 1            | 1       | 1      | 
| 2            | 1       | 2      | 
| 3            | 1       | 3      | 
| 4            | 2       | 1      | 
| 5            | 2       | 2      | 
| 6            | 3       | 3      | 


3. Tabel Kategori Menu 


|🔑 id_kategori| id_menu | nama_kategori |  
| -------   | ------- | -----          |
| 1         | 1       | makanan        | 
| 2         | 1       | burger         | 
| 3         | 2       | minuman        | 
| 4         | 2       | soda           | 
| 1         | 3       | makanan        | 
| 5         | 3       | Ayam goreng    | 


4. Tabel Menu 


|🔑 id_menu| nama_menu          | harga_menu        |  deskripsi_menu                     | 
| -------   | ------------ | ------------ |----------------                | 
| 1         | Beef Burger  | 25.000    |  Burger berisi daging sapi                   | 
| 2         | Coca Cola    | 8.000      | 1 gelas coca cola                    | 
| 3         | Ayam Goreng   | 12.000    | 1 pcs ayam goreng                           | 


5. Tabel Keranjang

|🔑 id_keranjang | id_menu    | id_user      |  banyak_pesanan        |          
| ------------    | --------- | ------------ | -----------------------|
| 1               | 1         | 3            | 3 pcs                  | 
| 1               | 2         | 3            | 1 pcs                  |
| 1               | 3         | 3            | 2 pcs                  |
| 2               | 2         | 1            | 1 pcs                  | 
| 2               | 3         | 1            | 2 pcs                  | 
| 3               | 3         | 2            | 2 pcs                  | 



6. Tabel bayar

|🔑 id_bayar      | id_keranjang      |  tanggal_bayar        |  kode_bayar        |  total_tagihan        |                  
| ------------    | ---------   | ------------ | -----------------------| -----------------------|
| 1               | 1            | 2022-02-22 18.00                  | 0101                  |107.000                  |
| 2               | 2            | 2022-03-01 09.00                 | 0202                  |32.000                  |
| 3               | 3            | 2022-03-07 08.00                 | 0303                  |24.000                  |




7. Tabel Konfirmasi Order

|🔑 id_status      | id_bayar      |  id_admin        |  status_order        |  tanggal_konfirmasi        |                  
| ------------    | ---------      | ------------     | -----------------------| -----------------------|
| 1               | 1              | 3                  | Suksess                  |2022-02-22 18.25                  |
| 2               | 2              | 1                | Suksess                  |2022-03-01 09.30                 |
| 3               | 3              | -                | Menunggu dikonfirmasi                  | -                 |



8. Tabel Admin

|🔑 id_admin| username     | password     |  email                 |  nama           |         
| -------   | ------------ | ------------ |------------------------|---------------- | 
| 1         | admin01  | 111    | herry@gmail.com  | herry    | 
| 2         | admin02     | 222      | ahmad@gmail.com        | ahmad     | 
| 3         | admin03      | 333    | indra@gmail.com         | indra            | 



