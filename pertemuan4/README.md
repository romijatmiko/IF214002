DESKRIPSI :
OBurger adalah aplikasi restoran cepat saji yang berisi makanan cepat saji, seperti burger, ayam goreng, berbagai macam minuman soda, dll . fitur aplikasi ini adalah :

1. Memesan makanan
2. Search box berbagai menu makanan
3. Menu favorit makanan
4. Menu Keranjang makanan



<h1 b >ENTITAS DAN ATRIBUT</h1>

user
- *id_user
- nama
- alamat
- tempat_lahir
- tanggal_lahir
- no_hp 
- email 
- username 
- password

admin
- *id_admin
- username
- password


menu
- *id_menu
- nama menu
- harga menu

kategori_menu
- *id_kategori
- id_menu
- nama_kategori
- tipe_kategori


favorit_menu
- *id_favorit
- id_user
- id_menu

keranjang 
- *id_keranjang
- id_menu
- id_user
- jumlah_pesanan

bayar
- *id_bayar
- id_keranjang
- id_user
- tanggal_bayar

konfirmasi_pesanan
- *id_status
- id_bayar
- id_user
- status_order
- tanggal_konfirmasi
