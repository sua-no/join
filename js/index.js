window.addEventListener("DOMContentLoaded", function(){
    const selected = document.querySelector(".header__select__languages");
    selected.addEventListener("change",function(){
        selected.value == 'eng' ? location.href = "index_en.php" : location.href = "index.php";
    });
});