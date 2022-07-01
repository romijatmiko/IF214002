<?php 

include './api/handlers/connection.php';
?>

<section class="checkout spad">
        <div class="container">
            <div class="row">
            </div>
            <div class="checkout__form">
                <h4>My Profile</h4>
                <form action="edit-profile.php?id=<?php
                $id=$_SESSION['id_user']; echo $id;?>" method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                </div>
                                <div class="col-lg-6">
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Username : <span>*</span></p>
                                <p><?php echo $_SESSION['username'];?><span></span></p>
                            </div>
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <p><?php echo $_SESSION['email'];?><span></span></p>
                            </div>
                            <div class="checkout__input">
                                <p>Password<span>*</span></p>
                                <p>************************<span></span></p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Rekapan Pembelian</h4>
                                <div class="checkout__order__products">Terdaftar pada <span>Total</span></div>
                                <ul>
                                    <li>Total Memesan <span>$75.99</span></li>
                                    <li>Jumlah Uang Yang Keluar <span>$151.99</span></li>
                                </ul>
                                <div class="checkout__input__checkbox">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="site-btn">UBAH PROFILE</button>
                </form>
            </div>
        </div>
    </section>