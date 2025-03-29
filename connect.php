<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    conn = new mysqli('localhost', 'root', '', 'test1');
    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into Log-In(email, passwors) values(?, ?)");
        $stmt->bind_param("ss", $email $password);
        stmt->excute();
        echo "login succecfuly..";
        $stmt->close();
        $conn->close();
    }
?>