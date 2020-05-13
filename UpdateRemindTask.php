<?php
    require('connectMySQL.php');
    session_start();
    // $listId = $_SESSION["tb_list.id"];
    $taskId = $_POST['taskId'];
    $remindDateTime = $_POST['createRemindTime'];
    // echo $remindDateTime;
    // if(isset($_POST['submitRemind'])){
        $sql = "UPDATE tb_task SET createDateRemind='$remindDateTime' where id=$taskId";
        $stmt = $db->prepare($sql);
        $stmt->execute();
    //     header("location:index.php?list_id=$listId&&task_id=$taskId");

    // }
?>
