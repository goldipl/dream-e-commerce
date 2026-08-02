<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dreamtex - Twój schowek</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/select2.min.css" />
        <link rel="stylesheet" href="./scss/main.css">
    </head>
    <body>
        <header> 
            <?php include "./components/common/nav.php"; ?> 
        </header>
        <main id="main-wrapper">
            <?php include "./components/storage/storage.php"; ?>  
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
        <script src="./js/category/accordions.js"></script>
        <script>
            $(function () {
                var visibleItems = 12;
                var $products = $('.product-card');
                var $loadMore = $('.btn-load-more');

                // Hide all products after the first 12
                $products.slice(visibleItems).hide();

                $loadMore.on('click', function () {
                    // Show the remaining 3 products
                    $products.slice(visibleItems, visibleItems + 3).fadeIn();

                    // Hide the button after showing all hidden products
                    $(this).hide();
                });
            });
        </script>
    </body>
</html>