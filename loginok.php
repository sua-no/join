<?php
    header("Content-Type: text/html; charset=UTF-8");

    $name = $_GET["name"];
    $date = $_GET["date"];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>네이버 : 로그인 성공</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="wrap">
        <!-- header -->
        <header class="header">
            <h1 class="header__title"><a href="#" class="header__title__logo">NAVER</a></h1>
        </header>
        <!-- content -->
        <section class="section__loginok">
            <h2 class="section__loginok__title">로그인 성공</h2>

            <p class="section__loginok__userinfo"><span class="user-name"><? echo $name ?></span>님 로그인 성공!</p>
            <p class="section__loginok__date">가입일 : <span class="user-date"><? echo $date ?></span></p>
            <img src="img/login_ok.jpg" class="section__loginok__celebration">
            <a href="index.php" class="section__loginok__logout__button">로그아웃</a>
        </section>
        <!-- footer -->
        <footer class="footer">
            <ul class="footer__list">
                <li>이용약관</li>
                <li>개인정보처리방침</li>
                <li>책임의 한계와 법적고지</li>
                <li>회원정보 고객센터</li>
            </ul>
            <p class="footer__copyright"><span>NAVER</span> Copyright &copy; NAVER Corp. All Rights Reserved.</p>
        </footer>
    </div>
</body>
</html>