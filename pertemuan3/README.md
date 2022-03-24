
IDE : SISTEM APLIKASI MAKANAN CEPAT SAJI

![Capture](https://user-images.githubusercontent.com/71611488/159816582-2427aa8f-a63c-408c-a9e4-a2f1d0f8f256.PNG)
NG)

DESKRIPSI :
OBurger adalah aplikasi Food Delivery yang berisi makanan cepat saji, seperti burger, ayam goreng, berbagai macam minuman soda, dll . fitur aplikasi ini adalah :

1. Memesan makanan
2. Search box berbagai menu makanan
3. Menu favorit makanan



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
- tanggal

KONFIRMASI ORDER
- *id status
- id bayar
- id user
- status order
- tanggal




