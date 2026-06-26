<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dreamtex - Karta produktu</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/swiper-bundle.css" />
        <link rel="stylesheet" href="./css/select2.min.css" />
        <link rel="stylesheet" href="./css/magnific-popup.min.css">
        <link rel="stylesheet" href="./scss/main.css">
    </head>
    <body>
        <header> 
            <?php include "./components/common/nav.php"; ?> 
        </header>
        <main id="main-wrapper">
            <div class="breadcrumbs container">
                <ul>
                    <li class="breadcrumb-item">
                        <a href="#">Odzież firmowa</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Koszulki T-shirt</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <span>T-shirt Havy 170</span>
                    </li>
                </ul>
            </div>
            <div class="container">
                <?php include "./components/product-card/product_card.php"; ?> 
                <?php include "./components/product-card/recommended_products.php"; ?> 
            </div>
        </main>
        <footer> 
            <?php include "./components/common/footer.php"; ?> 
        </footer>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./js/bootbox.min.js"></script>
        <script src="./js/select2.min.js"></script>
        <script src="./js/script.js"></script>
        <script src="./js/swiper/swiper-bundle.js"></script>
        <script src="./js/swiper/swiper.js"></script>
    </body>
</html>