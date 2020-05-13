<?php
    require('connectMySQL.php');
    session_start();
    // error_reporting(0);
    // $list = $_POST["list"];
    // echo $_SESSION['id'];
    // echo $_SESSION['email'];
    // $userId = $_SESSION['id'];
    // $listId = $_SESSION['tb_list.id'];

    $listId=$_POST['listId'];
    // echo $listId;
    // $sql = "SELECT tb_task.* from tb_task where tb_task.listId=$listId
    // ";
    // $stmt = $db->prepare($sql);
    // $stmt->execute(array($sql));
    // $data = $stmt->fetch(PDO::FETCH_ASSOC);

    
    // $data=$_SESSION['searchTaskArray'];
    // unset($data);
    // print_r($data);
    // echo $sql;
    $taskName = $_POST['createTask'];
    // if($sql){
    $sql1 = "INSERT INTO tb_task(name,listId) VALUES ('$taskName','$listId')";
    $stmt = $db->prepare($sql1);
    $stmt->execute(array($sql1));
    $data1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $taskId = $db->lastInsertId();
    echo $taskId;
    // print_r("đ");
    // $data1=$_SESSION['searchTask1'];
       // print_r($data1);
    // header("location:index.php?list_id=$listId");
    // echo $sql1;
    // }


    //Câu lệnh truy vấn
 
    
    

    //Dùng để thực thi câu lệnh prepare statement
    // if($email){
    //     $sql = "INSERT INTO tb_list(name) VALUES('')";
    //     $stmt = $db->prepare($sql);
    //     $stmt->execute();
    //     echo $sql;
    // }


?>