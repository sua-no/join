<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>네이버 : 회원가입</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/regexp.js"></script>
</head>
<body>
    <div class="wrap join">
        <!-- header -->
        <header class="header">
            <h1 class="header__title"><a href="#" class="header__title__logo">NAVER</a></h1>
        </header>
        <!-- section -->
        <section class="section">
            <form action="joinok.php" method="post" class="section__joinform">
                <h2 class="section__joinform__label">
                    <label for="id">아이디</label>
                </h2>
                <div class="section__joinform__textbox">
                    <input type="text" id="id" name="id" autofocus>
                    <p class="section__joinform__textbox__checkmessage">숫자와 영소자 조합으로 4~8자리를 사용해야 합니다.</p>
                </div>
                <h2 class="section__joinform__label">
                    <label for="pw">비밀번호</label>
                </h2>
                <div class="section__joinform__textbox step1">
                    <input type="password" id="pw" name="pw">
                    <p class="section__joinform__textbox__checkmessage">숫자,영문자와 특수문자 조합으로 4~8자리를 사용해야 합니다.</p>
                </div>
                <h2 class="section__joinform__label">
                    <label for="pw-check">비밀번호 확인</label>
                </h2>
                <div class="section__joinform__textbox check-step1">
                    <input type="password" id="pw-check" name="pw-check" placeholder="">
                    <p class="section__joinform__textbox__checkmessage empty-check">비밀번호가 일치하지 않습니다.</p>
                </div>
                <h2 class="section__joinform__label">
                    <label for="name">이름</label>
                </h2>
                <div class="section__joinform__textbox">
                    <input type="text" id="name" name="name" placeholder="">
                    <p class="section__joinform__textbox__checkmessage empty-check">필수정보입니다.</p>
                </div>
                <h2 class="section__joinform__label">
                    <label for="email">이메일</label>
                </h2>
                <div class="section__joinform__textbox">
                    <input type="email" id="email" name="email" placeholder="">
                    <p class="section__joinform__textbox__checkmessage empty-check">필수정보입니다.</p>
                </div>
                <h2 class="section__joinform__label">
                    <label for="gender">성별<span>(선택)</span></label>
                </h2>
                <div class="section__joinform__textbox">
                    <select name="gender" id="gender">
                        <option value="g">성별</option>
                        <option value="m">남자</option>
                        <option value="f">여자</option>
                    </select>
                </div>
                <h2 class="section__joinform__label">
                    <label for="tel">전화번호<span>(선택)</span></label>
                </h2>
                <div class="section__joinform__textbox tel">
                    <input type="tel" id="tel1" name="tel1" value="010">-
                    <input type="tel" id="tel2" name="tel2">-
                    <input type="tel" id="tel3" name="tel3">
                </div>
                <button type="submit" name="login" class="section__joinform__button">회원가입</button>
            </form>
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