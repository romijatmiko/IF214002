
1. Rancang solusi digital dari permasalahan yang teman-teman anggap penting untuk diselesaikan :

Jawab :

-tidak ada tampilan product, solusinya adalah menambahkan fitur product

-user kebingungan ketika tampilan product tersebut tidak ada kategorinya, solusinya adalah membuat fitur kategori, untuk mengkategorikan product
-user kebingungan ketika ingin memesan banyak product, solusinya adalah membuat fitur keranjang, untuk menampung satu atau banyak barang untuk dipesan.
-user kebingungan ketika ingin mengirimkan product yang dipesan, solusinya adalah membuat fitur orders
-admin kebingungan ketika ingin mengecek pesanan user, solusinya adalah membuat fitur preview order pada halaman admin
-admin kebingungan ketika ingin menambahkan productnya, solusiny adalah membuat fitur add product
-didalam aplikasi admin bingung ketika tidak ada tampilan untuk melihat seberapa banyak user yang order, seberapa banyak networth yang admin dapat, seberapa banyak peningkata perbulan yang admin dapat dll., solusinya adalah membuat visualisasi data dari orders dll


2. Tentukan fitur-fitur utama dari solusi digital tersebut

Jawab :

Fitur utama dari aplikasi saya adalah :
Dari Sisi User
- fitur login, daftar, logout
- fitur kategori
- fitur view product
- fitur tambah product ke keranjang
- fitur tambah product ke favorit
- fitur checkout atau orders

Dari Sisi Admin
- fitur login, daftar, logout
- fitur add product
- fitur view orders
- fitur view total orders, total networth, dan lain lain, diimplementasikan ke dalam cart


3. Buat rancangan basis datanya dalam bentuk ER diagram

![image](https://user-images.githubusercontent.com/71611488/176568139-bcb7db83-b06b-4b90-bfd9-b3a8bbeb4923.png)



4. Buat model fisik dari basis datanya dalam bentuk query SQL yang meliputi: 1) data definition language untuk pembuatan tabel, 2) data manipulation language untuk contoh data awal, 3) data query language untuk analisis / business intelligence

<h2 b >Data Definition Language (DDL) !</h2>


```sql
CREATE DATABASE o_burger;

```
```sql
CREATE TABLE `user` (
  `id_user` INT (10) PRIMARY KEY,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
);

```

```sql
CREATE TABLE `admin` (
  `id_admin` INT (10) PRIMARY KEY,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
);

```

```sql
CREATE TABLE `menu` (
  `id_menu` INT (10) PRIMARY KEY,
  `nama_menu` varchar(30) NOT NULL,
  `img` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `harga_menu` varchar(30) NOT NULL,
  `deskripsi` Text NOT NULL
);

```

```sql
CREATE TABLE `orders` (
  `id_orders` INT (10) PRIMARY KEY,
  `id_user` INT(10) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `qty` INT(10) NOT NULL,
FOREIGN KEY (id_user)
       REFERENCES user (id_user), 

);

```

<h2 b >Data Manipulation Language (DML) !</h2>

```sql
INSERT INTO menu ( id_menu, nama_menu, img, harga_menu,deskripsi)

VALUES (1, 'Burger Deluxe' , 'kfc-web_burger-deluxe_t.png', 'makanan','35000', 'burger dibalut dengan keju');

```
```sql
INSERT INTO menu ( id_user, nama, username,password,email)

VALUES (1, 'romijatmiko' , 'romijatmiko', '12345', 'romijatmiko033@gmail.com');

```

<h2 b >Data Query Language (DQL ) !</h2>

1. cari info menu berdasarkan id

```sql
SELECT * FROM menu
WHERE id_menu= 3;

```
2. menampilkan seluruh menu

```sql
SELECT * FROM menu;

```

3. menampilkan kategori menu makanan

```sql
SELECT * FROM menu WHERE  kategori LIKE 'makanan';

```

4. menampilkan kategori menu minuman

```sql
SELECT * FROM menu WHERE  kategori LIKE 'minuman';

```
5. menampilkan kategori menu burger

```sql
SELECT * FROM menu WHERE  kategori LIKE 'burger';

```

6. Update user

```sql
"INSERT INTO u_user SET
               id_user = '$_POST[id_user]',
               username = '$_POST[username]',
               password = '$_POST[password]',
               nama = '$_POST[nama]',
               email = '$_POST[email]'");

```
8. Update produk

```sql
"INSERT INTO menu SET
               id_menu = '$_POST[id_menu]',
               nama_menu = '$_POST[nama_menu]',
               image = '$_POST[image]',
               kategori = '$_POST[kategori]',
               deskripsi = '$_POST[deskripsi]',
               harga = '$_POST[harga]',
               stock = '$_POST[stock]'");

```





