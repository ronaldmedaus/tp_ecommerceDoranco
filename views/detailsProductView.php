<?php
    $title = "Fiche produit";
    $link_css = "assets/css/detail-product.css" ;
    include "header.php";

    //le format JSON (javascript objet notation) js object : { a:'test } => json {"a":"test"}
    //je vais donc me servir de cela pour transmettre les data à js via html
    $json_data = json_encode($product);
?>

    <main>
        <section id="product-info">
            <div>
                <img src="<?= $product["urlImg"] ?>" >
                <p>Note: <?= $product["score"] ?> / 5</p>
            </div>
            <div>
                
                <h1 class="mb-4"><?= $product["name"] ?></h1>
                <h3 class="mb-4" ><?= $product["price"] ?> €</h3>
                <!-- on intègre en html les data que l'on récupère ensuite via js -->
                <div id="data-product" hidden ><?=$json_data?></div>
                <button 
                    id="addCart" 
                    class="btn btn-success"
                >
                     Ajouter au panier
                </button>
            </div>
        </section>
        <section id="product-description">
            <h4>description:</h4>
            <?= $product["description"] ?>
        </section>
    </main>


<?php include "footer.php"  ?>