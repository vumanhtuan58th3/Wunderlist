<?php
    require('connectMySQL.php');
    session_start();
    // $taskId=$_SESSION['tb_task.id'];
    $taskId = $_POST['taskId'];
    // // echo $taskId;
    // $listId = $_POST['listId'];
    $sql = "DELETE FROM tb_task where id=$taskId";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    // header("location:index.php?list_id=$listId");
?>
