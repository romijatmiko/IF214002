<header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./dashboard.php"><img src="img/logo/newlogo1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class=""><a href="./dashboard.php">MENU</a></li>  
                             <li><a href="#">USER</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./profile.php?id=<?php echo $_SESSION['id_user'];?>">Profile</a></li>
                                    <li><a href="./orders.php">My Orders</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                    
                    </nav>
                    
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            
                            <li><a href="./favorite.php"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="keranjang.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>