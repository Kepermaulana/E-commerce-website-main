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

    <!-- Single Products Details -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="gaming/keyboard1.png" width="90%" id="productimg" alt="">
            </div>
            <div class="col-2">
                <p>Home / Keyboard</p>
                <h1>Keyboard Black & White</h1>
                <h4>Rp.300.000</h4>
                <select name="" id="">
                    <option value="">Select Color</option>
                    <option value="">Red</option>
                    <option value="">White</option>
                    <option value="">Black</option>
                    <option value="">Yellow</option>
                    <option value="">Grey</option>
                </select>
                <input type="number" value="">
                <a href="cart.php" class="btn">Add to Cart</a>
                <br>
                <h3>Product Details <i class="bi bi-indent"></i></h3>
                <p>Keyboard Black & White merupakan keyboard Best Seller di toko kami, keyboard ini memliki keawetan yang lama dan nyaman dipakai untuk bekerja</p>
            </div>
        </div>
    </div>

    <!-- title -->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>
        </div>
    </div>


    <!-- products -->


    <div class="small-container">
    <div class="row">
            <div class="col-4">
                <img src="gaming/keyboard2.png" alt="">
                <h4>Keyboard RGB</h4>
                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                </div>
                <p>Rp.700.000</p>
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


    <!-- js for product gallery -->

    <script>
        var productimg = document.getElementById("productimg");
        var smallimg = document.getElementsByClassName("smallimg");

        smallimg[0].onclick = function () {
            productimg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function () {
            productimg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function () {
            productimg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function () {
            productimg.src = smallimg[3].src;
        }
    </script>

</body>

</html>