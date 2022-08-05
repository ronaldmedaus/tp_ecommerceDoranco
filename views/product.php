
<div class="product-container">
    <p class="product-score">score: <?= $score ?> / 5</p>
    <a href="detail-produit.php?product_id=<?=$product_id?>">
        <img src="<?=$url_img?>" alt="produit" class="product-img" >
    </a>
    <div class="product-info">
        <h2> 
            <a href="detail-produit.php?product_id=<?=$product_id?>">
                <?= $product_name ?>
            </a>
         </h2>
        <h5><?= $price ?> €</h5>
    </div>
</div>