<?php
    include '/xampp/htdocs/Bt_nhom/Login/login_code.php';
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="header.html">
    <link rel="import" href="footer.html">
    <link rel="stylesheet" href="stylelogin.css">

    <title>Document</title>
</head>

<body>
    <header>
        <?php include '/xampp/htdocs/Bt_nhom/header/header.html'; ?>

    </header>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<body>
<div class="container">
        <div class="login-form">
            <div class="login-bg">
                <img src="/Content/web/img/login-bg.png" />
            </div>
            <div class="form">
                <h1>Đăng nhập</h1>
                <div class="external">
                    <form method="post" action="/Account/ExternalLogin">
                        <input name="__RequestVerificationToken" type="hidden" value="do-OtWX1OBKnkR3XrQ_7SEbJn5Egf_vgwZdqj0f7Ze6_z6Lq8bTt5vXY5Ue5ZBKqjzXEFXZOf3fFpsUrUAY6fci76xY1" />
                        <input type="hidden" name="ReturnUrl" value="/" />
                        <button class="btn-extlogin btn-facebook" title="Đăng nhập qua Facebook" type="submit" id="Facebook" name="provider" value="Facebook"><img src="/Content/web/img/login-facebook.png" /> Tiếp tục với Facebook</button>
                        <button class="btn-extlogin btn-google" type="submit" title="Đăng nhập qua Google+" id="Google" name="provider" value="Google"><img src="/Content/web/img/login-google.png" /> Đăng nhập với Google</button>
                    </form>
                </div>

                <div class="split">
                    <p>Hoặc</p>
                </div>

                <div class="internal"  method="POST">
                    <form method="post" action="login_code.php">
                        <input name="__RequestVerificationToken" type="hidden" value="1WUXWERXZzeGt69RA_YJEhrtKjqfU_z3Rf35lYsvmfMXdfw8SAVPt9K-wobShY8MCHx3UQqEIRr2btLbPdIyrkN3-xQ1" />
                        <input type="hidden" name="ReturnUrl" value="/" />
                        <div class="row">
                            <div class="label">Tài khoản</div>
                            <div class="input">
                                <input type="text" name="username" id="username" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="label">Mật khẩu</div>
                            <div class="input">
                                <input type="password" name="password" id="password" />
                            </div>
                        </div>

                        <div class="row">
                             <label class="checkbox-ctn">Nhớ đăng nhập
                                <input type="checkbox" name="RememberMe" value="RememberMe">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="row">
                            <div class="button-group">
                                <button class="btn btn-submit" type="submit">ĐĂNG NHẬP</button>
                                <a class="btn btn-link " href="/./Register/register.php">ĐĂNG KÝ</a>
                            </div>
                        </div>

                        <div class="row">
                            <p class="forgotpass"><a class="" href="/./Login/forget-password.php">Quên mật khẩu?</a></p>
                        </div>
                    </form>
                </div>
            </div>

</body>


</html>