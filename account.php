<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="account.php">Account</a></li>
                </ul>
            </nav>
            <img src="images/cart.png" alt="" width="30px" height="30px">
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()" alt="">
        </div>
    </div>

    <!-- Account Page -->

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="gaming/image1.png" width="100%" alt="">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>

                        <form id="LoginForm" action="">
                            <input type="text" name="name" placeholder="Username">
                            <input type="password" name="password" placeholder="Password">
                            <button type="submit" name="login" class="btn">Login</button>
                            <a href="">Forgot Password</a>
                        </form>

                        <form id="RegForm" action="">
                            <input type="text" placeholder="Username">
                            <input type="email" placeholder="Email">
                            <input type="password" placeholder="Password">
                            <button type="submit" name="register" class="btn">Register</button>
                        </form>
                    </div>
                </div>
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

    <!-- js for toggle form -->

    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }

        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }
    </script>
</body>

</html>