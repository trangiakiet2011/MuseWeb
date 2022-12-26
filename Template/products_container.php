<?php
$product->getData();

// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['top_sale_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>

<section class="section-p1">
    <div class="containter product-container">

        <!-- Product1 -->
        <?php foreach($product_shuffle as $item){ ?>
        <div class="product">
            <div class="tile">
                <img src="<?php echo $item['item_image'];?>" alt="">
            </div>
            <div class="tile tile-body">
                <h4><?php echo $item['item_brand'];?></h4>
                <h3><?php echo $item['item_name'];?></h3>
            </div>
            <div class="tile tile-footer">
                <h3><?php echo $item['item_price'];?></h3>
<!--                <a href=""><i class="fa-solid fa-cart-shopping cart" size></i></a>-->
                <form method="post">
                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                    <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </form>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
