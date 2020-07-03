<?php
$PATH = "";
$PAGE = "deals";
?>
<!DOCTYPE html>
<html>
    <?php include_once($PATH . "components/head.php")?>
    <body>
        <?php include_once($PATH . "views/loader.php")?>
        <?php include_once($PATH . "views/shoppingCartPreview.php")?>
        <?php include_once($PATH . "views/header.php")?>
        <section id="carsList" class="container">
            <?php include_once($PATH . "views/deals.php")?>
        </section>
        <?php include_once($PATH . "views/footer.php")?>
    </body>
    <script>
        var carList = "";
        var shoppingCart = {
            "quantity":0,
            "totalAmount":0,
            "totalAmountFormated":"USD $0.00",
            "products":[
            ]
        };
    </script>
    <?php include_once($PATH . "components/scripts.php")?>
</html>
