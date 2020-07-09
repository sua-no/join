<?php
    header("Content-Type: text/html; charset=UTF-8");

    $root = $_SERVER["DOCUMENT_ROOT"];
    include_once $root."/db.php";

    $id = $_POST["id"];
    $pw = $_POST["pw"];
    

    $query = "SELECT * FROM `naveruser` where id='$id' and pw='$pw'";
    $result = mysqli_query($dbConnect, $query);
    $row = mysqli_fetch_array($result);

    if( $pw == "" || $pw == ""){
        echo '<script> alert("아이디나 패스워드 입력하세요"); history.back(); </script>';
    }else if($id == $row['id'] && $pw == $row['pw']){
        $name = $row['name'];
        $date = $row['date'];

        echo "<script>location.href='loginok.php?name=$name&date=$date';</script>";
    }else{ 
        echo "<script>window.alert('아이디 또는 비밀번호를 확인하세요');</script>";
        echo "<script>location.href='index.php';</script>";
     
     }   
?>