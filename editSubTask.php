<?php
    require('connectMySQL.php');
    session_start();
    $editSubtask = $_POST['editSubTask'];
    // print_r($editSubtask);
    // $listId = $_SESSION["tb_list.id"];
    // $taskId = $_POST['taskId'];
    $idSubtask = $_POST['subtaskId'];
    $sql = "UPDATE tb_subtask SET name='$editSubtask' WHERE tb_subtask.id = $idSubtask";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    echo $editSubtask;
    // print_r($sql);
    // header("location:index.php?list_id=$listId&&task_id=$taskId");
?>
