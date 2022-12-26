<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/1f96ba02bd.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muse Luthiery</title>
    <link rel="stylesheet" href="muse.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>



    <?php
    session_start();
    // require functions.php file
    require ('functions.php');
    ?>

</head>

<body>
    <header>
        <div class="container">
            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link nav-link-muse"></a>
                    </li>
                    <li class="nav-item">
                        <a href="products.php" class="nav-link">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a href="services.php" class="nav-link">Dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a href="aboutus.php" class="nav-link">Về Muse.</a>
                    </li>
                    <li class="nav-item">
                        <a href="cart.php" class="nav-link"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>

                    <?php
                    if(!isset($_SESSION['user_name'])){
                        echo "<li class='nav-item'>
                        <a href='login.php' class='nav-link'>Đăng nhập</a>
                        </li>";
                    }
                    else{
                        echo " <li class='nav-item'>
                        <a href='account-info.php' class='nav-link'>Chào ".$_SESSION['user_name']."</i></a>
                        </li>
                        <li class='nav-item'>
                        <a href='logout.php' class='nav-link'>Đăng xuất</a>
                        </li>";

                    }
                    ?>
                    </li>
                </ul>
            </nav>
        </div>
    </header>