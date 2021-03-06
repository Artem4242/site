<?php
    session_start();
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="signup.css">
    <title>Регистрация</title>
</head>

<body>
    <div class="header">
        <a href="../index.html"><img class="logo" src="../images/logo.jpg" alt="logo"></a>
        <ul class="header_list">
            <li>
                <a class="header_list_item" href="../television/television.html">television</a>
            </li>
            <li>
                <a class="header_list_item" href="#">cameras</a>
            </li>
            <li>
                <a class="header_list_item" href="#">computers</a>
            </li>
            <li>
                <a class="header_list_item" href="#">tablets</a>
            </li>
            <li>
                <a class="header_list_item" href="#">accessories</a>
            </li>
            <li>
                <a class="header_list_item" href="#">others</a>
            </li>
        </ul>
        <div class="header_nav">
            <a class="header_nav_icon" href="#"><i class="fas fa-search"></i></a>
            <a class="header_nav_icon" href="signin.php"><i class="fas fa-user-circle"></i></a>
            <a class="header_nav_icon" href="#"><i class="fas fa-shopping-basket"></i></a>
        </div>
    </div>
    <div class="section_main">
        <header class="section_mane_title">
            <h1 class="heading">Create An Account </h1>
            <br>
        </header>


        <div class="container_form">
            <div class="form_box">
                <form action="sig.php" method="POST">
                    <div class="container_form_string">
                        <label>First name</label>
                        <div>
                            <input class="container_form_input" type="text" name="first_name">
                        </div>

                    </div>
                    <div class="container_form_string">
                        <label>Last name</label>
                        <div>
                            <input class="container_form_input" type="text" name="last_name">
                        </div>
                    </div>
                    <div class="container_form_string">
                        <label>Email</label>
                        <div>
                            <input class="container_form_input" type="email" name="email">
                        </div>
                    </div>
                    <div class="container_form_string">
                        <label>Password</label>
                        <div>
                            
                            <!-- ПРОВЕРКА НА НАЛИЧИЕ ПАРОЛЯ -->
                                <?php
                                if (isset($_SESSION['message'])) {
                                    echo '<div class="password_warning">' . $_SESSION['message'] . '</div>';
                                }
                                unset($_SESSION['message']);
                                ?>
                        
                            <input class="container_form_input" type="password" name="password">
                        </div>
                    </div>
                    <hr>
                    <div class="container_form_checkbox">
                        <div class="consent_form">
                            <input class="checkbox" type="checkbox" name="checkbox" value="1">
                            <p>
                                I agree to the terms and conditions and the privacy policy <a id="form_link" href="#">Read the terms and
                                    conditions of use</a>
                                .
                            </p>
                        </div>
                    </div>
                    <div class="container_form_button">
                        <button class="btn_form" type="submit">Регистрация</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="newsletter">
            <h2 class="newsletter_title">
                <i class="fas fa-envelope-open"></i>
                Newsletter
            </h2>
            <p class="newsletter_text">Get our latest news and special sales</p>
            <div class="newsletter_form">
                <form class="news_form" action="">
                    <div>
                        <input class="newsletter_input" name="email" type="text" value=""
                            placeholder="Your email address">
                    </div>
                </form>
                <button class="newsletter_btn">Subscribe</button>
            </div>
        </div>
    </div>

    <div class="footer_icons">
        <ul class="footer_icons">
            <li class="footer_icons_li">
                <a class="footer_icons_item" href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li class="footer_icons_li">
                <a class="footer_icons_item" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="footer_icons_li">
                <a class="footer_icons_item" href="#">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </li>
            <li class="footer_icons_li">
                <a class="footer_icons_item" href="#">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
            <li class="footer_icons_li">
                <a class="footer_icons_item" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        </ul>
    </div>

    <div class="footer">
        <div class="footer_content">
            <div class="footer_products_footer_our-company">
                <div class="footer_products">
                    <div class="footer_title_string">
                        <i class="fas fa-bars"></i>
                        <h3 class="footer_title">Products</h3>
                    </div>
                    <ul class="footer_list">
                        <li class="footer_list_item">
                            <a class="footer_list_item_link" href="#">Prices drop</a>
                        </li>
                        <li class="footer_list_item">
                            <a class="footer_list_item_link" href="#">New products</a>
                        </li>
                        <li class="footer_list_item">
                            <a class="footer_list_item_link" href="#">Best sales </a>
                        </li>
                    </ul>
                </div>
                <div class="footer_products">
                    <div class="footer_title_string">
                        <i class="fas fa-bars"></i>
                        <h3 class="footer_title">Our company</h3>
                    </div>
                    <ul class="footer_list">
                        <li class="footer_list_item">
                            <a class="footer_list_item_link" href="#">Terms and conditions of use</a>
                        </li>
                        <li class="footer_list_item">
                            <a class="footer_list_item_link" href="#">About us</a>
                        </li>
                        <li class="footer_list_item">
                            <a class="footer_list_item_link" href="#">Secure payment</a>
                        </li>
                        <li class="footer_list_item">
                            <a class="footer_list_item_link" href="#">Contact us</a>
                        </li>
                        <li class="footer_list_item">
                            <a class="footer_list_item_link" href="#">Sitemap</a>
                        </li>
                        <li class="footer_list_item">
                            <a class="footer_list_item_link" href="#">Stores</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer_your-account_location">
                <div class="footer_your-account">
                    <div class="footer_title_string">
                        <i class="fas fa-user-circle"></i>
                        <h3 class="footer_title">Your account </h3>
                    </div>
                    <ul class="footer_list">
                        <li class="footer_list_item">
                            <a class="footer_list_item_link" href="signin.html">Personal info </a>
                        </li>
                        <li class="footer_list_item">
                            <a class="footer_list_item_link" href="signin.html">Orders </a>
                        </li>
                        <li class="footer_list_item">
                            <a class="footer_list_item_link" href="signin.html">Credit slips </a>
                        </li>
                        <li class="footer_list_item">
                            <a class="footer_list_item_link" href="signin.html">Addresses </a>
                        </li>
                    </ul>
                </div>
                <div class="footer_location">
                    <div class="footer_title_string">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3 class="footer_title">Store information</h3>
                    </div>
                    <ul class="footer_list">
                        <li class="footer_list_location">
                            <div>
                                Extra Electro
                                <br>
                                Wall Street 202
                                <br>
                                10-900 New York
                                <br>
                                Polska
                            </div>
                        </li>
                        <li class="footer_list_location">
                            <div class="footer_location_contact">
                                <i class="fas fa-phone-alt"></i>
                                <br>
                                Call us:
                                <span class="footer_location_span">777-899-999</span>
                            </div>
                        </li>
                        <li class="footer_list_location">
                            <div class="footer_location_contact">
                                <i class="fas fa-envelope"></i>
                                <br>
                                Email us:
                                <span class="footer_location_span">sales@company.com</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="privacy_policy">
            <p>© 2021 - Ecommerce software by PrestaShop™ </p>
        </div>
    </div>
</body>

</html>