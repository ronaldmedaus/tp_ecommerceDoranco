<?php 
    $title = "Accueil";
    $link_css = "assets/css/accueil.css" ;
    $link_css_2 = "assets/css/product.css";
    include "header.php";
?>

<main>
    <section class="banner" >
        <img src="assets/images/banner.jpg" alt="banner"  >
    </section>
    <section id="best-products-container">
        <h3>Les 3 produits les mieux nôtés</h3>
        <div class="best-products">
            <?php getBestProducts() ;?>
        </div>
    </section>
</main>


<?php require_once "footer.php" ?>