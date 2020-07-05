<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>네이버 : 로그인</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/index.js"></script>
</head>

<body>
    <div class="wrap">
        <!-- header -->
        <header class="header">
            <h1 class="header__title"><a href="#" class="header__title__logo">NAVER</a></h1>
            <select name="languages" id="languages" class="header__select__languages">
                <option value="kor">한국어</option>
                <option value="eng" selected>English</option>
            </select>
        </header>
        <!-- content -->
        <section class="section">
            <form action="loginok.php" method="post" class="section__loginform">
                <div class="section__loginform__textbox">
                    <input type="text" name="id" placeholder="Username">
                </div>
                <div class="section__loginform__textbox">
                    <input type="password" name="pw" placeholder="Password">
                </div>
                <button type="submit" name="login" class="section__loginform__button">Sign in</button>
            </form>
            <div class="section__join__button">
                <a href="join.php">Sign Up</a>
            </div>
            <div class="section__find">
                <ul>
                    <li>Forgot your Username</li>
                    <li>or Password?</li>
                </ul>
            </div>
        </section>
        <!-- footer -->
        <footer class="footer">
            <p class="footer__copyright"><span>NAVER</span> Copyright &copy; NAVER Corp. All Rights Reserved.</p>
        </footer>
    </div>
</body>

</html>