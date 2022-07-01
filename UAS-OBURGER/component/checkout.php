<?php

include './api/handlers/connection.php'; 

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
}

error_reporting(0);
if (isset($_POST['submit'])) {
    $alamat1 = $_POST['alamat1'];
    $alamat2 = $_POST['alamat2'];
    $alamat3 = $_POST['alamat3'];
    $kodepos = $_POST['kodepos'];
                $sql = "INSERT INTO order (alamat1, alamat2, alamat3, kodepos)
                        VALUES ('$alamat1','$alamat2','$alamat3','$kodepos')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
            echo "<script>alert('Tambah Produk Behasil')</script>";
            $alamat1 = "";
            $alamat2 = "";
            $alamat3 = "";
            $kodepos = "";
          
          } else {
                    echo "<script>alert('Woops! Something Wrong Went.')</script>";
                }
        }?>
<section class="checkout spad">
        <div class="container">
            <div class="row">
            </div>
            <div class="checkout__form">
                <h4>Alamat Kirim</h4>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                </div>
                                <div class="col-lg-6">
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Alamat Rumah : <span>*</span></p>
                                <input type="text"id="alamat1" name="alamat1" value=""required>
                            </div>
                            <div class="checkout__input">
                                <p>Kota/Kabupaten<span>*</span></p>                        
                                <input type="text" id="alamat2" name="alamat2" value=""required>
                            </div>
                            <div class="checkout__input">
                                <p>Provinsi<span>*</span></p>
                                <input type="text" id="alamat3" name="alamat3" value=""required>
                            </div>
                            <div class="checkout__input">
                                <p>Kodepos<span>*</span></p>
                                <input type="text" id="kodepos" name="kodepos" value=""required>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                </div>
                                <div class="col-lg-6">
                                
                                </div>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                </label>
                            </div>
                            <div class="checkout__input">
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                </label>
                            </div>
                            <div class="checkout__input">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>

                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    <li>abc <span>Rp. 1233</span></li>
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>Rp. 222</span></div>
                                <div class="checkout__order__total">Total <span>Rp. 333</span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                </div>
                                <button type="submit" name="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>