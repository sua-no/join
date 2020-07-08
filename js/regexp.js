window.addEventListener("DOMContentLoaded", function(){
    const inputs = document.querySelectorAll(".section__joinform__textbox input"),
    id = document.querySelector("#id"),
    pw = document.querySelector("#pw"),
    pwCheck = document.querySelector("#pw-check"),
    name = document.querySelector("#name"),
    email = document.querySelector("#email"),
    tel = document.querySelector("#tel"),
    //regexp 정규 표현식
    idRegexp = /^[a-zA-Z0-9]{4,8}$/,
    pwRegexp = /^.*(?=^.{4,8}$)(?=.*\d)(?=.*[a-zA-Z])(?=.*[!@#$%^&+=]).*$/,
    nameRexexp = /^[가-힣|a-zA-Z]{2,6}$/,
    emailRegexp = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i,
    telRegexp = /^01(?:0|1|[6-9])(?:\d{3}|\d{4})\d{4}$/;


    for(let i =0; i < inputs.length; i++){
        inputs[i].addEventListener("blur", function(){
            rexgexpCheck(i);
        });
    }
    
    function rexgexpCheck(idx){
        switch(idx){
            case 0: 
                id.value == '' ? (
                    id.nextSibling.nextSibling.textContent = '필수정보입니다.',
                    id.nextSibling.nextSibling.classList.add("empty-check")) : (
                        idRegexp.test(id.value) ? id.nextSibling.nextSibling.classList.remove("empty-check") : (
                            id.nextSibling.nextSibling.classList.add("empty-check"),
                            id.nextSibling.nextSibling.textContent = '숫자와 영소문자 조합으로 4~8자리를 사용해야 합니다.'
                            )
                );
                break;
            case 1: 
                pw.value == '' ? (
                    pw.nextSibling.nextSibling.textContent = '필수정보입니다.',
                    pw.nextSibling.nextSibling.classList.add("empty-check")) : (
                    pwRegexp.test(pw.value) ? (
                        pw.nextSibling.nextSibling.classList.remove("empty-check"),
                        pw.parentNode.setAttribute("class","section__joinform__textbox step2")) : (
                        pw.nextSibling.nextSibling.classList.add("empty-check"),
                        pw.nextSibling.nextSibling.textContent = '숫자, 영문자, 특수문자 조합으로 4~8자리를 사용해야 합니다.',
                        pw.parentNode.setAttribute("class","section__joinform__textbox step3")
                        )
                );
                break;
            case 2: 
                pwCheck.value == '' ? (
                    pwCheck.nextSibling.nextSibling.textContent = '필수정보입니다.',
                    pwCheck.nextSibling.nextSibling.classList.add("empty-check")) : (
                        pwCheck.value == pw.value ? (
                        pwCheck.nextSibling.nextSibling.classList.remove("empty-check"),
                        pwCheck.parentNode.setAttribute("class","section__joinform__textbox check-step2")) : (
                        pwCheck.nextSibling.nextSibling.classList.add("empty-check"),
                        pwCheck.nextSibling.nextSibling.textContent = '비밀번호가 같지 않습니다.',
                        pwCheck.parentNode.setAttribute("class","section__joinform__textbox check-step3")
                        )
                );
                break;
            case 3: 
                name.value == '' ? (
                    name.nextSibling.nextSibling.textContent = '필수정보입니다.',
                    name.nextSibling.nextSibling.classList.add("empty-check")) : (
                        nameRexexp.test(name.value) ? name.nextSibling.nextSibling.classList.remove("empty-check") : (
                        name.nextSibling.nextSibling.classList.add("empty-check"),
                        name.nextSibling.nextSibling.textContent = '이름을 올바르게 입력하세요.'
                        )
                );
                break;
            case 4: 
                email.value == '' ? (
                    email.nextSibling.nextSibling.textContent = '필수정보입니다.',
                    email.nextSibling.nextSibling.classList.add("empty-check")) : (
                        emailRegexp.test(email.value) ? email.nextSibling.nextSibling.classList.remove("empty-check") : (
                        email.nextSibling.nextSibling.classList.add("empty-check"),
                        email.nextSibling.nextSibling.textContent = '이메일을 올바른 형식으로 입력하세요.'
                        )
                );
                break;
            case 5: 
                telRegexp.test(tel.value) ?
                tel.nextSibling.nextSibling.classList.remove("empty-check") : 
                tel.nextSibling.nextSibling.classList.add("empty-check")
                break;
        }
    }

});