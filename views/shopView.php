<?php 
     $title = "Boutique";
     $link_css = "assets/css/shop.css" ;
    $link_css_2 = "assets/css/product.css";
    include "header.php";
?>

    <main>
        <section id="section-categories">
            <h2>Catégories</h2>
            <div class="categories-container" >
                <div class="card-category">
                    <a href="categorie.php?id=1">
                        <img src="assets/images/HP-elitebook-840.jpg" >
                    </a>
                    <h3>PC portable</h3>
                </div>
                <div class="card-category" >
                    <a href="categorie.php?id=2">
                        <img src="assets/images/apple-imac-27p.jpg" >
                    </a>
                    <h3>Apple IMAC</h3>
                </div>
            </div>
        </section>
    
        <section id="products-container">
            <?php getAllProducts()  ?>
        </section>
    </main>

<?php include "footer.php"  ?>