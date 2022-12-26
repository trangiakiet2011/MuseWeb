<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }
}
?>

<?php
include('header.php')
?>

<div class="section p1">
<center><h1 style="margin-top:10rem;">Đặt hàng thành công</h1></center>
<center><a href="index.php">Trở về trang chủ</a></center>
<div>


<?php
include('footer.php')
?>