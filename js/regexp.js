window.addEventListener("DOMContentLoaded", function(){
    const inputs = document.querySelectorAll(".section__joinform__textbox input"),
    id = document.querySelector("#id"),
    pw = document.querySelector("#pw"),
    pwCheck = document.querySelector("#pw-check"),
    name = document.querySelector("#name"),
    email = document.querySelector("#email"),
    //regexp 정규 표현식
    idRegexp = /^[a-zA-Z0-9]{4,8}$/,
    pwRegexp = /^.*(?=^.{4,8}$)(?=.*\d)(?=.*[a-zA-Z])(?=.*[!@#$%^&+=]).*$/,
    nameRexexp = /^[가-힣|a-zA-Z]{2,6}$/,
    emailRegexp = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i,
    telRegexp = /^01(?:0|1|[6-9])-(?:\d{3}|\d{4})-\d{4}$/;


    for(let i =0; i < inputs.length; i++){
        inputs[i].addEventListener("blur", function(){
            rexgexpCheck(i);
        });
    }
    
    function rexgexpCheck(idx){
        console.log(idx);
        switch(idx){
            case 0: 
                if(idRegexp.test(id.value)){
                    id.nextSibling.nextSibling.classList.remove("empty-check");
                }else{
                    id.nextSibling.nextSibling.classList.add("empty-check");
                    id.value = '';
                };
                break;
            case 1: 
                if(pw.value != '' && pwRegexp.test(pw.value)){
                    pw.parentNode.setAttribute("class","section__joinform__textbox step2");
                    pw.nextSibling.nextSibling.classList.remove("empty-check");
                }else{
                    pw.parentNode.setAttribute("class","section__joinform__textbox step3");
                    pw.nextSibling.nextSibling.classList.add("empty-check");
                }; 
                break;
            case 2: 
                if(pw.value != '' && pwCheck.value === pw.value){
                    pwCheck.parentNode.setAttribute("class","section__joinform__textbox check-step2");
                }else{
                    pwCheck.parentNode.setAttribute("class","section__joinform__textbox check-step3");
                }
                break;
            case 3: 
                if(nameRexexp.test(name.value)){
                    name.nextSibling.nextSibling.classList.remove("empty-check");
                }else{
                    name.nextSibling.nextSibling.classList.add("empty-check");
                    name.value = '';
                };
                break;
            case 4: 
                if(emailRegexp.test(email.value)){
                    email.nextSibling.nextSibling.classList.remove("empty-check");
                }else{
                    email.nextSibling.nextSibling.classList.add("empty-check");
                };
                break;
            // case 5: 
            //     console.log("tel");
            //     break;
            // case 6: 
            //     console.log("tel2");
            //     break;
            // case 7:
            //      console.log("tel3");
            //      break;
        }
    }

});