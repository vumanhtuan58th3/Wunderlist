<?php
    require('connectMySQL.php');
    session_start();
    // $listId = $_SESSION["tb_list.id"];
    // $taskId = $_SESSION["tb_task.id"];
    $idSubTask = $_POST['deleteSubTask'];
    $sql = "DELETE FROM tb_subtask where id=$idSubTask";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    // header("location:index.php?list_id=$listId&&task_id=$taskId");
?>
    