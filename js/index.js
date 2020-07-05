window.addEventListener("DOMContentLoaded", function(){
    const selected = document.querySelector(".header__select__languages");
    selected.addEventListener("change",function(){
        if(selected.value == 'eng'){
            location.href = "index_en.php";
        }else{
            location.href = "index.php";
        }
    });
});