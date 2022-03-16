IDE : SISTEM APLIKASI DELIVERY MAKANAN 


DESKRIPSI :
OBurger adalah aplikasi Food Delivery yang berisi makanan cepat saji, seperti burger, ayam goreng, berbagai macam minuman soda, dll . fitur aplikasi ini adalah :

1. Memesan makanan
2. Delivery makanan
3. Search box berbagai menu makanan



<h1 b >ENTITAS DAN ATRIBUT</h1>

USER
- id user
- nama 
- alamat 
- tempat lahir 
- tanggal lahir 
- no hp 
- email 
- username 
- password

ADMIN
- id admin
- username
- password


MAKANAN
- id makanan
- nama makanan
- harga makanan
- jumlah 

MINUMAN
- id minuman
- nama minuman
- harga minuman
- jumlah 

KATEGORI
- id kategori
- id makanan
- id minuman


FAVORIT USER
- id favorit
- id user
- id makanan
- id minuman

KERANJANG 
- id keranjang
- id user
- id makanan
- id minuman
- jumlah makanan
- jumlah minuman

CHECKOUT
- id user
- id order
- tanggal
- status order
- id makanan
- id minuman
- jumlah makanan
- jumlah minuman

STATUS ORDER
- id status
- status order
- id order
- tanggal

LEVEL
- id user
- id admin
- id level




