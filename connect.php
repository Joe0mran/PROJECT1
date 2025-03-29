<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $conn = new mysqli('localhost', 'root', '', 'test1');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }else {
        $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $hashedPassword);
        $stmt->execute();
        echo "Registration successful! Please wait for admin approval.";
        $stmt->close();
        $conn->close();
    }
?>
