<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>네이버 : 로그인</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/main.css">

</head>

<body>
    <div class="wrap">
        <!-- header -->
        <header class="header">
            <h1 class="header__title"><a href="#" class="header__title__logo">NAVER</a></h1>
            <select name="languages" id="languages" class="header__select_languages">
                <option value="kor">한국어</option>
                <option value="kor">English</option>
            </select>
        </header>
        <!-- content -->
        <section class="section">
            <form action="loginok.php" method="post" class="section__login">
                <div class="section__box">
                    <input type="text" name="id" placeholder="아이디">
                </div>
                <div class="section__box">
                <input type="password" name="pw" placeholder="비밀번호">
                </div>
                <button type="submit" name="login" class="section__login__button">로그인</button>
            </form>
            <div class="section__join">
                <a href="join.php" class="section__join__button">회원가입</a>
            </div>
            <div class="section__find">
                <ul>
                    <li>아이디 찾기</li>
                    <li>비밀번호 찾기</li>
                </ul>
            </div>
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