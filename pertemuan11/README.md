Nama : Romi Jatmiko

Kelas : IF E

NIM : 1207050146



<h2 b >1. Data Definition Language (DDL) !</h2>


```sql
CREATE DATABASE o_burger;

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
  `harga_menu` varchar(30) NOT NULL,
  `deskripsi` Text NOT NULL
);

```

```sql
CREATE TABLE `menu_favorit` (
  `id_favorit` INT (10) PRIMARY KEY,
  `id_user` INT(10) NOT NULL,
  `id_menu` INT(10) NOT NULL,
FOREIGN KEY (id_user)
       REFERENCES user (id_user), 
FOREIGN KEY (id_menu)
       REFERENCES menu (id_menu) 

);

```

```sql
CREATE TABLE `kategori_menu` (
  `id_kategori` INT (10) PRIMARY KEY,
  `id_menu` INT(10) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
FOREIGN KEY (id_menu)
       REFERENCES menu (id_menu) 

);

```

```sql
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


<h2 b >2. Data Manipulation Language (DML) !</h2>

```sql
INSERT INTO menu ( id_menu, nama_menu, harga_menu,deskripsi)

VALUES (1, 'Cheese Burger' , '35000', 'burger dibalut dengan keju');

```
```sql
INSERT INTO menu ( id_menu, nama_menu, harga_menu,deskripsi)

VALUES (2, 'Beef Burger' , '45000', 'burger dibalut dengan daging 3 lapis');

```

```sql
INSERT INTO menu ( id_menu, nama_menu, harga_menu,deskripsi)

VALUES (3, 'Chinken Wins with cheese' , '25000', 'Ayam keju');

```

<h2 b >3. Data Query Language (DQL ) !</h2>

1. cari info chiken wings

```sql
SELECT * FROM menu
WHERE id_menu= 3;

```
2. menampilkan seluruh menu

```sql
SELECT * FROM menu;

```


