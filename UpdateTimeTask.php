<?php
    require('connectMySQL.php');
    session_start();
    $editTime = $_POST['UpdateTimeTask'];
    // $listId = $_SESSION["tb_list.id"];
    $taskId = $_POST['taskId'];
    // if(isset($_POST['12345'])){
        $sql = "UPDATE tb_task SET createDateRemind='$editTime' where tb_task.id=$taskId";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        echo $sql;
    //     header("location:index.php?list_id=$listId&&task_id=$taskId");
    // }
    // else{
    //     // header("location:index.php?list_id=$listId&&task_id=$taskId");
    //     $sql1 ="SELECT createDateRemind from tb_task where tb_task.id=$taskId";
    //     $stmt = $db->prepare($sql1);
    //     $stmt->execute();
    //     header("location:index.php?list_id=$listId&&task_id=$taskId");
    // }
?>
    