<?php 

include './api/handlers/connection.php';
$id = $_SESSION['id_user'];
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
                $sql = "UPDATE u_user SET username='$username', email='$email', password='$password' 
                WHERE id_user=$id";
                $result = mysqli_query($conn, $sql);
                if ($result) {
            echo "<script>alert('Update Profile Behasil')</script>";
            $username = "";
            $email = "";
            $password = "";
          
          } else {
                    echo "<script>alert('Woops! Something Wrong Went.')</script>";
                }
        } 
?>

<section class="checkout spad">
        <div class="container">
            <div class="row">
            </div>
            <div class="checkout__form">
                <h4>My Profile</h4>
                <form action="./edit-profile.php?id=<?php echo $id?>" method="post">
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
                                <input type="text"id="username" name="username" value="<?php echo $_SESSION['username'];?>"required>
                            </div>
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>                        
                                <input type="text" id="email" name="email" value="<?php echo $_SESSION['email'];?>"required>
                            </div>
                            <div class="checkout__input">
                                <p>Password<span>*</span></p>
                                <input type="text" id="password" name="password" value=""required>
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
                    <button type="submit" name="submit" class="site-btn">UBAH PROFILE</button>
                </form>
            </div>
        </div>
    </section>