<?php 

include './api/handlers/connection.php';


$variable = mysqli_query($conn, "SELECT * FROM menu WHERE  kategori LIKE 'burger'");
while($variable2=mysqli_fetch_assoc($variable)){
    $data[] = $variable2;
}
?>
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="featured__controls">
                        <ul>
                        <li><a href="dashboard.php">Makanan</a></li>
                            <li><a href="dashboard-minuman.php">Minuman</a></li>
                            <li class="active"><a href="dashboard-burger.php">Burger</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
            <?php
             foreach ( $data as $mantap){ ?>
                <div class="col-lg-3 col-md-4 col-sm-6 burger">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg">
                          <img src="<?php echo $mantap['image']; ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="product.php?id=<?php echo $mantap['id_menu'];?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="product.php?id=<?php echo $mantap['id_menu'];?>"><?php echo $mantap['nama_menu']; ?></a></h6>
                            <h5>Rp. <?php echo $mantap['harga']; ?></h5>
                        </div>
                </div>
                
                </div>
                <?php } ?>
            </div>
                
            </div>
    </section>
       