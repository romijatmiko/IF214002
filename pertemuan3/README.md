
IDE : SISTEM APLIKASI MAKANAN CEPAT SAJI

![Diagram OBurger](https://user-images.githubusercontent.com/71611488/161178305-dd4d2b8d-f8b0-4ec8-878b-929977568587.jpg)




DESKRIPSI :
OBurger adalah aplikasi restoran cepat saji yang berisi makanan cepat saji, seperti burger, ayam goreng, berbagai macam minuman soda, dll . fitur aplikasi ini adalah :

1. Memesan makanan
2. Search box berbagai menu makanan
3. Menu favorit makanan
4. Menu Keranjang makanan



<h1 b >ENTITAS DAN ATRIBUT</h1>

USER
- *id user
- nama 
- alamat 
- tempat lahir 
- tanggal lahir 
- no hp 
- email 
- username 
- password

ADMIN
- *id admin
- username
- password


MENU
- *id menu
- nama menu
- harga menu

KATEGORI
- *id kategori
- id menu


FAVORIT MENU
- *id favorit
- id user
- id menu

KERANJANG 
- *id keranjang
- id menu
- id user
- jumlah pesanan

CHECKOUT
- *id bayar
- id keranjang
- id user
- tanggal bayar

KONFIRMASI ORDER
- *id status
- id bayar
- id user
- status order
- tanggal konfirmasi




