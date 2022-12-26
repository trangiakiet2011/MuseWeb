<section id="login" class="section-p1">
    <div>
        <h3>
            <center>
                <h3>Đăng nhập</h3>
            </center>
        </h3>
        <form action="./login-action.php" method="post">
            <div class="container">
                <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                
                <label>Tài khoản</label>
                <input type="text" name="uname" placeholder="User Name"><br>

                <label>Mật khẩu</label>
                <input type="password" name="password" placeholder="Password"><br>

                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</section>


<section class="section-p1">
    <h3>
        <center>Chưa có tài khoản?</center>
    </h3>
    <a href="signup.php">
        <h3 style="text-decoration:underline">
            <center>
                Đăng ký ngay
            </center>
        </h3>
    </a>
</section>