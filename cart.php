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

    <!-- cart item details -->

    <div class="small-container cart-page">

        <table>
            <tr>
                <th>Product</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="gaming/keyboard1.png" alt="">
                        <div>
                            <p>Keyboard Black & White</p>
                            <small>Harga: Rp.300.000</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td> Rp.300.000</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="gaming/headphone3.png" alt="">
                        <div>
                            <p>Headset Gaming Red</p>
                            <small>Harga: Rp.750.000</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>Rp.750.000</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="gaming/konsol2.png" alt="">
                        <div>
                            <p>Console Gaming White</p>
                            <small>Harga: Rp.500.000</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>Rp.500.000</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>Rp.1.550.000</td>
                </tr>
                <tr>
                    <td>Pajak</td>
                    <td>Rp.15.000</td>
                </tr>
                <tr>
                    <td>Biaya Pengiriman</td>
                    <td>Rp.30.000</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>Rp.1.505.000</td>
                </tr>
            </table>
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