<?php
    $title = "Catégorie produit";
    $link_css = "assets/css/shop.css" ;
    $link_css_2 = "assets/css/product.css";
    include "header.php";
?>



<section>
    <h2> <?=$category_name?> </h2>

    <section id="products-container">
        <?php getProductsByCategory($id_category) ?>
    </section>
</section>


<?php include "footer.php"  ?>