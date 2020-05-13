<?php
    require('connectMySQL.php');
    session_start();
    $taskName = $_POST['editTaskName'];
    $taskId = $_POST["taskId"];
    // print_r($taskId);
    // $listId = $_POST["listId"];
    $sql = "UPDATE tb_task SET name='$taskName' where id=$taskId";
    $stmt =$db->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    echo $taskName;
    // $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $t = $db->lastInsertId();
    // header("location:index.php?list_id=$listId&&task_id=$taskId");
?>
