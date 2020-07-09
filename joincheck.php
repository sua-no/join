<?php
    header("Content-Type: text/html; charset=UTF-8");

    $root = $_SERVER["DOCUMENT_ROOT"];
    include_once $root."/db.php";

    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $tel = $_POST["tel"];
    $date = date("Y-m-d");
    if($tel == ''){
        $tel = 0;
    }
    
    $query = "INSERT INTO naveruser(id, pw, name, email, gender, tel, date) VALUES ('$id', '$pw','$name','$email','$gender','$tel', '$date')";

    mysqli_query($dbConnect, $query);

    echo "<script>alert(\"회원가입이 완료 되었습니다.\");</script>";
    echo "<script>location.href='index.php';</script>"
?>