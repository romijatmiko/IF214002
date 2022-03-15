IDE : SISTEM APLIKASI DELIVERY MAKANAN 

![Screenshot (29)](https://user-images.githubusercontent.com/71611488/157787578-95db17c4-7411-489c-bb7a-d8ac461158b8.png)

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
- id user
- id makanan
- id minuman

KERANJANG 
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

LEVEL
- id user
- id admin
- id level




