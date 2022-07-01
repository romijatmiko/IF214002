<?php 

include './api/handlers/connection.php';

$var3 = mysqli_query($conn, "SELECT *
FROM menu
INNER JOIN keranjang
ON 
keranjang.id_menu = menu.id_menu");
$data2 = mysqli_fetch_array($var3);
if($data2)
{
    $mantap[] = $data2;

}
if (isset($_POST['submit'])) {
    $result = mysqli_query($conn, "INSERT INTO orders SET
    alamat1 = '$_POST[alamat1]',
    alamat2 = '$_POST[username]',
    alamat1 = '$_POST[password]',
    kodepos = '$_POST[nama]',
    email = '$_POST[email]'");
                if ($result) {
            echo "<script>alert('Yeyy, Kamu Berhasil Menambahkan Ke Keranjang')</script>";
          
          } else {
                    echo "<script>alert('Woops! Something Wrong Went.')</script>";
                }
        }

?>
<section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                            <?php
                         foreach ( $mantap as $hehe){
                            $cost = $hehe['harga'] * $hehe['jumlah']; //work out the line cost
                            $total = 0;
                            $total = $total + $cost; //add to the total cost
                            
                            ?>
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                    <td class="shoping__cart__item">
                                        <img src="<?php echo $hehe['image'];?>" alt="<?php echo $hehe['image'];?>">
                                        <h5><?php echo $hehe['nama_menu']; ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        Rp. <?php echo $hehe['harga']; ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" id = "units" name="units" value="<?php echo $hehe['jumlah']; ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        Rp. <?php echo $cost; ?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="fas fa-times"></span>
                                    </td>
                                    <?php } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="fas fa-plus"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <form action="bayar.php" method="post">
                        <ul>
                            <li>Subtotal <span>Rp. <?php echo $cost; ?></span></li>
                            <input type="hidden" id = "harga" name="harga" value="<?php echo $cost; ?>">
                            <li>Total <span>Rp. <?php echo $total; ?></span></li>
                            <input type="hidden" id = "total_harga" name="total_harga" value="<?php echo $total; ?>">
                            <input name ="id_user" type="hidden" value="<?php echo $_SESSION['id_user']; ?>">
                            <input name ="id_menu" type="hidden" value="<?php echo $id_menu; ?>">
                            <input type="hidden" id = "units" name="units" value="<?php echo $hehe['jumlah']; ?>">
                        </ul>
                        <button type="submit" name="submit" class="primary-btn">PROCEED TO CHECKOUT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>