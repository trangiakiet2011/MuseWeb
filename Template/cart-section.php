<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }
}
?>


<section id="cart" class="section-p1">
    <div class="container">
        <table width="100%">
            <thead>
            <tr>
                <td>
                    <h3>Xóa</h3>
                </td>
                <td>
                    <h3>Hãng sản xuất</h3>
                </td>
                <td>
                    <h3>Tên sản phẩm</h3>
                </td>
                <td>
                    <h3>Giá tiền</h3>
                </td>
                <td>
                    <h3>Số lượng</h3>
                </td>
                <td>
                    <h3>Tạm tính</h3>
                </td>
            </tr>
            </thead>

            <tbody>

            <?php
            foreach ($product->getData('cart') as $item) :
                $cart = $product->getProduct($item['item_id']);
                $subTotal[] = array_map(function ($item){
                    ?>
            <tr>
                <td>
                    <form method="post">
                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                        <button type="submit" name="delete-cart-submit"><i class="far fa-times-circle"></i></button>
                    </form>

                </td>
                <td><?php echo $item['item_brand'] ?? "Brand"; ?></td>
                <td><?php echo $item['item_name'] ?? "Unknown"; ?></td>
                <td><?php echo $item['item_price'] ?? 0; ?></td>
                <td>
                    <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                    <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                    <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                </td>
                <td>
                    $<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
                </td>
            </tr>
                    <?php
                    return $item['item_price'];
                }, $cart); // closing array_map function
            endforeach;
            ?>

            </tbody>
        </table>
    </div>
</section>


<section id="cart-add" class="section-p1">
    <div id="container">
        <div id="coupon">
            <h3>Mã khuyến mãi</h3>
            <div>
                <input type="text" placeholder="Nhập mã khuyến mãi của bạn">
                <button class="normal">Áp dụng</button>
            </div>
        </div>
    </div>


    <div id="subtotal">
        <h3>Tổng đơn</h3>
        <table>
            <tr>
                <td>
                    <h4>Tổng</h4>
                </td>
                <td>
                    <?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?>
                </td>
            </tr>
        </table>
        <button class="normal">Đặt hàng</button>
    </div>
</section>
