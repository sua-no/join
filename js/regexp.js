window.addEventListener("DOMContentLoaded", function(){
    const inputs = document.querySelectorAll(".section__joinform__textbox input")
    const idValue = document.querySelector("#id");
    console.log(inputs);
    for(let i =0; i < inputs.length; i++){
        inputs[i].addEventListener("blur", function(){
            rexgexpCheck(i);
        });
    }
    //regexp
    const idRegexp = /^[a-zA-Z0-9]{4,8}$/;
    const pwRegexp = /^.*(?=^.{4,8}$)(?=.*\d)(?=.*[a-zA-Z])(?=.*[!@#$%^&+=]).*$/;
    const nameRexexp = /^[가-힣|a-zA-Z]{2,6}$/;
    const emailRegexp = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i;
    const telRegexp = /^01(?:0|1|[6-9])-(?:\d{3}|\d{4})-\d{4}$/;

    


    var aa = 'name노수';
    var bb = nameRexexp.test(aa);
    console.log(bb);
    if(bb){
        console.log("ok")
    }

    function rexgexpCheck(idx){
        console.log(inputs[idx]);
        // console.log(inputs[idx].value);
        switch(idx){
            case 0: console.log("id"); break;
            case 1: console.log("pw"); break;
            case 2: console.log("pw_check");break;
            case 3: console.log("name");break;
            case 4: console.log("email");break;
            case 5: console.log("tel");break;
            case 6: console.log("tel2");break;
            case 7: console.log("tel3");break;
        }
    }

});