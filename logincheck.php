<?php
    $root = $_SERVER["DOCUMENT_ROOT"];
    include_once $root."/db.php";

    $id = $_POST["id"];
    $pw = $_POST["pw"];
    

    $query = "SELECT * FROM `naveruser` where ";

    mysqli_query($dbConnect, $query);
   
    echo "<script>location.href='loginok.php';</script>"
?>