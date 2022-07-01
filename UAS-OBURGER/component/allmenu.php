<?php 

include './api/handlers/connection.php';


$variable = mysqli_query($conn, "SELECT * FROM menu");
while($variable2=mysqli_fetch_assoc($variable)){
    $data[] = $variable2;
}
?>


<div class="row featured__filter">
            <?php
             foreach ( $data as $mantap){ ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg">
                          <img src="<?php echo $mantap['image']; ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="product.php?id=<?php echo $mantap['id_menu'];?>"><?php echo $mantap['nama_menu']; ?></a></h6>
                            <h5>Rp. <?php echo $mantap['harga']; ?></h5>
                        </div>
                </div>
                
                </div>
                <?php } ?>