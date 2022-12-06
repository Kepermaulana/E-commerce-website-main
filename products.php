<?php
//inisialisasi session
session_start();
//mengecek username pada session
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
    header('Location: login.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>All Product</title>
</head>

<body>

        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" alt="" width="125px"></a>
                </div>
                <nav>
                    <ul id="menuitems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">Product</a></li>
                        <!-- <li><a href="contact.php">Contact</a></li> -->
                        <li><a href="logout.php">Logout</a></li>
                        <!-- <li><a href="account.php">Account</a></li> -->
                    </ul>
                </nav>
                <a href="cart.php"><img src="images/cart.png" alt="" width="30px" height="30px"></a>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()" alt="">
            </div>
        </div>


    <div class="small-container">

        <div class="row row-2">
            <h2>All Products</h2>
            <select name="" id="">
                <option value="">Default Shorting</option>
                <option value="">Short by price</option>
                <option value="">Short by popularity</option>
                <option value="">Short by rating</option>
                <option value="">Short by sale</option>
            </select>
        </div>


        <div class="row">
        <div class="col-4">
                <a href="products-detail.php"><img src="gaming/keyboard1.png" alt="" style="margin-top: 45px;"></a>
                <h4>Keyboard Black & White</h4>
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                </div>
                <p>Rp.300.000</p>
            </div>
            <div class="col-4">
                <img src="gaming/pc2.png" alt="" style="margin-top: 65px;">
                <h4>PC Gaming RGB</h4>
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
                <p>Rp.15.000.000</p>
            </div>
            <div class="col-4">
                <img src="gaming/pc3.png" alt="" style="margin-top: 55px;">
                <h4>PC Gaming RGB Msi</h4>
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </div>
                <p>Rp.16.000.000</p>
            </div>
            <div class="col-4">
                <img src="gaming/mouse4.png" alt="" style="margin-top: 65px;">
                <h4>Mouse Logitech Gaming</h4>
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <p>Rp.400.000</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="gaming/konsol1.png" alt="" style="margin-top: 70px;">
                <h4>Console Gaming Black</h4>
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                </div>
                <p>Rp.400.000</p>
            </div>
            <div class="col-4">
                <img src="gaming/konsol2.png" alt="">
                <h4>Console Gaming White</h4>
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
                <p>Rp.500.000</p>
            </div>
            <div class="col-4">
                <img src="gaming/konsol3.png" alt="" style="margin-top: 40px;">
                <h4>Console PlayStation 4 White</h4>
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </div>
                <p>Rp.500.000</p>
            </div>
            <div class="col-4">
                <img src="gaming/konsol4.png" alt="" style="margin-top: 40px;">
                <h4>Console PlayStation 4 Black</h4>
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <p>Rp.550.000</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="gaming/keyboard1.png" alt="">
                <h4>Keyboard Black & White</h4>
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                </div>
                <p>Rp.300.000</p>
            </div>
            <div class="col-4">
                <img src="gaming/keyboard5.png" alt="" style="margin-top: 80px;">
                <h4>Keyboard Warnet</h4>
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                </div>
                <p>Rp.100.000</p>
            </div>
            <div class="col-4">
                <img src="gaming/keyboard6.png" alt="" style="margin-top: 80px;">
                <h4>Keyboard Gaming Blue</h4>
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </div>
                <p>Rp.1.500.000</p>
            </div>
            <div class="col-4">
                <img src="gaming/keyboard7.png" alt="" style="margin-top: 85px;">
                <h4>Keyboard Black </h4>
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <p>Rp.200.000</p>
            </div>
        </div>

        <div class="page-btn">
            <span>1</span>
            <span>2</span> 
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
    </div>



    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png" alt="">
                        <img src="images/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo-white.png" alt="">
                    <p>Our purpose is to Sustainably Make the Pleasure and Benefits
                        of Sports Accessible to the Many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022</p>
        </div>
    </div>

    <!-- js for toggle menu -->
    <script>
        var menuitems = document.getElementById("menuitems");

        menuitems.style.maxHeight = "0px";

        function menutoggle() {
            if (menuitems.style.maxHeight == "0px") {
                menuitems.style.maxHeight = "200px"
            } else {
                menuitems.style.maxHeight = "0px"
            }
        }
    </script>

</body>

</html>