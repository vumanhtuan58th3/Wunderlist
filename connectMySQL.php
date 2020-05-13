<?php
    $conn =  'mysql:host=localhost;dbname=wunderlist';
    $username = 'root';
    $password = '';

    try{ // Dòng có nguy cơ xảy ra ngoại lệ
        $db = new PDO($conn, $username,$password);
    }
    catch (PDOexception $e){ // Bắt ngoại lệ và gán ngoại lệ cho $e
        $error = $e->getMessage(); // Hiển thị tin nhắn ngoại lệ
        echo $error;
    }
?>