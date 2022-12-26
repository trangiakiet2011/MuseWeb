<section id="login" class="section-p1">
    <div>
        <h3>
            <center>
                <h3>Đăng nhập</h3>
            </center>
        </h3>
        <form action="./login-action.php" method="post">
            <div class="container">
                <label>
                    <h3>Email</h3>
                </label>
                <input type="text" placeholder="Nhập email" name="email" required>
                <label>
                    <h3>Mật khẩu</h3>
                </label>
                <input type="text" placeholder="Nhập mật khẩu" name="password" required>
                <button type="submit" name="signin">Đăng nhập</button>
                <input type="checkbox" checked="checked" name="remember"> Nhớ tôi
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